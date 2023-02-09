<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Sunra\PhpSimple\HtmlDomParser;

class Extraer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $year = '2023';
    private $week = '1';
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($year = 2023, $week = 1)
    {
        $this->year = $year;
        $this->week = $week;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->extract($this->year, $this->week);
    }

    function extract($year = 2023, $week = 1)
    {
        $temas = [];
        $reuniones = [];
        $html = file_get_contents('https://wol.jw.org/es/wol/meetings/r4/lp-s/' . $year . '/' . $week);
        // var_dump($html);
        // return;
        $dom = HtmlDomParser::str_get_html($html);
        
        // Reunion vida y ministerio
        if($dom->find('#p1 > strong', 0) != null){
            $reuniones['vida_ministerio'] = [
                'semana' => $dom->find('#p1 > strong', 0)->text(),
                'cancion_inicio' => $dom->find('#p3 > a > strong', 0)->text(),
                'tesoros' => $dom->find('#p6 > a > strong', 0)->text(),
                'perlas' => $dom->find('#p7', 0)->text(),
                'lectura' => $dom->find('#p12', 0)->text(),
                'maestros' => $this->obtenerMaestros($dom),
                'vida_cristiana' => $this->obtenerVidaCristiana($dom)
            ];
        }else{
            $reuniones['vida_ministerio'] = 'No hay reuniones para la semana';
        }
        echo addslashes(json_encode($reuniones));
        return response()->json($reuniones);
    }

    function obtenerMaestros($dom)
    {
        $asignaciones = $dom->find('#section3 > div.pGroup > ul > li > p > strong');
        $result = [];
        foreach ($asignaciones as $asignacion) {
            $result[] = $asignacion->text();
        }
        return $result;
    }

    function obtenerVidaCristiana($dom)
    {
        $asignaciones = $dom->find('#section4 > div.pGroup > ul > li > p ');
        $result = [];
        foreach ($asignaciones as $asignacion) {
            if ($asignacion->find('strong', 0)->text() != '“')
                $result[] = $asignacion->find('strong', 0)->text();
            else
                $result[] = $asignacion->find('a > strong', 0)->text();
        }
        return $result;
    }
}
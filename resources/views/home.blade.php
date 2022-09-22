@extends('layouts.app')
@section('title', 'Reuniones')
@section('content')
    <div class="container">
        <div class="row justify-content-center" id="reunion_vida_ministerio">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{date("H:i:s")}} Reunion Vida y ministerio</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12" id="inicio_reu">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="info-box-icon"><img src="public/comun/img/tesoros.png" alt=""></span>
                                <span class="info-box-text text-lg" style="color:#626262">TESOROS DE LA BIBLIA</span>
                            </div>
                            <div class="col-12" id="tesoros_asig">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="info-box-icon"><img src="public/comun/img/maestros.png" alt=""></span>
                                <span class="info-box-text text-lg" style="color:#9d5d07">SEAMOS MEJORES MAESTROS</span>
                            </div>
                            <div class="col-12" id="maestros_asig">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <span class="info-box-icon"><img src="public/comun/img/cristiana.png" alt=""></span>
                                <span class="info-box-text text-lg" style="color:#942926">NUESTRA VIDA CRISTIANA</span>
                            </div>
                            <div class="col-12" id="cristiana_asig">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" id="final_reu">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 privilegios">
                <div class="card">
                    <div class="card-header">Privilegios vida y ministerio</div>

                    <div class="card-body">

                        <h1 class="notreadyvmp" style="display: none;">AUN NO HAY DATOS PARA LA SIGUIENTE REUNION</h1>
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th style="width: 10px"></th>
                                    <th>Privilegio</th>
                                    <th>Asignado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fas fa-male"></i></td>
                                    <td>Plataforma</td>
                                    <td class="plat">Marcos Canales</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-person-booth"></i></td>
                                    <td>Acomodador 1</td>
                                    <td class="acom1">Sandro Vázquez</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-person-booth"></i></td>
                                    <td>Acomodador 2</td>
                                    <td class="acom2">Francisco Jiménez</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-microphone"></i></td>
                                    <td>Microfono 1</td>
                                    <td class="mic1">Warner Barrantes</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-microphone"></i></td>
                                    <td>Microfono 2</td>
                                    <td class="mic2">Roy Bonilla</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-headphones"></i></td>
                                    <td>Audio</td>
                                    <td class="audio">Kevin Vázquez</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-video"></i></td>
                                    <td>Video</td>
                                    <td class="video">Kevin Vázquez</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-laptop-house"></i></td>
                                    <td>Acomodador Zoom</td>
                                    <td class="zoom">Andrés Ramírez</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-broom"></i></td>
                                    <td>ASEO</td>
                                    <td class="aseo"></td>
                                </tr>
                            </tbody>
                        </table>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="reunion_fin_semana" style="display: none">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Reunion fin de semana</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <div class="col-md-6 privilegios">
                <div class="card">
                    <div class="card-header">Privilegios fin de semana</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

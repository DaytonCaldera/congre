<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Recordatorio;
use App\Http\Controllers\PublicadoresController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrivilegioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check())
        return redirect()->route('home');
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin/publicadores', [PublicadoresController::class, 'index'])->name('lista.publicadores');
Route::get('/admin/publicadores/{id}', [PublicadoresController::class, 'show'])->name('ver.publicador');
Route::post('/admin/publicadores/store',[PublicadoresController::class,'store'])->name('store.publicador');
Route::post('/admin/publicadores/update', [PublicadoresController::class,'update'])->name('update.publicador');

Route::get('admin/privilegios',[PrivilegioController::class,'index'])->name('lista.roles');

Route::get('/test/mail', [PublicadoresController::class,'send_mail']);
Route::get('/test/view/mail',function(){return view('Recordatorio');});
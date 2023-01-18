<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Recordatorio;


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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/publicadores', [App\Http\Controllers\PublicadoresController::class, 'index'])->name('lista.publicadores');
Route::post('/admin/publicadores/store',[App\Http\Controllers\PublicadoresController::class,'store'])->name('store.publicador');

Route::get('/test/mail', [App\Http\Controllers\PublicadoresController::class,'send_mail']);
Route::get('/test/view/mail',function(){return view('Recordatorio');});
<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\PolitesseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () { // en mettant '/': la premiere page sera le fichier accueil
    return view('accueil');
});

Route::get('/bonjour',[PolitesseController::class, "helloEveryone"]);
Route::get('/au-revoir',[PolitesseController::class, "goodbye"]);
Route::get('/bonjour/{name}',[PolitesseController::class,"helloSomeone"]);

Route::get('/à-propos',function(){
    return view('apropos');

});
Route::get('/à-propos',[AboutController::class,"about"]);
Route::get('/à-propos/{user}',[AboutController::class, "aboutSomeone"]);
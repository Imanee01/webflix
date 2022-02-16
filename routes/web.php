<?php

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

Route::get('/bonjour',function(){ //  dans la page bonjour il y aura le fichier hello //creation d'une nouvelle page
    return view('hello',[ // entre []: création de variables
        'name' => 'Fiorella',
        'numbers'=>[1,3,7],
    ]);
});

Route::get('/au-revoir', function(){
    return view('good-bye');
});


Route::get('/bonjour/{name}',function($name){
    return view('hello',[
        'name' => $name,
        'numbers' => [],
    ]);
});

Route::get('/à-propos',function(){
    return view('apropos');

});
Route::get('/à-propos',function(){
    return view('apropos',[
        'name' => 'A propos',
        'team'=>['marina','fiorella','alex'],
    ]);

});

Route::get('/à-propos/{user}',function($user){
    return view('about-show',[
        'user' => $user,
        
    ]);
});
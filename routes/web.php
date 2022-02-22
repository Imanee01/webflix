<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolitesseController;
use App\Models\Category;
use App\Models\Movie;
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

Route::get('/categories',[CategoryController::class,'index']);

// Affiche le formulaire
Route::get('/categories/creer',[CategoryController::class,'create']);

// Traite le formulaire
Route::post('/categories/creer',[CategoryController::class,'store']);

Route::get('/categories/{category}', [CategoryController::class,'show']);
Route::get('/categories/{category}/modifier',[CategoryController::class,'edit']);// modifier la categorie (la page modifier)
Route::put('/categories/{category}',[CategoryController::class,'update']); // put permet de mettre a jour la categorie existante (met a jour sur bdd)




// List
Route::get('/exercice/categories',function(){
    return view('exercice.categories',[
        'categories'=> Category::all() // equivalent du select
    ]);
});


// Creation de catégorie
Route::get('/exercice/categories/creer',function(){
    // Le modele Category correspond à la table categories...
    $category = Category::create([
        'name'=> 'Test'
    ]);

    return redirect('/exercice/categories');
    
});

// Afficher l'id dans de chaque catégorie
Route::get('/exercice/categories/{id}',function ($id){
    $category =Category::find($id); // dans la category qui et dans l'url trouver l id 
    return $category->name;
});

Route::get('/exercice/movies',function(){
    return view('exercice.movies',[
        'movies'=> Movie::all()
    ]);
});

Route::get('/exercice/movies/creer', function(){
    $movie = Movie::create([
        'title'=> 'Le parrain',
        'synopsys'=> 'En 1945, à New York, les Corleone sont une des 5 familles de la mafia. Don Vito Corleone, "parrain" de cette famille, marie sa fille à un bookmaker. ',
        'duration' => 185 ,
        'youtube' => 'video',
         'cover' => 'le-parrain.jpg',
         'realeased_at' => '2010-02-02',
    ]);
    return redirect('/exercice/movies');
});

Route::get('/exercice/movies/{id}',function($id){
    $movie = Movie::find($id);
    return view('exercice.movie',[
        'movie' => $movie 
   
    ]);
});




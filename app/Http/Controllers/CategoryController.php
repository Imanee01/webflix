<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index',[
            'categories' => Category::latest()->paginate(8), // On recuperer toute les categories  avec "all"// paginate-> on affiche 8 par page
            // Pour afficher les pages en bas ajouter sur la page (index.blade)
            // latest()-> ajouter dans le paginate du plus recent au plus vieux, bien avoir la colone created_at
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() // Afficher le formulaire
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // Traiter les erreurs
    {
        
    request()->validate([   // verifier les erreurs 
        'name'=>'required|min:3|max:10',
        // 'email'=>'required|email'
    ]);
    //    dump( request('name')); 
    //S'il n'a pas d'erreurs
   $category= Category::create([    // on recupere ce qui est ecrit dans le formulaire
        'name'=>request('name'),
    ]);
 
     return redirect('/categories')->with('status','La catégorie '.$category->name.' a été créée.'); // Affiche un message des que le formulaire est envoyer
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

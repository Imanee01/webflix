@extends('layouts.base')

@section('content')
    <h1>Films</h1>

    <a href="/exercice/movies/creer">Créer un Film</a>

    <div>
         @foreach ($movies as $movie)
        
         <h2>{{$movie -> title}}</h2>
         <a href="/exercice/movie{{$movie -> id}}">Voir Film</a>
        
       
     
         @endforeach
    </div>
@endsection
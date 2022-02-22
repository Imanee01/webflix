@extends('layouts.base')

@section('content')
@if ($errors->any()) 
    <div class="alert alert-danger">
        <ul class="mb-0 list-unstyled">
        @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
        @endforeach
         </ul>
    </div>
    
@endif
  
    <h1>Créer une catégorie</h1>
    <form action="" method="post">
        @csrf
        <input type="text"name="name"placeholder="Nom..." class="form-control" value="{{old('name')}}">
        {{-- <input type="text"name="email"placeholder="Email..."> --}}


        <button class="btn btn-primary mt-3">Ajouter</button>
    </form>
    
@endsection
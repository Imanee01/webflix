@extends('layouts.base')

@section('content')
    @foreach ($errors->all() as $error)
    {{$error}}

    @endforeach
    <form action="" method="post">
        @csrf
        <input type="text"name="name"placeholder="Nom...">
        <input type="text"name="email"placeholder="Email...">


        <button>Ajouter</button>
    </form>
    
@endsection
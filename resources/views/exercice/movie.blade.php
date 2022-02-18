@extends('layouts.base')

@section('content')
    <h1>{{$movie->title}}</h1>
    <div>{{$movie -> synopsys}}</div>

@endsection
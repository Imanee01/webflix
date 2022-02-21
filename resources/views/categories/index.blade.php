@extends('layouts.base')


@section('content')
    <a href="/categories/creer" class="btn btn-primary mb-5">Créer une catégorie</a>

    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-3">
               <div class="card mb-4"> 
                   <div class="card-body">
                      <p> {{$category->name}}</p>
                       <a class= "btn btn-primary"href="/categories/{{ $category->id }}">Voir</a>
                    </div>
            </div>
            </div>
        @endforeach
    </div>
   {{ $categories->links() }} 
   {{-- Affiche le paginate en bas ne pas oublier d'aller sur app,provider, app service pour ajouter le bootstrap dans public function boot  --}}
@endsection
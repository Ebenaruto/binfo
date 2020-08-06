@extends('layouts.navadmin')
@section('content')

 
 {{-- <div class="row">
    <div class="col s12 m7">
      <div class="card">
           @foreach ($actualites as $actualite)
        <div class="card-image">
       
        <img src="{{asset('storage/' . $actualite->photo)}}" width="300">
          <span class="card-title">{{$actualite->Titre}}</span>
        </div>
        <div class="card-content">
          <p>{{$actualite->Contenu}}</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
        </div>
        <div class="card-action">
        <a href="/admin/{{$actualite->id}}/edit" class='btn btn-primary my-3'>Modifier</a>
        </div>
      </div>
    </div>
  </div> --}}
 @foreach ($actualites as $actualite)

 
<a href="#" class="badge badge-primary">{{$actualite->id_categorie}}</a>
  <div class="card mb-3" style="max-width: 800px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{asset('storage/' . $actualite->photo)}}" width="500px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$actualite->Titre}}</h5>
        <p class="card-text">{{$actualite->Contenu}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
       <div class="card-action">
        <a href="/admin/{{$actualite->id}}/edit" class='btn btn-primary ml-5'>Modifier</a>
        </div>
    </div>
  </div>
</div>
         @endforeach    
 
@endsection
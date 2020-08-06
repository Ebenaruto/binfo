@extends('layouts.sidebar')
@section('content')
<h1> <center> Formulaire d'enregistrement </center></h1>
<form action="/admin/{{$actualite->id}}" method="post"  enctype="multipart/form-data" >
                    @method('PATCH')
 					@include('formulaire.insert')
 					<br><br>
				 <center>         
				 <button type="submit" class="btn btn-info">Enregistrer</button>
				 <button type="reset" class="btn btn-danger">Retour</button></center>
			</form>

            @endsection
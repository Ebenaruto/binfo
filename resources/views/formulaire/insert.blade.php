@csrf
<div class="row">
    				<div class="col">
					<input type="text" class="form-control" name="Titre" placeholder="Titre de l'article" value="{{old('Titre') ?? $actualite->Titre}}">
    				</div>
    				<div class="col">
					<input type="text" class="form-control" name="Auteur" placeholder="nom de l'auteur" value="{{old('Auteur') ?? $actualite->Auteur}}">
    				</div>
  				</div>
          <br>
           <div class="row">
    				<div class="col">
					<textarea class="form-control" name="Contenu"  id="exampleFormControlTextarea1" rows="3" placeholder="Saisir Contenu Article" value="">{{old('Contenu') ?? $actualite->Contenu}}</textarea>
    				</div>
    				<div class="col">
					<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="id_categorie" value="{{old('id_categorie') }}"  required >
                       @foreach ($categories as $categorie)
					<option value="{{$categorie->id}}">{{$categorie->categorie}}</option>
					   @endforeach
                        
					  </select>  
    				</div>
          </div>
          <br>
          <div class="custom-file mb-5">
    		<input type="file" class="custom-file-input" name="photo" id="validatedCustomFile">
    		<label class="custom-file-label" for="validatedCustomFile">Choisir une image...</label>
    
 			 </div>
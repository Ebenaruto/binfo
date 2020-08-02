@csrf
<div class="row">
    				<div class="col">
      					<input type="text" class="form-control" name="Titre" placeholder="Titre de l'article">
    				</div>
    				<div class="col">
      					<input type="text" class="form-control" name="Auteur" placeholder="nom de l'auteur">
    				</div>
  				</div>
          <br>
           <div class="row">
    				<div class="col">
      					<textarea class="form-control" name="Contenu"  id="exampleFormControlTextarea1" rows="3" placeholder="Saisir Contenu Article" ></textarea>
    				</div>
    				<div class="col">
						  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="id_categorie" required>
                        <option >Catégorie</option>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                        <option value="Autre">Autre</option>
                      </select>
    				</div>
          </div>
          <br>
          <div class="row">
    				<div class="col">
      					<input type="file" class="form-control" name="photo" placeholder="insérer l'image">
    				</div>
    				<div class="col">
      				
    				</div>
  				</div>
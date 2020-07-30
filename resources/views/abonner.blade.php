





<h1> <center> Formulaire d'enregistrement </center></h1>
<form action="{{url('ajouter')}}" method="post"  enctype="multipart/form-data" >
        @csrf
  				<div class="row">
                  <div class="single-input-fields">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Enter email address" >
                                </div>
                </div>

                <button type="submit" class="btn btn-info">Valider</button>
			</form>







<h1> <center> Recevez nos dernieres actualités en vous abonnant</center></h1>
<form action="{{url('ajouter')}}" method="post"  enctype="multipart/form-data" >
{{ csrf_field() }}
  				<div class="row">
                  <div class="single-input-fields">
                                    <label>Email Address</label>
                                    <input type="email" name="email" placeholder="Enter email address" >
                                </div>
                </div>

                <button type="submit" class="btn btn-info">Valider</button>
			</form>

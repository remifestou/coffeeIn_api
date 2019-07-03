@extends('layouts.app')

@section('content')
    <div class="">
        <h1 class="title is-1">{{ $user->name }}</h1>

       

        <div class="container">
	        <div class="row">
		        <div class="col-8 col-sm-8">
			        <form>
			            <div class="form-group col-md-12">
			                <label for="shopName">Nom de votre commerce</label>
			                <input type="text" readonly class="form-control" class="form-control-plaintext" id="shopName" aria-describedby="shopNameHelp" placeholder="Nom de votre commerce" value="{{ $storeInformation->name }}">
			                <small id="shopNameHelp" class="form-text text-muted">Ce nom sera le nom affiché aux utilisateurs/clients.</small>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopDescription">Décrivez-vous en quelques mots</label>
			                <textarea readonly class="form-control" id="shopDescription" rows="3" >{{ $storeInformation->description }}</textarea>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopMail">Mail</label>
			                <input type="email" class="form-control" id="shopMail" aria-describedby="shopMailHelp" placeholder="Entrer un mail valide" value="{{ $storeInformation->mail }}">
			                <small id="shopMailHelp" class="form-text text-muted">Ce mail sera affiché aux clients pour qu'ils puissent vous contacter</small>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopPhone">Téléphone</label>
			                <input type="email" class="form-control" id="shopPhone" aria-describedby="shopPhoneHelp" placeholder="Entrer un numéro de téléphone valide" value="{{ $storeInformation->phone }}">
			                <small id="shopPhoneHelp" class="form-text text-muted">Ce numéro sera affiché aux clients pour qu'ils puissent vous contacter</small>
			            </div>
			            <!--  address bloc input start -->
			            <div class="form-group col-md-12">
			                <label for="inputAddress">Adresse</label>
			                <input type="text" class="form-control" id="inputAddress" placeholder="Numéro de rue" value="{{ $storeInformation->address }}">
			            </div>

			            <div class="form-row">
			                <div class="form-group col-md-8">
			                    <label for="inputCity">Ville</label>
			                    <input type="text" class="form-control" id="inputCity" value="{{ $storeInformation->city }}">
			                </div>
			                <div class="form-group col-md-4">
			                    <label for="inputZip">Code postal</label>
			                    <input type="text" class="form-control" id="inputZip" value="{{ $storeInformation->zipcode }}">
			                </div>
			            </div>
			            <!--  address bloc input end -->

			            <button type="submit" class="btn btn-primary">Modifier les informations</button>
			        </form>
			    </div>
			    <div class="col-4 col-sm-4">
			    		{{ $storeInformation }}
			    	<div class="profile-picture-bloc">
			    			<i class="fa fa-user"></i>
			    			<div class="uploadButton"><i class="fa fa-camera"></i></div>
			    			<input type="file" id="inputProfilePicture"></div>
			    	</div>
			    </div>
			</div>
		</div>


    </div>
@endsection
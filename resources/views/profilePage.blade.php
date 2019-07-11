@extends('layouts.app')

@section('content')
    <div class="">
        <h1 class="title is-1">{{ $user->name }}</h1>

       

        <div class="container">
        	@if($message = Session::get('success'))
        	<div class="alert alert-success">
        		<p>{{$message}}</p>	
        	</div>
        	@endif

        	@if(count($errors) > 0)
        	<div class="alert alert-danger">
        		<ul>
        			@foreach($errors->all() as $error)
        				<li>{{$error}}</li>
        			@endforeach
        		</ul>
        	</div>
        	@endif
	        <div class="row">
		        <div class="col-8 col-sm-8">
			        <form method="post" action=
			        "{{action('PagesController@updateProfileInformation')}}">

			        {{ csrf_field() }}
			        <input type="hidden" name="_method" value="PATCH"/>



			            <div class="form-group col-md-12">
			                <label for="shopName">Nom de votre commerce</label>
			                <input type="text" class="form-control" class="form-control-plaintext" id="shopName"  name="shopName"aria-describedby="shopNameHelp" placeholder="Nom de votre commerce" value="{{ $storeInformation->name }}">
			                <small id="shopNameHelp" class="form-text text-muted">Ce nom sera le nom affiché aux utilisateurs/clients.</small>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopDescription">Décrivez-vous en quelques mots</label>
			                <textarea class="form-control" id="shopDescription" name="shopDescription" rows="3" >{{ $storeInformation->description }}</textarea>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopMail">Mail</label>
			                <input type="email" class="form-control" id="shopMail"  name="shopMail" aria-describedby="shopMailHelp" placeholder="Entrer un mail valide" value="{{ $storeInformation->mail }}">
			                <small id="shopMailHelp" class="form-text text-muted">Ce mail sera affiché aux clients pour qu'ils puissent vous contacter</small>
			            </div>
			            <div class="form-group col-md-12">
			                <label for="shopPhone">Téléphone</label>
			                <input type="phone" class="form-control" id="shopPhone"  name="shopPhone"aria-describedby="shopPhoneHelp" placeholder="Entrer un numéro de téléphone valide" value="{{ $storeInformation->phone }}">
			                <small id="shopPhoneHelp" class="form-text text-muted">Ce numéro sera affiché aux clients pour qu'ils puissent vous contacter</small>
			            </div>
			            <!--  address bloc input start -->
			            <div class="form-group col-md-12">
			                <label for="shopAddress">Adresse</label>
			                <input type="text" class="form-control" id="shopAddress" name="shopAddress" placeholder="Numéro de rue" value="{{ $storeInformation->address }}">
			            </div>

			            <div class="form-row">
			                <div class="form-group col-md-8">
			                    <label for="shopCity">Ville</label>
			                    <input type="text" class="form-control" id="shopCity" name="shopCity" value="{{ $storeInformation->city }}">
			                </div>
			                <div class="form-group col-md-4">
			                    <label for="shopZipcode">Code postal</label>
			                    <input type="text" class="form-control" id="shopZipcode" name="shopZipcode" value="{{ $storeInformation->zipcode }}">
			                </div>
			            </div>
			            <!--  address bloc input end -->

			            <button type="submit" class="btn btn-primary">Modifier les informations</button>
			        </form>
			    </div>
			    <div class="col-4 col-sm-4">
			    	<div class="profile-picture-bloc">
			    			<i class="fa fa-user"></i>
			    			<div class="uploadButton"><i class="fa fa-camera"></i></div>
			    			<input type="file" accept="image/*" id="inputProfilePicture"></div>
			    	</div>
			    </div>
			</div>
		</div>


    </div>

   <!--  <div class="window">
    	<div class="window-header">
    		<span class="title"></span>
    		<div class="close-window"><i class="fa fa-times"></i></div>
    	</div>
    	<div class="window-body">
    		<div id="demo-basic" style="width:200px; height:200px;"><img id="bite"/></div>
    	</div>
    </div>
    

 -->

	 <div class="modal fade" id="profilePictureModal" tabindex="-1" role="dialog" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Redimmensionnez votre image</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div id="profilePictureCropper"></div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
	        <button type="button" id="updateProfilePictureButton" class="btn btn-primary">Valider</button>
	      </div>
	    </div>
	  </div>
	</div>


    <div class="hideAll"></div>
    <script>

    	$( document ).ready(function() {


    		function readURL(input) {
    			var basic;

		        if (input.files && input.files[0]) {
		            var reader = new FileReader();
		            reader.onload = function (e) {
		               // $('#bite').attr('src', e.target.result);

		                basic = $('#profilePictureCropper').croppie({
						    viewport: {
						        width: 250,
						        height: 250
						    },
						     maxZoom: 4,
						});
	        			basic.croppie('bind', {
						    url: e.target.result,
						  	
						});
			
	        			$('#profilePictureModal').modal();
	        		

	        			 $("#updateProfilePictureButton").click(function(){
	        		
	        			 	//var test = basic.result('base64', 'original', 'jpeg');

	        			 	basic.croppie('result', 'html').then(function(html) {
    // html is div (overflow hidden)
    // with img positioned inside.
     	console.log(basic.result());
});

	        			
					    	$.ajax({
							    method: 'POST',
							    url: '/profilePage/updateProfilePicture',
							    data: {'picture' : basic},
							    success: function(response){
							       // console.log(response); 
							    },
							    error: function(jqXHR, textStatus, errorThrown) {
							       // console.log(JSON.stringify(jqXHR));
							      //  console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
							    }
							});
					    });
	        		
		            }
		          	

		            reader.readAsDataURL(input.files[0]);



		        }
		    }



    		$("#inputProfilePicture").change(function (){
        		readURL(this);

		    });


		});




    </script>
@endsection
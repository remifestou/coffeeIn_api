@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    MODIFIER VOS INFORMATIONS ICI

                     <div type="submit" action="{{ route('profilePage') }}" class="btn btn-primary">VOIR MA PAGE PROFILE</div>
                    

                    <form>
                        <div class="form-group col-md-12">
                            <label for="shopName">Nom de votre commerce</label>
                            <input type="text" class="form-control" id="shopName" aria-describedby="shopNameHelp" placeholder="Nom de votre commerce">
                            <small id="shopNameHelp" class="form-text text-muted">Ce nom sera le nom affiché aux utilisateurs/clients.</small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="shopDescription">Décrivez-vous en quelques mots</label>
                            <textarea class="form-control" id="shopDescription" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="shopMail">Mail</label>
                            <input type="email" class="form-control" id="shopMail" aria-describedby="shopMailHelp" placeholder="Entrer un mail valide">
                            <small id="shopMailHelp" class="form-text text-muted">Ce mail sera affiché aux clients pour qu'ils puissent vous contacter</small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="shopPhone">Téléphone</label>
                            <input type="email" class="form-control" id="shopPhone" aria-describedby="shopPhoneHelp" placeholder="Entrer un numéro de téléphone valide">
                            <small id="shopPhoneHelp" class="form-text text-muted">Ce numéro sera affiché aux clients pour qu'ils puissent vous contacter</small>
                        </div>
                        <!--  address bloc input start -->
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Adresse</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Numéro de rue">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Ville</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Pays</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">Code postal</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <!--  address bloc input end -->

                        <button type="submit" class="btn btn-primary">Modifier les informations</button>
                    </form>




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

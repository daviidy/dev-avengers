@extends('layouts.auth')
@section('title', 'Plateforme de la communauté ivoirienne')
@section('content')




    <!-- ==============================================
	 Header Section
	 =============================================== -->
    <section class="login">
        <div class="container">
            <div class="banner-content">
                <a href="/">
                    <img src="/assets/main_theme/medium/img/logo_1.jpeg" width="100">
                </a>

                <form method="POST" action="{{ route('register') }}" class="form-signin">
                    <h3 class="form-signin-heading">Inscrivez-vous</h3>
                    @csrf
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Nom d'utilisateur">
                    </div>

                    @error('name')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>

                    @error('email')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">
                        <strong>{{$message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmez le mot de passe">
                    </div>
                    {{--
                    <div class="form-group">
                        <input name="traditional_first_name" type="text" class="form-control" placeholder="Nom de famille">
                        <input name="last_name" type="text" class="form-control" placeholder="Prénoms">
                        <input name="other_name" type="text" class="form-control" placeholder="Autre Nom">
                    </div>

                    <div class="form-group">
                        <input id="search_input" name="birth_country" type="text" class="form-control" placeholder="Pays de naissance">
                        <input id="search_input" name="birth_state" type="text" class="form-control" placeholder="Etat de naissance">
                        <input id="search_input" name="birth_city" type="text" class="form-control" placeholder="Ville de naissance">
                        <input id="search_input" name="town" type="text" class="form-control" placeholder="Ville">
                        <input type="hidden" id="loc_lat" />
                        <input type="hidden" id="loc_long" />
                    </div>

                    <div class="form-group">
                        <input name="living_country" type="text" class="form-control" placeholder="Pays de résidence">
                        <input name="living_city" type="text" class="form-control" placeholder="Ville de résidence">
                        <input name="living_state" type="text" class="form-control" placeholder="Etat de résidence">
                        <input name="zip_code" type="text" class="form-control" placeholder="Code Postal">
                    </div>

                    <div class="form-group">
                        <input name="marital_status" type="text" class="form-control" placeholder="Situation matrimonial">
                        <input name="children_number" type="text" class="form-control" placeholder="Nombre d'enfant">
                        <input name="mobile_tel" type="text" class="form-control" placeholder="Numéro de téléphone">
                    </div>

                    <div class="form-group">
                        <input name="father_traditional_first_name" type="text" class="form-control" placeholder="Nom du père">
                        <input name="father_last_name" type="text" class="form-control" placeholder="Prénoms du père">
                        <input name="father_other_name" type="text" class="form-control" placeholder="Autre noms du père">
                        <input id="search_input" name="father_birth_country" type="text" class="form-control" placeholder="Pays de résidence du père">
                        <input id="search_input" name="father_town" type="text" class="form-control" placeholder="Ville de résidence du père">
                        <input name="father_children_number" type="text" class="form-control" placeholder="Nombre d'enfant du père">
                    </div>

                    <div class="form-group">
                        <input name="mother_traditional_first_name" type="text" class="form-control" placeholder="Nom de la mère">
                        <input name="mother_last_name" type="text" class="form-control" placeholder="Prénoms de la mère">
                        <input name="mother_other_name" type="text" class="form-control" placeholder="Autre noms de la mère">
                        <input id="search_input" name="mother_birth_country" type="text" class="form-control" placeholder="Pays de résidence de la mère">
                        <input id="search_input" name="mother_town" type="text" class="form-control" placeholder="Ville de résidence de la mère">
                        <input name="mother_children_number" type="text" class="form-control" placeholder="Nombre d'enfant de la mère">
                    </div>
                    --}}
                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">S'inscrire</button>
                    <br/>
                    <a class="btn btn-dark " href="/login" role="button">Déjà un compte ? Connectez-vous</a>
                    <a class="btn btn-dark " href="#" role="button">Mot de passe oublié</a>
                </form>

            </div>
            <!--/. banner-content -->
        </div>
        <!-- /.container -->
    </section>




@endsection

@extends('layouts.auth')

@section('content')




    <!-- ==============================================
	 Header Section
	 =============================================== -->
    <section class="login">
        <div class="container">
            <div class="banner-content">

                <h1><i class="fa fa-smile"></i> UNIVOIRE</h1>
                <form method="POST" action="{{ route('register') }}" class="form-signin">
                    <h3 class="form-signin-heading">Connectez-vous</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Email">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">
                        <strong>{{message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input name="email" type="text" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input id="search_input" name="city" type="text" class="form-control" placeholder="Ville">
                        <input type="hidden" id="loc_lat" />
                        <input type="hidden" id="loc_long" />
                    </div>
                    @error('email')
                    <div class="alert alert-danger">
                        <strong>{{message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                    </div>
                    @error('password')
                    <div class="alert alert-danger">
                        <strong>{{message}}</strong>
                    </div>
                    @enderror
                    <div class="form-group">
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmez le mot de passe">
                    </div>

                    <button class="kafe-btn kafe-btn-mint btn-block" type="submit" name="subm">Se connecter</button>
                    <br/>
                    <a class="btn btn-dark " href="/register" role="button">Pas de compte ? Inscrivez-vous</a>
                    <a class="btn btn-dark " href="#" role="button">Mot de passe oublié</a>
                </form>

            </div>
            <!--/. banner-content -->
        </div>
        <!-- /.container -->
    </section>




@endsection

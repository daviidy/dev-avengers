@extends('layouts.menu')
@section('title', 'Liste des métiers')

@section('content')



<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
b{font-weight:inherit;}
b{font-weight:bolder;}
small{font-size:80%;}
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
small{font-size:80%;font-weight:normal;}
.img-fluid{max-width:100%;height:auto;}
.row{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px;}
@media (min-width: 576px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 768px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 992px){
.row{margin-right:-15px;margin-left:-15px;}
}
@media (min-width: 1200px){
.row{margin-right:-15px;margin-left:-15px;}
}
.col-md-6,.col-lg-4{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-md-6,.col-lg-4{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-md-6,.col-lg-4{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-md-6,.col-lg-4{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-md-6,.col-lg-4{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-md-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
@media (min-width: 992px){
.col-lg-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
.rounded-circle{border-radius:50%;}
.text-muted{color:#636c72!important;}
.text-warning{color:#f0ad4e!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
div,h4,p,img,small,b{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Montserrat', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.card-box{padding:20px;box-shadow:0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius:5px;border-radius:5px;-moz-border-radius:5px;background-clip:padding-box;margin-bottom:20px;background-color:#ffffff;}
.widget-user img{height:72px;width: 72px; float:left;}
.widget-user .wid-u-info{margin-left:90px;}
.widget-user .wid-u-info p,.widget-user .wid-u-info h4{white-space:nowrap;display:block;overflow:hidden;text-overflow:ellipsis;}
.widget-user .wid-u-info h4{font-family:'Montserrat', sans-serif;font-size:12px;color:#1ab394;}
.widget-user .wid-u-info p{font-family:'Montserrat', sans-serif;font-size:14px;}
.widget-user .wid-u-info small{font-family:'Montserrat', sans-serif;font-size:13px;}
.font-600{font-weight:600;}
.m-b-5{margin-bottom:5px!important;}
.m-t-0{margin-top:0px!important;}
.text-muted{color:#98a6ad!important;}
.font-13{font-size:13px!important;}
b{font-weight:600;}
.widget-user a{color: #a9a9a9}


</style>

@if(session('status'))
@include('includes.status')
@endif


<section class="posts-2 followers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/tl.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Aéronautique Et Espace</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Aéronautique Et Espace')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/agricture.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Agriculture - Agroalimentaire</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Agriculture - Agroalimentaire')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/artisanat.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Artisanat</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Artisanat')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/audio.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Audiovisuel, Cinéma</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Audiovisuel, Cinéma')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/audit.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Audit, Comptabilité, Gestion</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Audit, Comptabilité, Gestion')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/auto.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Automobile</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Automobile')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/banque.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Banque, Assurance</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Banque, Assurance')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/batiment.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bâtiment, Travaux Publics</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Bâtiment, Travaux Publics')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/chimie.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Biologie, Chimie, Pharmacie</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Biologie, Chimie, Pharmacie')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/commerce.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Commerce, Distribution</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Commerce, Distribution')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/communication.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Communication</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Communication')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/art.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Création, Métiers D'art</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Création, Métiers D art')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/culture.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Culture, Patrimoine</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Culture, Patrimoine')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/defense.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Défense, Sécurité, Armée</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Défense, Sécurité, Armée')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/documentation.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Documentation, Bibliothèque</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Documentation, Bibliothèque')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/droit.png" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Droit</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Droit')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/livre.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Edition, Livre</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Edition, Livre')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/enseignement.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Enseignement</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Enseignement')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/environnement.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Environnement</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Environnement')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/ferroviaire.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ferroviaire</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Ferroviaire')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/salons.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Foires, Salons Et Congrès</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Foires, Salons Et Congrès')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/fonction.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Fonction Publique</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Fonction Publique')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/restauration.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Hôtellerie, Restauration</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Hôtellerie, Restauration')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/humanitaire.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Humanitaire</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Humanitaire')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/immobilier.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Immobilier</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Immobilier')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/industrie.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Industrie</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Industrie')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/web.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Informatique, Télécoms, Web</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Informatique, Télécoms, Web')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/journalisme.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Journalisme</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Journalisme')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/langues.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Langues</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Langues')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/publicite.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Marketing, Publicité</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Marketing, Publicité')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/medical.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Médical</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Médical')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/mode.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Mode-Textile</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Mode-Textile')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/paramedical.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Paramédical</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Paramédical')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/proprete.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Propreté Et Services Associés</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Propreté Et Services Associés')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/psychologie.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Psychologie</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Psychologie')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/humaines.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ressources Humaines</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Ressources Humaines')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/sociales.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sciences Humaines Et Sociales</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Sciences Humaines Et Sociales')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/secretariat.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Secrétariat</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Secrétariat')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/social.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Social</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Social')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/spectacle.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Spectacle - Métiers De La Scène</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Spectacle - Métiers De La Scène')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/sport.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sport</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Sport')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/tourisme.jpg" class="img-fluid" alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tourisme</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Tourisme')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/assets/main_theme/medium/img/jobs/logistique.jpg" class="img-fluid " alt="user">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Transport-Logistique</h4>
                            <p class="text-muted m-b-5 font-13"></p>
                            <small class="text-warning"><b><a href="/jobs/{{urlencode('Transport-Logistique')}}">Voir les utilisateurs qui exercent dans ce secteur</a></b></small>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--fin row-->
    </div>
    <!--/ container -->
</section>



@endsection

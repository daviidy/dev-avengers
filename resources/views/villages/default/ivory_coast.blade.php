@extends('layouts.menu')
@section('title', 'Liste des régions de Côte d\'Ivoire')

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
.{border-radius:50%;}
.text-muted{color:#636c72!important;}
.text-warning{color:#f0ad4e!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
div,h4,p,img,small,b{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.card-box{padding:20px;box-shadow:0 0px 8px 0 rgba(0, 0, 0, 0.06), 0 1px 0px 0 rgba(0, 0, 0, 0.02);-webkit-border-radius:5px;border-radius:5px;-moz-border-radius:5px;background-clip:padding-box;margin-bottom:20px;background-color:#ffffff;}
.widget-user img{height:72px;float:left;}
.widget-user .wid-u-info{margin-left:0px;}
.widget-user .wid-u-info p,.widget-user .wid-u-info h4{white-space:nowrap;display:block;overflow:hidden;text-overflow:ellipsis;}
.widget-user .wid-u-info h4{font-family:'Abhaya Libre', serif;font-size:16px;color:#1ab394;}
.widget-user .wid-u-info p{font-family:'Abhaya Libre', serif;font-size:14px;}
.widget-user .wid-u-info small{font-family:'Abhaya Libre', serif;font-size:16px;}
.font-600{font-weight:600;}
.m-b-5{margin-bottom:5px!important;}
.m-t-0{margin-top:0px!important;}
.text-muted{color:#98a6ad!important;}
.font-13{font-size:13px!important;}
b{font-weight:600;}


</style>

@if(session('status'))
@include('includes.status')
@endif


<section class="posts-2 followers">
    <h2 class="text-center mb-4">Liste des communes de Côte d'Ivoire</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Abengourou</h4>
                            <a href="/villages/{{urlencode('Abengourou')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Abobo</h4>
                            <a href="/villages/{{urlencode('Abobo')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Aboisso</h4>
                            <a href="/villages/{{urlencode('Aboisso')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Adiaké</h4>
                            <a href="/villages/{{urlencode('Adiaké')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Adjamé</h4>
                            <a href="/villages/{{urlencode('Adjamé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Adzopé</h4>
                            <a href="/villages/{{urlencode('Adzopé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Afféry</h4>
                            <a href="/villages/{{urlencode('Afféry')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Agboville</h4>
                            <a href="/villages/{{urlencode('Agboville')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Agnibilékrou</h4>
                            <a href="/villages/{{urlencode('Agnibilékrou')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Agou</h4>
                            <a href="/villages/{{urlencode('Agou')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Akoupé</h4>
                            <a href="/villages/{{urlencode('Akoupé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Alépé</h4>
                            <a href="/villages/{{urlencode('Alépé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Anoumaba</h4>
                            <a href="/villages/{{urlencode('Anoumaba')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Anyama</h4>
                            <a href="/villages/{{urlencode('Anyama')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Arrah</h4>
                            <a href="/villages/{{urlencode('Arrah')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Assinie</h4>
                            <a href="/villages/{{urlencode('Assinie')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Assuéffry</h4>
                            <a href="/villages/{{urlencode('Assuéffry')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Attécoubé</h4>
                            <a href="/villages/{{urlencode('Attécoubé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Attiegouakro</h4>
                            <a href="/villages/{{urlencode('Attiegouakro')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ayamé</h4>
                            <a href="/villages/{{urlencode('Ayamé')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Azaguié</h4>
                            <a href="/villages/{{urlencode('Azaguié')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bako</h4>
                            <a href="/villages/{{urlencode('Bako')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bangolo</h4>
                            <a href="/villages/{{urlencode('Bangolo')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bassawa</h4>
                            <a href="/villages/{{urlencode('Bassawa')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bédiala</h4>
                            <a href="/villages/{{urlencode('Bédiala')}}">
                            <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Béoumi</h4>
                            <a href="/villages/{{urlencode('Béoumi')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Béttié</h4>
                            <a href="/villages/{{urlencode('Béttié')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Biankouma</h4>
                            <a href="/villages/{{urlencode('Biankouma')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bin-Houyé</h4>
                            <a href="/villages/{{urlencode('Bin-Houyé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bingerville</h4>
                            <a href="/villages/{{urlencode('Bingerville')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bloléquin</h4>
                            <a href="/villages/{{urlencode('Bloléquin')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bocanda</h4>
                            <a href="/villages/{{urlencode('Bocanda')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bodokro</h4>
                            <a href="/villages/{{urlencode('Bodokro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bondoukou</h4>
                            <a href="/villages/{{urlencode('Bondoukou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bongouanou</h4>
                            <a href="/villages/{{urlencode('Bongouanou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Boniérédougou</h4>
                            <a href="/villages/{{urlencode('Boniérédougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bonon</h4>
                            <a href="/villages/{{urlencode('Bonon')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bonoua</h4>
                            <a href="/villages/{{urlencode('Bonoua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Booko</h4>
                            <a href="/villages/{{urlencode('Booko')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Borotou</h4>
                            <a href="/villages/{{urlencode('Borotou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Botro</h4>
                            <a href="/villages/{{urlencode('Botro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bouaflé</h4>
                            <a href="/villages/{{urlencode('Bouaflé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bouaké</h4>
                            <a href="/villages/{{urlencode('Bouaké')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Bouna</h4>
                            <a href="/villages/{{urlencode('Bouna')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Boundiali</h4>
                            <a href="/villages/{{urlencode('Boundiali')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Brobo</h4>
                            <a href="/villages/{{urlencode('Brobo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Buyo</h4>
                            <a href="/villages/{{urlencode('Buyo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Cocody</h4>
                            <a href="/villages/{{urlencode('Cocody')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dabakala</h4>
                            <a href="/villages/{{urlencode('Dabakala')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dabou</h4>
                            <a href="/villages/{{urlencode('Dabou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Daloa</h4>
                            <a href="/villages/{{urlencode('Daloa')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Danané</h4>
                            <a href="/villages/{{urlencode('Danané')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Daoukro</h4>
                            <a href="/villages/{{urlencode('Daoukro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Diabo</h4>
                            <a href="/villages/{{urlencode('Diabo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dianra</h4>
                            <a href="/villages/{{urlencode('Dianra')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Diawala</h4>
                            <a href="/villages/{{urlencode('Diawala')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Didiévi</h4>
                            <a href="/villages/{{urlencode('Didiévi')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Diégonéfla</h4>
                            <a href="/villages/{{urlencode('Diégonéfla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dikodougou</h4>
                            <a href="/villages/{{urlencode('Dikodougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dimbokro</h4>
                            <a href="/villages/{{urlencode('Dimbokro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dioulatiédougou</h4>
                            <a href="/villages/{{urlencode('Dioulatiédougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Divo</h4>
                            <a href="/villages/{{urlencode('Divo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Djebonoua</h4>
                            <a href="/villages/{{urlencode('Djebonoua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Djèkanou</h4>
                            <a href="/villages/{{urlencode('Djèkanou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Djibrosso</h4>
                            <a href="/villages/{{urlencode('Djibrosso')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Doropo</h4>
                            <a href="/villages/{{urlencode('Doropo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Dualla</h4>
                            <a href="/villages/{{urlencode('Dualla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Duékoué</h4>
                            <a href="/villages/{{urlencode('Duékoué')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ettrokro</h4>
                            <a href="/villages/{{urlencode('Ettrokro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Facobly</h4>
                            <a href="/villages/{{urlencode('Facobly')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ferkessédougou</h4>
                            <a href="/villages/{{urlencode('Ferkessédougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Foumbolo</h4>
                            <a href="/villages/{{urlencode('Foumbolo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Fresco</h4>
                            <a href="/villages/{{urlencode('Fresco')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Fronan</h4>
                            <a href="/villages/{{urlencode('Fronan')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gagnoa</h4>
                            <a href="/villages/{{urlencode('Gagnoa')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gbeleban</h4>
                            <a href="/villages/{{urlencode('Gbeleban')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gboguhé</h4>
                            <a href="/villages/{{urlencode('Gboguhé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gbon</h4>
                            <a href="/villages/{{urlencode('Gbon')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gbonné</h4>
                            <a href="/villages/{{urlencode('Gbonné')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Gohitafla</h4>
                            <a href="/villages/{{urlencode('Gohitafla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Goulia</h4>
                            <a href="/villages/{{urlencode('Goulia')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Grabo</h4>
                            <a href="/villages/{{urlencode('Grabo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div><div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Grand-Bassam</h4>
                            <a href="/villages/{{urlencode('Grand-Bassam')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Grand-Béréby</h4>
                            <a href="/villages/{{urlencode('Grand-Béréby')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Grand-Lahou</h4>
                            <a href="/villages/{{urlencode('Grand-Lahou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Grand-Zattry</h4>
                            <a href="/villages/{{urlencode('Grand-Zattry')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guéyo</h4>
                            <a href="/villages/{{urlencode('Guéyo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guibéroua</h4>
                            <a href="/villages/{{urlencode('Guibéroua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guiembé</h4>
                            <a href="/villages/{{urlencode('Guiembé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guiglo</h4>
                            <a href="/villages/{{urlencode('Guiglo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guintéguéla</h4>
                            <a href="/villages/{{urlencode('Guintéguéla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Guitry</h4>
                            <a href="/villages/{{urlencode('Guitry')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Hiré</h4>
                            <a href="/villages/{{urlencode('Hiré')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Issia</h4>
                            <a href="/villages/{{urlencode('Issia')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Jacqueville</h4>
                            <a href="/villages/{{urlencode('Jacqueville')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kanakono</h4>
                            <a href="/villages/{{urlencode('Kanakono')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kani</h4>
                            <a href="/villages/{{urlencode('Kani')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kaniasso</h4>
                            <a href="/villages/{{urlencode('Kaniasso')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Karakoro</h4>
                            <a href="/villages/{{urlencode('Karakoro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kasséré</h4>
                            <a href="/villages/{{urlencode('Kasséré')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Katiola</h4>
                            <a href="/villages/{{urlencode('Katiola')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kokoumbo</h4>
                            <a href="/villages/{{urlencode('Kokoumbo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kolia</h4>
                            <a href="/villages/{{urlencode('Kolia')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Komborodougou</h4>
                            <a href="/villages/{{urlencode('Komborodougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kong</h4>
                            <a href="/villages/{{urlencode('Kong')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kongasso</h4>
                            <a href="/villages/{{urlencode('Kongasso')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Koonan</h4>
                            <a href="/villages/{{urlencode('Koonan')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Korhogo</h4>
                            <a href="/villages/{{urlencode('Korhogo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Koro</h4>
                            <a href="/villages/{{urlencode('Koro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kouassi-Datékro</h4>
                            <a href="/villages/{{urlencode('Kouassi-Datékro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kouassi-Kouassikro</h4>
                            <a href="/villages/{{urlencode('Kouassi-Kouassikro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kouibly</h4>
                            <a href="/villages/{{urlencode('Kouibly')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Koumassi</h4>
                            <a href="/villages/{{urlencode('Koumassi')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Koumbala</h4>
                            <a href="/villages/{{urlencode('Koumbala')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Koun-Fao</h4>
                            <a href="/villages/{{urlencode('Koun-Fao')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kounahiri</h4>
                            <a href="/villages/{{urlencode('Kounahiri')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Kouto</h4>
                            <a href="/villages/{{urlencode('Kouto')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Lakota</h4>
                            <a href="/villages/{{urlencode('Lakota')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Logoualé</h4>
                            <a href="/villages/{{urlencode('Logoualé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">M'bahiakro</h4>
                            <a href="/villages/{{urlencode("M'bahiakro")}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">M'batto</h4>
                            <a href="/villages/{{urlencode("M'batto")}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">M'bengué</h4>
                            <a href="/villages/{{urlencode("M'bengué")}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Madinani</h4>
                            <a href="/villages/{{urlencode('Madinani')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Maféré</h4>
                            <a href="/villages/{{urlencode('Maféré')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Man</h4>
                            <a href="/villages/{{urlencode('Man')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Mankono</h4>
                            <a href="/villages/{{urlencode('Mankono')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Marcory</h4>
                            <a href="/villages/{{urlencode('Marcory')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Massala</h4>
                            <a href="/villages/{{urlencode('Massala')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Mayo</h4>
                            <a href="/villages/{{urlencode('Mayo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Méagui</h4>
                            <a href="/villages/{{urlencode('Méagui')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Minignan</h4>
                            <a href="/villages/{{urlencode('Minignan')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Morondo</h4>
                            <a href="/villages/{{urlencode('Morondo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">N'douci</h4>
                            <a href="/villages/{{urlencode("N'douci")}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Napié</h4>
                            <a href="/villages/{{urlencode('Napié')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Nassian</h4>
                            <a href="/villages/{{urlencode('Nassian')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Niablé</h4>
                            <a href="/villages/{{urlencode('Niablé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Niakaramandougou</h4>
                            <a href="/villages/{{urlencode('Niakaramandougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Niéllé</h4>
                            <a href="/villages/{{urlencode('Niéllé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Niofoin</h4>
                            <a href="/villages/{{urlencode('Niofoin')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Odienné</h4>
                            <a href="/villages/{{urlencode('Odienné')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ouangolodougou</h4>
                            <a href="/villages/{{urlencode('Ouangolodougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ouaninou</h4>
                            <a href="/villages/{{urlencode('Ouaninou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ouellé</h4>
                            <a href="/villages/{{urlencode('Ouellé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Oumé</h4>
                            <a href="/villages/{{urlencode('Oumé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Ouragahio</h4>
                            <a href="/villages/{{urlencode('Ouragahio')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Plateau</h4>
                            <a href="/villages/{{urlencode('Plateau')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Port-bouët</h4>
                            <a href="/villages/{{urlencode('Port-bouët')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Prikro</h4>
                            <a href="/villages/{{urlencode('Prikro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Rubino</h4>
                            <a href="/villages/{{urlencode('Rubino')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Saïoua</h4>
                            <a href="/villages/{{urlencode('Saïoua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sakassou</h4>
                            <a href="/villages/{{urlencode('Sakassou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Samatiguila</h4>
                            <a href="/villages/{{urlencode('Samatiguila')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">San Pedro</h4>
                            <a href="/villages/{{urlencode('San Pedro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sandégué</h4>
                            <a href="/villages/{{urlencode('Sandégué')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sangouiné</h4>
                            <a href="/villages/{{urlencode('Sangouiné')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sarhala</h4>
                            <a href="/villages/{{urlencode('Sarhala')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sassandra</h4>
                            <a href="/villages/{{urlencode('Sassandra')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Satama-Sokoro</h4>
                            <a href="/villages/{{urlencode('Satama-Sokoro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Satama-Sokoura</h4>
                            <a href="/villages/{{urlencode('Satama-Sokoura')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Séguéla</h4>
                            <a href="/villages/{{urlencode('Séguéla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Séguelon</h4>
                            <a href="/villages/{{urlencode('Séguelon')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Seydougou</h4>
                            <a href="/villages/{{urlencode('Seydougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sifié</h4>
                            <a href="/villages/{{urlencode('Sifié')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sikensi</h4>
                            <a href="/villages/{{urlencode('Sikensi')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sinématiali</h4>
                            <a href="/villages/{{urlencode('Sinématiali')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sinfra</h4>
                            <a href="/villages/{{urlencode('Sinfra')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sipilou</h4>
                            <a href="/villages/{{urlencode('Sipilou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Sirasso</h4>
                            <a href="/villages/{{urlencode('Sirasso')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Songon</h4>
                            <a href="/villages/{{urlencode('Songon')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Soubré</h4>
                            <a href="/villages/{{urlencode('Soubré')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Taabo</h4>
                            <a href="/villages/{{urlencode('Taabo')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tabou</h4>
                            <a href="/villages/{{urlencode('Tabou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tafiré</h4>
                            <a href="/villages/{{urlencode('Tafiré')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Taï</h4>
                            <a href="/villages/{{urlencode('Taï')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tanda</h4>
                            <a href="/villages/{{urlencode('Tanda')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Téhini</h4>
                            <a href="/villages/{{urlencode('Téhini')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tengréla</h4>
                            <a href="/villages/{{urlencode('Tengréla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiapoum</h4>
                            <a href="/villages/{{urlencode('Tiapoum')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiassalé</h4>
                            <a href="/villages/{{urlencode('Tiassalé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tie-n'diekro</h4>
                            <a href="/villages/{{urlencode("Tie-n'diekro")}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiébissou</h4>
                            <a href="/villages/{{urlencode('Tiébissou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiémé</h4>
                            <a href="/villages/{{urlencode('Tiémé')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiémélékro</h4>
                            <a href="/villages/{{urlencode('Tiémélékro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tiéningboué</h4>
                            <a href="/villages/{{urlencode('Tiéningboué')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tienko</h4>
                            <a href="/villages/{{urlencode('Tienko')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tioroniaradougou</h4>
                            <a href="/villages/{{urlencode('Tioroniaradougou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Tortiya</h4>
                            <a href="/villages/{{urlencode('Tortiya')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Touba</h4>
                            <a href="/villages/{{urlencode('Touba')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Toulépleu</h4>
                            <a href="/villages/{{urlencode('Toulépleu')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Toumodi</h4>
                            <a href="/villages/{{urlencode('Toumodi')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Transua</h4>
                            <a href="/villages/{{urlencode('Transua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Treichville</h4>
                            <a href="/villages/{{urlencode('Treichville')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Vavoua</h4>
                            <a href="/villages/{{urlencode('Vavoua')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Worofla</h4>
                            <a href="/villages/{{urlencode('Worofla')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Yakassé-Attobrou</h4>
                            <a href="/villages/{{urlencode('Yakassé-Attobrou')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Yamoussoukro</h4>
                            <a href="/villages/{{urlencode('Yamoussoukro')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Yopougon</h4>
                            <a href="/villages/{{urlencode('Yopougon')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Zikisso</h4>
                            <a href="/villages/{{urlencode('Zikisso')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Zouan-Hounien</h4>
                            <a href="/villages/{{urlencode('Zouan-Hounien')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Zoukougbeu</h4>
                            <a href="/villages/{{urlencode('Zoukougbeu')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>

                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">Zuénoula</h4>
                            <a href="/villages/{{urlencode('Zuénoula')}}">
                                <small class="text-warning"><b>Voir les utilisateurs vivant dans cette région</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

        </div><!--fin row-->
    </div>
    <!--/ container -->
</section>



@endsection

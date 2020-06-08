@extends('layouts.menu')
@section('title', 'Liste des utilisateurs vivant en '.$country)

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
.widget-user .wid-u-info{margin-left:90px;}
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
    <h2 class="text-center mb-4">Liste des utilisateurs vivant en {{$country}}</h2>
    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <div class="col-lg-4 col-md-6">
                <div class="card-box widget-user">
                    <div>
                        <img src="/storage/images/users/{{$user->image}}" class="img-fluid rounded-circle" alt="{{$user->name}}">
                        <div class="wid-u-info">
                            <h4 class="m-t-0 m-b-5 font-600">{{$user->name}}</h4>
                            <p class="text-muted m-b-5 font-13">Nationalité: {{$user->birth_country}}</p>
                            <a href="/chat/{{$user->id}}">
                                <small class="text-warning"><b>Contacter</b></small>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div><!--fin row-->
    </div>
    <!--/ container -->
</section>



@endsection

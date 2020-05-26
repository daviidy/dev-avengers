@extends('layouts.menu')
@section('title', 'Liste des événements')

@section('content')



<!--onglets style-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,li::first-letter,p::first-line,div::first-line,li::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a,label{-ms-touch-action:manipulation;touch-action:manipulation;}
label{display:inline-block;margin-bottom:.5rem;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
.container{position:relative;margin-left:auto;margin-right:auto;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.container{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.container{width:540px;max-width:100%;}
}
@media (min-width: 768px){
.container{width:720px;max-width:100%;}
}
@media (min-width: 992px){
.container{width:960px;max-width:100%;}
}
@media (min-width: 1200px){
.container{width:1140px;max-width:100%;}
}
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
.col-sm-4,.col-lg-12{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-4,.col-lg-12{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-4{-webkit-box-flex:0;-webkit-flex:0 0 33.333333%;-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%;}
}
@media (min-width: 992px){
.col-lg-12{-webkit-box-flex:0;-webkit-flex:0 0 100%;-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%;}
}
.fade{opacity:0;-webkit-transition:opacity 0.15s linear;-o-transition:opacity 0.15s linear;transition:opacity 0.15s linear;}
.nav{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding-left:0;margin-bottom:0;list-style:none;}
.nav-link{display:block;padding:0.5em 1em;}
.nav-link:focus,.nav-link:hover{text-decoration:none;}
.nav-tabs{border-bottom:1px solid #ddd;}
.nav-tabs .nav-item{margin-bottom:-1px;}
.nav-tabs .nav-link{border:1px solid transparent;border-top-right-radius:0.25rem;border-top-left-radius:0.25rem;}
.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#eceeef #eceeef #ddd;}
.nav-tabs .nav-link.active{color:#464a4c;background-color:#fff;border-color:#ddd #ddd #fff;}
.tab-content > .tab-pane{display:none;}
.tab-content > .active{display:block;}
.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
.card-block{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
.media{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:start;-webkit-align-items:flex-start;-ms-flex-align:start;align-items:flex-start;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.rounded-circle{border-radius:50%;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-briefcase:before{content:"\f0b1";}
.fa-envelope:before{content:"\f0e0";}
.fa-ellipsis-v:before{content:"\f142";}
div,h4,p,a,img,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active,a.active{text-decoration:none;outline:0;color:#D86000!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
ul{margin:0;}
ul{list-style:none outside;}
li{line-height:24px;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.posts-2{width:100%;background:#f2f2f2;padding-top:50px;padding-bottom:30px;}
.card{margin-bottom:30px;margin-right:10px;margin-left:10px;border-radius:10px!important;box-shadow:0 1px 5px rgba(49, 58, 70, 0.4);}
.card a{text-decoration:none!important;color:inherit;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.nav-tabs .nav-link{font-family:'Montserrat', sans-serif;font-size:16px;color:#3b4354;}
.followers .card-profile .media{margin-top:0;}
.followers .card-profile .media .media-left{padding-right:15px;}
.followers .card-profile .media .media-object{width:48px;padding:2px;border:2px solid #eaecf0;}
.followers .media-object{display:block;}
.followers .media-body{display:table-cell;vertical-align:top;width:10000px;}
.followers .media-heading{font-family:'Montserrat', sans-serif;margin-top:5px;margin-bottom:2px;font-size:16px;font-weight:700;color:#3b4354;}
.followers .media-usermeta{font-family:'Montserrat', sans-serif;margin-top:4px;color:#909bb1;}
.followers .media-usermeta i{display:inline-block;margin-right:5px;vertical-align:baseline;}
.followers .card-options{position:absolute;top:15px;right:20px;padding:0;margin:0;}
.followers .card-options > li{display:block;float:left;list-style:none;}
.followers .card-options > li > a{color:#bdc3d1;-webkit-transition:all 0.2s ease-out 0s;-o-transition:all 0.2s ease-out 0s;transition:all 0.2s ease-out 0s;}
.followers .card-options > li > a > i{display:inline-block;vertical-align:middle;}
.followers .people-info .row{margin:0;}
.followers .people-info .col-sm-4{padding:0;font-size:12px;}
.followers .people-info .col-sm-4:first-child > .info-group{margin-left:0;}
.followers .people-info .info-group{font-family:'Montserrat', sans-serif;font-size:14px;padding:15px;background-color:#f9fafb;margin-left:1px;}
.followers .people-info .info-group label{display:block;margin-bottom:5px;text-transform:uppercase;font-family:'Montserrat', sans-serif;font-weight:700;font-size:11px;letter-spacing:.5px;color:#3b4354;}
.followers .people-info .row + .row{margin-top:1px;}
.followers .people-info h4{font-family:'Montserrat', sans-serif;margin:9px 0 8px;font-weight:500;color:#259dab;font-size:15px;}
.nav-tabs .nav-link{font-family:'Montserrat', sans-serif;font-size:16px;}
.del{display: flex;}
</style>

@if(session('status'))
@include('includes.status')
@endif


<section class="posts-2 followers">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <ul class="nav nav-tabs" role="tablist" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#all" role="tab" data-toggle="tab" aria-expanded="true">Tous</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#myEvents" role="tab" data-toggle="tab" aria-expanded="false">Mes événements</a>
                    </li>
                </ul>
                <br><br>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show" id="all" aria-expanded="true">
                        @foreach($meetups as $meetup)
                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                        @if($meetup->image !== 'image.jpg')
                                            <img class="media-object rounded-circle" src="/storage/images/users/{{$meetup->user->image}}" alt="">
                                        @else
                                            <img class="media-object rounded-circle" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{url('meetups', $meetup)}}">
                                        <h4 class="media-heading">{{$meetup->name}}</h4>
                                        </a>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Hôte: {{$meetup->user->name}}</p>
                                    </div>
                                </div><!-- media -->
                                <!--
                                <ul class="card-options">
                                    <li><a class="tooltips" href="" data-toggle="tooltip" title="" data-original-title="View Options">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a></li>
                                </ul>
                            -->

                                <div class="people-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            @if($meetup->link !== null)
                                            <div class="info-group">
                                                <label>Lien</label>
                                                {{$meetup->link}}
                                            </div>
                                            @endif
                                            @if($meetup->place !== null)
                                            <div class="info-group">
                                                <label>Lieu</label>
                                                {{$meetup->place}}
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                {{$meetup->user->email}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Phone</label>
                                                386-7521860
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                  
                                    <div class="row">
                                        <div class="col-sm-6 del">
                                            <div class="info-group ">
                                                <a href="#">
                                                    <button class="btn btn-success"><i class="fa fa-pencil-square-o"></i> Modifier</button>
                                                </a>
                                            </div>
                                            <div class="info-group">
                                                <form action="">
                                                    @csrf
                                                    {{ method_field('delete') }}
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i> Supprimer</button>
                                                </form>
                                            </div>
                                        </div>
                                        {{--
                                        <div class="col-sm-6">
                                            <div class="info-group">
                                                <button class="btn btn-primary"></button>
                                            </div>
                                        </div>
                                        --}}
                                    </div><!-- row -->
                                   
                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->
                        @endforeach

                    </div><!-- tabpanel -->
                    <div role="tabpanel" class="tab-pane fade" id="myEvents" aria-expanded="false">

                        @foreach($meetups as $meetup)
                        @if($meetup->user_id == Auth::user()->id)
                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                        @if($meetup->image !== 'image.jpg')
                                            <img class="media-object rounded-circle" src="/storage/images/users/{{$meetup->user->image}}" alt="">
                                        @else
                                            <img class="media-object rounded-circle" src="https://oschoolelearning.com/images/courses/logos/1580161319.png" alt="">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{url('meetups', $meetup)}}">
                                        <h4 class="media-heading">{{$meetup->name}}</h4>
                                        </a>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Hôte: {{$meetup->user->name}}</p>
                                    </div>
                                </div><!-- media -->
                                <!--
                                <ul class="card-options">
                                    <li><a class="tooltips" href="" data-toggle="tooltip" title="" data-original-title="View Options">
                                            <i class="fa fa-ellipsis-v"></i>
                                        </a></li>
                                </ul>
                            -->

                                <div class="people-info">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            @if($meetup->link !== null)
                                            <div class="info-group">
                                                <label>Lien</label>
                                                {{$meetup->link}}
                                            </div>
                                            @endif
                                            @if($meetup->place !== null)
                                            <div class="info-group">
                                                <label>Lieu</label>
                                                {{$meetup->place}}
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                {{$meetup->user->email}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Phone</label>
                                                386-7521860
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    {{--
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Followers</label>
                                                <h4>1,348</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Following</label>
                                                <h4>232</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                        </div>
                                    </div><!-- row -->
                                    --}}
                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->
                        @endif
                        @endforeach

                    </div><!-- tabpanel -->
                </div>

            </div>
        </div>
        <!--/ row -->
    </div>
    <!--/ container -->
</section>



@endsection

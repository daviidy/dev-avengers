<!DOCTYPE html>
<html lang="en">

<head>

    <!-- ==============================================
		Title and Meta Tags
		=============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | UNIVOIRE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="La plateforme UNIVOIRE est un espace de retrouvaille de tous les ivoiriens à travers le monde entier">
    <meta name="keywords" content="cote d'ivoire, ivoirien, communauté">
    <meta name="author" content="Rikudo SARL">

    <!-- ==============================================
		Favicons
		=============================================== -->
    <link rel="shortcut icon" href="/assets/main_theme/medium/img/favicons/favicon.ico">
    <link rel="apple-touch-icon" href="/assets/main_theme/medium/img/favicons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/main_theme/medium/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/main_theme/medium/img/favicons/apple-touch-icon-114x114.png">

    <!-- ==============================================
		CSS
		=============================================== -->
    <!-- Style-->
    <link type="text/css" href="/assets/main_theme/medium/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="/assets/main_theme/medium/css/app.css" rel="stylesheet" />

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <!-- ==============================================
		Feauture Detection
		=============================================== -->
         <!--Plugin form cdn jquery contry selector-->
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/plugin/build/css/countrySelect.css">
    <link rel="stylesheet" href="/plugin/build/css/demo1.css">
    <link rel="stylesheet" href="/path/to/countrySelect.css">
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/countrySelect.js"></script>
  <!--End Plugin form cdn jquery-->

  <!--Plugin form cdn jquery tel selector-->
  <link rel="stylesheet" href="/plugin/build/css/intlTelInput.css">
  <link rel="stylesheet" href="/plugin/build/css/demo.css">
    <!--End Plugin form cdn jquery-->
    <script src="/assets/main_theme/medium/js/modernizr-custom.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!--highlight js-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/highlight.min.js"></script>

    <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.9/styles/atom-one-dark.min.css">
  <!--fin highlight js-->


  <!--file input-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/js/fileinput.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/css/fileinput.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

        <!--bouton login-->
        <style media="screen">
        a.solid {
            background-color: #fff;
            border-color: #fff;
            color: #007808;
            padding: 10px 16px;
            font-size: 16px;
            text-transform: uppercase;
            font-weight: 700;
            border: 2px solid;
            border-radius: 4px;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            }

            @media screen and (max-width: 600px)
            {
                #login_item{
                    margin-top: 2rem;
                }
            }

            @media screen and (max-width: 768px)
            {
                a.solid{
                    padding: 10px 3px;
                    font-size: 10px;
                }
                .navbar-toggleable-sm .navbar-nav {
                    font-size: smaller !important;
                }
            }

        </style>



</head>

<body>

    <!-- ==============================================
     Navigation Section
     =============================================== -->

    <nav class="navbar navbar-inverse navbar-toggleable-sm bg-success justify-content-between" id="mainNav">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target=".dual-nav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Button -->
        <div class="navbar-collapse collapse dual-nav">
            <ul class="navbar-nav">
                <!-- Search in right of nav -->
                <li class="nav-item hidden-xs-down">
                    <form class="top_search clearfix">
                        <div class="top_search_con">
                            <input class="s" placeholder="Recherchez ici ..." type="text">
                            <span class="top_search_icon"><i class="fa fa-search"></i></span>
                            <input class="top_search_submit" type="submit">
                        </div>
                    </form>
                </li>
                <!-- Search Ends -->

                <li class="nav-item active">
                    <a class="nav-link" href="/">Accueil <span class="sr-only">(cette page)</span></a>
                </li>
                @auth
                <li class="nav-item">
                    @if(Auth::user()->living_country !== null && Auth::user()->birth_country !== null)
                    <a class="nav-link" href="/seeCountries">Pays <span class="sr-only">(cette page)</span></a>
                    @else
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">Pays <span class="sr-only">(cette page)</span></a>
                    @endif
                </li>
                @endauth
                <li class="nav-item">
                    <a class="nav-link" href="/seeVillages">Villages <span class="sr-only">(cette page)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/seeJobs">Métiers <span class="sr-only">(cette page)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a style="width: 215px;" class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="true">
                        Opportunités d'affaires
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="{{route('projects.create')}}"><span>Créer une opportunité d'affaires</span></a>
                        <a class="dropdown-item" href="{{route('projects.index')}}"><span>Liste des opportunités d'affaires</span></a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a style="width: 125px;" class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="true">
                        Evenements
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="{{route('meetups.create')}}"><span>Créer un événement</span></a>
                        <a class="dropdown-item" href="{{route('meetups.index')}}"><span>Liste des événements</span></a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a style="width: 125px;" class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="true">
                        Actualités
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="{{route('posts.create')}}"><span>Créer un article</span></a>
                        <a class="dropdown-item" href="{{route('posts.index')}}"><span>Liste des actualités</span></a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Chat <span class="sr-only">(cette page)</span></a>
                </li>
                <!-- /nav-item -->
                {{--
                <li class="nav-item dropdown hidden-xs mega-menu">
                    <a href="javascript:;" data-toggle="dropdown" class="nav-link dropdown-toggle" aria-expanded="true">Mega </a>
                    <ul class="dropdown-menu dropdown-menu-yamm">
                        <li>
                            <!-- Content container to add padding -->
                            <div class="yamm-content">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 list-unstyled megamenu-list">
                                        <h5 class="m-t-0">Description</h5>
                                        <p class="text-muted font-13">
                                            Medium Redesigned is a fully featured social network template built on top of awesome Bootstrap 4 Alpha 6, modern web technology HTML5, CSS3 and jQuery. It has many ready to use hand crafted components. The
                                            theme is fully responsive and easy to customize.
                                            The code is super easy to understand and gives power to any developer to turn this theme into real web application.
                                        </p>
                                    </div>
                                    <!-- /col-md-3 -->
                                    <ul class="col-sm-6 col-md-3 list-unstyled megamenu-list">
                                        <li>
                                            <h5 class="m-t-0">Pages</h5>
                                        </li>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3 </a></li>
                                        <li><a href="index-4.html">Home Page 4 </a></li>
                                        <li><a href="index-5-sidebar.html">Home Page 5 sidebar <span class="badge badge-danger">New</span></a></li>
                                        <li><a href="newsfeed.html">News Feed <span class="badge badge-danger">New</span></a></li>
                                    </ul>
                                    <!-- /ul -->
                                    <ul class="col-sm-6 col-md-3 list-unstyled megamenu-list">
                                        <li>
                                            <h5 class="m-t-0">&nbsp;</h5>
                                        </li>
                                        <li><a href="profile.html">Profile</a></li>
                                        <li><a href="profile-2.html">Profile Page 2</a></li>
                                        <li><a href="followers.html">Followers/Following</li>
                                        <li><a href="followers-2.html">Followers/Following 2</li>
                                    </ul><!-- /ul -->
                                    <ul class="col-sm-6 col-md-2 list-unstyled megamenu-list">
                                        <li>
                                            <h5 class="m-t-0">&nbsp;</h5>
                                        </li>
                                        <li><a href="post.html">Post Page</li>
                                        <li><a href="post-2.html">Post Page 2</li>
                                    </ul><!-- /ul -->

                                </div><!-- /row -->
                            </div><!-- /yam-content -->
                        </li><!-- /li -->
                    </ul><!-- /ul -->
                </li><!-- /li -->
                --}}
            </ul><!-- /ul -->
        </div><!-- /navbar-collapse -->
        <a href="/" class="navbar-brand mr-0 hidden-md-up"> UNIVOIRE</a>
        <div class="navbar-collapse collapse dual-navv">

            <ul class="nav navbar-nav ml-auto">
                @auth
                <li class="nav-item dropdown mega-pills">
                    <a href="" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-th"></i>
                        <span class="label up p-a-0 warn"></span>
                    </a>
                    <!-- /nav-link -->
                    <div class="dropdown-menu w-xl pull-right p-a-0">
                        <div class="row no-gutter text-primary-hover">
                            <div class="col-xs-4 b-r b-b">
                                <a class="p-a block text-center">
                                    <i class="fa fa-files-o text-muted m-v-sm"></i>
                                    <span class="block">Stories</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->
                            <div class="col-xs-4 b-r b-b">
                                <a class="p-a block text-center">
                                    <i class="fa fa-file-text-o text-muted m-v-sm"></i>
                                    <span class="block">Series</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->
                            <div class="col-xs-4 b-b">
                                <a class="p-a block text-center">
                                    <i class="fa fa-line-chart text-muted m-v-sm"></i>
                                    <span class="block">Stats</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->
                            <div class="col-xs-4 b-r">
                                <a class="p-a block text-center">
                                    <i class="fa fa-bookmark-o text-muted m-v-sm"></i>
                                    <span class="block">Bookmarks</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->
                            <div class="col-xs-4 b-r">
                                <a class="p-a block text-center">
                                    <i class="fa fa-file-archive-o text-muted m-v-sm"></i>
                                    <span class="block">Publications</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->
                            <div class="col-xs-4">
                                <a class="p-a block text-center">
                                    <i class="fa fa-heart text-muted m-v-sm"></i>
                                    <span class="block">Interests</span>
                                </a>
                            </div>
                            <!-- /col-xs-4 -->

                        </div>
                    </div>
                </li>
                <!-- /navbar-item -->

                <li class="nav-item dropdown mega-notification">
                    <a href="" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-bell-o"></i>
                        <span class="label up p-a-0 danger"></span>
                    </a>
                    <div class="dropdown-menu pull-right w-xl no-bg no-border no-shadow">
                        <div class="scrollable">
                            <ul class="list-group list-group-gap m-a-0">
                                <li class="list-group-item dark-white box-shadow-z0 b">
                                    <span class="pull-left m-r">
                                        <img src="/assets/main_theme/medium/img/users/3.jpg" alt="..." class="w-40 img-circle">
                                    </span>
                                    <span class="clear block">Use awesome <a href="#" class="text-primary">animate.css</a><br>
                                        <small class="text-muted">10 minutes ago</small>
                                    </span>
                                </li>
                                <!-- /list-group-item -->
                                <li class="list-group-item dark-white box-shadow-z0 b">
                                    <span class="pull-left m-r">
                                        <img src="/assets/main_theme/medium/img/users/5.jpg" alt="..." class="w-40 img-circle">
                                    </span>
                                    <span class="clear block">
                                        <a href="#" class="text-primary">Kyle</a> Added you as friend<br>
                                        <small class="text-muted">2 hours ago</small>
                                    </span>
                                </li>
                                <!-- /list-group-item -->
                                <li class="list-group-item dark-white text-color box-shadow-z0 b">
                                    <span class="pull-left m-r">
                                        <img src="/assets/main_theme/medium/img/users/4.jpg" alt="..." class="w-40 img-circle">
                                    </span>
                                    <span class="clear block">
                                        <a href="#" class="text-primary">Jonathan</a> sent you a message<br>
                                        <small class="text-muted">1 day ago</small>
                                    </span>
                                </li>
                                <!-- /list-group-item -->

                            </ul>
                            <!-- /list-group -->
                        </div>
                        <!-- /scrollable -->
                    </div>
                    <!-- /dropdown-menu -->
                </li>
                <!-- /navbar-item -->

                <li class="nav-item dropdown mega-avatar">
                    <a class="nav-link dropdown-toggle clear" data-toggle="dropdown" aria-expanded="true">
                        <span class="avatar w-32">
                            @if(Auth::user()->image == 'image.jpg')
                            <img src="https://comman-ya.oschoolelearning.com/images/users/default/image.jpg" class="w-full rounded" width="25" height="25" alt="...">
                            @else
                            <img src="/storage/images/users/{{Auth::user()->image}}" class="w-full rounded" width="25" height="25" alt="...">
                            @endif
                        </span>
                        <i class="mini"></i>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">
                            {{Auth::user()->name}}
                        </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                        <a class="dropdown-item" href="#"><span>Créer un projet</span></a>
                        <a class="dropdown-item" href="#"><span>Créer un événement</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/home"><span>Profil</span></a>
                        <a class="dropdown-item" href="{{route('users.edit', Auth::user())}}"><span>Paramètres</span></a>
                        <a class="dropdown-item" href="#">Need help?</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">

                                <i class="fa fa-sign-out"></i> &nbsp;
                                Déconnexion
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </a>
                    </div>
                </li>
                @endauth
                <!-- /navbar-item -->

                @guest
                <li id="login_item"><a class="solid" href="/login">Se connecter</a></li>
                @endguest
            </ul>
            <!-- /nav -->

        </div>
        <!-- /navbar-collapse -->
    </nav>


    <!-- /navbar-item -->

    {{--
    @if(\Route::current()->getName() !== 'welcome')
    <!-- ==============================================
     Site Branding Section
     =============================================== -->
    <div class="site-branding">
        <div class="container">
            <h1 class="site-title"><a href="http://www.theleftvstheright.com" rel="home"> MEDIUM </a></h1>
            <p class="site-description">Share your own ideas and opinions</p>
        </div>
        <!-- /container -->
    </div>
    <!-- .site-branding -->

    @endif
    --}}


    @yield('content')

@include('includes.popup_country');


    <!-- ==============================================
     Footer Section
     =============================================== -->
    <footer class="bottom-footer">
        <div class="container">
            <p>©<span id="year">2017</span> Univoire</p>

            <ul id="menu-footer-menu">
                <li>
                    <a href="#">About Us</a>
                </li>
                <!-- /li -->
                <li>
                    <a href="#">Privacy</a>
                </li>
                <!-- /li -->
                <li>
                    <a href="#">Terms & Conditions</a>
                </li>
                <!-- /li -->
                <li>
                    <a href="#">Contact Us</a>
                </li>
                <!-- /li -->
            </ul>
            <!-- /ul -->

        </div>
        <!-- /container -->
    </footer>
    <!-- /footer -->

    <a id="scrollup">Scroll</a>

    <!-- ==============================================
	 Scripts
	 =============================================== -->
    <script src="/assets/main_theme/medium/bower_components/jquery/dist/jquery.js"></script>
    <script src="/assets/main_theme/medium/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="/assets/main_theme/medium/bower_components/bootstrap/dist/js/bootstrap.js"></script>
    <script>
        $(".dual-nav").on('shown.bs.collapse', function() {
            $(".dual-navv").collapse('show');
        })
        $(".dual-nav").on('hidden.bs.collapse', function() {
            $(".dual-navv").collapse('hide');
        })
    </script>
    <script src="/assets/main_theme/medium/js/medium.js"></script>

    <!--COPYRIGTH SCRIPT-->
    <script type="text/javascript">
        var date = new Date();
        var annee = date.getFullYear();
        document.getElementById('year').innerHTML = annee;
    </script>



{{--
@if(session('status'))
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal body -->
        <div class="modal-body">
          {{session('status')}}
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button style="background: #FC0254"; type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
        </div>

      </div>
    </div>
  </div>

  <script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal({
          show: true
      });
    });
</script>
@endif

--}}

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyD-PY0Gr0B-Z9zzr1oU3hnH17yLjfPvPpQ"></script>

<script type="text/javascript">

var searchInput = 'search_input';

$(document).ready(function () {
var autocomplete;
autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
    types: ['geocode'],
});

google.maps.event.addListener(autocomplete, 'place_changed', function () {
    var near_place = autocomplete.getPlace();
    document.getElementById('loc_lat').value = near_place.geometry.location.lat();
    document.getElementById('loc_long').value = near_place.geometry.location.lng();

});
});

$(document).on('change', '#'+searchInput, function () {
document.getElementById('loc_lat').value = '';
document.getElementById('loc_long').value = '';

});

</script>


</body>

</html>

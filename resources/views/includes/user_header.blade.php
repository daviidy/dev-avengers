<header class="profile-bg-picture"></header>


<section class="user-section">
    <div class="container">
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="https://i.stack.imgur.com/nymzq.jpg?s=328&g=1" alt="{{ucfirst(Auth::user()->name)}}" class="thumb-lg img-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 ellipsis">{{Auth::user()->name}}</h4>
                        <p class="font-13"> User Experience Specialist</p>
                        <p class="text-muted m-b-0"><small>California, United States</small></p>
                    </div><!-- /media-body -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <div class="text-right">
                        @if(\Route::current()->getName() == 'users.edit')
                        <a href="/home">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fa fa-user m-r-5"></i>

                                Aperçu du profil

                            </button>
                        </a>
                        @else
                        <a href="{{route('users.edit', Auth::user())}}">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fa fa-user m-r-5"></i>

                                Modifier le profil

                            </button>
                        </a>
                        @endif


                    </div><!-- /text-right -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div>
        <!--/ profile-user-box -->
    </div><!-- /container -->
</section>

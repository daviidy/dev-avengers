<header class="profile-bg-picture"></header>


<section class="user-section">
    <div class="container">
        <div class="profile-user-box">
            <div class="row">
                <div class="col-sm-6">
                    <span class="pull-left m-r-15"><img src="/storage/images/users/{{$user->image}}" alt="{{ucfirst($user->name)}}" class="thumb-lg img-circle"></span>
                    <div class="media-body">
                        <h4 class="m-t-5 m-b-5 ellipsis">{{$user->name}}</h4>
                        <p class="font-13"> {{$user->job ? $user->job : 'Aucun métier renseigné'}}</p>
                        <p class="text-muted m-b-0"><small>{{$user->job ? $user->living_city : 'Aucun lieu de résidence renseigné'}}</small></p>
                    </div><!-- /media-body -->
                </div><!-- /col-sm-6 -->
                <div class="col-sm-6">
                    <div class="text-right float-right">
                        <a href="#">
                            <button type="button" class="btn btn-success waves-effect waves-light">
                                <i class="fa fa-comment m-r-5"></i>

                                Envoyer message

                            </button>
                        </a>



                    </div><!-- /text-right -->
                </div><!-- /col-sm-6 -->
            </div><!-- /row -->
        </div>
        <!--/ profile-user-box -->
    </div><!-- /container -->
</section>

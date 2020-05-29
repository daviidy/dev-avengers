@extends('layouts.menu')
@section('title', 'Liste des articles')

@section('content')


<style media="screen">

/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
small{font-size:80%;}
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,li::first-letter,p::first-line,div::first-line,li::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4,h6{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
ul{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
h4,h6{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
h6{font-size:1rem;}
hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0, 0, 0, 0.1);}
small{font-size:80%;font-weight:normal;}
.img-fluid{max-width:100%;height:auto;}
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
.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
.card-block{-webkit-box-flex:1;-webkit-flex:1 1 auto;-ms-flex:1 1 auto;flex:1 1 auto;padding:1.25rem;}
.card-title{margin-bottom:0.75rem;}
.card-text:last-child{margin-bottom:0;}
.card-footer{padding:0.75rem 1.25rem;background-color:#f7f7f9;border-top:1px solid rgba(0, 0, 0, 0.125);}
.card-footer:last-child{border-radius:0 0 calc(0.25rem - 1px) calc(0.25rem - 1px);}
.card-img-top{border-top-right-radius:calc(0.25rem - 1px);border-top-left-radius:calc(0.25rem - 1px);}
@media (min-width: 576px){
.card-deck{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-flow:row wrap;-ms-flex-flow:row wrap;flex-flow:row wrap;}
.card-deck .card{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-webkit-flex:1 0 0%;-ms-flex:1 0 0%;flex:1 0 0%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}
.card-deck .card:not(:first-child){margin-left:15px;}
.card-deck .card:not(:last-child){margin-right:15px;}
}
@media (max-width: 575px){
.hidden-xs-down{display:none!important;}
}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-right{float:right;}
.fa-align-left:before{content:"\f036";}
.fa-heart-o:before{content:"\f08a";}
.fa-comment-o:before{content:"\f0e5";}
div,span,h4,h6,p,a,img,small,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4,h6{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4 a,h6 a{font-weight:inherit;}
h4{font-size:18px;line-height:36px;}
h6{font-size:14px;line-height:24px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active{text-decoration:none;outline:0;color:#16A085!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
ul{margin:0;}
ul{list-style:none outside;}
li{line-height:24px;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.posts-2{width:100%;background:#f2f2f2;padding-top:50px;padding-bottom:30px;}
.card{margin-bottom:30px;margin-right:10px;margin-left:10px;border-radius:10px!important;box-shadow:0 1px 5px rgba(49, 58, 70, 0.4);}
.card .card-title{font-family:'Montserrat', sans-serif;font-weight:700;letter-spacing:0px;color:#1ab394!important;font-size:16px;line-height:1!important;}
.card .card-title a:hover{color:#858686!important;}
.card .card-text{font-family:'Abhaya Libre', serif;color:#858686!important;}
.card .card-text a{color:#1ab394!important;}
.card a{text-decoration:none!important;color:inherit;}
.card hr{padding-top:0px!important;margin-top:0px!important;height:1px;background:#eee;}
.card .card-footer{background-color:#fff!important;border-top:none!important;}
.card .author-2 img{width:25px;height:25px;}
.card .author-2 span{position:relative;top:-10px;}
.card ul.bottom_data,.card ul.author-2{margin-bottom:0px;list-style:none;padding:0px;}
.card ul.bottom_data{position:relative;top:8px;}
.card ul.bottom_data li:first-child{padding-left:0px;border-right:none;}
.card ul.bottom_data li{font-family:'Abhaya Libre', serif;color:#858686!important;display:block;font-size:14px;margin-bottom:0px!important;font-weight:normal;line-height:1;float:left;padding:0px 8px;}
.card ul.author-2 li{font-family:'Abhaya Libre', serif;color:#1ab394!important;display:block;font-size:14px;margin-bottom:15px!important;font-weight:normal;line-height:1;float:left;padding:0px 5px;}
.card ul.bottom_data li .fa{margin-right:3px!important;}
.card ul.bottom_data li:last-child{padding-right:0px;border-right:none;}
@media only screen and (max-width: 768px){
.card-footer .author-2,.card-footer .bottom_data.pull-right{text-align:center!important;}
ul.bottom_data li{font-family:'Varela Round', sans-serif;display:block;font-size:12px;margin-bottom:0px!important;font-weight:normal;line-height:1;float:left;padding:0px 8px;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

.fa-pencil-square-o{font-size:15px; color: #007808; margin-right: 20px;}
.fa-trash{font-size:15px; color: #D86000; }
.dxy-2{padding:0px !important;}

</style>




<section class="posts-2">
    <div class="container">

        <div class="row">

            <div class="card-deck-wrapper">

                <div class="card-deck">

                    <div class="card col-md-4 col-sm-12 dxy-2">
                        <a href="#">
                            <img class="card-img-top img-fluid" src="http://www.themashabrand.com/templates/Masha/Medium/img/blog/12.jpg" alt="...">
                        </a>
                        <div class="card-block">
                            <h4 class="card-title"><a href="#">Family values you can teach your children</a></h4>
                            <h6 class="card-text"><a href="#">Family</a>,&nbsp; <small>5 minutes ago</small></h6>
                            <p class="card-text">Nunc sed magna suscipit, volutpat ipsum quis, dictum mi. Aliquam erat volutpat. Nullam tortor libero, placerat eget turpis eget, gravida consectetur lacus.</p>
                        </div>
                        <div class="card-footer">
                            <hr>
                            <ul class="author-2">
                                <li><a href="#"><img class="" src="http://www.themashabrand.com/templates/Masha/Medium/img/users/12.jpg" alt="..."> &nbsp; <span> Sean</span></a></li>
                            </ul><!-- /.bottom_data -->
                            <ul class="bottom_data pull-right hidden-xs-down">
                                <li><i class="fa fa-comment-o"></i>200</li>
                                <li><i class="fa fa-heart-o"></i>30</li>
                                <li><i class="fa fa-pencil-square-o"></i></li>
                                <li><i class="fa fa-trash"></i> </li>
                            </ul><!-- /.bottom_data -->
                        </div>
                    </div><!-- /.card -->

                </div><!-- /.card-deck -->
            </div><!-- /.card-deck-wrapper -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

@endsection

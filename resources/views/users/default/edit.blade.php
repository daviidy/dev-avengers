@extends('layouts.menu')
@section('title', 'Modifier votre profil')

@section('content')

<!--style unsplash-->
<style media="screen">
/*! CSS Used from: https://unsplash.com/assets/application-f75735f5491078c7be55e653e6bbd242c88aaf155bc1fc4559cce30f0bfa0d8c.css ; media=all */
@media all{
a:focus{outline:thin dotted;}
a:active,a:hover{outline:0;}
h1{font-size:2em;margin:0.67em 0;}
strong{font-weight:700;}
img{border:0;}
svg:not(:root){overflow:hidden;}
input,textarea{font-family:inherit;font-size:100%;margin:0;padding:0;}
input{line-height:normal;}
input[type="submit"]{-webkit-appearance:button;cursor:pointer;border-radius: 20px;width: 50%;}
input[type="checkbox"]{box-sizing:border-box;padding:0;}
input::-moz-focus-inner{border:0;padding:0;}
textarea{overflow:auto;vertical-align:top;}
.row{margin-left:-12px;margin-right:-12px;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before,.row:after{content:" ";display:table;}
.row:after{clear:both;}
.row:before{content:none;}
.row:after{content:'';}
.col-sm-4,.col-sm-6,.col-sm-8,.col-md-9,.col-xs-12{position:relative;min-height:1px;padding-left:12px;padding-right:12px;}
.col-xs-12{width:100%;}
@media (min-width: 768px){
.col-sm-4,.col-sm-6,.col-sm-8{float:left;}
.col-sm-8{width:66.66666667%;}
.col-sm-6{width:50%;}
.col-sm-4{width:33.33333333%;}
}
@media (min-width: 992px){
.col-md-9{float:left;}
.col-md-9{width:75%;}
}
.hide{display:none!important;}
.margin-bottom{margin-bottom:24px;}
*,*:before,*:after{box-sizing:border-box;}
input,textarea{font-family:inherit;font-size:inherit;line-height:inherit;letter-spacing:inherit;}
a{color:#767676;text-decoration:underline;-webkit-transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:color 0.1s ease-in-out, fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover,a:focus{color:#111111;}
a:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.icon{display:inline-block;vertical-align:middle;fill:#111111;line-height:1;speak:none;text-decoration:inherit;width:18px;height:18px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-transition:fill 0.1s ease-in-out;transition:fill 0.1s ease-in-out;}
a .icon{fill:#767676;text-decoration:none!important;-webkit-transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;transition:fill 0.1s ease-in-out, opacity 0.1s ease-in-out;}
a:hover .icon,a:focus .icon{fill:#111111;}
img{vertical-align:middle;}
.upload-circular__image{display:block;width:100%;height:auto;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch:before,.arch:after{content:" ";display:table;}
.arch:after{clear:both;}
.arch .arch-left{float:none;text-align:left;}
.arch .arch-right{float:none;text-align:left;}
@media (min-width: 768px){
.arch .arch-left{float:left!important;}
.arch .arch-right{float:right!important;text-align:right;}
}
label{display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:baseline;-webkit-align-items:baseline;-ms-flex-align:baseline;align-items:baseline;max-width:100%;margin-bottom:6px;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;}
label span{margin-left:4px;margin-right:4px;}
input[type="checkbox"]{margin:5px 8px 0 0;margin-top:1px \9;line-height:normal;-webkit-transform:translateY(1px);-ms-transform:translateY(1px);transform:translateY(1px);}
input[type="file"]{display:block;}
input[type="file"]:focus,input[type="checkbox"]:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.form-control{display:block;width:100%;height:40px;padding:6px 12px;font-size:15px;line-height:1.6;color:#111111;background-color:transparent;background-image:none;border:1px solid #767676;border-radius:3px;-webkit-transition:border-color ease-in-out 0.15s;transition:border-color ease-in-out 0.15s;}
.form-control:focus{border-color:#111111;outline:0;}
.form-control::-moz-placeholder{color:#767676;opacity:1;}
.form-control:-ms-input-placeholder{color:#767676;}
.form-control::-webkit-input-placeholder{color:#767676;}
textarea.form-control{height:auto;resize:vertical;min-height:40px;}
.input-with-counter{position:relative;}
.input-with-counter textarea{resize:none;}
.input-with-counter .character-count{position:absolute;right:10px;font-size:12px;color:#767676;pointer-events:none;}
.input-with-counter .character-count--textarea{bottom:8px;}
.form-group{margin-bottom:24px;}
.form-group .input-group{display:inline-table;width:100%;}
.form-group .input-group .input-group-addon,.form-group .input-group .form-control{display:table-cell;}
.form-group .input-group .input-group-addon{text-align:center;border:1px solid #767676;border-right:0;border-top-left-radius:3px;border-bottom-left-radius:3px;}
.form-group .input-group .input-group-addon+input{border-top-left-radius:0;border-bottom-left-radius:0;}
.checkbox{position:relative;display:block;margin-bottom:16px;}
.checkbox label{min-height:18px;margin-bottom:0;font-weight:normal;cursor:pointer;line-height:1.5;}
.checkbox--with-helper{display:inline-block;margin-bottom:24px;}
.label__helper{margin-top:4px;margin-left:20px;font-size:13px;display:block;}
.help-block{display:block;color:currentColor;}
.help-block p{font-size:13px;line-height:1.6;margin-top:8px;}
h1,h6{font-size:22px;font-weight:400;margin:0 0 16px;padding:0;}
.delta{font-size:16px;}
@media (min-width: 768px){
.delta{font-size:18px;}
}
.zeta{font-size:13px;line-height:18px;}
p{font-size:15px;font-weight:400;line-height:1.6;margin:16px 0;}
.text-left{text-align:left!important; font-family: 'Montserrat', sans-serif;}
.text-center{text-align:center!important;}
.text-weight--bold{font-weight:700;}
.text-weight--medium{font-weight:500;}
.link--no-underline{text-decoration:none!important;}
.text-secondary{color:#767676;}
.btn{display:inline-block;margin-bottom:0;text-align:center;vertical-align:middle;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;text-decoration:none;box-shadow:0 1px 4px rgba(0,0,0,0.02),0 1px 1px rgba(0,0,0,0.06);padding:9px 18px;font-size:15px;line-height:1.6;border-radius:4px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;transition:background-color 0.1s ease-in-out, border-color 0.1s ease-in-out, color 0.1s ease-in-out;}
.btn:focus,.btn:active:focus{outline:thin dotted #333;outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
.btn:hover,.btn:focus{color:#ffffff;text-decoration:none;}
.btn:active{outline:0;background-image:none;}
.btn-default{color:#ffffff;background-color:#8a4711;}
.btn-default:hover,.btn-default:active{background-color:#D86000;}
.btn-block-level{width:100%;}
@media screen and (max-width: 768px)
    {
        .btn-block-level{width: 262px!important;}
        .text-right{text-align: center !important;}

    }
    .sub{text-align: center !important;}

.pill{height:24px;border-radius:24px;display:-webkit-inline-box;display:-webkit-inline-flex;display:-ms-inline-flexbox;display:inline-flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;font-size:13px;line-height:1;padding-right:12px;padding-left:12px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;text-decoration:none;background-color:#eaeaea;color:#767676;}
a .pill,a:hover .pill{text-decoration:none;}
.pill .icon{padding-right:3px;margin-left:-3px;fill:#767676;}
a .pill .icon,a:hover .pill .icon{fill:#767676;}
.pill--default{background-color:#5e5e5e;color:#ffffff;}
.pill--default .icon{fill:#ffffff;}
a .pill--default .icon,a:hover .pill--default .icon{fill:#ffffff;}
.tagsinput{overflow-y:auto;padding:6px 6px 1px;border:1px solid #767676;border-radius:3px;min-height:40px!important;}
.tagsinput:hover{cursor:text;}
.tagsinput input{width:80px;margin:0px;font-size:14px;border:1px solid transparent;background:transparent;color:#111111;outline:0px;margin-right:5px;}
.tagsinput div{display:block;float:left;}
.tags_clear{clear:both;width:100%;height:0px;}
.upload-circular-container{display:inline-block;}
.upload-circular{position:relative;border-radius:50%;width:128px;height:128px;margin:auto;overflow:hidden;}
.upload-circular__image--large{width:128px;height:128px;}
.upload-circular__progress{position:absolute;height:128px;top:0;width:0;background-color:#3cb46e;opacity:0.3;-webkit-transition:width 0.3s ease-in-out;transition:width 0.3s ease-in-out;}
.user-badges{margin-top:7px;}
.user-badges-container{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;min-height:50px;}
.no-badge-message{margin-top:6px;margin-bottom:6px;}
.user-badges-list{margin:0;list-style:none;padding:0;background:#ffffff;border:1px solid #d1d1d1;border-radius:3px;box-shadow:2px 2px 6px rgba(0,0,0,0.12);position:absolute;width:100%;font-size:0;z-index:2;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;top:0;left:-8px;-webkit-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;opacity:1;-webkit-transform:scale(1) translate(0);-ms-transform:scale(1) translate(0);transform:scale(1) translate(0);visibility:visible;}
.user-badges-list--hidden{opacity:0;-webkit-transform:scale(0.8) translate(-5%, -5%);-ms-transform:scale(0.8) translate(-5%, -5%);transform:scale(0.8) translate(-5%, -5%);visibility:hidden;}
@media (max-width: 767px){
.user-badges-list--hidden{display:none;}
}
@media (max-width: 767px){
.user-badges-list{position:relative;}
}
.user-badges-list__item{display:inline-block;}
.user-badges-list__item a{display:inline-block;padding:8px;}
.user-badges-list__item a:hover{background-color:#eeeeee;}
.user-badges-list__item--text{font-size:12px;line-height:32px;}
}
</style>


<style media="screen">
.profile-bg-picture {
background: linear-gradient(rgba(34, 34, 34, 0.7), rgba(34, 34, 34, 0.7)), url(../img/blog/13.jpg) no-repeat center center fixed;
background-position: center center;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-attachment: scroll;
color: #fff;
height: 55vh;
display: flex;
align-items: center;
justify-content: center;
}
</style>

<!--user-section-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
small{font-size:80%;}
img{border-style:none;}
button{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,html [type="button"]{-webkit-appearance:button;}
button::-moz-focus-inner,[type="button"]::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring,[type="button"]:-moz-focusring{outline:1px dotted ButtonText;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;}
button{-ms-touch-action:manipulation;touch-action:manipulation;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button{line-height:inherit;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
small{font-size:80%;font-weight:normal;}
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
.col-sm-6{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
@media (min-width: 576px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 768px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 992px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 1200px){
.col-sm-6{padding-right:15px;padding-left:15px;}
}
@media (min-width: 576px){
.col-sm-6{-webkit-box-flex:0;-webkit-flex:0 0 50%;-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%;}
}
.btn{display:inline-block;font-weight:normal;line-height:1.25;text-align:center;white-space:nowrap;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;border:1px solid transparent;padding:0.5rem 1rem;font-size:1rem;border-radius:0.25rem;-webkit-transition:all 0.2s ease-in-out;-o-transition:all 0.2s ease-in-out;transition:all 0.2s ease-in-out;}
.btn:focus,.btn:hover{text-decoration:none;}
.btn:focus{outline:0;-webkit-box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);box-shadow:0 0 0 2px rgba(2, 117, 216, 0.25);}
.btn:disabled{cursor:not-allowed;opacity:.65;}
.btn:active{background-image:none;}
.btn-success{color:#fff;background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:hover{color:#fff;background-color:#449d44;border-color:#419641;}
.btn-success:focus{-webkit-box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);box-shadow:0 0 0 2px rgba(92, 184, 92, 0.5);}
.btn-success:disabled{background-color:#5cb85c;border-color:#5cb85c;}
.btn-success:active{color:#fff;background-color:#449d44;background-image:none;border-color:#419641;}
.media-body{-webkit-box-flex:1;-webkit-flex:1 1 0%;-ms-flex:1 1 0%;flex:1 1 0%;}
.text-right{text-align:right;}
.text-muted{color:#636c72!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.pull-left{float:left;}
.fa-user:before{content:"\f007";}
div,span,h4,p,img,small,i,section{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
small{font-size:80%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.user-section .profile-user-box{background-color:#ffffff;padding:20px;border:1px solid #e2e2e2;position:relative;top:-50px;border-radius:5px;align-self:flex-end;}
.user-section .m-r-15{margin-right:15px!important;}
.user-section .pull-left{float:left!important;}
.user-section .thumb-lg{height:88px;width:88px;}
.user-section .media-body{display:table-cell;vertical-align:top;}
.user-section .media-body{width:10000px;}
.user-section .media-body h4{font-family:'Montserrat', sans-serif;font-size:23px!important;color:#1ab394;}
.user-section .media-body p{font-family:'Montserrat', sans-serif;}
.user-section .m-b-0{margin-bottom:0!important;}
.user-section .btn-success{font-family:'Montserrat', sans-serif;font-size:14px!important;background-color:#D86000
!important;border:1px solid #D86000!important;}
.user-section .m-r-5{margin-right:5px!important;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>



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
p{font-family:'Montserrat', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
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

</style>

@include('includes.user_header')


<section style="margin: 5rem;">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="arch">
                <div class="arch-left">
                    <h1 class="margin-bottom delta text-weight--bold">Modifier votre profil</h1>
                </div> <!-- close .arch-left -->
                {{--
                <div class="arch-right">
                    <a href="https://help.unsplash.com/en/articles/3314707-why-do-i-need-to-confirm-my-account" class="link--no-underline">
                        <span class="pill pill--default"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" enable-background="new 0 0 24 24" class="icon">
                                <style type="text/css">
                                    .st1 {
                                        display: inline;
                                    }

                                    .st2 {
                                        fill: none;
                                    }

                                    .st3 {
                                        fill-rule: evenodd;
                                        clip-rule: evenodd;
                                    }
                                </style>
                                <path d="M12 2c-5.5 0-10 4.5-10 10s4.5 10 10 10 10-4.5 10-10-4.5-10-10-10zm4.2 14.1l-5.2-3.1v-6h1v5.2l4.8 2.7-.6 1.2z" height="24"></path>
                            </svg>
                            Confirmation pending</span>
                    </a>
                </div> <!-- close .arch-right -->
                --}}
            </div> <!-- close .arch -->




            <div class="form">
                <form class="edit_user" id="edit_user_4646744" action="/account" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden" name="authenticity_token"
                      value="bbMpoxP1932DrraVaAHqotMDQPc9PUdxreNo+yo7XlbAHHleLhFJvhDoyb4j7eZwkYurin1SkD6zUWoZozEtDg==">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 text-center">
                            <a id="openimgupload" class="upload-circular-container profile-image-container js-general-uploader-pseudo-file-field">
                                <div id="uploaded_image" class="upload-circular">
                                    <img sizes="128px"
                                      class="upload-circular__image upload-circular__image--large js-general-uploader-new-upload-target"
                                      src="/storage/images/users/{{Auth::user()->image}}">
                                    <div class="upload-circular__progress js-general-uploader-progress-target">
                                    </div> <!-- close .__progress -->
                                </div> <!-- close .upload-circular -->

                                <p class="text-center zeta js-edit-profile-image-trigger-text">Modifier l'image de profil</p>
                                <input id="imgupload" hidden type="file" accept="image/jpeg,image/png">
                                <input hidden type="text" name="user_id" value="{{Auth::user()->id}}">
                            </a> <!-- close .js -->

                            <div class="user-badges text-left">

                                <div class="form-group">
                                <label for="user_username">
                                    Nom d'utilisateur <span class="text-secondary"></span>
                                </label>
                                <input class="form-control" type="text" value="daviidy" name="user[username]" id="user_username">

                                <div class="help-block text-secondary">
                                    <p>https://unsplash.com/@<strong>{{Auth::user()->name}}</strong></p>
                                </div> <!-- close .help-block -->
                            </div>
                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-8">
                            <div class="form-group">
                                <label for="user_first_name">Nom de famille</label>
                                <input class="form-control" type="text" value="David" name="user[first_name]" id="user_first_name">

                            </div> <!-- close .form-group -->

                            <div class="form-group">
                                <label for="user_last_name">Prénoms</label>
                                <input class="form-control" type="text" value="Yao" name="user[last_name]" id="user_last_name">

                            </div> <!-- close .form-group -->
                            <div class="form-group">
                                <label for="user_last_name">Autre Nom</label>
                                <input class="form-control" type="text" value="Yao" name="user[last_name]" id="user_last_name">

                            </div>

                            <div class="form-group">
                                <label for="user_email">
                                    Email address
                                </label>
                                <input class="form-control" type="email" value="yaodavidarmel@gmail.com" name="user[email]" id="user_email">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->

                    <!--div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="user_username">
                                    Username <span class="text-secondary">(only letters, numbers, and underscores)</span>
                                </label>
                                <input class="form-control" type="text" value="daviidy" name="user[username]" id="user_username">

                                <div class="help-block text-secondary">
                                    <p>https://unsplash.com/@<strong>daviidy</strong></p>
                                </div> <!-- close .help-block ->
                            </div> <!-- close .form-group ->
                        </div--> <!-- close .col -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays de naissance
                                </label>
                                <input class="form-control" placeholder="Pays de naissance" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Etat de naissance
                                </label>
                                <input class="form-control" placeholder="Etat de naissance" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de naissance
                                </label>
                                <input class="form-control" placeholder="Ville de naissance" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville
                                </label>
                                <input class="form-control" placeholder="Ville" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays de résidence
                                </label>
                                <input class="form-control" placeholder="Pays de résidence" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de résidence
                                </label>
                                <input class="form-control" placeholder="Ville de résidence" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Etat de résidence
                                </label>
                                <input class="form-control" placeholder="Etat de résidence" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Code Postal
                                </label>
                                <input class="form-control" placeholder="Code Postal" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Situation matrimonial
                                </label>
                                <input class="form-control" placeholder="Situation matrimonial" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfant
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <label for="user_url">
                                    Numéro de téléphone
                                </label>
                                <input class="form-control" placeholder="Numéro de téléphone" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                        <!--Father-->

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                            	<hr>
                                <h1 for="user_url" style="text-align: center;">
                                    Profil du père
                                </h1>
                                <hr>

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                            <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nom du père
                                </label>
                                <input class="form-control" placeholder="Nom du père" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Prénoms du père
                                </label>
                                <input class="form-control" placeholder="Prénoms du père" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Autre noms du père
                                </label>
                                <input class="form-control" placeholder="Autre noms du père" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays de résidence du père
                                </label>
                                <input class="form-control" placeholder="Pays de résidence du père" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de résidence du père
                                </label>
                                <input class="form-control" placeholder="Ville de résidence du père" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfant du père
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant du père" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <!--End Father-->

                        <!--Mother-->



                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                            	<hr>
                                <h1 for="user_url" style="text-align: center;">
                                    Profil de la mère
                                </h1>
                                <hr>

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->


                            <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nom de la mère
                                </label>
                                <input class="form-control" placeholder="Nom de la mère" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Prénoms de la mère
                                </label>
                                <input class="form-control" placeholder="Prénoms de la mère" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Autre noms de la mère
                                </label>
                                <input class="form-control" placeholder="Autre noms de la mère" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Pays de résidence de la mère
                                </label>
                                <input class="form-control" placeholder="Pays de résidence de la mère" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Ville de résidence de la mère
                                </label>
                                <input class="form-control" placeholder="Ville de résidence de la mère" type="text" name="user[url]" id="user_url">

                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="user_url">
                                    Nombre d'enfant de la mère
                                </label>
                                <input class="form-control" placeholder="Nombre d'enfant de la mère" type="text" name="user[url]" id="user_url">



                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->

                        <!--End mother-->

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group sub">
                                <input type="submit" name="commit" value="Enregistrez les modifications" class="btn btn-default btn-block-level" data-disable-with="···">
                            </div> <!-- close .form-group -->
                        </div> <!-- close .col -->
                    </div> <!-- close .row -->
                </form>
            </div> <!-- close .form -->

            <div class="hide">
                <form action="" class="js-general-uploader-s3-form js-edit-profile-image-s3-form" data-callback-method="POST" data-callback-param="file" enctype="multipart/form-data">
                    <input type="file" name="file" id="file" class="js-general-uploader-s3-file-field">
                </form>

                <form class="js-edit-profile-image-form" action="/account/profile_image" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="_method" value="put"><input type="hidden"
                      name="authenticity_token" value="bbMpoxP1932DrraVaAHqotMDQPc9PUdxreNo+yo7XlbAHHleLhFJvhDoyb4j7eZwkYurin1SkD6zUWoZozEtDg==">

                    <div class="hide js-general-uploader-form">
                    </div>

                    <input type="submit" name="commit" value="Save" class="js-general-uploader-form-submit" data-disable-with="Save">
                </form>
            </div> <!-- close .hide -->

            <script class="js-general-uploader-form-template" type="text/x-tmpl">
                <input name="profile_image[url]" id="profile_image_url" type="text" value="<%= file.url %>">
          <input name="profile_image[filetype]" id="profile_image_filetype" type="text" value="<%= file.filetype %>">
          <input name="profile_image[filepath]" id="profile_image_filesize" type="text" value="<%= file.filepath %>">
          <input name="profile_image[filesize]" id="profile_image_filesize" type="text" value="<%= file.filesize %>">
        </script>


        </div>

    </div>
</section>



<script type="text/javascript">

$('#openimgupload').click(function(){ $('#imgupload').trigger('click'); });

</script>

<script>
$(document).ready(function(){
 $(document).on('change', '#imgupload', function(){
  var name = document.getElementById("imgupload").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("imgupload").files[0]);
  var f = document.getElementById("imgupload").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
      form_data.append("image", document.getElementById('imgupload').files[0]);
      form_data.append("id_user", $('input[name=user_id]').val());

      $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });

   $.ajax({
    url:"/uploadAvatar",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },
    success:function(data)
    {
        console.log('ok');
     $('#uploaded_image').html('<img sizes="128px" class="upload-circular__image upload-circular__image--large js-general-uploader-new-upload-target" src="/storage/images/users/'+data.image+'" alt="'+data.name+'">');
 },
 error: function (xhr, msg) {
     console.log($('input[name=user_id]').val());
   console.log(msg + '\n' + xhr.responseText);
}
   });
  }
 });
});
</script>


@include('includes.project_event');

@endsection

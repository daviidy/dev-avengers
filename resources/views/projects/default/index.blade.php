@extends('layouts.menu')
@section('title', 'Liste des businesses')

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

</style>




<!--style achat et vente-->

<style media="screen">
/*! CSS Used from: http://localhost:8000/assets/main_theme/medium/bower_components/bootstrap/dist/css/bootstrap.css */
section{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
svg:not(:root){overflow:hidden;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,li::first-letter,p::first-line,div::first-line,li::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
address{margin-bottom:1rem;font-style:normal;line-height:inherit;}
ul{margin-top:0;margin-bottom:1rem;}
ul ul{margin-bottom:0;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
.card{position:relative;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:#fff;border:1px solid rgba(0, 0, 0, 0.125);border-radius:0.25rem;}
/*! CSS Used from: http://localhost:8000/assets/main_theme/medium/css/app.css */
div,span,h4,p,a,address,img,section,time{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;font-family:'Montserrat', sans-serif;}
section{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active{text-decoration:none;outline:0;color:#D86000!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
ul{margin:0;}
ul{list-style:none outside;}
ul ul li{line-height:24px;}
li{line-height:24px;}
li p{line-height:24px;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.card{margin-bottom:30px;margin-right:10px;margin-left:10px;border-radius:10px!important;box-shadow:0 1px 5px rgba(49, 58, 70, 0.4);}
.card a{text-decoration:none!important;color:inherit;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
/*! CSS Used from: Embedded ; media=screen */
@media screen{
a,span,time{display:inline;}
p,section,ul{display:block;margin:0;padding:0;}
img{border:0;display:block;line-height:0;margin:0;padding:0;}
li{margin:0;padding:0;}
section{display:block;}
address{display:inline;font-style:normal;}
h4{font-size:16px;margin:0;padding:0;}
a{color:inherit;text-decoration:none;}
.bounds{-webkit-box-sizing:border-box;box-sizing:border-box;margin-left:auto;margin-right:auto;max-width:840px;width:100%;}
.bounds--wide{max-width:1100px;}
.chunk{display:block;padding-bottom:16px!important;padding-bottom:var(--responsive-space);}
@media only screen and (min-width:840px){
.chunk{padding-bottom:20px!important;padding-bottom:var(--responsive-space)!important;}
}
@media only screen and (min-width:640px){
.chunk{padding-bottom:18px!important;padding-bottom:var(--responsive-space);}
}
.flex{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
.flex,.flex-item{-webkit-box-sizing:border-box;box-sizing:border-box;}
.flex-item{-ms-flex-preferred-size:0;flex-basis:0;-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;width:auto;min-width:0;padding-left:16px;padding-left:var(--responsive-space);}
@media only screen and (min-width:840px){
.flex-item{padding-left:20px;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.flex-item{padding-left:18px;padding-left:var(--responsive-space);}
}
.flex-item:first-child{padding-left:0;}
.flex--row{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;}
.flex--row>.flex-item{padding-left:16px!important;padding-left:var(--responsive-space);width:auto;}
@media only screen and (min-width:840px){
.flex--row>.flex-item{padding-left:20px!important;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.flex--row>.flex-item{padding-left:18px!important;padding-left:var(--responsive-space);}
}
.flex--row>.flex-item:first-child{padding-left:0!important;}
.flex--column{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;height:100%;}
.flex--column>.flex-item{-ms-flex-preferred-size:auto;flex-basis:auto;padding-left:0;width:100%;}
.flex>.flex-item--shrink{-ms-flex-preferred-size:auto;flex-basis:auto;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;width:auto;}
.flex--noGutters>.flex-item,.flex--noGutters>.flex-item:first-child,.flex--noGutters>.flex-item:last-child{padding:0;}
.flex--flexEnd{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;}
.flex--spaceBetween{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
.flex--alignCenter{-webkit-box-align:center;-ms-flex-align:center;align-items:center;}
.section{margin:0 16px;padding:32px 0 0!important;}
@media only screen and (min-width:840px){
.section{padding:40px 0 0;}
}
@media only screen and (min-width:640px){
.section{padding:36px 0 0;}
}
@media only screen and (min-width:840px){
.section{margin:0 20px;}
}
@media only screen and (min-width:640px){
.section{margin:0 18px;}
}
.hscrollGradient--hidden:before{display:none;}
.hscroll{-webkit-overflow-scrolling:touch;-ms-overflow-style:scrollbar;overflow-x:scroll;}
.hscroll::-webkit-scrollbar{display:none!important;}
.hscroll-content{-webkit-box-sizing:content-box;box-sizing:content-box;white-space:nowrap;}
.gridList{font-size:0;list-style:none;margin:0 -16px 0 0;padding:0;}
.gridList-item{-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;font-size:1rem;margin:0;vertical-align:top;width:50%;}
.gridList-itemInner{-webkit-box-sizing:border-box;box-sizing:border-box;height:100%;padding:0 16px 16px 0;}
.gridList--autoHeight{margin-left:-16px;margin-left:calc(var(--responsive-space)*-1);}
@media only screen and (min-width:840px){
.gridList--autoHeight{margin-left:-20px;margin-left:calc(var(--responsive-space)*-1);}
}
@media only screen and (min-width:640px){
.gridList--autoHeight{margin-left:-18px;margin-left:calc(var(--responsive-space)*-1);}
}
.gridList--autoHeight>.gridList-item{width:auto;}
.gridList--autoHeight:first-child{padding-left:16px;padding-left:var(--responsive-space);}
@media only screen and (min-width:840px){
.gridList--autoHeight:first-child{padding-left:20px;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.gridList--autoHeight:first-child{padding-left:18px;padding-left:var(--responsive-space);}
}
.gridList--autoHeight--has3>.gridList-item{-webkit-box-flex:0;-ms-flex:0 0 33.33333%;flex:0 0 33.33333%;max-width:33.33333%;}
.hscroll-content{margin:0;padding:0;}
.avatar--person{background-color:#e4e9ed;background-position:center 42%;color:transparent;display:inline-block;font-size:0;height:36px!important;height:var(--responsiveMedia-m);position:relative;text-indent:100%;vertical-align:top;white-space:nowrap;width:36px!important;width:var(--responsiveMedia-m);}
@media only screen and (min-width:840px){
.avatar--person{width:45px!important;width:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatar--person{width:40px!important;width:var(--responsiveMedia-m);}
}
@media only screen and (min-width:840px){
.avatar--person{height:45px!important;height:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatar--person{height:40px!important;height:var(--responsiveMedia-m);}
}
.avatar{background-position:center 42%;color:transparent;display:inline-block;font-size:0;height:36px;position:relative;text-indent:100%;vertical-align:top;white-space:nowrap;width:36px;}
@media only screen and (min-width:840px){
.avatar{width:45px!important;width:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatar{width:40px!important;width:var(--responsiveMedia-m);}
}
@media only screen and (min-width:840px){
.avatar{height:45px!important;height:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatar{height:40px!important;height:var(--responsiveMedia-m);}
}
.avatar-print{display:none;speak:none;}
@media print{
.avatar-print{display:block;width:100%;}
}
.avatar--small{height:24px!important;height:var(--responsiveMedia-s);width:24px;width:var(--responsiveMedia-s);}
@media only screen and (min-width:840px){
.avatar--small{width:30px!important;width:var(--responsiveMedia-s);}
}
@media only screen and (min-width:640px){
.avatar--small{width:27px!important;width:var(--responsiveMedia-s);}
}
@media only screen and (min-width:840px){
.avatar--small{height:30px!important;height:var(--responsiveMedia-s);}
}
@media only screen and (min-width:640px){
.avatar--small{height:27px!important;height:var(--responsiveMedia-s);}
}
.avatar--person{border-radius:999px;-webkit-box-sizing:border-box;box-sizing:border-box;vertical-align:middle;}
.avatar--noPhoto{background-color:#d2dae1;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;position:relative;text-indent:0;}
.avatar--noPhoto,.avatarIcon--noPhoto{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;}
.avatarIcon--noPhoto{height:100%;width:100%;}
.avatarIcon--noPhoto svg{height:40%;opacity:.6;width:40%;}
.card{background:#fff;background-clip:padding-box;background-size:cover;border:1px solid rgba(46,62,72,.12);border-radius:8px;-webkit-box-sizing:border-box;box-sizing:border-box;display:block;min-height:160px;padding:16px 16px 0!important;padding:var(--responsive-space) var(--responsive-space) 0;position:relative;white-space:normal;}
@media only screen and (min-width:840px){
.card{padding:20px 20px 0!important;padding:var(--responsive-space) var(--responsive-space) 0;}
}
@media only screen and (min-width:640px){
.card{padding:18px 18px 0!important;padding:var(--responsive-space) var(--responsive-space) 0;}
}
.card--hasHoverShadow{-webkit-transition:-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);transition:-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);transition:box-shadow .25s cubic-bezier(.4,0,.2,1),transform .25s cubic-bezier(.4,0,.2,1);transition:box-shadow .25s cubic-bezier(.4,0,.2,1),transform .25s cubic-bezier(.4,0,.2,1),-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);}
.card--hasHoverShadow:focus,.card--hasHoverShadow:hover{-webkit-box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);-webkit-transform:translateY(-1px);transform:translateY(-1px);}
.card--hasHoverShadow:focus,.card--hasHoverShadow:hover{-webkit-box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);-webkit-transform:translateY(-1px);transform:translateY(-1px);}
.svg{display:inline-block;}
.svg-icon{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;font-size:0;position:relative;vertical-align:bottom;}
.svg-icon{stroke:transparent;fill:rgba(46,62,72,.6);}
.svg-icon use{pointer-events:none;}
.hscroll{overflow-y:hidden;}
.card{position:static;}
.text--primary{color:#2e3e48;}
.padding--left-half{padding-left:8px;padding-left:calc(var(--responsive-space)/2);}
@media only screen and (min-width:840px){
.padding--left-half{padding-left:10px;padding-left:calc(var(--responsive-space)/2);}
}
@media only screen and (min-width:640px){
.padding--left-half{padding-left:9px;padding-left:calc(var(--responsive-space)/2);}
}
.link{cursor:pointer;}
.text--ellipsisTwoLines{white-space:normal;-webkit-line-clamp:2;line-height:1.45!important;max-height:2.8em;}
.text--ellipsisTwoLines{display:-webkit-box;overflow:hidden;text-overflow:ellipsis;-webkit-box-orient:vertical;}
.avatarRow-item{height:56px;width:56px;margin-right:8px;}
@media only screen and (min-width:640px){
.avatarRow-item{height:72px;width:72px;margin-right:8px;}
}
.avatarRow--stacked{padding-top:36px;padding-top:var(--responsiveMedia-m);}
@media only screen and (min-width:840px){
.avatarRow--stacked{padding-top:45px;padding-top:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatarRow--stacked{padding-top:40px;padding-top:var(--responsiveMedia-m);}
}
.avatarRow--stacked .avatarRow-item{position:relative;margin-left:-16px;}
.avatarRow--stacked .avatarRow-item:first-child{margin-left:0;}
.avatarRow--stacked .avatarRow-item .avatar{border:2px solid #fff;}
.eventCard{position:relative;min-width:330px;}
.eventCard--link{position:absolute;top:0;bottom:0;left:0;right:0;}
.eventCard--clickable a{position:relative;z-index:1;}
.eventCard .eventCardHead--title{line-height:1.2;}
.eventCard .eventCardHead--groupName{color:#212121;color:var(--color-gray-7);}
.eventCard--attendeesLink .avatarRow-item{margin-right:0;}
.eventCard--attendeesLink .avatarRow-item:not(:first-child){margin-left:-8px;}
.eventCard--attendeesLink .avatarRow--attendingCount:not(:first-child){margin-left:8px;}
.eventCard--attendeesLink .avatar--person{border:1px solid #fff;}
.relatedEvents .gridList-item{min-width:330px;white-space:normal;}
.relatedEvents .eventCard{height:100%;min-width:240px;}
.avatar,.avatar--person{background-repeat:no-repeat;background-position:50%;background-size:cover;}
.buttonPersonality{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;text-decoration:none!important;}
.bounds,.chunk{*zoom:1;}
.bounds:after,.bounds:before,.chunk:after,.chunk:before{content:" ";display:table;}
.bounds:after,.chunk:after{clear:both;}
ul{margin-left:0;padding-left:0;list-style-type:none;}
.text--sectionTitle{color:#2e3e48;font-weight:600;line-height:1.1;}
.text--sectionTitle{stroke:transparent;fill:#2e3e48;}
.text--sectionTitle{font-size:20px;line-height:1.45;}
.text--labelSecondary{color:#2e3e48;font-size:14px;font-weight:600;line-height:1.6;letter-spacing:-.02em;word-spacing:.1em;}
.text--labelSecondary{stroke:transparent;fill:#2e3e48;}
.text--labelSecondary{color:rgba(46,62,72,.6);font-weight:500;}
.text--labelSecondary{stroke:transparent;fill:rgba(46,62,72,.6);}
.text--bold{font-weight:500!important;}
.text--secondary{color:rgba(46,62,72,.6);}
.text--secondary,.text--secondary svg{stroke:transparent;fill:rgba(46,62,72,.6);}
.text--small{font-size:14px;line-height:1.6;}
.link,a.link{color:#00a2c7;text-decoration:none;}
.link,a.link{stroke:transparent;fill:#00a2c7;}
.link:link{text-decoration:none;}
.link:active,.link:focus,.link:hover{text-decoration:underline;}
.valign--middle{-ms-flex-item-align:center;align-self:center;vertical-align:middle!important;}
.border--top{border-top:1px solid rgba(46,62,72,.12);}
.border--none{border-width:0!important;}
.display--inline{display:inline;}
.display--inlineFlex{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;}
ul{list-style:none;padding-left:0;}
.margin--top{margin-top:16px;margin-top:var(--responsive-space);}
@media only screen and (min-width:840px){
.margin--top{margin-top:20px;margin-top:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.margin--top{margin-top:18px;margin-top:var(--responsive-space);}
}
.margin--halfBottom{margin-bottom:8px;}
.padding--top{padding-top:16px;padding-top:var(--responsive-space);}
@media only screen and (min-width:840px){
.padding--top{padding-top:20px;padding-top:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.padding--top{padding-top:18px;padding-top:var(--responsive-space);}
}
.padding--right{padding-right:16px;padding-right:var(--responsive-space);}
@media only screen and (min-width:840px){
.padding--right{padding-right:20px;padding-right:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.padding--right{padding-right:18px;padding-right:var(--responsive-space);}
}
.padding--left{padding-left:16px;padding-left:var(--responsive-space);}
@media only screen and (min-width:840px){
.padding--left{padding-left:20px;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.padding--left{padding-left:18px;padding-left:var(--responsive-space);}
}
.padding--bottom{padding-bottom:16px!important;padding-bottom:var(--responsive-space);}
@media only screen and (min-width:840px){
.padding--bottom{padding-bottom:20px!important;padding-bottom:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.padding--bottom{padding-bottom:18px!important;padding-bottom:var(--responsive-space);}
}
.padding--none{padding:0;}
.wrap--singleLine--truncate{white-space:nowrap!important;}
.wrap--singleLine--truncate{overflow:hidden!important;text-overflow:ellipsis!important;}
.visibility--a11yHide{border:0;clip:rect(0 0 0 0);position:absolute;overflow:hidden;margin:-1px;padding:0;width:1px;height:1px;}
h4{font-size:var(--font-size-normal);margin:0;padding:0;}
a,span,time{display:inline;}
p,section,ul{display:block;margin:0;padding:0;}
img{border:0;display:block;line-height:0;margin:0;padding:0;}
li{margin:0;padding:0;}
section{display:block;}
address{display:inline;font-style:normal;}
.text--sectionTitle{color:var(--color-gray-7);}
.text--secondary{color:var(--color-gray-6);}
.link,a.link{color:var(--color-viridian);}
.text--small{font-size:var(--font-size-small);line-height:var(--font-line-height-small);}
.color-viridian{color:#0098ab;}
[data-swarm-button]{display:inline-flex;flex-direction:row;justify-content:center;align-items:center;transition:background .15s;-webkit-appearance:none;border-radius:5px;box-sizing:border-box;font-size:var(--font-size-small);font-weight:var(--font-weight-regular);line-height:var(--font-line-height-small);outline:0;padding:10px;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;text-decoration:none!important;}
[data-swarm-button=default]:active,[data-swarm-button=default]:focus{border:1px solid #D86000;}
[data-swarm-button=default]:hover{background-color:#D86000;color:#fff!important;fill:var(--color-white);}
[data-swarm-button=default]{background-color:var(--color-white);border:1px solid #D86000;color:var(--color-viridian);fill:var(--color-viridian);}
[data-swarm-button]>span{display:inline-flex;justify-content:center;align-items:center;}
[data-swarm-icon]{fill:var(--color-gray-7);}
[data-swarm-width=grow]{width:100%;}
}

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
                        <a class="nav-link active" href="#projects" role="tab" data-toggle="tab" aria-expanded="true">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#business" role="tab" data-toggle="tab" aria-expanded="false">Achats et vente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#myProjects" role="tab" data-toggle="tab" aria-expanded="false">Mes business</a>
                    </li>
                </ul>
                <br><br>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active show" id="projects" aria-expanded="true">
                        @foreach($projects->where('type', 'Projet') as $project)
                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            @if($project->user->image !== 'image.jpg')
                                                <img class="media-object rounded-circle" src="/storage/images/users/{{$project->user->image}}" alt="">
                                            @else
                                                <img class="media-object rounded-circle" src="https://comman-ya.oschoolelearning.com/images/users/default/image.jpg" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{url('projects', $project)}}">
                                        <h4 class="media-heading">{{$project->name}}</h4>
                                        </a>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Auteur: {{$project->user->name}}</p>
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
                                            @if($project->sector !== null)
                                            <div class="info-group">
                                                <label>Secteur</label>
                                                {{$project->sector}}
                                            </div>
                                            @endif
                                            @if($project->price !== null)
                                            <div class="info-group">
                                                <label>Prix</label>
                                                {{$project->price}} FCFA
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                {{$project->user->email}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Téléphone</label>
                                                {{$project->user->mobile_tel}}
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
                        @endforeach

                    </div><!-- tabpanel -->
                    <div role="tabpanel" class="tab-pane fade" id="business" aria-expanded="true">
                        @foreach($projects->where('type', 'Achat et vente') as $project)
                        {{--
                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            @if($project->user->image !== 'image.jpg')
                                                <img class="media-object rounded-circle" src="/storage/images/users/{{$project->user->image}}" alt="">
                                            @else
                                                <img class="media-object rounded-circle" src="https://comman-ya.oschoolelearning.com/images/users/default/image.jpg" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{url('projects', $project)}}">
                                        <h4 class="media-heading">{{$project->name}}</h4>
                                        </a>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Hôte: {{$project->user->name}}</p>
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
                                            @if($project->sector !== null)
                                            <div class="info-group">
                                                <label>Secteur</label>
                                                {{$project->sector}}
                                            </div>
                                            @endif
                                            @if($project->price !== null)
                                            <div class="info-group">
                                                <label>Prix</label>
                                                {{$project->price}} FCFA
                                            </div>
                                            @endif

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Email</label>
                                                {{$project->user->email}}
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="info-group">
                                                <label>Téléphone</label>
                                                {{$project->user->mobile_tel}}
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

                                </div><!-- panel-info -->
                            </div><!-- card-block -->
                        </div><!-- card -->
                        --}}

                        <div class="relatedEvents padding--bottom"><span style="font-size: 0px;"></span>
                            <div class="bounds bounds--wide margin--top">
                                <section class="section">

                                    <div class="chunk">
                                        <div class="hscrollContainer hscrollGradient--hidden">
                                            <div class="hscroll">
                                                <div class="hscroll-content">
                                                    <ul class="flex gridList gridList--autoHeight gridList--autoHeight--has3">
                                                        <li class="gridList-item flex-item">
                                                            <div class="gridList-itemInner">
                                                                <div class="card card--hasHoverShadow eventCard relatedEvents-card border--none buttonPersonality" id="relatedEvents--eventCard-270825955">
                                                                    <a class="eventCard--link" href="{{url('projects', $project)}}"><span class="visibility--a11yHide">{{$project->name}}</span></a>
                                                                    <div class="flex flex--column flex--spaceBetween">
                                                                        <div class="flex-item flex-item--shrink">
                                                                            <div class="eventCardHead">
                                                                                <div class="flex flex--row">
                                                                                    <div class="flex-item">
                                                                                        <div class="eventTimeDisplay text--labelSecondary text--small wrap--singleLine--truncate margin--halfBottom color-viridian">
                                                                                            <time class="" datetime="1590505200000"><span class="eventTimeDisplay-startDate"><span>{{ Carbon\Carbon::parse($project->created_at)->format('d-m-Y') }}</span></time></div>
                                                                                        <div class="text--ellipsisTwoLines text--sectionTitle margin--halfBottom">
                                                                                            <a class="eventCardHead--title" href="{{url('projects', $project)}}">
                                                                                                {{$project->name}}
                                                                                            </a>
                                                                                        </div>
                                                                                        <a class="eventCardHead--groupLink" href="#">
                                                                                            <div class="eventCardHead--groupName wrap--singleLine--truncate text--primary margin--halfBottom">{{$project->price}} FCFA</div>
                                                                                        </a>
                                                                                        <div class="flex flex--row flex--noGutters flex--alignCenter margin--halfBottom">
                                                                                            {{--
                                                                                            <div class="flex-item flex-item--shrink text--secondary">
                                                                                                <svg data-swarm-icon="true" height="24" width="24" viewBox="0 0 24 24" class="valign--middle">
                                                                                                    <path d="M13 5.5A1.5 1.5 0 0114.5 7v10a1.5 1.5 0 01-1.5 1.5H3A1.5 1.5 0 011.5 17V7A1.5 1.5 0 013 5.5zm7.168 1.12A1.5 1.5 0 0122.5 7.87v8.262a1.5 1.5 0 01-2.332 1.249L15.5 14.268V9.732zM13 6.5H3a.5.5 0 00-.5.5v10a.5.5 0 00.5.5h10a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5zm8.416 1.091a.5.5 0 00-.693-.139L16.5 10.267v3.465l4.223 2.816a.5.5 0 00.18.074l.097.01a.5.5 0 00.5-.5V7.868a.5.5 0 00-.084-.278z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            --}}
                                                                                            <div class="flex-item valign--middle">
                                                                                                <div class="venueDisplay venueDisplay-venue padding--left-half text--secondary text--small"><address>
                                                                                                        <p class="wrap--singleLine--truncate">{{$project->user->name}}</p>
                                                                                                    </address>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="flex-item flex-item--shrink">
                                                                            <div class="flex flex--row flex--spaceBetween flex--alignCenter padding--top padding--bottom">
                                                                                <div class="flex-item flex-item--shrink">
                                                                                    <ul class="eventCard--attendeesLink avatarRow avatarRow--stacked padding--none">
                                                                                        <li class="avatarRow-item display--inline" style="z-index: 1;">
                                                                                            <span class="avatar avatar--small avatar--person" role="img" aria-label="Pentalog" style="background-image: url(&quot;/storage/images/users/{{$project->user->image}}&quot;);">
                                                                                                <span class="visibility--a11yHide">{{$project->user->name}}</span>
                                                                                                <img class="avatar-print" src="/storage/images/users/{{$project->user->image}}" alt="{{$project->user->name}}"></span></li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="flex-item">
                                                                                    <div class="flex flex--row flex--flexEnd flex--alignCenter">
                                                                                        <div class="flex-item flex-item--shrink eventCard--clickable"><a data-swarm-button="default" data-swarm-size="default" data-icon="left" data-swarm-width="grow" class="padding--left padding--right" id="attendButton" href="{{url('projects', $project)}}"><span>Consulter</span></a></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- tabpanel -->
                    <div role="tabpanel" class="tab-pane fade" id="myProjects" aria-expanded="false">

                        @foreach($projects as $project)
                        @if($project->user_id == Auth::user()->id)
                        <div class="card card-profile">
                            <div class="card-block">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            @if($project->user->image !== 'image.jpg')
                                                <img class="media-object rounded-circle" src="/storage/images/users/{{$project->user->image}}" alt="">
                                            @else
                                                <img class="media-object rounded-circle" src="https://comman-ya.oschoolelearning.com/images/users/default/image.jpg" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <a href="{{url('projects', $project)}}">
                                        <h4 class="media-heading">{{$project->name}}</h4>
                                        </a>
                                        <p class="media-usermeta"><i class="fa fa-briefcase"></i> Auteur: {{$project->user->name}}</p>
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
                                        @if($project->sector !== null)
                                        <div class="info-group">
                                            <label>Secteur</label>
                                            {{$project->sector}}
                                        </div>
                                        @endif
                                        @if($project->price !== null)
                                        <div class="info-group">
                                            <label>Prix</label>
                                            {{$project->price}} FCFA
                                        </div>
                                        @endif

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="info-group">
                                            <label>Email</label>
                                            {{$project->user->email}}
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="info-group">
                                            <label>Téléphone</label>
                                            {{$project->user->mobile_tel}}
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

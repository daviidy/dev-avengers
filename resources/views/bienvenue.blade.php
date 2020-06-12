@extends('layouts.menu')
@section('title', 'Plateforme de la communauté ivoirienne')
@section('content')


<!--style educative.io (3 columns)-->
<style media="screen">
/*! CSS Used from: Embedded */
.MuiTypography-root{margin:0;}
.MuiTypography-h6{font-size:1.25rem;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:500;line-height:1.6;}
.MuiTypography-alignCenter{text-align:center;}
/*! CSS Used from: Embedded */
.jss7{font-size:1.6rem;font-weight:700;line-height:1.5;letter-spacing:0.5px;}
/*! CSS Used from: Embedded */
.MuiButtonBase-root{color:inherit;border:0;cursor:pointer;margin:0;display:inline-flex;outline:0;padding:0;position:relative;align-items:center;user-select:none;border-radius:0;vertical-align:middle;-moz-appearance:none;justify-content:center;text-decoration:none;background-color:transparent;-webkit-appearance:none;-webkit-tap-highlight-color:transparent;}
.MuiButtonBase-root::-moz-focus-inner{border-style:none;}
/*! CSS Used from: Embedded */
.MuiButton-root{color:rgba(0, 0, 0, 0.87);padding:6px 16px;font-size:0.875rem;min-width:64px;box-sizing:border-box;transition:background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;font-family:"Nunito Sans", Verdana, Helvetica, sans-serif;font-weight:500;line-height:1.75;border-radius:4px;text-transform:uppercase;}
.MuiButton-root:hover{text-decoration:none;background-color:rgba(0, 0, 0, 0.04);}
@media (hover: none){
.MuiButton-root:hover{background-color:transparent;}
}
.MuiButton-label{width:100%;display:inherit;align-items:inherit;justify-content:inherit;}
.MuiButton-outlined{border:1px solid rgba(0, 0, 0, 0.23);padding:5px 15px;}
.MuiButton-disableElevation{box-shadow:none;}
.MuiButton-disableElevation:hover{box-shadow:none;}
.MuiButton-disableElevation:active{box-shadow:none;}
.MuiButton-fullWidth{width:100%;}
/*! CSS Used from: Embedded */
.jss479{margin:8px;display:flex;padding:10px 12px;font-size:1.5rem;font-weight:700;line-height:24px;white-space:nowrap;border-radius:4px;letter-spacing:0.35px;text-transform:inherit;background-color:white;}
.jss479:focus{outline:none;}
.jss479:hover{background-color:#E5E5E5;}
/*! CSS Used from: https://www.educative.io/static/css/89.80e17501.chunk.css */
a{background-color:initial;}
a:active,a:hover{outline:0;}
svg:not(:root){overflow:hidden;}
button{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner{border:0;padding:0;}
@media print{
*,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
a[href]:after{content:" (" attr(href) ")";}
}
*,:after,:before{box-sizing:border-box;}
button{font-family:inherit;font-size:inherit;line-height:inherit;}
a{color:#337ab7;text-decoration:none;}
a:focus,a:hover{color:#23527c;text-decoration:underline;}
a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h6{margin-top:10px;margin-bottom:10px;}
h6{font-size:12px;}
::-ms-clear{display:none;}
/*! CSS Used from: Embedded */
a{color:inherit;transition:color 0.2s ease 0s;}
a:hover{color:inherit;border-bottom:none;text-decoration:none;}
.hctgoS{display:flex;flex-direction:column;-webkit-box-align:center;align-items:center;align-self:center;flex:0 0 auto;width:100%;margin-top:15px;padding: 4rem;}
.cOgYqw{display:flex;width:100%;height:100%;}
.cKlrlm{display:flex;flex:1 1 0%;-webkit-box-pack:center;justify-content:center;-webkit-box-align:center;align-items:center;flex-direction:column;height:180px;margin:10px;border-radius:4px;box-shadow:rgba(0, 0, 0, 0.1) 0px 0px 7px;transition:all 0.4s ease 0s;cursor:pointer;}
.cKlrlm:hover{box-shadow:rgba(0, 0, 0, 0.1) 1px 2px 12px;border-bottom:none;transform:translateY(-5px);}
@media (max-width: 480px){
.cKlrlm{margin:5px;}
}
.dIrmfa{width:90px;height:90px;overflow:visible;}
.dIrmfa > svg{height:90px;width:90px;overflow:visible;}

</style>


<!--style pour le jumbotron-->
<style media="screen">
    /*! CSS Used from: http://www.themashabrand.com/templates/Masha/bower_components/bootstrap/dist/css/bootstrap.css */
    header{display:block;}
    h1{font-size:2em;margin:0.67em 0;}
    sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline;}
    sup{top:-0.5em;}
    @media print{
    *,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
    p{orphans:3;widows:3;}
    .badge{border:1px solid #000;}
    }
    *,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
    h1{margin-top:0;margin-bottom:.5rem;}
    p{margin-top:0;margin-bottom:1rem;}
    h1{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
    h1{font-size:2.5rem;}
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
    .col-md-10,.col-lg-8{position:relative;width:100%;min-height:1px;padding-right:15px;padding-left:15px;}
    @media (min-width: 576px){
    .col-md-10,.col-lg-8{padding-right:15px;padding-left:15px;}
    }
    @media (min-width: 768px){
    .col-md-10,.col-lg-8{padding-right:15px;padding-left:15px;}
    }
    @media (min-width: 992px){
    .col-md-10,.col-lg-8{padding-right:15px;padding-left:15px;}
    }
    @media (min-width: 1200px){
    .col-md-10,.col-lg-8{padding-right:15px;padding-left:15px;}
    }
    @media (min-width: 768px){
    .col-md-10{-webkit-box-flex:0;-webkit-flex:0 0 83.333333%;-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%;}
    .offset-md-1{margin-left:8.333333%;}
    }
    @media (min-width: 992px){
    .col-lg-8{-webkit-box-flex:0;-webkit-flex:0 0 66.666667%;-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%;}
    .offset-lg-2{margin-left:16.666667%;}
    }
    .badge{display:inline-block;padding:0.25em 0.4em;font-size:75%;font-weight:bold;line-height:1;color:#fff;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:0.25rem;}
    .badge:empty{display:none;}
    .badge-pill{padding-right:0.6em;padding-left:0.6em;border-radius:10rem;}
    .badge-danger{background-color:#d9534f;}
    /*! CSS Used from: http://www.themashabrand.com/templates/Masha/css/app.css */
    header.masha{background:linear-gradient(rgba(34, 34, 34, 0.25), rgba(34, 34, 34, 0.25)), url("https://images.unsplash.com/photo-1537344845089-c7f47b3210ab?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80") no-repeat center center fixed;background-size:cover;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;color:#fff;height:65vh;width:100%;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;}
    header.masha .post-heading{padding:100px 0 50px;color:white;}
    @media only screen and (min-width: 767px){
    header.masha .post-heading{padding:50px 0;}
    }
    header.masha h1{font-family:'Montserrat', sans-serif;font-weight:700;font-size:60px;color:#fff;}
    header.masha p{font-family:'Montserrat', sans-serif;color:#fff;font-size:16px;text-align:center;letter-spacing:1px;}
    header.masha sup{font-family:'Montserrat', sans-serif;color:#fff;font-size:20px;text-align:center;}
    @media only screen and (max-width: 768px){
    header.masha h1{font-size:40px;}
    }
    @media only screen and (max-width: 420px){
    header.masha h1{font-size:22px;}
    header.masha p{font-size:14px;}
    }
    h6, .MuiButton-root{
      font-family: 'Montserrat', sans-serif !important;
    }

    .jss7{
      font-size: 16px !important;
    }
    .more{padding: 30px 0 ;}


</style>


<style media="screen">
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
.fa-pencil-square-o{font-size:20px; color: #007808; margin-right: 20px;}
.fa-trash{font-size:20px; color: #D86000; }
</style>

</style>





    <!-- ==============================================
     Header Section
     =============================================== -->

     <header class="masha">
      <div class="container">
       <div class="row">

        <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
         <div class="post-heading">
          <img src="/assets/main_theme/medium/img/logo-img.png" width="300"  alt="UNIVOIRE" style="display: inline-block;">
		 <p>Plateforme de la communauté ivoirienne</p>
         <!--
		  <sup>
		   <span class="badge badge-pill badge-danger">version 1.0</span>
		  </sup>
        -->
         </div><!-- /.post-heading -->
        </div><!-- /.col-lg-8 -->

       </div><!-- /.row -->
	  </div><!-- /.container -->
     </header>


     <div class="styles__LearningPreferencesStyled-vgii8s-0 hctgoS">
    <div class="row styles__CategoryButtons-vgii8s-1 cOgYqw">
        <a class="mb-4 col-sm-12 col md-4 styles__CategoryButton-vgii8s-2 cKlrlm" href="#">
            <div class="styles__CategoryButton_Icon-vgii8s-3 dIrmfa"><svg width="161" height="147" viewBox="0 0 161 147" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204ZM29.301 35.087H68.3656Z"
                      fill="#DAE1F2"></path>
                    <path
                      d="M22 44.559H139M29.301 35.087H68.3656M135.204 119.528H25.7964C23.7044 119.518 22.011 117.804 22 115.686V28.842C22.011 26.724 23.7044 25.01 25.7964 25H135.168C137.26 25.01 138.953 26.724 138.964 28.842V115.686C138.954 117.789 137.283 119.497 135.206 119.528H135.204Z"
                      stroke="#455A7F" stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                    <rect x="23" y="46" width="115" height="73" fill="#455A7F"></rect>
                    <path d="M105.174 37.438C106.419 37.438 107.429 36.4172 107.429 35.158C107.429 33.8988 106.419 32.878 105.174 32.878C103.929 32.878 102.919 33.8988 102.919 35.158C102.919 36.4172 103.929 37.438 105.174 37.438Z" fill="#455A7F">
                    </path>
                    <path d="M116.786 37.438C118.031 37.438 119.041 36.4172 119.041 35.158C119.041 33.8988 118.031 32.878 116.786 32.878C115.541 32.878 114.531 33.8988 114.531 35.158C114.531 36.4172 115.541 37.438 116.786 37.438Z" fill="#455A7F">
                    </path>
                    <path d="M128.389 37.438C129.634 37.438 130.644 36.4172 130.644 35.158C130.644 33.8988 129.634 32.878 128.389 32.878C127.144 32.878 126.134 33.8988 126.134 35.158C126.134 36.4172 127.144 37.438 128.389 37.438Z" fill="#455A7F">
                    </path>
                    <path d="M88.668 61.766L72.172 98.952M63.405 63.8L46.421 80.312L63.405 63.8ZM46.366 80.33L62.694 97.495L46.366 80.33ZM97.436 98.28L114.409 81.76L97.436 98.28ZM114.475 81.74L98.138 64.577L114.475 81.74Z" stroke="white"
                      stroke-width="2.93" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
            <h6 class="MuiTypography-root jss16 jss592 jss7  MuiTypography-h6 MuiTypography-alignCenter">Participez à des événements de la communauté</h6>
        </a>
        <a class="mb-4 col-sm-12 col md-4 styles__CategoryButton-vgii8s-2 cKlrlm" href="#">
            <div class="styles__CategoryButton_Icon-vgii8s-3 dIrmfa"><svg width="164" height="144" viewBox="0 0 164 144" fill="none">
                    <rect x="20" y="82" width="135" height="36" rx="18" fill="#FFCDB2"></rect>
                    <rect x="41" y="112" width="95" height="6" fill="#ED956E"></rect>
                    <path d="M9 34L21 44.5L26.5 67.5L32.5 69.5H39.5L46.5 83L32.5 84L24 89.5L5 52L1 37L9 34Z" fill="#E3E3E3"></path>
                    <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                    <path d="M68 31.5L81.5 35.5L76.5 50L90.5 53.5L84.5 68.5L98.5 72L94.5 82H76L57 44.5L45.5 21V13L49.5 7.5L63.5 1.5L59.5 13L73.5 16.5L68 31.5Z" fill="#E3E3E3"></path>
                    <path d="M63.0231 36.6552L85.5 82L78.9398 82.8654L57.633 39.2908L63.0231 36.6552Z" fill="#C7C7C7"></path>
                    <path d="M141 25.5L141 82.5L121 82.5L120 45L123.5 36L132 28L141 25.5Z" fill="#C7C7C7"></path>
                    <circle cx="156" cy="113" r="5" fill="#67C7CC"></circle>
                    <path
                      d="M12.63 55.58L18.82 67.84M130.09 117.87V117.81H137.09C141.402 117.924 145.603 116.435 148.88 113.63C153.6 109.63 156.08 104.46 155.12 98.28C153.58 88.38 146.51 82.62 136.44 82.67C127.69 82.67 118.95 82.97 110.2 82.99C104.2 82.99 98.2 82.65 92.25 82.67C74.05 82.74 55.85 82.91 37.65 83.04H37.44C33.2054 83.3242 29.2421 85.2253 26.37 88.35C24.5826 90.3218 23.2617 92.6704 22.5053 95.222C21.7488 97.7736 21.5761 100.463 22 103.09C23.08 110.44 30.24 117.25 37.67 117.42C45.87 117.6 54.06 117.8 62.26 117.79C76.04 117.79 89.82 117.96 103.61 117.88C112.46 117.83 121.28 117.87 130.09 117.87ZM63.82 1.5C59.46 3.34 55.44 4.9 51.56 6.74C50.0282 7.37343 48.678 8.37767 47.6307 9.6624C46.5833 10.9471 45.8718 12.472 45.56 14.1C44.8169 17.5369 45.2684 21.1244 46.84 24.27C52.6146 36.1923 58.4146 48.1024 64.24 60C67.707 67.1 71.233 74.173 74.82 81.22C75.0107 81.5815 75.2791 81.8962 75.6059 82.1417C75.9327 82.3873 76.3097 82.5574 76.71 82.64C82.36 82.76 88.02 82.75 93.71 82.7C93.979 82.6933 94.2432 82.6271 94.4836 82.5061C94.7239 82.385 94.9344 82.2122 95.1 82C96.42 78.63 97.63 75.22 98.92 71.71L84.61 68.84L90.61 53.31L76.61 50.16C78.41 44.94 80.14 39.91 81.93 34.69L67.93 31.57C69.86 26.37 71.7 21.4 73.57 16.32L59.57 13.18C61 9.2 62.35 5.5 63.82 1.5ZM140.67 82.93V25.32C139.67 25.48 138.89 25.54 138.18 25.73C133.026 26.9934 128.452 29.9662 125.205 34.1632C121.958 38.3603 120.229 43.5339 120.3 48.84C120.3 57.78 120.53 66.72 120.64 75.66V82.93H140.67V82.93ZM38.51 68.05C32 71.3 26.91 69.64 25.16 63.47C23.6865 58.6306 22.5307 53.7001 21.7 48.71C21.5438 47.0202 21.034 45.3822 20.2036 43.9023C19.3732 42.4225 18.2408 41.1338 16.88 40.12C15.9258 39.3293 15.0176 38.4846 14.16 37.59C9.32998 33 9.32998 33 3.35998 35.89C2.98998 36.07 2.51998 36.17 2.27998 36.47C1.91998 36.92 1.39998 37.58 1.51998 38.01C2.73998 42.78 3.51998 47.78 5.51998 52.2C10.92 63.99 16.87 75.54 22.62 87.2C22.87 87.71 24.04 89.01 24.37 89.55C29.23 85.48 33.72 82.55 39.99 83.05C41.99 83.23 43.99 83.05 46.44 83.05C45.84 81.85 45.58 81.3 45.3 80.76L38.51 68.05V68.05ZM135.2 44.28V66.77V44.28Z"
                      stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path
                      d="M28.79 101.24C28.79 101.24 29.45 111.24 44.26 111.81H92.52M137.01 92.34V106.99M144.18 99.67H129.52M155.89 106.53C157.061 106.53 158.205 106.877 159.179 107.528C160.152 108.178 160.911 109.103 161.359 110.185C161.807 111.266 161.925 112.457 161.696 113.605C161.468 114.753 160.904 115.808 160.076 116.636C159.248 117.464 158.193 118.028 157.045 118.256C155.897 118.485 154.706 118.367 153.624 117.919C152.543 117.471 151.618 116.713 150.968 115.739C150.317 114.765 149.97 113.621 149.97 112.45L155.89 106.53Z"
                      stroke="black" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></div>
            <h6 class="MuiTypography-root jss16 jss593 jss7  MuiTypography-h6 MuiTypography-alignCenter">Construisez des projets avec des membres de la communauté</h6>
        </a>
        <a class="mb-4 col-sm-12 col md-4 styles__CategoryButton-vgii8s-2 cKlrlm" href="#">
            <div class="styles__CategoryButton_Icon-vgii8s-3 dIrmfa"><svg width="162" height="145" viewBox="0 0 162 145" fill="none">
                    <path d="M21 21L25.5 9L38.5 2H115L127 7L135.5 19V138L106 116H39.5L27 110.5L21 96.5V21Z" fill="#F8F8FF"></path>
                    <path
                      d="M137.496 144.317L104.976 118.133H42.912C29.822 118.12 19.213 107.526 19.2 94.453V23.68C19.213 10.607 29.822 0.013 42.912 0H113.784C126.874 0.013 137.483 10.607 137.496 23.68V144.317V144.317ZM42.912 4.074C32.075 4.088 23.293 12.857 23.28 23.679V94.454C23.293 105.276 32.075 114.045 42.912 114.059H106.416L133.416 135.797V23.679C133.403 12.857 124.621 4.088 113.784 4.074H42.912V4.074Z"
                      fill="#455A7F"></path>
                    <path
                      d="M69.216 28.437H47.016C46.6812 28.4041 46.3706 28.2478 46.1447 27.9986C45.9187 27.7493 45.7936 27.4249 45.7936 27.0885C45.7936 26.7521 45.9187 26.4277 46.1447 26.1784C46.3706 25.9292 46.6812 25.7729 47.016 25.74H69.216C69.4028 25.7239 69.5909 25.7468 69.7683 25.8072C69.9458 25.8676 70.1088 25.9643 70.2469 26.091C70.3851 26.2178 70.4954 26.3719 70.5708 26.5435C70.6463 26.7151 70.6852 26.9005 70.6852 27.088C70.6852 27.2755 70.6463 27.4609 70.5708 27.6325C70.4954 27.8041 70.3851 27.9582 70.2469 28.085C70.1088 28.2117 69.9458 28.3084 69.7683 28.3688C69.5909 28.4292 69.4028 28.4521 69.216 28.436V28.437ZM91.416 41.583H47.016C46.6812 41.5501 46.3706 41.3938 46.1447 41.1446C45.9187 40.8953 45.7936 40.5709 45.7936 40.2345C45.7936 39.8981 45.9187 39.5737 46.1447 39.3244C46.3706 39.0752 46.6812 38.9189 47.016 38.886H91.416C91.6028 38.8699 91.7909 38.8928 91.9683 38.9532C92.1458 39.0136 92.3088 39.1103 92.4469 39.237C92.5851 39.3638 92.6954 39.5179 92.7708 39.6895C92.8463 39.8611 92.8852 40.0465 92.8852 40.234C92.8852 40.4215 92.8463 40.6069 92.7708 40.7785C92.6954 40.9501 92.5851 41.1042 92.4469 41.231C92.3088 41.3577 92.1458 41.4544 91.9683 41.5148C91.7909 41.5752 91.6028 41.5981 91.416 41.582V41.583ZM108.072 28.437H85.86C85.5252 28.4041 85.2146 28.2478 84.9887 27.9986C84.7627 27.7493 84.6376 27.4249 84.6376 27.0885C84.6376 26.7521 84.7627 26.4277 84.9887 26.1784C85.2146 25.9292 85.5252 25.7729 85.86 25.74H108.072C108.407 25.7729 108.717 25.9292 108.943 26.1784C109.169 26.4277 109.294 26.7521 109.294 27.0885C109.294 27.4249 109.169 27.7493 108.943 27.9986C108.717 28.2478 108.407 28.4041 108.072 28.437V28.437ZM69.216 96.311H47.016C46.8354 96.318 46.6553 96.2884 46.4864 96.2241C46.3175 96.1598 46.1633 96.0621 46.033 95.9368C45.9028 95.8115 45.7992 95.6612 45.7284 95.4949C45.6577 95.3286 45.6212 95.1497 45.6212 94.969C45.6212 94.7883 45.6577 94.6094 45.7284 94.4431C45.7992 94.2768 45.9028 94.1265 46.033 94.0012C46.1633 93.8759 46.3175 93.7782 46.4864 93.7139C46.6553 93.6496 46.8354 93.62 47.016 93.627H69.216C69.3966 93.62 69.5767 93.6496 69.7456 93.7139C69.9145 93.7782 70.0687 93.8759 70.199 94.0012C70.3292 94.1265 70.4328 94.2768 70.5036 94.4431C70.5743 94.6094 70.6108 94.7883 70.6108 94.969C70.6108 95.1497 70.5743 95.3286 70.5036 95.4949C70.4328 95.6612 70.3292 95.8115 70.199 95.9368C70.0687 96.0621 69.9145 96.1598 69.7456 96.2241C69.5767 96.2884 69.3966 96.318 69.216 96.311V96.311ZM108.072 96.311H85.86C85.6794 96.318 85.4993 96.2884 85.3304 96.2241C85.1615 96.1598 85.0073 96.0621 84.877 95.9368C84.7468 95.8115 84.6432 95.6612 84.5724 95.4949C84.5017 95.3286 84.4652 95.1497 84.4652 94.969C84.4652 94.7883 84.5017 94.6094 84.5724 94.4431C84.6432 94.2768 84.7468 94.1265 84.877 94.0012C85.0073 93.8759 85.1615 93.7782 85.3304 93.7139C85.4993 93.6496 85.6794 93.62 85.86 93.627H108.072C108.253 93.62 108.433 93.6496 108.602 93.7139C108.771 93.7782 108.925 93.8759 109.055 94.0012C109.185 94.1265 109.289 94.2768 109.36 94.4431C109.43 94.6094 109.467 94.7883 109.467 94.969C109.467 95.1497 109.43 95.3286 109.36 95.4949C109.289 95.6612 109.185 95.8115 109.055 95.9368C108.925 96.0621 108.771 96.1598 108.602 96.2241C108.433 96.2884 108.253 96.318 108.072 96.311V96.311ZM108.072 41.583H100.092C99.7572 41.5501 99.4466 41.3938 99.2207 41.1446C98.9947 40.8953 98.8696 40.5709 98.8696 40.2345C98.8696 39.8981 98.9947 39.5737 99.2207 39.3244C99.4466 39.0752 99.7572 38.9189 100.092 38.886H108.072C108.407 38.9189 108.717 39.0752 108.943 39.3244C109.169 39.5737 109.294 39.8981 109.294 40.2345C109.294 40.5709 109.169 40.8953 108.943 41.1446C108.717 41.3938 108.407 41.5501 108.072 41.583V41.583ZM91.416 81.488H47.016C46.7804 81.4878 46.5489 81.4257 46.3449 81.3078C46.1408 81.19 45.9714 81.0205 45.8535 80.8165C45.7356 80.6125 45.6734 80.3811 45.6731 80.1455C45.6728 79.9098 45.7345 79.6783 45.852 79.474C46.092 79.059 46.536 78.804 47.016 78.804H91.416C91.6515 78.8043 91.8828 78.8665 92.0867 78.9843C92.2906 79.1021 92.46 79.2714 92.5778 79.4752C92.6957 79.6791 92.758 79.9103 92.7583 80.1458C92.7587 80.3813 92.6972 80.6128 92.58 80.817C92.34 81.232 91.896 81.487 91.416 81.487V81.488ZM108.072 81.488H100.092C99.9126 81.4929 99.7341 81.4618 99.5669 81.3965C99.3998 81.3313 99.2474 81.2332 99.1188 81.108C98.9902 80.9829 98.8879 80.8332 98.8181 80.6679C98.7483 80.5026 98.7124 80.3249 98.7124 80.1455C98.7124 79.9661 98.7483 79.7884 98.8181 79.6231C98.8879 79.4578 98.9902 79.3081 99.1188 79.183C99.2474 79.0578 99.3998 78.9597 99.5669 78.8945C99.7341 78.8292 99.9126 78.7981 100.092 78.803H108.072C108.308 78.8032 108.539 78.8653 108.743 78.9832C108.947 79.101 109.117 79.2705 109.235 79.4745C109.352 79.6785 109.415 79.9099 109.415 80.1455C109.415 80.3812 109.353 80.6127 109.236 80.817C108.996 81.232 108.552 81.487 108.072 81.487V81.488ZM108.072 54.729H85.86C85.5252 54.6961 85.2146 54.5398 84.9887 54.2906C84.7627 54.0413 84.6376 53.7169 84.6376 53.3805C84.6376 53.0441 84.7627 52.7197 84.9887 52.4704C85.2146 52.2212 85.5252 52.0649 85.86 52.032H108.072C108.407 52.0649 108.717 52.2212 108.943 52.4704C109.169 52.7197 109.294 53.0441 109.294 53.3805C109.294 53.7169 109.169 54.0413 108.943 54.2906C108.717 54.5398 108.407 54.6961 108.072 54.729V54.729ZM108.072 67.862H63.672C63.4914 67.869 63.3113 67.8394 63.1424 67.7751C62.9735 67.7108 62.8193 67.6131 62.689 67.4878C62.5588 67.3625 62.4552 67.2122 62.3844 67.0459C62.3137 66.8796 62.2772 66.7007 62.2772 66.52C62.2772 66.3393 62.3137 66.1604 62.3844 65.9941C62.4552 65.8278 62.5588 65.6775 62.689 65.5522C62.8193 65.4269 62.9735 65.3292 63.1424 65.2649C63.3113 65.2006 63.4914 65.171 63.672 65.178H108.072C108.253 65.171 108.433 65.2006 108.602 65.2649C108.771 65.3292 108.925 65.4269 109.055 65.5522C109.185 65.6775 109.289 65.8278 109.36 65.9941C109.43 66.1604 109.467 66.3393 109.467 66.52C109.467 66.7007 109.43 66.8796 109.36 67.0459C109.289 67.2122 109.185 67.3625 109.055 67.4878C108.925 67.6131 108.771 67.7108 108.602 67.7751C108.433 67.8394 108.253 67.869 108.072 67.862V67.862ZM69.216 54.729H47.016C46.6812 54.6961 46.3706 54.5398 46.1447 54.2906C45.9187 54.0413 45.7936 53.7169 45.7936 53.3805C45.7936 53.0441 45.9187 52.7197 46.1447 52.4704C46.3706 52.2212 46.6812 52.0649 47.016 52.032H69.216C69.4028 52.0159 69.5909 52.0388 69.7683 52.0992C69.9458 52.1596 70.1088 52.2563 70.2469 52.383C70.3851 52.5098 70.4954 52.6639 70.5708 52.8355C70.6463 53.0071 70.6852 53.1925 70.6852 53.38C70.6852 53.5675 70.6463 53.7529 70.5708 53.9245C70.4954 54.0961 70.3851 54.2502 70.2469 54.377C70.1088 54.5037 69.9458 54.6004 69.7683 54.6608C69.5909 54.7212 69.4028 54.7441 69.216 54.728V54.729ZM54.996 67.862H47.016C46.8354 67.869 46.6553 67.8394 46.4864 67.7751C46.3175 67.7108 46.1633 67.6131 46.033 67.4878C45.9028 67.3625 45.7992 67.2122 45.7284 67.0459C45.6577 66.8796 45.6212 66.7007 45.6212 66.52C45.6212 66.3393 45.6577 66.1604 45.7284 65.9941C45.7992 65.8278 45.9028 65.6775 46.033 65.5522C46.1633 65.4269 46.3175 65.3292 46.4864 65.2649C46.6553 65.2006 46.8354 65.171 47.016 65.178H54.996C55.1766 65.171 55.3567 65.2006 55.5256 65.2649C55.6945 65.3292 55.8487 65.4269 55.979 65.5522C56.1092 65.6775 56.2128 65.8278 56.2836 65.9941C56.3543 66.1604 56.3908 66.3393 56.3908 66.52C56.3908 66.7007 56.3543 66.8796 56.2836 67.0459C56.2128 67.2122 56.1092 67.3625 55.979 67.4878C55.8487 67.6131 55.6945 67.7108 55.5256 67.7751C55.3567 67.8394 55.1766 67.869 54.996 67.862V67.862Z"
                      fill="#21B1B9"></path>
                </svg></div>
            <h6 class="MuiTypography-root jss16 jss594 jss7  MuiTypography-h6 MuiTypography-alignCenter">Discutez librement avec les autres membres</h6>
        </a></div>
    <div class="row MuiBox-root jss596">
        <a href="/login" style="flex: 1 1 0%;"><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined jss483 jss597 jss479  MuiButton-disableElevation MuiButton-fullWidth" tabindex="0" type="button"><span
                  class="col-12 MuiButton-label">Inscrivez-vous</span></button></a></div>
</div>

   {{--
    <section class="header remove-gap">
        <div class="container-fluid">

            <div class="row no-gap">

                <div class="col-md-4">
                    <a class="post" href="#" title="15 tips of understanding the world of fashion">
                        <div class="creative-post">
                            <div class="creative-img">
                                <img src="/assets/main_theme/medium/img/blog/1.jpg" class="bg" height="343" width="462" alt="...">
                            </div>
                            <!-- /creative-img -->

                            <div class="fancy-post-overlay">
                                <div class="t-overlay-textt small-block-padding">
                                    <p class="t-entry-meta font-weight-700">
                                        <span class="t-entry-category">Fashion<span class="cat-comma"></span></span>
                                    </p>
                                </div>
                                <!-- /t-overlay-textt -->
                                <div class="pull-right bookmark small-block-padding">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                                <!-- /bookmark -->

                                <div class="t-overlay-text single-block-padding">
                                    <div class="t-entry">
                                        <h3 class="t-entry-title h3 font-weight-700">15 tips of understanding the world of fashion</h3>
                                    </div>
                                    <!-- /t-entry -->
                                </div>
                                <!-- /t-overlay-text -->

                                <div class="author single-block-padding">
                                    <img src="/assets/main_theme/medium/img/users/1.jpg" alt="..." />
                                    <p class="lead">Michelle Kate</p>
                                    <p class="read"><span class="heavy">1 day ago,</span>&nbsp;<span>8 min read</span></p>
                                </div>
                                <!-- /author -->
                                <div class="author pull-right hidden-xs-down">
                                    <ul class="meta">
                                        <li><i class="fa fa-comments"></i> 40</li>
                                        <li><i class="fa fa-eye"></i> 1k</li>
                                    </ul>
                                </div>
                                <!-- /author pull-right -->

                            </div>
                            <!-- Fancy Post -->
                        </div>
                        <!-- Creative Post -->
                    </a>
                </div>
                <!-- /col-md-4 -->

                <div class="col-md-4">
                    <a class="post" href="#" title="Top 5 tips to have a great vacation with your friends">
                        <div class="creative-post">
                            <div class="creative-img">
                                <img src="/assets/main_theme/medium/img/blog/2.jpg" class="bg" height="343" width="462" alt="...">
                            </div>
                            <!-- /creative-img -->

                            <div class="fancy-post-overlay">
                                <div class="t-overlay-textt small-block-padding">
                                    <p class="t-entry-meta font-weight-700">
                                        <span class="t-entry-category">Travel<span class="cat-comma"></span></span>
                                    </p>
                                </div>
                                <!-- /t-overlay-textt -->
                                <div class="pull-right bookmark small-block-padding">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                                <!-- /bookmark -->

                                <div class="t-overlay-text single-block-padding">
                                    <div class="t-entry">
                                        <h3 class="t-entry-title h3 font-weight-700">Top 5 tips to have a great vacation with your friends</h3>
                                    </div>
                                    <!-- /t-entry -->
                                </div>
                                <!-- /t-overlay-text -->

                                <div class="author">
                                    <img src="/assets/main_theme/medium/img/users/2.jpg" alt="..." />
                                    <p class="lead">Alex Grantte</p>
                                    <p class="read"><span class="heavy">1 day ago,</span>&nbsp;<span>4 min read</span></p>
                                </div>
                                <!-- /author -->
                                <div class="author pull-right hidden-xs-down">
                                    <ul class="meta">
                                        <li><i class="fa fa-comments"></i> 10</li>
                                        <li><i class="fa fa-eye"></i> 300</li>
                                    </ul>
                                </div>
                                <!-- /author -->

                            </div>
                            <!-- Fancy Post -->
                        </div>
                        <!-- Creative Post -->
                    </a>
                </div>
                <!-- /col-md-4 -->

                <div class="col-md-4">
                    <a class="post" href="#" title="Keeping our great veterans in our memories">
                        <div class="creative-post">
                            <div class="creative-img">
                                <img src="/assets/main_theme/medium/img/blog/3.jpg" class="bg" height="343" width="462" alt="...">
                            </div>
                            <!-- /creative-img -->

                            <div class="fancy-post-overlay">
                                <div class="t-overlay-textt small-block-padding">
                                    <p class="t-entry-meta font-weight-700">
                                        <span class="t-entry-category">War<span class="cat-comma"></span></span>
                                    </p>
                                </div>
                                <!-- /t-overlay-textt -->
                                <div class="pull-right bookmark small-block-padding">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                                <!-- /bookmark -->

                                <div class="t-overlay-text single-block-padding">
                                    <div class="t-entry">
                                        <h3 class="t-entry-title h3 font-weight-700">Keeping our great veterans in our memories</h3>
                                    </div>
                                    <!-- /t-entry -->
                                </div>
                                <!-- /t-overlay-text -->

                                <div class="author">
                                    <img src="/assets/main_theme/medium/img/users/3.jpg" alt="..." />
                                    <p class="lead">David Murlee</p>
                                    <p class="read"><span class="heavy">1 day ago,</span>&nbsp;<span>5 min read</span></p>
                                </div>
                                <!-- /author -->
                                <div class="author pull-right hidden-xs-down">
                                    <ul class="meta">
                                        <li><i class="fa fa-comments"></i> 20</li>
                                        <li><i class="fa fa-eye"></i> 1.3k</li>
                                    </ul>
                                </div>
                                <!-- /author -->

                            </div>
                            <!-- Fancy Post -->
                        </div>
                        <!-- Creative Post -->
                    </a>
                </div>
                <!-- /col-md-4 -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container-fluid -->
    </section>
    <!-- /section -->
--}}

    <!-- ==============================================
     Posts Section
     =============================================== -->

    <section class="posts">
        <div class="container-fluid">
            <div class="row">

                <div class="fancy-title">
                    <div class="fancy-title-center">
                        <h2>DANS LES ACTUALITES</h2>
                    </div>
                </div>
                @foreach($posts as $post)

                <div class="col-md-4 posted">
                    <a class="post" href="{{url('posts', $post)}}" title="How the cloud can improve business">
                        <div class="creative-post">
                            <div class="creative-img">
                                <img src="/storage/images/posts/{{$post->image}}" class="bg" height="343" width="462" alt="...">
                            </div>
                            <!-- /creative-img -->

                            <div class="fancy-post-overlay">
                                <!--
                                <div class="t-overlay-textt small-block-padding">
                                    <p class="t-entry-meta font-weight-700">
                                        <span class="t-entry-category">Cloud<span class="cat-comma"></span></span>
                                    </p>
                                </div>
                            -->
                                <!-- /t-overlay-textt -->
                                <!--
                                <div class="pull-right bookmark small-block-padding">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                            -->
                                <!-- /bookmark -->

                                <div class="t-overlay-text single-block-padding">
                                    <div class="t-entry">
                                        <h3 class="t-entry-title h3 font-weight-700">{{$post->title}}</h3>
                                    </div>
                                    <!-- /t-entry -->
                                </div>
                                <!-- /t-overlay-text -->

                                <div class="author">
                                    <img src="/storage/images/users/{{$post->user->image}}" alt="..." />
                                    <p class="lead">{{$post->user->name}}</p>
                                    <p class="read"><span class="heavy">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</span>
                                        <!--
                                        &nbsp;<span>7 min read</span>
                                    -->
                                    </p>
                                </div>
                                <!-- /author -->
                                <!--
                                <div class="author pull-right hidden-xs-down">
                                    <ul class="meta">
                                        <li><i class="fa fa-comments"></i> 400</li>
                                        <li><i class="fa fa-eye"></i> 2.6k</li>
                                    </ul>
                                </div>
                            -->
                                <!-- /author -->

                            </div>
                            <!-- Fancy Post -->
                        </div>
                        <!-- Creative Post -->
                    </a>
                </div>

                @endforeach


            </div>

            <section class="more">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-md-2">
                            <a href="{{url('posts')}}" class="kafe-btn kafe-btn-default"> Voir plus</a>
                        </div>
                        <!-- /.col-lg-8 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /container -->
            </section>

            <div class="row">

                <div class="fancy-title">
                    <div class="fancy-title-center">
                        <h2>LES EVENEMENTS A LA UNE</h2>
                    </div>
                </div>
                @foreach($meetups as $meetup)
                <div class="col-md-4 posted">
                    <a class="post" href="{{url('meetups', $meetup)}}" title="Organize your workflow with the available tech and software">
                        <div class="creative-post">
                            <div class="creative-img">
                                <img src="/storage/images/meetups/{{$meetup->image}}" class="bg" height="343" width="462" alt="...">
                            </div>
                            <!-- /creative-img -->

                            <div class="fancy-post-overlay">
                                <div class="t-overlay-textt small-block-padding">
                                    <p class="t-entry-meta font-weight-700">
                                        <span class="t-entry-category">{{$meetup->type}}<span class="cat-comma"></span></span>
                                    </p>
                                </div>
                                <!-- /t-overlay-textt -->
                                <!--
                                <div class="pull-right bookmark small-block-padding">
                                    <i class="fa fa-bookmark-o"></i>
                                </div>
                            -->
                                <!-- /bookmark -->

                                <div class="t-overlay-text single-block-padding">
                                    <div class="t-entry">
                                        <h3 class="t-entry-title h3 font-weight-700">{{$meetup->name}}</h3>
                                    </div>
                                    <!-- /t-entry -->
                                </div>
                                <!-- /t-overlay-text -->

                                <div class="author">
                                    <img src="/storage/images/users/{{$meetup->user->image}}" alt="..." />
                                    <p class="lead">{{$meetup->user->name}}</p>
                                    <p class="read"><span class="heavy">{{ Carbon\Carbon::parse($meetup->begin_date)->format('d-m-Y H:i') }} au {{ Carbon\Carbon::parse($meetup->end_date)->format('d-m-Y H:i') }}</span>
                                        <!--
                                        &nbsp;<span>7 min read</span>
                                    -->
                                    </p>
                                </div>
                                <!-- /author -->
                                <!--
                                <div class="author pull-right hidden-xs-down">
                                    <ul class="meta">
                                        <li><i class="fa fa-comments"></i> 10</li>
                                        <li><i class="fa fa-eye"></i> 27</li>
                                    </ul>
                                </div>
                            -->
                                <!-- /author -->

                            </div>
                            <!-- Fancy Post -->
                        </div>
                        <!-- Creative Post -->
                    </a>
                </div>
                @endforeach
            </div>
            <section class="more">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-md-2">
                                <a href="{{url('meetups')}}" class="kafe-btn kafe-btn-default">Voir plus</a>
                            </div>
                            <!-- /.col-lg-8 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /container -->
                </section>
            <!-- /row -->

               <div class="row" style="justify-content: center;">

                <div class="fancy-title">
                    <div class="fancy-title-center">
                        <h2>DES OPPORTUNITES D'AFFAIRE POUR VOUS</h2>
                    </div>
                </div>

                @foreach($projects as $project)
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

            </div>
            <!-- /row -->

        </div>
        <!-- /container-fluid -->
    </section>
    <!-- /section -->

    <!-- ==============================================
	 More Section
	 =============================================== -->
    <section class="more">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-md-2">
                    <a href="{{url('projects')}}" class="kafe-btn kafe-btn-default">Voir plus</a>
                </div>
                <!-- /.col-lg-8 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /w -->






@endsection

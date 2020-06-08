@extends('layouts.menu')
@section('title', $project->name)

@section('content')


<style media="screen">
/*! CSS Used from: https://www.meetup.com/mu_static/fr-FR/main.424560b4.css */
a,span,time{display:inline;}
p,section,ul{display:block;margin:0;padding:0;}
img{border:0;display:block;line-height:0;margin:0;padding:0;}
li{margin:0;padding:0;}
section{display:block;}
address{display:inline;font-style:normal;}
button{display:block;font-family:inherit;font-size:100%;line-height:1.45;}
button{background:transparent;border-width:0;margin:0;padding:0;}
h1,h2,h3,h4{font-size:16px;margin:0;padding:0;}
.runningText{line-height:1.8;}
.runningText p{margin-bottom:16px;max-width:40em;}
.runningText p:last-child{margin-bottom:0;}
a,button{color:inherit;text-decoration:none;}
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
.flex--row>.flex-item{padding-left:16px !important;padding-left:var(--responsive-space);width:auto;}
@media only screen and (min-width:840px){
.flex--row>.flex-item{padding-left:20px !important;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.flex--row>.flex-item{padding-left:18px !important;padding-left:var(--responsive-space);}
}
.flex--row>.flex-item:first-child{padding-left:0!important;}
.flex--column{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;height:100%;}
.flex--column>.flex-item{-ms-flex-preferred-size:auto;flex-basis:auto;padding-left:0;width:100%;}
@media only screen and (min-width:640px){
.atMedium_flex--row{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;height:auto;}
.atMedium_flex--row>.flex-item{-ms-flex-preferred-size:0;flex-basis:0;padding-left:18px;padding-left:var(--responsive-space);width:auto;}
@media only screen and (min-width:840px){
.atMedium_flex--row>.flex-item{padding-left:20px;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.atMedium_flex--row>.flex-item{padding-left:18px;padding-left:var(--responsive-space);}
}
.atMedium_flex--row>.flex-item:first-child{padding-left:0;}
}
@media only screen and (min-width:840px){
.atLarge_flex--row{-webkit-box-align:flex;-ms-flex-align:flex;align-items:flex;-webkit-box-sizing:border-box;box-sizing:border-box;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-ms-flex-wrap:nowrap;flex-wrap:nowrap;height:auto;}
.atLarge_flex--row>.flex-item{-ms-flex-preferred-size:0;flex-basis:0;padding-left:20px;padding-left:var(--responsive-space);width:auto;}
@media only screen and (min-width:640px){
.atLarge_flex--row>.flex-item{padding-left:20px;padding-left:var(--responsive-space);}
}
.atLarge_flex--row>.flex-item:first-child{padding-left:0;}
}
.flex>.flex-item--2{-webkit-box-flex:2;-ms-flex-positive:2;flex-grow:2;}
.flex>.flex-item--shrink{-ms-flex-preferred-size:auto;flex-basis:auto;-webkit-box-flex:0;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;width:auto;}
.flex--noGutters>.flex-item,.flex--noGutters>.flex-item:first-child,.flex--noGutters>.flex-item:last-child{padding:0;}
.flex--wrap{-ms-flex-wrap:wrap;flex-wrap:wrap;}
@media only screen and (min-width:840px){
.atLarge_flex--rowReverse{-webkit-box-orient:horizontal;-webkit-box-direction:reverse;-ms-flex-direction:row-reverse;flex-direction:row-reverse;}
@media only screen and (min-width:840px){
.atLarge_flex--rowReverse>.flex-item:first-child{padding-left:20px;padding-left:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.atLarge_flex--rowReverse>.flex-item:first-child{padding-left:20px;padding-left:var(--responsive-space);}
}
.atLarge_flex--rowReverse>.flex-item:last-child{padding-left:0;}
}
.flex--flexEnd{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;}
.flex--spaceBetween{-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
.flex--alignBottom{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;}
.flex--alignCenter{-webkit-box-align:center;-ms-flex-align:center;align-items:center;}
.stripe{border-top:1px solid rgba(46,62,72,.12);background-color:#fff;margin-bottom:0;}
.stripe:first-child{border-top:none;}
.section{margin:0 16px;padding:32px 0 0 !important;}
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
@media only screen and (min-width:640px){
.atMedium_hscroll--unclip{-webkit-overflow-scrolling:auto;-ms-overflow-style:auto;overflow-x:visible;}
.atMedium_hscroll--unclip .hscroll-content{white-space:normal;}
}
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
.gridList--autoHeight--has4>.gridList-item{-webkit-box-flex:0;-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%;}
.hscroll-content{margin:0;padding:0;}
.popup{display:inline-block;position:relative;}
.popup-trigger{cursor:pointer;display:inline;}
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
.avatar{/*background-color:#e4e9ed;*/background-position:center 42%;color:transparent;display:inline-block;font-size:0;height:36px;position:relative;text-indent:100%;vertical-align:top;white-space:nowrap;width:36px;}
@media only screen and (min-width:840px){
.avatar{width:45px!important;width:var(--responsiveMedia-m);}
}
@media only screen and (min-width:640px){
.avatar{width:40px !important;width:var(--responsiveMedia-m);}
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
.avatar--large{height:56px!important;width:56px!important;}
@media only screen and (min-width:640px){
.avatar--large{height:72px!important;width:72px!important;}
}
.avatar--person{border-radius:999px;-webkit-box-sizing:border-box;box-sizing:border-box;vertical-align:middle;}
.avatar--noPhoto{background-color:#d2dae1;display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;position:relative;text-indent:0;}
.avatar--noPhoto,.avatarIcon--noPhoto{-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;}
.avatarIcon--noPhoto{height:100%;width:100%;}
.avatarIcon--noPhoto svg{height:40%;opacity:.6;width:40%;}
.card{background:#fff;background-clip:padding-box;background-size:cover;border:1px solid rgba(46,62,72,.12);border-radius:8px;-webkit-box-sizing:border-box;box-sizing:border-box;display:block;min-height:160px;padding:16px 16px 0 !important;padding:var(--responsive-space) var(--responsive-space) 0;position:relative;white-space:normal;}
@media only screen and (min-width:840px){
.card{padding:20px 20px 0 !important;padding:var(--responsive-space) var(--responsive-space) 0;}
}
@media only screen and (min-width:640px){
.card{padding:18px 18px 0 !important;padding:var(--responsive-space) var(--responsive-space) 0;}
}
.card--initialHeight{min-height:0;}
.card--flush{border-radius:0;border-width:0;margin-left:-16px;margin-left:calc(var(--responsive-space)*-1);margin-right:-16px;margin-right:calc(var(--responsive-space)*-1);}
@media only screen and (min-width:840px){
.card--flush{margin-right:-20px;margin-right:calc(var(--responsive-space)*-1);}
}
@media only screen and (min-width:640px){
.card--flush{margin-right:-18px;margin-right:calc(var(--responsive-space)*-1);}
}
@media only screen and (min-width:840px){
.card--flush{margin-left:-20px;margin-left:calc(var(--responsive-space)*-1);}
}
@media only screen and (min-width:640px){
.card--flush{margin-left:-18px;margin-left:calc(var(--responsive-space)*-1);}
}
@media only screen and (min-width:840px){
.atLarge_card--flush{border-radius:8px;border-width:1px;margin-left:0;margin-right:0;}
}
.card--hasHoverShadow{-webkit-transition:-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);transition:-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);transition:box-shadow .25s cubic-bezier(.4,0,.2,1),transform .25s cubic-bezier(.4,0,.2,1);transition:box-shadow .25s cubic-bezier(.4,0,.2,1),transform .25s cubic-bezier(.4,0,.2,1),-webkit-box-shadow .25s cubic-bezier(.4,0,.2,1),-webkit-transform .25s cubic-bezier(.4,0,.2,1);}
.card--hasHoverShadow:focus,.card--hasHoverShadow:hover{-webkit-box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);-webkit-transform:translateY(-1px);transform:translateY(-1px);}
.card--hasHoverShadow:focus,.card--hasHoverShadow:hover{-webkit-box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);box-shadow:0 0 4px 0 rgba(46,62,72,.12),0 4px 12px 0 rgba(46,62,72,.12);-webkit-transform:translateY(-1px);transform:translateY(-1px);}
.svg{display:inline-block;}
.svg-icon{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;font-size:0;position:relative;vertical-align:bottom;}
.svg-icon{stroke:transparent;fill:rgba(46,62,72,.6);}
.svg-icon use{pointer-events:none;}
.infoToggle-trigger{background-color:rgba(46,62,72,.35);background-color:var(--c-textHint);border-radius:50%;color:#fff;color:var(--c-white);font-size:10px;height:15px;width:15px;}
.infoToggle-label{display:inline-block;margin-right:4px;margin-right:var(--space-quarter);}
.hscroll{overflow-y:hidden;}
.card{position:static;}
.text--smaller{font-size:12px;}
.text--primary{color:#2e3e48;}
.event-info.card,.groupMember.card{border-width:0;}
.card--flushContent{padding:0!important;}
.padding--right-quarter{padding-right:4px;padding-right:calc(var(--responsive-space)/4);}
@media only screen and (min-width:840px){
.padding--right-quarter{padding-right:5px;padding-right:calc(var(--responsive-space)/4);}
}
@media only screen and (min-width:640px){
.padding--right-quarter{padding-right:4.5px;padding-right:calc(var(--responsive-space)/4);}
}
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
.groupMember{min-height:100%;min-width:128px;padding-left:8px;padding-right:8px;}
.groupMember-role{padding-top:2px;}
.groupMember-name{line-height:1.2!important;}
.pageHead{margin:24px 20px 0;}
.pageHead .pageHead-pageTitleLabel{font-weight:500;}
@media only screen and (min-width:640px){
.pageHead{margin-bottom:24px;}
}
.eventPageHead{background:#fff;border-bottom:1px solid rgba(46,62,72,.12);}
.eventPageHead .pageHead-pageTitleLabel{font-weight:400;}
.eventPageHead .text--pageTitle{margin-bottom:8px;}
.eventPageHead .pageHead--wrapper{position:relative;}
.relatedEvents .gridList-item{min-width:330px;white-space:normal;}
.relatedEvents .eventCard{height:100%;min-width:240px;}
.sticky--bottom{position:-webkit-sticky;position:sticky;bottom:-1px;z-index:11;-webkit-box-shadow:0 0 2px 0 rgba(46,62,72,.12),0 2px 4px 0 rgba(46,62,72,.12);box-shadow:0 0 2px 0 rgba(46,62,72,.12),0 2px 4px 0 rgba(46,62,72,.12);}
@media only screen and (min-width:640px){
.sticky-ontheside{top:56px!important;top:var(--space-4);}
}
@media only screen and (min-width:640px){
.sticky-ontheside{position:-webkit-sticky;position:sticky;z-index:10;}
}
.attendees-sample{-webkit-animation:fadeIn .5s ease-out;animation:fadeIn .5s ease-out;}
@media only screen and (min-width:840px){
.eventContent>.section{max-width:600px;}
}
@media only screen and (min-width:840px){
.event-home .eventSideBar{padding:40px 0 0;padding:calc(var(--responsive-space)*2) 0 0 0;padding-left:0;margin-left:0;}
@media only screen and (min-width:640px){
.event-home .eventSideBar{padding:40px 0 0;padding:calc(var(--responsive-space)*2) 0 0 0;}
}
}
.event-description{-webkit-transition:height .5s cubic-bezier(.215,.61,.355,1);transition:height .5s cubic-bezier(.215,.61,.355,1);overflow:hidden;}
.event-info>.section{padding:16px 0 0;}
.event-host-info{margin-top:16px;}
@media only screen and (min-width:840px){
.event-host-info{margin-top:20px;}
}
@media only screen and (min-width:640px){
.event-host-info{margin-top:18px;}
}
.event-hosts-info-no-link{font-size:16px;}
.event-group-chunk{padding-bottom:0!important;margin-bottom:16px;}
@media only screen and (min-width:840px){
.event-group-chunk{margin-bottom:20px;}
}
@media only screen and (min-width:640px){
.event-group-chunk{margin-bottom:18px;}
}
.event-group-photo{-o-object-fit:cover;object-fit:cover;width:56px;height:56px;border-radius:4px;}
@media only screen and (max-width:840px){
.event-group-chunk{margin-bottom:0;}
}
@media only screen and (min-width:440px){
.eventSideBar{padding-top:0;}
}
.event-report-wrapper .event-report-button:hover{text-decoration:underline;}
.photoCarousel--wrapper{margin-left:-16px;margin-right:-16px;}
@media only screen and (min-width:640px){
.photoCarousel--wrapper{margin:auto;}
}
.photoCarousel{position:relative;}
.photoCarousel-photoContainer{position:relative;background:#fff no-repeat 50%;background-size:cover;border-radius:0;width:100%;}
@media only screen and (min-width:640px){
.photoCarousel-photoContainer{margin:auto;overflow:hidden;}
}
.eventTimeDisplay .link{cursor:pointer;color:#00a2c7;}
.eventTimeDisplay .link:hover{text-decoration:underline;}
.event-group-card{border:0;padding-bottom:16px !important;padding-bottom:var(--responsive-space);}
@media only screen and (min-width:840px){
.event-group-card{padding-bottom:20px !important;padding-bottom:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.event-group-card{padding-bottom:18px !important;padding-bottom:var(--responsive-space);}
}
.event-group-name{margin-top:-5px;}
.event-group-name span{line-height:1.45;}
.event-group-content{-ms-flex-item-align:center;align-self:center;}
.avatar,.avatar--person{background-repeat:no-repeat;background-position:50%;background-size:cover;}
.buttonPersonality{-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;text-decoration:none!important;}
.bounds,.chunk{*zoom:1;}
.bounds:after,.bounds:before,.chunk:after,.chunk:before{content:" ";display:table;}
.bounds:after,.chunk:after{clear:both;}
ul{margin-left:0;padding-left:0;list-style-type:none;}
.text--pageTitle,.text--sectionTitle{color:#2e3e48;font-weight:600;line-height:1.1;}
.text--pageTitle,.text--sectionTitle{stroke:transparent;fill:#2e3e48;}
.text--pageTitle{font-size:32px;}
.text--sectionTitle{font-size:20px;line-height:1.45;}
.text--labelSecondary{color:#2e3e48;font-size:14px;font-weight:600;line-height:1.6;letter-spacing:-.02em;word-spacing:.1em;}
.text--labelSecondary{stroke:transparent;fill:#2e3e48;}
.text--labelSecondary{color:rgba(46,62,72,.6);font-weight:500;}
.text--labelSecondary{stroke:transparent;fill:rgba(46,62,72,.6);}
.text--bold{font-weight:500!important;}
.text--secondary{color:rgba(46,62,72,.6);}
.text--secondary,.text--secondary svg{stroke:transparent;fill:rgba(46,62,72,.6);}
.text--small{font-size:14px;line-height:1.6;}
.link,.runningText a,a.link{color:#00a2c7;text-decoration:none;}
.link,.link svg,.runningText a,a.link{stroke:transparent;fill:#00a2c7;}
.link:link,.runningText a:link{text-decoration:none;}
.link:active,.link:focus,.link:hover,.runningText a:active,.runningText a:focus,.runningText a:hover{text-decoration:underline;}
.runningText p{-ms-word-break:normal;word-break:break-word;word-wrap:break-word;}
.align--center{-ms-flex-item-align:center;align-self:center;text-align:center!important;}
.valign--middle{-ms-flex-item-align:center;align-self:center;vertical-align:middle!important;}
.valignChildren--center{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;}
.keepAspect--16-9{margin-bottom:0;}
.keepAspect--16-9:before{content:"";display:block;padding-top:56.25%!important;}
.border--top{border-top:1px solid rgba(46,62,72,.12);}
.border--left{border-left:1px solid rgba(46,62,72,.12);}
.border--none{border-width:0!important;}
.display--block{display:block;}
.display--inline{display:inline;}
.display--inlineBlock{display:inline-block;}
.display--inlineFlex{display:-webkit-inline-box;display:-ms-inline-flexbox;display:inline-flex;}
ul{list-style:none;padding-left:0;}
.margin--top{margin-top:16px;margin-top:var(--responsive-space);}
@media only screen and (min-width:840px){
.margin--top{margin-top:20px;margin-top:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.margin--top{margin-top:18px;margin-top:var(--responsive-space);}
}
.margin--bottom{margin-bottom:16px;margin-bottom:var(--responsive-space);}
@media only screen and (min-width:840px){
.margin--bottom{margin-bottom:20px;margin-bottom:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.margin--bottom{margin-bottom:18px;margin-bottom:var(--responsive-space);}
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
.padding--bottom{padding-bottom:16px !important;padding-bottom:var(--responsive-space);}
@media only screen and (min-width:840px){
.padding--bottom{padding-bottom:20px !important;padding-bottom:var(--responsive-space);}
}
@media only screen and (min-width:640px){
.padding--bottom{padding-bottom:18px!important;padding-bottom:var(--responsive-space);}
}
.padding--none{padding:0;}
.sticky--bottom{bottom:0;}
.wrap--singleLine--truncate{white-space:nowrap!important;}
.wrap--singleLine--truncate{overflow:hidden!important;text-overflow:ellipsis!important;}
.visibility--a11yHide{border:0;clip:rect(0 0 0 0);position:absolute;overflow:hidden;margin:-1px;padding:0;width:1px;height:1px;}
#mupMain{background:#f6f7f8;}
/*! CSS Used from: https://www.meetup.com/mu_static/fr-FR/global.920dcd0b.css */
button{background:transparent;border-width:0;margin:0;padding:0;}
h1,h2,h3,h4{font-size:var(--font-size-normal);margin:0;padding:0;}
h1{font-weight:var(--font-weight-bold);font-size:var(--font-size-normal);}
a,span,time{display:inline;}
p,section,ul{display:block;margin:0;padding:0;}
img{border:0;display:block;line-height:0;margin:0;padding:0;}
li{margin:0;padding:0;}
section{display:block;}
address{display:inline;font-style:normal;}
.runningText{line-height:var(--font-line-height-normal);}
.runningText p{overflow-wrap:break-word;-ms-word-break:normal;word-break:break-word;word-wrap:break-word;margin-bottom:var(--space);max-width:40em;}
.runningText p:last-child{margin-bottom:0;}
.text--pageTitle,.text--sectionTitle{color:var(--color-gray-7);}
.text--secondary{color:var(--color-gray-6);}
.link,.link svg,.runningText a,a.link{color:var(--color-viridian);}
.text--pageTitle{/*font-weight:var(--font-weight-bold);*/}
.text--pageTitle{/*font-size:var(--font-size-display-2);line-height:var(--font-line-height-display-2);*/}
.text--sectionTitle{/*font-size:var(--font-size-section-title);line-height:var(--font-line-height-section-title);font-weight:var(--font-weight-semi-bold);*/}
.text--small{font-size:var(--font-size-small);line-height:var(--font-line-height-small);}
/*! CSS Used from: https://www.meetup.com/mu_static/fr-FR/main.8b3c4395.css */
.color-viridian{color:#0098ab;}
[data-swarm-button]{display:inline-flex;flex-direction:row;justify-content:center;align-items:center;transition:background .15s;-webkit-appearance:none;border-radius:5px;box-sizing:border-box;font-size:var(--font-size-small);font-weight:var(--font-weight-regular);line-height:var(--font-line-height-small);outline:0;padding:10px;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:pointer;text-decoration:none!important;}
[data-swarm-button=default]:active,[data-swarm-button=default]:focus{border:1px solid #D86000;}
[data-swarm-button=primary]:active,[data-swarm-button=primary]:focus{border:1px solid #D86000;}
[data-swarm-button=bordered]:active,[data-swarm-button=bordered]:focus{background-color:#D86000;color:var(--color-gray-6);border:1px solid #D86000;}
[data-swarm-button=neutral]:active,[data-swarm-button=neutral]:focus{background-color:var(--color-gray-1);color:var(--color-gray-6);border:1px solid var(--color-gray-6);}
[data-swarm-button=default]:hover{background-color:#D86000;color:#fff!important;fill:var(--color-white);}
[data-swarm-button=bordered]:hover{border:1px solid #D86000;}
[data-swarm-button=neutral]:hover{background-color:var(--color-gray-2);}
[data-swarm-button=primary]:hover{background-color:#fff;border:1px solid #D86000; color: #000}
[data-swarm-button=default]{background-color:var(--color-white);border:1px solid #D86000;color:var(--color-viridian);fill:var(--color-viridian);}
[data-swarm-button=primary]{background-color:#D86000;border:1px solid #D86000;color:#fff;fill:#fff;}
[data-swarm-button=neutral]{background-color:var(--color-gray-1);}
[data-swarm-button=bordered],[data-swarm-button=neutral]{border:1px solid #aaa;color:var(--color-gray-6);fill:var(--color-gray-6);}
[data-swarm-button=bordered]{background-color:var(--color-white);}
[data-swarm-button=reset]{padding:var(--space-quarter);font-weight:var(--font-weight-normal);}
[data-swarm-button][data-swarm-size=large]{font-size:var(--font-size-normal);line-height:32px;padding:10px 20px;}
[data-swarm-button] [data-swarm-icon]{fill:inherit;}
[data-swarm-button][data-icon=only]{padding:10px;}
[data-swarm-button][data-icon=only][data-swarm-size=large]>span{height:32px;width:32px;}
[data-swarm-button]>span{display:inline-flex;justify-content:center;align-items:center;}
[data-swarm-icon]{fill:var(--color-gray-7);}
[data-swarm-width=grow]{width:100%;}
/*! CSS Used from: Embedded */
._memberListing-module_memberListing__3dEo-{margin-left:-16px;margin-left:-var(--space-1);margin-right:-16px;margin-right:-var(--space-1);}
._memberListing-module_gridList__3_lox{padding-left:0;margin:0;}
._memberListing-module_gridListItem__1InAw{min-width:150px;width:150px;-webkit-box-flex:0;-ms-flex:none;flex:none;padding:0 4px 4px 0;padding:0 calc(var(--space-1)/4) calc(var(--space-1)/4) 0;}
@media only screen and (min-width:640px){
._memberListing-module_gridListItem__1InAw{min-width:auto;width:25%;}
._memberListing-module_gridListItem__1InAw:nth-of-type(4n){padding:0 0 4px;padding:0 0 calc(var(--space-1)/4) 0;}
}
/*! CSS Used from: Embedded */
._EventStickyFooter-module_footer__3fDH-{background:#fff!important;background:var(--c-white);margin-top:32px !important;margin-top:calc(var(--responsive-space)*2);}
._EventStickyFooter-module_footerContent__bOcM4{padding:24px 16px!important;padding:calc(var(--responsive-space)*1.5) var(--responsive-space);}
@media only screen and (min-width:640px){
._EventStickyFooter-module_footerContent__bOcM4{padding:16px !important;padding:var(--responsive-space);}
}
._EventStickyFooter-module_eventActions__1dOQN{margin-left:32px;margin-left:calc(var(--responsive-space)*2);}
/*! CSS Used from: Embedded */
._saveEventButton-module_saveButton__2eemT svg{margin:2px;width:16px;height:16px;}
._saveEventButton-module_newStyle__1WGCV._saveEventButton-module_saveButton__2eemT{background-color:#fff;background-color:var(--color-white);border-color:#c5c4c4;border-color:#aaa;}
._saveEventButton-module_newStyle__1WGCV._saveEventButton-module_saveButton__2eemT svg{width:18px;height:18px;}
/*! CSS Used from: chrome-extension://immhpnclomdloikkpcefncmfgjbkojmh/css/emoji.css */
.emoji-outer{height:inherit;line-height:inherit;}
.emoji-inner{width:1.5em;height:1.5em;display:inline-block;vertical-align:middle;}
/*! CSS Used keyframes */
@-webkit-keyframes fadeIn{0%{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{0%{opacity:0;}to{opacity:1;}}
.fixed {
	position: fixed;
	bottom: 15px;
	height: 70px;
	z-index: 1;
}

.img_box{
	padding: 25px;
    background-color: white;
    border: 2px solid #ebebec;
    border-radius: 5px;
}
.img_box img{
	padding: 2px;
    border: 2px solid #cecece;
    width: 100%;
    transition: transform 1.8s;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.img_box img:hover{
	-ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
}
.fa-cog{font-size: xx-large;}
</style>










<main id="mupMain" role="main">
    <div class="eventPageHead stripe" id="eventPageHead--270355045">
        <div class="bounds bounds--wide">
            <div class="pageHead--wrapper">
                <div class="pageHead">
                    <div class="flex flex--column atMedium_flex--row flex--alignBottom pageHead-pageTitle">
                        <div class="flex-item flex-item--2 pageHead--titleArea">
                            @if($project->type == 'Projet')
                            <p class="pageHead-pageTitleLabel text--medium text--secondary"><time class="eventStatusLabel" datetime="1590512400000"><span>{{ Carbon\Carbon::parse($project->begin_date)->format('d-m-Y H:i') }} au {{ Carbon\Carbon::parse($project->end_date)->format('d-m-Y H:i') }}</span></time></p>
                            @endif
                            <h1 class="pageHead-headline text--pageTitle">{{ucfirst($project->name)}}</h1>
                            <div class="flex flex--row flex--alignCenter event-host-info">
                                <div class="flex-item flex-item--shrink"><a class="avatar avatar--person" role="img" aria-label="Lamiaa" href="/Le-Wagon-Paris-Coding-Bootcamp/events/270355045/attendees/"
                                      style="background-image: url(&quot;/storage/images/users/{{$project->user->image}}&quot;);"><span class="visibility--a11yHide">{{$project->user->name}}</span>
									  <img class="avatar-print"
                                          src="/storage/images/users/{{$project->user->image}}" alt="{{$project->user->name}}"></a></div>
                                <div class="flex-item event-info-hosts-text valign--middle">
                                    <a href="#">
                                        <span>
                                            <span class="">Auteur:<br>
                                                <span
                                                  class="text--bold event-hosts-info-no-link">
                                                  {{$project->user->name}}
                                              </span>
                                              </span>
                                          </span>
                                      </a>
                                  </div>
                            </div>
                        </div>
                        <div class="flex-item flex-item--shrink pageHead-pageActions">
                            <a target="_blank" href="/messages">
                            <button data-swarm-button="bordered" data-swarm-size="default" data-icon="left" data-swarm-width="default" type="button" class="btn btn-danger"
                              data-e2e="event-header--share-btn">
                              <span>Contacter</span>
                          </button>
                      </a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div><span style="font-size: 0px;"></span>
    <div class="bounds bounds--wide" id="eventHome--270355045">
        <div class="flex flex--column atLarge_flex--row atLarge_flex--rowReverse">
            <div class="flex-item">
                <div id="fixed" class="sticky-ontheside">
                    <section  class="section eventSideBar">
                        <div class="eventActionsMenu"></div>
                        <a class="event-group" href="#">
                            <div class="chunk event-group-chunk">
                                <div class="card card--initialHeight atLarge_card--flush card--flush event-group-card">
                                    <div>
                                        <div class="flex flex--row">
                                            <div class="flex-item flex-item--shrink">
                                                <!--img class="event-group-photo" src="/storage/images/meetups/{{$project->image}}" alt="{{$project->name}}"-->
                                                <i class="fa fa-cog" aria-hidden="true"></i>
                                            </div>
                                            <div class="flex-item event-group-content">
                                                <div class="flex flex--column event-group-photoHeight">
                                                    <div class="flex-item flex-item--shrink event-group-name"><span class="text--bold text--small display--inlineBlock">{{$project->name}}</span></div>
                                                    {{--
                                                    <div class="flex-item flex-item--shrink">
                                                        <span class="groupPrivacyLabelTooltip text--secondary text--small">
                                                            <div>
                                                                <span class="infoToggle-label"><span>Groupe public</span></span>
                                                                <div class="popup">
                                                                    <div class="popup-trigger" aria-labelledby="privacy-info-tooltip"><button data-swarm-button="reset" data-swarm-size="default" data-icon="left" data-swarm-width="default"
                                                                          type="button"><span class="infoToggle-trigger align--center" role="img">?</span></button></div>
                                                                </div>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="chunk">
                            <div class="card card--initialHeight atLarge_card--flush card--flush event-info card--flushContent">
                                <section class="section text--small">
                                    <div class="chunk">
                                        <div class="flex flex--row eventDateTime">
                                            <div class="flex-item flex-item--shrink text--secondary"><span>
                                            	<svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24px" height="24px"><path d="M 7.5 1 C 3.917969 1 1 3.917969 1 7.5 C 1 11.082031 3.917969 14 7.5 14 C 11.082031 14 14 11.082031 14 7.5 C 14 3.917969 11.082031 1 7.5 1 Z M 7.5 2 C 10.542969 2 13 4.457031 13 7.5 C 13 10.542969 10.542969 13 7.5 13 C 4.457031 13 2 10.542969 2 7.5 C 2 4.457031 4.457031 2 7.5 2 Z M 7 3 L 7 8 L 10 8 L 10 7 L 8 7 L 8 3 Z"/ class="svg svg--clock svg-icon valign--middle"></svg>
                                            </span></div>
                                            <div class="flex-item">
                                                @if($project->type == 'Projet')
                                                <div class="eventTimeDisplay eventDateTime--hover"><time class="" datetime="1590512400000"><span class="eventTimeDisplay-startDate"><span>{{ Carbon\Carbon::parse($project->begin_date)->format('d-m-Y H:i') }}</span><br><span
                                                              class="eventTimeDisplay-startDate-time"><span>au {{ Carbon\Carbon::parse($project->end_date)->format('d-m-Y H:i') }}</span></span></span></time>
                                                    <div>
                                                        {{--
                                                        <div class="popup">
                                                            <div type="button" role="button" aria-label="open menu" aria-expanded="false" aria-haspopup="true" data-toggle="true" class="popup-trigger">
                                                                <p class="link"><span>Ajouter à mon agenda</span></p>
                                                            </div>
                                                        </div>
                                                        --}}
                                                    </div>
                                                </div>
                                                @else
                                                <div class="eventTimeDisplay eventDateTime--hover"><time class="" datetime="1590512400000"><span class="eventTimeDisplay-startDate"><span
                                                              class="eventTimeDisplay-startDate-time"><span>{{$project->price}} FCFA</span></span></span></time>

                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            {{--
                            <div class="event-report-wrapper margin--top align--center"><button data-swarm-button="reset" data-swarm-size="default" data-icon="left" data-swarm-width="default" type="button"
                                  class="event-report-button text--small"><span>Signaler cet événement</span></button>
                              </div>
                              --}}
                        </div>
                    </section>
                </div>
            </div>
            <div class="flex-item flex-item--2 eventContent">
                <div class="chunk">
                    <div class="eventContent">
                        <section class="section">
                            <div class="chunk event-description--wrapper">
                                @if(count($project->multimedias) > 0)

                                <div class="photoCarousel--wrapper">
                                    <div class="photoCarousel margin--bottom padding--bottom">
                                        <div class="img_box">
												<div class="row">
                                                    @foreach($project->multimedias as $multimedia)
                                                    @if(strpos($multimedia->name, '.png') !== false || strpos($multimedia->name, '.jpg') !== false || strpos($multimedia->name, '.jpeg') !== false)
                                            			<div class="col-md-4 col-sm-12">
                                                            <img src="/storage/files/projects/{{$multimedia->name}}" >
                                            			</div>
                                                    @endif
                                                    @endforeach

                                            		</div>


                                        </div>
                                    </div>
                                </div>
                                @endif
                                <h2 class="text--sectionTitle text--bold padding--bottom"><span>Détails</span></h2>
                                <div class="event-description runningText">
                                    @if($project->details !== null)
                                    {!!$project->details!!}
                                    @endif
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <section class="section">
                    <div class="chunk">
                        <div class="card card--initialHeight atLarge_card--flush card--flush seeAllMeetups padding--left padding--bottom border--none"><a target="_blank" href="{{url('users', $project->user)}}">
                                <div class="flex flex--row">
                                    <div class="flex-item flex-item--shrink valignChildren--center"><img class="event-group-photo" src="/storage/images/users/{{$project->user->image}}"
                                          alt="Le Wagon Paris - Coding Bootcamp"></div>
                                    <div class="flex-item border--left valignChildren--center" align="left">
                                        <p>Auteur: {{$project->user->name}}</p>
                                        <p class="link"><span>Voir plus d'offres de la part de cet utilisateur</span></p>
                                    </div>
                                    <div class="flex-item flex-item--shrink valignChildren--center"><span class="link"><svg preserveAspectRatio="xMinYMin meet" width="24" height="24" viewBox="0 0 24 24"
                                              class="svg svg--chevron-right svg-icon valign--middle" role="img">
                                                <use xlink:href="#icon-chevron-right--small"></use>
                                            </svg></span></div>
                                </div>
                            </a></div>
                    </div>
                </section>
            </div>
        </div>
        {{--
        <div class="relatedEvents padding--bottom"><span style="font-size: 0px;"></span>
            <div class="bounds bounds--wide margin--top">
                <section class="section border--top">
                    <div class="chunk">
                        <div class="flex flex--row">
                            <div class="flex-item">
                                <h4 class="text--sectionTitle text--bold"><span>Événements similaires à proximité</span></h4>
                            </div>
                            <div class="flex-item flex-item--shrink"><a href="https://www.meetup.com/fr-FR/find/events/tech/?eventFilter=all" class="relatedEvents-seeAll link" id="relatedEvents-seeAll"><span>Voir tout</span></a></div>
                        </div>
                    </div>
                    <div class="chunk">
                        <div class="hscrollContainer hscrollGradient--hidden">
                            <div class="hscroll">
                                <div class="hscroll-content">
                                    <ul class="flex gridList gridList--autoHeight gridList--autoHeight--has3">
                                        <li class="gridList-item flex-item">
                                            <div class="gridList-itemInner">
                                                <div class="card card--hasHoverShadow eventCard relatedEvents-card border--none buttonPersonality" id="relatedEvents--eventCard-270825955"><a class="eventCard--link"
                                                      href="/fr-FR/Paris-Tech-Meetups5/events/270825955/"><span class="visibility--a11yHide">Comment Trace One s'est adapté au covid19 ?</span></a>
                                                    <div class="flex flex--column flex--spaceBetween">
                                                        <div class="flex-item flex-item--shrink">
                                                            <div class="eventCardHead">
                                                                <div class="flex flex--row">
                                                                    <div class="flex-item">
                                                                        <div class="eventTimeDisplay text--labelSecondary text--small wrap--singleLine--truncate margin--halfBottom color-viridian"><time class="" datetime="1590505200000"><span
                                                                                  class="eventTimeDisplay-startDate"><span>mar. 26 mai</span>, <span class="eventTimeDisplay-startDate"><span>17:00 UTC+2</span></span></span></time></div>
                                                                        <div class="text--ellipsisTwoLines text--sectionTitle margin--halfBottom"><a class="eventCardHead--title" href="/fr-FR/Paris-Tech-Meetups5/events/270825955/">Comment Trace One
                                                                                s'est adapté au covid19 ?</a></div><a class="eventCardHead--groupLink" href="/fr-FR/Paris-Tech-Meetups5">
                                                                            <div class="eventCardHead--groupName wrap--singleLine--truncate text--primary margin--halfBottom">Paris Tech Meetups</div>
                                                                        </a>
                                                                        <div class="flex flex--row flex--noGutters flex--alignCenter margin--halfBottom">
                                                                            <div class="flex-item flex-item--shrink text--secondary"><svg data-swarm-icon="true" height="24" width="24" viewBox="0 0 24 24" class="valign--middle">
                                                                                    <path
                                                                                      d="M13 5.5A1.5 1.5 0 0114.5 7v10a1.5 1.5 0 01-1.5 1.5H3A1.5 1.5 0 011.5 17V7A1.5 1.5 0 013 5.5zm7.168 1.12A1.5 1.5 0 0122.5 7.87v8.262a1.5 1.5 0 01-2.332 1.249L15.5 14.268V9.732zM13 6.5H3a.5.5 0 00-.5.5v10a.5.5 0 00.5.5h10a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5zm8.416 1.091a.5.5 0 00-.693-.139L16.5 10.267v3.465l4.223 2.816a.5.5 0 00.18.074l.097.01a.5.5 0 00.5-.5V7.868a.5.5 0 00-.084-.278z">
                                                                                    </path>
                                                                                </svg></div>
                                                                            <div class="flex-item valign--middle">
                                                                                <div class="venueDisplay venueDisplay-venue padding--left-half text--secondary text--small"><address>
                                                                                        <p class="wrap--singleLine--truncate">Événement en ligne</p>
                                                                                    </address></div>
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
                                                                        <li class="avatarRow-item display--inline" style="z-index: 1;"><span class="avatar avatar--small avatar--person" role="img" aria-label="Pentalog"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/2/e/8/d/thumb_266651917.jpeg&quot;);"><span
                                                                                  class="visibility--a11yHide">Pentalog</span><img class="avatar-print" src="https://secure.meetupstatic.com/photos/member/2/e/8/d/thumb_266651917.jpeg"
                                                                                  alt="Pentalog"></span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="flex-item">
                                                                    <div class="flex flex--row flex--flexEnd flex--alignCenter">
                                                                        <div class="flex-item flex-item--shrink eventCard--clickable"><a data-swarm-button="default" data-swarm-size="default" data-icon="left" data-swarm-width="grow"
                                                                              class="padding--left padding--right" id="attendButton" href="/fr-FR/Paris-Tech-Meetups5/events/270825955/"><span>Participer</span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gridList-item flex-item">
                                            <div class="gridList-itemInner">
                                                <div class="card card--hasHoverShadow eventCard relatedEvents-card border--none buttonPersonality" id="relatedEvents--eventCard-xhwlsrybchblc"><a class="eventCard--link"
                                                      href="/fr-FR/Silex-Labs-Aperopensource/events/xhwlsrybchblc/"><span class="visibility--a11yHide">Aperopensource</span></a>
                                                    <div class="flex flex--column flex--spaceBetween">
                                                        <div class="flex-item flex-item--shrink">
                                                            <div class="eventCardHead">
                                                                <div class="flex flex--row">
                                                                    <div class="flex-item">
                                                                        <div class="eventTimeDisplay text--labelSecondary text--small wrap--singleLine--truncate margin--halfBottom color-viridian"><time class="" datetime="1590685200000"><span
                                                                                  class="eventTimeDisplay-startDate"><span>jeu. 28 mai</span>, <span class="eventTimeDisplay-startDate"><span>19:00 UTC+2</span></span></span></time></div>
                                                                        <div class="text--ellipsisTwoLines text--sectionTitle margin--halfBottom"><a class="eventCardHead--title"
                                                                              href="/fr-FR/Silex-Labs-Aperopensource/events/xhwlsrybchblc/">Aperopensource</a></div><a class="eventCardHead--groupLink" href="/fr-FR/Silex-Labs-Aperopensource">
                                                                            <div class="eventCardHead--groupName wrap--singleLine--truncate text--primary margin--halfBottom">Silex Labs</div>
                                                                        </a>
                                                                        <div class="flex flex--row flex--noGutters flex--alignCenter margin--halfBottom">
                                                                            <div class="flex-item flex-item--shrink text--secondary"><span><svg preserveAspectRatio="xMinYMin meet" width="20" height="20" viewBox="0 0 20 20"
                                                                                      class="svg svg--location-pin svg-icon valign--middle" role="img">
                                                                                        <use xlink:href="#icon-location-pin--small"></use>
                                                                                    </svg></span></div>
                                                                            <div class="flex-item valign--middle">
                                                                                <div class="venueDisplay venueDisplay-venue padding--left-half text--secondary text--small"><address>
                                                                                        <p class="wrap--singleLine--truncate">Les Frangins</p>
                                                                                    </address></div>
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
                                                                        <li class="avatarRow-item display--inline" style="z-index: 3;"><span class="avatar avatar--small avatar--person" role="img" aria-label="Silex Labs"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/d/0/6/5/thumb_244973349.jpeg&quot;);"><span class="visibility--a11yHide">Silex
                                                                                    Labs</span><img class="avatar-print" src="https://secure.meetupstatic.com/photos/member/d/0/6/5/thumb_244973349.jpeg" alt="Silex Labs"></span></li>
                                                                        <li class="avatarRow-item display--inline" style="z-index: 2;"><span class="avatar avatar--small avatar--person avatar--noPhoto" role="img" aria-label="Franc"><span
                                                                                  class="visibility--a11yHide">Franc</span><span class="avatarIcon--noPhoto display--inlineFlex"><svg preserveAspectRatio="xMinYMin meet" width="36" height="36"
                                                                                      viewBox="0 0 36 36" class="svg svg--profile svg-icon valign--middle" role="img">
                                                                                        <use xlink:href="#icon-profile"></use>
                                                                                    </svg></span></span></li>
                                                                        <li class="avatarRow-item display--inline" style="z-index: 1;"><span class="avatar avatar--small avatar--person" role="img" aria-label="Antoine Smagghe"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/e/6/b/9/thumb_298439065.jpeg&quot;);"><span class="visibility--a11yHide">Antoine
                                                                                    Smagghe</span><img class="avatar-print" src="https://secure.meetupstatic.com/photos/member/e/6/b/9/thumb_298439065.jpeg" alt="Antoine Smagghe"></span></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="flex-item">
                                                                    <div class="flex flex--row flex--flexEnd flex--alignCenter">
                                                                        <div class="flex-item flex-item--shrink eventCard--clickable"><a data-swarm-button="default" data-swarm-size="default" data-icon="left" data-swarm-width="grow"
                                                                              class="padding--left padding--right" id="attendButton" href="/fr-FR/Silex-Labs-Aperopensource/events/xhwlsrybchblc/"><span>Participer</span></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="gridList-item flex-item">
                                            <div class="gridList-itemInner">
                                                <div class="card card--hasHoverShadow eventCard relatedEvents-card border--none buttonPersonality" id="relatedEvents--eventCard-270439747"><a class="eventCard--link"
                                                      href="/fr-FR/Ironhack-Paris/events/270439747/"><span class="visibility--a11yHide">[VIRTUAL] HACKSHOW Web Development, UX/UI Design &amp; Data Analytics</span></a>
                                                    <div class="flex flex--column flex--spaceBetween">
                                                        <div class="flex-item flex-item--shrink">
                                                            <div class="eventCardHead">
                                                                <div class="flex flex--row">
                                                                    <div class="flex-item">
                                                                        <div class="eventTimeDisplay text--labelSecondary text--small wrap--singleLine--truncate margin--halfBottom color-viridian"><time class="" datetime="1590424200000"><span
                                                                                  class="eventTimeDisplay-startDate"><span>lun. 25 mai</span>, <span class="eventTimeDisplay-startDate"><span>18:30 UTC+2</span></span></span></time></div>
                                                                        <div class="text--ellipsisTwoLines text--sectionTitle margin--halfBottom"><a class="eventCardHead--title" href="/fr-FR/Ironhack-Paris/events/270439747/">[VIRTUAL] HACKSHOW Web
                                                                                Development, UX/UI Design &amp; Data Analytics</a></div><a class="eventCardHead--groupLink" href="/fr-FR/Ironhack-Paris">
                                                                            <div class="eventCardHead--groupName wrap--singleLine--truncate text--primary margin--halfBottom">Ironhack Paris</div>
                                                                        </a>
                                                                        <div class="flex flex--row flex--noGutters flex--alignCenter margin--halfBottom">
                                                                            <div class="flex-item flex-item--shrink text--secondary"><svg data-swarm-icon="true" height="24" width="24" viewBox="0 0 24 24" class="valign--middle">
                                                                                    <path
                                                                                      d="M13 5.5A1.5 1.5 0 0114.5 7v10a1.5 1.5 0 01-1.5 1.5H3A1.5 1.5 0 011.5 17V7A1.5 1.5 0 013 5.5zm7.168 1.12A1.5 1.5 0 0122.5 7.87v8.262a1.5 1.5 0 01-2.332 1.249L15.5 14.268V9.732zM13 6.5H3a.5.5 0 00-.5.5v10a.5.5 0 00.5.5h10a.5.5 0 00.5-.5V7a.5.5 0 00-.5-.5zm8.416 1.091a.5.5 0 00-.693-.139L16.5 10.267v3.465l4.223 2.816a.5.5 0 00.18.074l.097.01a.5.5 0 00.5-.5V7.868a.5.5 0 00-.084-.278z">
                                                                                    </path>
                                                                                </svg></div>
                                                                            <div class="flex-item valign--middle">
                                                                                <div class="venueDisplay venueDisplay-venue padding--left-half text--secondary text--small"><address>
                                                                                        <p class="wrap--singleLine--truncate">Événement en ligne</p>
                                                                                    </address></div>
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
                                                                        <li class="avatarRow-item display--inline" style="z-index: 3;"><span class="avatar avatar--small avatar--person" role="img" aria-label="Ironhack Paris - Events"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/2/b/9/thumb_296880697.jpeg&quot;);"><span class="visibility--a11yHide">Ironhack Paris -
                                                                                    Events</span><img class="avatar-print" src="https://secure.meetupstatic.com/photos/member/2/b/9/thumb_296880697.jpeg" alt="Ironhack Paris - Events"></span></li>
                                                                        <li class="avatarRow-item display--inline" style="z-index: 2;"><span class="avatar avatar--small avatar--person" role="img" aria-label="cloqui"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/3/9/7/c/thumb_288554716.jpeg&quot;);"><span class="visibility--a11yHide">cloqui</span><img
                                                                                  class="avatar-print" src="https://secure.meetupstatic.com/photos/member/3/9/7/c/thumb_288554716.jpeg" alt="cloqui"></span></li>
                                                                        <li class="avatarRow-item display--inline" style="z-index: 1;"><span class="avatar avatar--small avatar--person" role="img" aria-label="Sara Navarro Medina"
                                                                              style="background-image: url(&quot;https://secure.meetupstatic.com/photos/member/3/9/f/a/thumb_160694842.jpeg&quot;);"><span class="visibility--a11yHide">Sara Navarro
                                                                                    Medina</span><img class="avatar-print" src="https://secure.meetupstatic.com/photos/member/3/9/f/a/thumb_160694842.jpeg" alt="Sara Navarro Medina"></span></li>
                                                                        <li class="avatarRow--attendingCount display--inline text--small text--secondary">
                                                                            <div class="display--inline">+93</div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="flex-item">
                                                                    <div class="flex flex--row flex--flexEnd flex--alignCenter">
                                                                        <div class="flex-item flex-item--shrink eventCard--clickable"><a data-swarm-button="default" data-swarm-size="default" data-icon="left" data-swarm-width="grow"
                                                                              class="padding--left padding--right" id="attendButton" href="/fr-FR/Ironhack-Paris/events/270439747/"><span>Participer</span></a></div>
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
        --}}
    </div>

</main>


@endsection

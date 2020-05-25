@extends('layouts.menu')
@section('title', 'Créer un événeemnt')

@section('content')

<style media="screen">
/*! CSS Used from: https://cdn.evbstatic.com/s3-build/fe/eds-static/81.9.2/eds.css */
aside{display:block;}
a{background-color:transparent;}
a:active,a:hover{outline:0;}
h1{font-size:2em;margin:.67em 0;}
svg:not(:root){overflow:hidden;}
hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;}
button,input,select{color:inherit;font:inherit;margin:0;}
button{overflow:visible;}
button,select{text-transform:none;}
button{-webkit-appearance:button;cursor:pointer;}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0;}
input{line-height:normal;}
input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0;}
fieldset{border:0;margin:0 2px;padding:.35em .625em .75em;}
div,fieldset,form,h1,input,p{margin:0;padding:0;}
.eds-align--right{display:-webkit-box;display:-ms-flexbox;display:flex;}
.eds-align--right{-webkit-box-pack:end;-ms-flex-pack:end;justify-content:flex-end;}
.eds-autocomplete-field__dropdown-holder{position:relative;}
.eds-btn{-webkit-transform:translateZ(0);transform:translateZ(0);position:relative;height:44px;padding:0 30px 1px;-webkit-box-sizing:border-box;box-sizing:border-box;text-align:center;text-decoration:none;line-height:24px;font-weight:600;letter-spacing:.2px;color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);background:transparent;border:2px solid #a9a8b3;border:2px solid var(--eds-ui-500,#a9a8b3);border-radius:4px;cursor:pointer;-webkit-transition:all .4s cubic-bezier(.4,0,.3,1);transition:all .4s cubic-bezier(.4,0,.3,1);}
.eds-btn:after,.eds-btn:before{content:"";position:absolute;z-index:-200;left:-2px;right:-2px;top:-2px;bottom:-2px;-webkit-transition:all .4s cubic-bezier(.4,0,.3,1);transition:all .4s cubic-bezier(.4,0,.3,1);border-radius:4px;background:#fff;background:var(--eds-background,#fff);opacity:0;}
.eds-btn:before{z-index:-190;}
.eds-btn:focus,.eds-btn:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);}
.eds-btn:active,.eds-btn:focus,.eds-btn:hover{border-color:#6f7287;border-color:var(--eds-ui-600,#6f7287);outline:none;text-decoration:none;}
.eds-btn:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);}
.eds-btn--link{border-color:transparent;color:#3659e3;color:var(--eds-control,#3659e3);}
.eds-btn--link:focus,.eds-btn--link:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);border-color:#f8f7fa;border-color:var(--eds-ui-100,#f8f7fa);color:#3d64ff;color:var(--eds-control--hover,#3d64ff);}
.eds-btn--link:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);border-color:#eeedf2;border-color:var(--eds-ui-200,#eeedf2);color:#304fc9;color:var(--eds-control--active,#304fc9);}
.eds-btn--neutral{color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);background:#fff;background:var(--eds-background,#fff);border-color:#a9a8b3;border-color:var(--eds-ui-500,#a9a8b3);}
.eds-btn--neutral:focus,.eds-btn--neutral:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);}
.eds-btn--neutral:active,.eds-btn--neutral:focus,.eds-btn--neutral:hover{border-color:#6f7287;border-color:var(--eds-ui-600,#6f7287);color:#39364f;color:var(--eds-ui-800,#39364f);}
.eds-btn--neutral:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);}
.eds-btn.eds-btn--block{display:block;-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;}
.eds-btn--anchor,.eds-btn--none{background:none;border:none;padding:0;text-align:left;color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);}
.eds-btn--anchor:hover,.eds-btn--none:hover{text-decoration:none;color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);background:none;}
.eds-btn--anchor:active,.eds-btn--anchor:focus,.eds-btn--anchor:link,.eds-btn--none:active,.eds-btn--none:focus,.eds-btn--none:link{color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);background:none;outline:none;}
.eds-btn-toggle{display:inline-block;}
.eds-checkbox{position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}
.eds-checkbox__label{margin-left:16px;margin-right:12px;cursor:pointer;color:#39364f;color:var(--eds-ui-800,#39364f);}
.eds-checkbox__label span{display:block;}
.eds-checkbox__input{visibility:visible;position:absolute;left:-9999px;}
.eds-checkbox__background,.eds-checkbox__checkmark,.eds-checkbox__foreground{position:absolute;top:0;left:0;width:20px;height:20px;-webkit-transform:scale(0);transform:scale(0);}
.eds-checkbox__background{background-color:#3659e3;background-color:var(--eds-control,#3659e3);}
.eds-checkbox__delegate{margin:0;background-color:#fff;background-color:var(--eds-background,#fff);border:1px solid #dbdae3;border:1px solid var(--eds-ui-300,#dbdae3);border-radius:2px;position:relative;width:20px;height:20px;line-height:0;-webkit-transition:border-color .16s ease-in;transition:border-color .16s ease-in;-webkit-box-flex:0;-ms-flex:none;flex:none;display:inline-block;}
.eds-checkbox__delegate:focus,.eds-checkbox__delegate:hover{border-color:#a9a8b3;border-color:var(--eds-ui-500,#a9a8b3);}
.eds-checkbox__delegate:focus .eds-checkbox__background,.eds-checkbox__delegate:hover .eds-checkbox__background{background-color:#fff;background-color:var(--eds-background,#fff);}
.eds-checkbox__delegate:active{border-color:#304fc9;border-color:var(--eds-control--active,#304fc9);}
.eds-checkbox__delegate:active .eds-checkbox__background{background-color:#fff;background-color:var(--eds-background,#fff);}
.eds-checkbox__checkmark i,.eds-checkbox__checkmark i svg{width:20px;height:20px;}
.eds-checkbox__foreground{background:#fff;opacity:.01;}
.eds-checkbox__input:focus:checked~.eds-checkbox__delegate,.eds-checkbox__input:focus~.eds-checkbox__delegate{border-color:#3d64ff;border-color:var(--eds-control--hover,#3d64ff);}
.eds-checkbox__input:focus:checked~.eds-checkbox__delegate .eds-checkbox__background{background-color:#3d64ff;background-color:var(--eds-control--hover,#3d64ff);}
.eds-checkbox__input:checked~.eds-checkbox__delegate{border-color:#3659e3;border-color:var(--eds-control,#3659e3);}
.eds-checkbox__input:checked~.eds-checkbox__delegate:hover{border-color:#3d64ff;border-color:var(--eds-control--hover,#3d64ff);}
.eds-checkbox__input:checked~.eds-checkbox__delegate:hover .eds-checkbox__background{background-color:#3d64ff;background-color:var(--eds-control--hover,#3d64ff);}
.eds-checkbox__input:checked~.eds-checkbox__delegate:active{border-color:#304fc9;border-color:var(--eds-control--active,#304fc9);}
.eds-checkbox__input:checked~.eds-checkbox__delegate:active .eds-checkbox__background{background-color:#304fc9;background-color:var(--eds-control--active,#304fc9);}
.eds-checkbox__input:checked~.eds-checkbox__delegate .eds-checkbox__background,.eds-checkbox__input:checked~.eds-checkbox__delegate .eds-checkbox__checkmark{-webkit-transition:all .16s cubic-bezier(.4,0,.3,1);transition:all .16s cubic-bezier(.4,0,.3,1);-webkit-transform:scale(1);transform:scale(1);}
.eds-checkbox__input:checked~.eds-checkbox__delegate .eds-checkbox__checkmark{-webkit-transition-delay:.16s;transition-delay:.16s;}
.eds-checkbox__input:disabled~.eds-checkbox__delegate,.eds-checkbox__input:disabled~.eds-checkbox__delegate:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);border:1px solid #dbdae3;border:1px solid var(--eds-ui-300,#dbdae3);cursor:not-allowed;}
.eds-checkbox__input:disabled~.eds-checkbox__delegate .eds-checkbox__background,.eds-checkbox__input:disabled~.eds-checkbox__delegate:hover .eds-checkbox__background{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);}
.eds-checkbox__input:disabled~.eds-checkbox__delegate .eds-checkbox__checkmark i path,.eds-checkbox__input:disabled~.eds-checkbox__delegate:hover .eds-checkbox__checkmark i path{stroke:#a9a8b3!important;stroke:var(--eds-ui-500,#a9a8b3)!important;}
body{
	background-color: #ececec8f!important;
	/*background-image: url(/assets/main_theme/medium/img/event.jpg);
	background-repeat: no-repeat;
	background-size: cover;*/

}

.form-1{display: none;}
.eds-checkbox__input:disabled~.eds-checkbox__label{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);cursor:not-allowed;}
body .eds-text-color--grey-700{color:#4b4d63;}
body .eds-text-color--grey-800{color:#39364f;}
body .eds-bg-color--grey-800{background-color:#39364f;}
body .eds-text-color--grey-900{color:#1e0a3c;}
.eds-text-bm,.eds-text-bs,.eds-text-hm{text-rendering:optimizeLegibility;}
.eds-text-bm{font-size:1rem;line-height:1.5rem;font-weight:400;}
@media (min-width:960px){
.eds-text-hm{font-size:1.875rem;line-height:2.5rem;letter-spacing:.5px;margin-right:-.5px;}
.eds-text-bm{font-size:.875rem;line-height:1.25rem;}
.eds-text-bs{font-size:.75rem;line-height:1rem;}
}
.eds-text-bm,.eds-text-bs,.eds-text-hm{text-rendering:optimizeLegibility;}
.eds-text-bm{font-size:1rem;line-height:1.5rem;font-weight:400;}
@media (min-width:960px){
.eds-text-hm{font-size:1.875rem;line-height:2.5rem;letter-spacing:.5px;margin-right:-.5px;}
.eds-text-bm{font-size:.875rem;line-height:1.25rem;}
.eds-text-bs{font-size:.75rem;line-height:1rem;}
}
.eds-divider__hr{border:0;margin:0;}
.eds-divider__hr.eds-divider--horizontal{width:100%;height:1px;}
.eds-expansion-panel{color:#39364f;color:var(--eds-ui-800,#39364f);}
.eds-expansion-panel:active,.eds-expansion-panel:hover{text-decoration:none;color:#39364f;}
.eds-expansion-panel>.eds-btn-toggle{width:100%;}
.eds-expansion-panel button:focus{color:#39364f;}
.eds-expansion-panel__link-text{display:inline-block;}
.eds-g-cell{-webkit-box-sizing:border-box;box-sizing:border-box;display:inline-block;overflow:hidden;vertical-align:top;}
.eds-g-grid,.eds-g-group{font-size:0;letter-spacing:0;}
.eds-g-grid{margin-left:auto;margin-right:auto;}
.eds-g-cell{font-size:14px;line-height:22px;font-weight:400;}
.eds-g-cell.eds-g-cell--has-overflow{overflow:visible;}
.eds-g-cell-1-12{width:8.33333%;}
.eds-g-cell-4-12{width:33.33333%;}
.eds-g-cell-8-12{width:66.66667%;}
.eds-g-cell-12-12{width:100%;}
.eds-g-cell-1-1{width:100%;}
.eds-g-offset-1-12{margin-left:8.33333%;}
@media (min-width:480px){
.eds-g-cell-sm-6-12{width:50%;}
}
@media (min-width:660px){
.eds-g-cell-sw-3-12{width:25%;}
.eds-g-cell-sw-6-12{width:50%;}
.eds-g-cell-sw-9-12{width:75%;}
.eds-g-cell-sw-10-12{width:83.33333%;}
.eds-g-offset-sw-1-12{margin-left:8.33333%;}
}
@media (min-width:792px){
.eds-g-cell-mn-4-12{width:33.33333%;}
.eds-g-cell-mn-8-12{width:66.66667%;}
.eds-g-cell-mn-9-12{width:75%;}
.eds-g-cell-mn-1-2{width:50%;}
}
@media (min-width:960px){
.eds-g-cell-md-8-12{width:66.66667%;}
.eds-g-cell-md-1-2{width:50%;}
.eds-g-cell-md-1-1{width:100%;}
.eds-g-offset-md-0-12{margin-left:0;}
}
@media (min-width:1080px){
.eds-g-cell-mw-9-12{width:75%;}
}
@media (min-width:1152px){
.eds-g-cell-ln-8-12{width:66.66667%;}
.eds-g-cell-ln-9-12{width:75%;}
}
@media (min-width:1272px){
.eds-g-cell-lg-8-12{width:66.66667%;}
.eds-g-cell-lg-9-12{width:75%;}
}
@media (min-width:1608px){
.eds-g-cell-lw-9-12{width:75%;}
}
.eds-icon--small,.eds-icon--small svg{width:24px;height:24px;}
.eds-icon--medium,.eds-icon--medium svg{width:48px;height:48px;}
.eds-icon-button--neutral button,.eds-icon-button button{color:#4b4d63;color:var(--eds-ui-700,#4b4d63);fill:#4b4d63;fill:var(--eds-ui-700,#4b4d63);}
.eds-icon-button--neutral button:active,.eds-icon-button--neutral button:focus,.eds-icon-button--neutral button:hover,.eds-icon-button button:active,.eds-icon-button button:focus,.eds-icon-button button:hover{color:#39364f;color:var(--eds-ui-800,#39364f);fill:#39364f;fill:var(--eds-ui-800,#39364f);}
.eds-icon-button--neutral button:focus,.eds-icon-button--neutral button:hover,.eds-icon-button button:focus,.eds-icon-button button:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);}
.eds-icon-button--neutral button:active,.eds-icon-button button:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);}
.eds-icon-button{display:inline-block;}
.eds-icon-button button{border-radius:40px;height:40px;padding:8px;-webkit-transition:all .4s cubic-bezier(.4,0,.3,1);transition:all .4s cubic-bezier(.4,0,.3,1);width:40px;}
.eds-icon-button--outline button{background-color:#fff;background-color:var(--eds-background,#fff);border:1px solid #dbdae3;border:1px solid var(--eds-ui-300,#dbdae3);padding:7px;}
.eds-icon-button--outline button:focus,.eds-icon-button--outline button:hover{background-color:#fff;background-color:var(--eds-background,#fff);border-color:#a9a8b3;border-color:var(--eds-ui-500,#a9a8b3);}
.eds-icon-button--outline button:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);border-color:#6f7287;border-color:var(--eds-ui-600,#6f7287);}
.eds-field-styled__border-simulation{border-radius:2px;background:#dbdae3;background:var(--eds-ui-300,#dbdae3);padding:1px;position:relative;-webkit-transition:background .24s cubic-bezier(.4,0,.3,1);transition:background .24s cubic-bezier(.4,0,.3,1);}
.eds-field-styled__border-simulation:hover{background:#a9a8b3;background:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled__internal{background:#fff;background:var(--eds-background,#fff);border-radius:1px;border:1px solid #fff;border:1px solid var(--eds-background,#fff);}
.eds-field-styled__internal .eds-field-styled__label-wrapper{overflow:hidden;pointer-events:none;position:absolute;width:100%;-webkit-box-sizing:border-box;box-sizing:border-box;padding:12px;}
.eds-field-styled__internal .eds-label-primary{color:#6f7287;color:var(--eds-ui-600,#6f7287);display:block;font-size:14px;line-height:22px;position:relative;-webkit-transition:all .16s cubic-bezier(.4,0,.3,1);transition:all .16s cubic-bezier(.4,0,.3,1);white-space:nowrap;overflow:hidden;}
.eds-field-styled__internal .eds-field-styled__label--required{display:-webkit-box;display:-ms-flexbox;display:flex;}
.eds-field-styled__internal .eds-field-styled__input{background:none;border:none;color:#39364f;color:var(--eds-ui-800,#39364f);font-size:16px;line-height:23px;min-height:23px;white-space:nowrap;outline:none;padding:12px;-webkit-transition:padding .16s cubic-bezier(.4,0,.3,1),color .4s cubic-bezier(.4,0,.3,1);transition:padding .16s cubic-bezier(.4,0,.3,1),color .4s cubic-bezier(.4,0,.3,1);}
.eds-field-styled__internal .eds-field-styled__input::-webkit-input-placeholder{color:transparent;}
.eds-field-styled__internal .eds-field-styled__input:-ms-input-placeholder{color:transparent;}
.eds-field-styled__internal .eds-field-styled__input::-ms-input-placeholder{color:transparent;}
.eds-field-styled__internal .eds-field-styled__input::placeholder{color:transparent;}
.eds-field-styled__internal .eds-field-styled__input::-moz-placeholder{color:transparent;}
@media (min-width:660px){
.eds-field-styled__internal .eds-field-styled__input{font-size:14px;line-height:22px;min-height:22px;}
}
.eds-field-styled__internal .eds-label__content{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;}
.eds-field-styled__internal:hover .eds-label-primary{color:#6f7287;color:var(--eds-ui-600,#6f7287);}
:root .eds-field-styled__internal .eds-field-styled__input{}
.eds-field-styled__aside{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);font-size:14px;height:24px;margin:auto 0;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;}
.eds-field-styled__aside-prefix{margin-left:12px;}
.eds-field-styled__annotation,.eds-field-styled__input,.eds-field-styled__input-container{-webkit-box-flex:1;flex:1;-ms-flex:1 1 0%;min-width:0;}
.eds-field-styled__input-container,.eds-field-styled__internal{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;position:relative;}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__label-wrapper{padding:2px 12px 0;}
.eds-field-styled--static .eds-field-styled__internal .eds-label-primary{color:#6f7287;color:var(--eds-ui-600,#6f7287);font-size:12px;line-height:22px;}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input{padding:18px 12px 6px;}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input::-webkit-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input:-ms-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input::-ms-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input::placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--static .eds-field-styled__internal .eds-field-styled__input::-moz-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input{font-size:16px;line-height:22px;padding:12px 14px;}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input::-webkit-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input:-ms-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input::-ms-input-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input::placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input::-moz-placeholder{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);}
@media (min-width:660px){
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__input{font-size:14px;}
}
.eds-field-styled--basic .eds-field-styled__internal .eds-field-styled__select-value{padding-top:12px;}
.eds-field-styled--error .eds-field-styled__border-simulation,.eds-field-styled--error .eds-field-styled__border-simulation:hover{/*background:#c5162e;background:var(--eds-error,#c5162e);padding:1px;*/}
.eds-field-styled--error .eds-field-styled__annotation{color:#c5162e;color:var(--eds-error-text,#c5162e);}
.eds-field-styled--error .eds-field-styled__internal .eds-label-primary{color:#000!important;color:var(--eds-error-text,#c5162e);}
.eds-field-styled__select-wrapper{width:100%;height:46px;position:relative;}
.eds-field-styled__select-value{color:#39364f;color:var(--eds-ui-800,#39364f);display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;line-height:22px;padding:18px 12px 4px 14px;}
.eds-field-styled__select-value-text{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;}
.eds-field-styled__select{width:100%;height:100%;cursor:pointer;position:absolute;top:0;left:0;opacity:0;overflow:hidden;-webkit-appearance:menulist-button;}
.eds-field-styled__select-icon{-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;height:24px;margin-top:-6px;}
.eds-field-styled--basic .eds-field-styled__select-icon{margin-top:0;}
.eds-field-styled__select-icon{fill:#4b4d63;fill:var(--eds-ui-700,#4b4d63);}
.eds-field__sub{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
.eds-field__sub .eds-field__sub--left,.eds-field__sub .eds-field__sub--right{-webkit-box-flex:1;-ms-flex:1 1 auto;flex:1 1 auto;}
.eds-field__sub .eds-field__sub--right{text-align:right;}
.eds-label-primary,label.eds-label-primary{color:#39364f;color:var(--eds-ui-800,#39364f);}
.eds-label__content{display:inherit;}
.eds-label__required-indicator{color:#c5162e;color:var(--eds-error-text,#c5162e);padding-left:2px;}
.eds-layout--has-horizontal-gutters>.eds-layout__body{padding:0 16px;}
@media (min-width:792px){
.eds-layout--has-horizontal-gutters>.eds-layout__body{padding:0 24px;}
}
@media (min-width:1152px){
.eds-layout--has-horizontal-gutters>.eds-layout__body{padding:0 48px;}
}
@media (min-width:1608px){
.eds-layout--has-horizontal-gutters>.eds-layout__body{padding:0 72px;}
}
.eds-link,a{text-decoration:none;color:#3659e3;color:var(--eds-control,#3659e3);}
.eds-link:active,.eds-link:focus,.eds-link:hover,a:active,a:focus,a:hover{text-decoration:underline;}
.eds-link:hover,a:hover{color:#3d64ff;color:var(--eds-control--hover,#3d64ff);}
.eds-link:active,.eds-link:focus,a:active,a:focus{color:#304fc9;color:var(--eds-control--active,#304fc9);}
.eds-fx--fade-in{-webkit-animation-name:fadeIn;animation-name:fadeIn;}
.eds-fx--fade-in{opacity:0;}
.eds-fx--fade-in{-webkit-animation-duration:.24s;animation-duration:.24s;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:1;animation-iteration-count:1;-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;}
.eds-notification-bar{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);color:#39364f;color:var(--eds-ui-800,#39364f);-webkit-box-shadow:0 4px 8px 0 rgba(40,44,53,.06),0 2px 2px 0 rgba(40,44,53,.06);box-shadow:0 4px 8px 0 rgba(40,44,53,.06),0 2px 2px 0 rgba(40,44,53,.06);border-radius:0 0 2px 2px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:distribute;justify-content:space-around;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-sizing:border-box;box-sizing:border-box;padding:0 24px;width:100%;}
.eds-notification-bar .eds-notification-bar__close button:focus,.eds-notification-bar .eds-notification-bar__close button:hover{background-color:#f8f7fa;background-color:var(--eds-ui-100,#f8f7fa);}
.eds-notification-bar .eds-notification-bar__close button:active{background-color:#eeedf2;background-color:var(--eds-ui-200,#eeedf2);}
.eds-notification-bar.eds-notification-bar--has-close{padding-right:8px;}
@media (max-width:792px){
.eds-notification-bar{-webkit-box-align:start;-ms-flex-align:start;align-items:flex-start;}
}
.eds-notification-bar .eds-notification-bar__content{-webkit-box-align:center;-ms-flex-align:center;align-items:center;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-flex:1;-ms-flex:1;flex:1;line-height:1.25rem;min-height:48px;}
.eds-notification-bar .eds-notification-bar__content a{font-weight:600;}
@media (max-width:792px){
.eds-notification-bar .eds-notification-bar__content{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-flow:row wrap;flex-flow:row wrap;}
}
.eds-notification-bar .eds-notification-bar__content-child{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;padding:12px 0;}
.eds-notification-bar .eds-notification-bar__icon{margin-top:4px;padding-bottom:8px;padding-right:16px;padding-top:8px;}
.eds-notification-bar .eds-notification-bar__close{padding:4px 0 4px 24px;}
.eds-text-bm,.eds-text-bs,.eds-text-hm{text-rendering:optimizeLegibility;}
.eds-text-hm{color:#1e0a3c;color:var(--eds-ui-900,#1e0a3c);}
.eds-text-hm{font-size:1.75rem;line-height:2.25rem;letter-spacing:.75px;margin-right:-.75px;font-weight:700;}
.eds-text-bm{font-size:1rem;line-height:1.5rem;font-weight:400;}
.eds-text-bs{font-size:.875rem;line-height:1.25rem;}
@media (min-width:960px){
.eds-text-hm{font-size:1.875rem;line-height:2.5rem;letter-spacing:.5px;margin-right:-.5px;}
.eds-text-bm{font-size:.875rem;line-height:1.25rem;}
.eds-text-bs{font-size:.75rem;line-height:1rem;}
}
.eds-l-pad-vert-1{padding-top:4px;padding-bottom:4px;}
.eds-l-pad-top-1{padding-top:4px;}
.eds-l-pad-all-2{padding:8px;}
.eds-l-pad-hor-2{padding-left:8px;padding-right:8px;}
.eds-l-pad-left-2{padding-left:8px;}
.eds-l-pad-right-2{padding-right:8px;}
.eds-l-pad-vert-3{padding-top:12px;padding-bottom:12px;}
.eds-l-pad-left-4{padding-left:16px;}
.eds-l-pad-top-5{padding-top:20px;}
.eds-l-pad-bot-12{padding-bottom:48px;}
@media (min-width:792px) and (max-width:959px){
.eds-l-mn-pad-left-2{padding-left:8px;}
.eds-l-mn-pad-right-2{padding-right:8px;}
}
@media (min-width:960px) and (max-width:1079px){
.eds-l-md-pad-left-2{padding-left:8px;}
.eds-l-md-pad-right-2{padding-right:8px;}
}
@media (min-width:1080px) and (max-width:1151px){
.eds-l-mw-pad-left-2{padding-left:8px;}
.eds-l-mw-pad-right-2{padding-right:8px;}
}
@media (min-width:1152px) and (max-width:1271px){
.eds-l-ln-pad-left-2{padding-left:8px;}
.eds-l-ln-pad-right-2{padding-right:8px;}
}
@media (min-width:1272px) and (max-width:1607px){
.eds-l-lg-pad-left-2{padding-left:8px;}
.eds-l-lg-pad-right-2{padding-right:8px;}
}
@media (min-width:1608px){
.eds-l-lw-pad-left-2{padding-left:8px;}
.eds-l-lw-pad-right-2{padding-right:8px;}
}
.eds-l-mar-bot-2{margin-bottom:8px; display: inline-flex;}
.eds-l-mar-right-4{margin-right:16px;}
.eds-l-mar-top-4{margin-top:16px;}
.eds-l-mar-bot-4{margin-bottom:16px;}
.eds-l-mar-top-5{margin-top:20px;}
.eds-l-mar-bot-5{margin-bottom:20px;}
.eds-l-mar-top-6{margin-top:24px;}
.eds-l-mar-bot-8{margin-bottom:32px;}
.eds-l-mar-top-10{margin-top:40px;}
.eds-l-mar-bot-12{margin-bottom:0px;}
.box{
	box-shadow: -2px 0px 4px 1px #e0e0e0;
    padding: 20px;
    border-radius: 15px;
}
body .eds-bg-color--ui-200{background-color:#eeedf2;background-color:var(--eds-ui-200,var(--eds-ui-200,#eeedf2));}
.eds-timepicker{position:relative;}
.eds-text-bm,.eds-text-bs,.eds-text-hm{text-rendering:optimizeLegibility;}
.eds-text-hm{color:#1e0a3c;color:var(--eds-ui-900,#1e0a3c);}
.eds-text-hm{font-size:1.75rem;line-height:2.25rem;letter-spacing:.75px;margin-right:-.75px;font-weight:700;}
.eds-text-bm{font-size:1rem;line-height:1.5rem;font-weight:400;}
.eds-text-bs{font-size:.875rem;line-height:1.25rem;}
@media (min-width:960px){
.eds-text-hm{font-size:1.875rem;line-height:2.5rem;letter-spacing:.5px;margin-right:-.5px;}
.eds-text-bm{font-size:.875rem;line-height:1.25rem;}
.eds-text-bs{font-size:.75rem;line-height:1rem;}
}
.eds-text--left{text-align:left;}
.eds-text--center{text-align:center;}
.eds-text-weight--heavy{font-weight:600;}
.eds-vector-image{display:inline-block;margin:0 auto;vertical-align:middle;background-size:contain;line-height:0;}
.eds-vector-image--grey-300 svg path{fill:#dbdae3!important;}
.eds-vector-image--grey-700 svg path{fill:#4b4d63!important;}
.eds-vector-image--grey-800 svg path{fill:#39364f!important;}
.eds-vector-image--white svg path{fill:#fff!important;}
.eds-vector-image--stroke-white svg path{stroke:#fff!important;}
.eds-vector-image--block{display:block;}
.eds-is-hidden-accessible{position:absolute;left:-999999px;}
@media (max-width:480px){
.eds-show-up-md,.eds-show-up-sw{display:none!important;}
.eds-align--sn-left{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;}
.eds-align--sn-left{display:-webkit-box;display:-ms-flexbox;display:flex;}
}
@media (min-width:480px) and (max-width:659px){
.eds-show-up-md,.eds-show-up-sw{display:none!important;}
.eds-align--sm-left{-webkit-box-pack:start;-ms-flex-pack:start;justify-content:flex-start;}
.eds-align--sm-left{display:-webkit-box;display:-ms-flexbox;display:flex;}
}
@media (min-width:660px) and (max-width:791px){
.eds-show-up-md{display:none!important;}
.eds-align--sw-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
@media (min-width:792px) and (max-width:959px){
.eds-show-up-md{display:none!important;}
.eds-align--mn-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
@media (min-width:960px) and (max-width:1079px){
.eds-align--md-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
@media (min-width:1080px) and (max-width:1151px){
.eds-align--mw-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
@media (min-width:1152px) and (max-width:1271px){
.eds-align--ln-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
@media (min-width:1608px){
.eds-align--lw-space-between{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;}
}
/*! CSS Used from: https://cdn.evbstatic.com/s3-build/fe/build/create.50d5cdbb2cab64fdd9ab.css */
.radio-selector{display:flex;}
.radio-selector-label-wrap{flex-grow:1;display:flex;}
.radio-selector-label{background-color:#fff;border-radius:4px;border:1px solid #dbdae3;cursor:pointer;flex-grow:1;text-align:center;white-space:nowrap;}
.radio-selector-label--checked{background-color:rgba(61, 100, 255, 0.1);border:1px solid #3d64ff;color:#3d64ff;}
.radio-selector-label input{width:0;height:0;line-height:0;margin:0;padding:0;position:absolute;top:-99999px;left:-99999px;}
.eds-layout--has-horizontal-gutters > .eds-layout__body{padding:0 16px;}
@media (min-width: 792px){
.eds-layout--has-horizontal-gutters > .eds-layout__body{padding:0 24px;}
}
@media (min-width: 1152px){
.eds-layout--has-horizontal-gutters > .eds-layout__body{padding:0 48px;}
}
@media (min-width: 1608px){
.eds-layout--has-horizontal-gutters > .eds-layout__body{padding:0 72px;}
}
.flow-tip__container{position:relative;}
.flow-tip__container svg path{fill:#3D64FF;}
.flow-tip__container--active > .eds-icon-button .eds-btn--button{background:#EEEDF2;}
.flow-tip__tooltip{position:absolute;width:200px;top:140px;right:220px;transform:translate(110%, -50%);padding:20px 16px;box-shadow:0 2px 8px 0 #d2d6df;background-color:#FFFFFF;border-radius:2px;box-sizing:border-box;z-index:2;animation-duration:240ms;animation-name:fade-in-down;animation-fill-mode:forwards;transition:visibility;visibility:hidden;}
.flow-tip__tooltip.flow-tip__tooltip--showing{animation-name:fade-in-down;visibility:visible;}
.flow-tip__close-container{position:absolute;top:0;right:0;animation-duration:240ms;animation-name:fade-in-down;}
.flow-tip__close-container svg path{fill:#6F7287;}
@media (min-width: 1152px){
.flow-tip__tooltip{top:50%;right:0;left:auto;transform:translate(110%, -50%);animation-name:fade-in-right;}
.flow-tip__tooltip.flow-tip__tooltip--showing{animation-name:fade-in-right;visibility:visible;}
.flow-tip__tooltip:before{content:'';position:absolute;left:-8px;top:50%;transform:translate(0, -50%) rotate(45deg);height:16px;width:16px;background-color:#FFFFFF;}
}
.tagging-form-field__tags-input .eds-field-styled{margin-bottom:0;}
.tagging-form-field__tags-aside{height:50px;align-items:center;}
.tagging-form-field__tag-button-container{width:100%;}
.tagging-form-field__tag-button-container > .eds-btn{height:50px;padding-left:4px;padding-right:4px;}
.eds-icon-button button{height:35px;width:35px;padding:0;}
.below-the-fold-indicator{border-radius:50%;box-shadow:0 1px 24px 0 rgba(40, 44, 53, 0.1), 0 2px 8px 0 rgba(40, 44, 53, 0.1);position:fixed;transition:bottom cubic-bezier(0.4, 0, 0.3, 1) 320ms;bottom:24px;right:50%;transform:translateX(50%);z-index:3;}
@media (min-width: 660px){
.below-the-fold-indicator{bottom:32px;right:48px;}
}
.below-the-fold-indicator.below-the-fold-indicator--moved-up{bottom:80px;}
.flow-tip__container{position:relative;}
.flow-tip__container svg path{fill:#3D64FF;}
.flow-tip__container--active > .eds-icon-button .eds-btn--button{background:#EEEDF2;}
.flow-tip__tooltip{position:absolute;width:200px;top:140px;right:220px;transform:translate(110%, -50%);padding:20px 16px;box-shadow:0 2px 8px 0 #d2d6df;background-color:#FFFFFF;border-radius:2px;box-sizing:border-box;z-index:2;animation-duration:240ms;animation-name:fade-in-down;animation-fill-mode:forwards;transition:visibility;visibility:hidden;}
.flow-tip__tooltip.flow-tip__tooltip--showing{animation-name:fade-in-down;visibility:visible;}
.flow-tip__close-container{position:absolute;top:0;right:0;animation-duration:240ms;animation-name:fade-in-down;}
.flow-tip__close-container svg path{fill:#6F7287;}
@media (min-width: 1152px){
.flow-tip__tooltip{top:50%;right:0;left:auto;transform:translate(110%, -50%);animation-name:fade-in-right;}
.flow-tip__tooltip.flow-tip__tooltip--showing{animation-name:fade-in-right;visibility:visible;}
.flow-tip__tooltip:before{content:'';position:absolute;left:-8px;top:50%;transform:translate(0, -50%) rotate(45deg);height:16px;width:16px;background-color:#FFFFFF;}
}
/*! CSS Used keyframes */
@-webkit-keyframes fadeIn{0%{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{0%{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fadeIn{from{opacity:0;}to{opacity:1;}}
@keyframes fade-in-down{from{opacity:0;transform:translate(110%, -70%);}to{opacity:1;transform:translate(110%, -50%);}}
@keyframes fade-in-down{from{opacity:0;transform:translate(110%, -70%);}to{opacity:1;transform:translate(110%, -50%);}}
@keyframes fade-in-right{from{opacity:0;transform:translate(95%, -50%);}to{opacity:1;transform:translate(110%, -50%);}}
@keyframes fade-in-right{from{opacity:0;transform:translate(95%, -50%);}to{opacity:1;transform:translate(110%, -50%);}}
</style>


<div class="eds-layout__body" data-spec="eds-layout__body">
    <div>
        <!--div class="eds-notification-bar--has-close eds-notification-bar eds-notification-bar--neutral" role="alert" data-spec="notification-bar">
            <div class="eds-notification-bar__icon"><i class="eds-vector-image eds-icon--small eds-vector-image--grey-700" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                        <defs>
                            <path id="lock-fill_svg__a"
                              d="M12 8V5a4.005 4.005 0 0 0-4.274-3.991C5.602 1.151 4 3.013 4 5.141V5.5a.5.5 0 1 1-1 0v-.344C3 2.558 4.917.278 7.502.024 10.473-.267 13 2.086 13 5v3h3v12H0V8h12zm-3.5 6.085a1.5 1.5 0 1 1-1 0V11.5h1v2.585z"></path>
                        </defs>
                        <g fill="none" fill-rule="evenodd" transform="translate(4 2)">
                            <mask id="lock-fill_svg__b" fill="#fff">
                                <use xlink:href="#lock-fill_svg__a"></use>
                            </mask>
                            <use fill="#45494E" transform="matrix(-1 0 0 1 16 0)" xlink:href="#lock-fill_svg__a"></use>
                            <g mask="url(#lock-fill_svg__b)">
                                <path fill="#000" d="M-4-2h24v24H-4z"></path>
                            </g>
                        </g>
                    </svg></i></div>
            <div class="eds-notification-bar__content">
                <div class="eds-notification-bar__content-child">
                    <div class="eds-g-grid">
                        <div class="eds-g-group">
                            <div class="eds-g-cell eds-g-cell-sw-9-12 eds-g-cell-12-12"><span>Vous avez débloqué nos Fonctionnalités Professional !</span></div>
                            <div class="eds-g-cell eds-g-cell-sw-3-12 eds-g-cell-12-12"><span class="eds-align--right eds-align--sn-left eds-align--sm-left"><a href="/organizer/change-plan/" class="eds-btn--link eds-btn--anchor eds-link">Consulter
                                        les tarifs</a></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eds-notification-bar__close eds-l-pad-right-2 eds-l-pad-vert-1"><span class="eds-icon-button eds-icon-button--neutral" data-spec="icon-button"><button data-spec="close-button"
                      class="eds-btn--button eds-btn--none eds-btn--icon-only" type="button"><i class="eds-vector-image eds-icon--small eds-vector-image--grey-700 eds-vector-image--block" title="Fermer" data-spec="icon"><svg viewBox="0 0 24 24">
                                <path d="M13.4 12l3.5-3.5-1.4-1.4-3.5 3.5-3.5-3.5-1.4 1.4 3.5 3.5-3.5 3.5 1.4 1.4 3.5-3.5 3.5 3.5 1.4-1.4z"></path>
                            </svg><span class="eds-is-hidden-accessible">Fermer</span></i></button></span></div>
        </div-->
        <div class="eds-g-grid eds-l-pad-bot-12 eds-l-pad-top-5 eds-l-mar-top-5 eds-l-mar-bot-12">
            <form>
                <div class="eds-g-group eds-l-mar-bot-8">
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-1-12 eds-g-offset-1-12 eds-show-up-md eds-l-pad-top-1"><i class="eds-vector-image eds-icon--medium eds-vector-image--grey-300" data-spec="icon" aria-hidden="true" style="display: none;"><svg
                              viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 2v3h1V3h5v10H6v1h5v-1H9V3h5v2h1V2H2z"></path>
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path d="M15 9h7v1h-7zM15 13h7v1h-7zM6 17h16v1H6zM6 21h16v1H6z"></path>
                                </g>
                            </svg></i></div>
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-12-12 eds-g-cell-sw-10-12 eds-g-cell-lw-9-12 eds-g-cell-lg-8-12 eds-g-cell-ln-8-12 eds-g-cell-md-8-12 eds-g-offset-sw-1-12 eds-g-offset-md-0-12 eds-g-cell--has-overflow box">
                        <div>
                            <h1 class="eds-text-hm eds-text-color--grey-900">Infos de base</h1>
                            <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-lw-9-12 eds-g-cell-lg-9-12 eds-g-cell-ln-9-12 eds-g-cell-mw-9-12 eds-g-cell-md-1-1 eds-g-cell-mn-9-12 eds-g-cell-sw-9-12">
                                <p class="eds-text-bm eds-text-color--grey-800"><span>Nommez votre événement et expliquez aux participants potentiels pourquoi ils doivent absolument venir. Ajoutez des infos soulignant son caractère unique.</span></p>
                            </div>
                        </div>
                        <div class="eds-l-mar-top-5">
                            <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--static eds-field-styled--error" data-automation="coyote-basicinfo-event-title-wrapper" data-spec="coyote-basicinfo-event-title">
                                <div class="eds-field-styled__border-simulation">
                                    <div class="eds-field-styled__internal">
                                        <div class="eds-field-styled__input-container">
                                            <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-basicInfo-title-label" for="event-basicInfo-title"
                                                  data-spec="label-label"><span class="eds-label__content">Nom de l'événement</span><span class="eds-label__required-indicator eds-text-bs" data-spec="required-indicator"><span> *</span><span
                                                          class="eds-is-hidden-accessible">(obligatoire)</span></span></label></div>
                                                          <input data-spec="input-field-input-element" aria-invalid="true" aria-required="true" class="eds-field-styled__input"
                                              data-automation="coyote-basicinfo-event-title" id="event-basicInfo-title" maxlength="75" name="name" role="textbox" type="text" value="" placeholder="Soyez clair et précis.">
                                        </div>
                                    </div>
                                    <input type="hidden" name="user_id">
                                </div>
                                <!--div class="eds-field__sub">
                                    <div class="eds-field__sub--left">
                                        <aside class="eds-field-styled__annotation eds-text-bs eds-fx--fade-in eds-l-pad-top-1" data-automation="eds-field-annotation" role="alert">Le titre est obligatoire.</aside>
                                    </div>
                                    <div class="eds-field__sub--right">
                                        <aside class="eds-field-styled__character-counter eds-text-bs eds-fx--fade-in eds-l-pad-top-1">0/75</aside>
                                    </div>
                                </div-->
                            </div>
                            <fieldset>
                                <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-mn-4-12 eds-l-mn-pad-right-2 eds-l-md-pad-right-2 eds-l-mw-pad-right-2 eds-l-ln-pad-right-2 eds-l-lg-pad-right-2 eds-l-lw-pad-right-2">
                                    <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--basic" data-automation="coyote-basicinfo-event-type-wrapper" data-spec="coyote-basicinfo-event-type">
                                        <div class="eds-field-styled__border-simulation">
                                            <div class="eds-field-styled__internal">
                                                <div class="eds-field-styled__input-container">
                                                    <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-is-hidden-accessible" id="undefined-label" data-spec="label-label"><span
                                                              class="eds-label__content">Type</span></label></div>
                                                    <div class="eds-field-styled__select-wrapper"><span class="eds-field-styled__select-value"><span class="eds-field-styled__select-value-text">Type</span><span class="eds-field-styled__select-icon"><i
                                                                  class="eds-vector-image eds-icon--small" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.2l5 5 5-5-1.4-1.4-3.6 3.6-3.6-3.6z"></path>
                                                                    </svg></i></span></span>
                                                                    <select aria-invalid="false" class="eds-field-styled__input eds-field-styled__select" data-automation="coyote-basicinfo-event-type" role="listbox" name="type">
                                                            <option value="" data-spec="select-option">Type</option>
                                                            <option value="17" data-spec="select-option">Attraction</option>
                                                            <option value="100" data-spec="select-option">Autre</option>
                                                            <option value="18" data-spec="select-option">Camp, voyage ou retraite</option>
                                                            <option value="6" data-spec="select-option">Concert ou spectacle</option>
                                                            <option value="1" data-spec="select-option">Conférence</option>
                                                            <option value="4" data-spec="select-option">Convention</option>
                                                            <option value="15" data-spec="select-option">Course ou compétition d'endurance</option>
                                                            <option value="8" data-spec="select-option">Dîner ou gala</option>
                                                            <option value="5" data-spec="select-option">Festival ou foire</option>
                                                            <option value="9" data-spec="select-option">Formation, cours ou atelier</option>
                                                            <option value="14" data-spec="select-option">Jeu ou compétition</option>
                                                            <option value="7" data-spec="select-option">Projection</option>
                                                            <option value="12" data-spec="select-option">Rally</option>
                                                            <option value="10" data-spec="select-option">Rencontre ou événement social</option>
                                                            <option value="3" data-spec="select-option">Salon professionnel, grand public ou exposition</option>
                                                            <option value="11" data-spec="select-option">Soirée ou activité sociale</option>
                                                            <option value="19" data-spec="select-option">Séance de dédicaces</option>
                                                            <option value="2" data-spec="select-option">Séminaire ou entretien</option>
                                                            <option value="13" data-spec="select-option">Tournoi</option>
                                                            <option value="16" data-spec="select-option">Visite</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="event-topic-subtopic eds-g-cell eds-g-cell-1-1 eds-g-cell-mn-8-12">
                                    <div
                                      class="eds-g-cell eds-g-cell-1-1 eds-g-cell-mn-1-2 eds-l-mn-pad-right-2 eds-l-md-pad-right-2 eds-l-mw-pad-right-2 eds-l-ln-pad-right-2 eds-l-lg-pad-right-2 eds-l-lw-pad-right-2 eds-l-mn-pad-left-2 eds-l-md-pad-left-2 eds-l-mw-pad-left-2 eds-l-ln-pad-left-2 eds-l-lg-pad-left-2 eds-l-lw-pad-left-2">
                                        <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--basic" data-automation="select-field-wrapper" data-spec="event-topic">
                                            <div class="eds-field-styled__border-simulation">
                                                <div class="eds-field-styled__internal">
                                                    <div class="eds-field-styled__input-container">
                                                        <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-is-hidden-accessible" id="undefined-label" data-spec="label-label"><span
                                                                  class="eds-label__content">Catégorie</span></label></div>
                                                        <div class="eds-field-styled__select-wrapper"><span class="eds-field-styled__select-value"><span class="eds-field-styled__select-value-text">Religion et spiritualité</span><span
                                                                  class="eds-field-styled__select-icon"><i class="eds-vector-image eds-icon--small" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.2l5 5 5-5-1.4-1.4-3.6 3.6-3.6-3.6z"></path>
                                                                        </svg></i></span></span><select aria-invalid="false" class="eds-field-styled__input eds-field-styled__select" role="listbox" name="eventTopic">
                                                                <option value="" data-spec="select-option">Catégorie</option>
                                                                <option value="120" data-spec="select-option">Activités scolaires</option>
                                                                <option value="105" data-spec="select-option">Arts du spectacle et de la scène</option>
                                                                <option value="118" data-spec="select-option">Automobiles, bateaux et avions</option>
                                                                <option value="199" data-spec="select-option">Autre</option>
                                                                <option value="103" data-spec="select-option">Concerts et spectacles</option>
                                                                <option value="115" data-spec="select-option">Famille et éducation</option>
                                                                <option value="104" data-spec="select-option">Films et divertissement</option>
                                                                <option value="116" data-spec="select-option">Fête et événement saisonnier</option>
                                                                <option value="110" data-spec="select-option">Gastronomie</option>
                                                                <option value="117" data-spec="select-option">Maison et mode de vie</option>
                                                                <option value="106" data-spec="select-option">Mode et beauté</option>
                                                                <option value="119" data-spec="select-option">Passions et loisirs</option>
                                                                <option value="112" data-spec="select-option">Politique et gouvernement</option>
                                                                <option value="114" data-spec="select-option">Religion et spiritualité</option>
                                                                <option value="107" data-spec="select-option">Santé et bien-être</option>
                                                                <option value="102" data-spec="select-option">Sciences et technologies</option>
                                                                <option value="108" data-spec="select-option">Sports et fitness</option>
                                                                <option value="109" data-spec="select-option">Voyages et activités de plein air</option>
                                                                <option value="113" data-spec="select-option">Événement communautaire et culturel</option>
                                                                <option value="101" data-spec="select-option">Événements professionnels</option>
                                                                <option value="111" data-spec="select-option">Œuvres de bienfaisance</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-mn-1-2 eds-l-mn-pad-left-2 eds-l-md-pad-left-2 eds-l-mw-pad-left-2 eds-l-ln-pad-left-2 eds-l-lg-pad-left-2 eds-l-lw-pad-left-2">
                                        <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--basic" data-automation="select-field-wrapper" data-spec="event-sub-topic">
                                            <div class="eds-field-styled__border-simulation">
                                                <div class="eds-field-styled__internal">
                                                    <div class="eds-field-styled__input-container">
                                                        <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-is-hidden-accessible" id="undefined-label" data-spec="label-label"><span
                                                                  class="eds-label__content">Sub-catégorie</span></label></div>
                                                        <div class="eds-field-styled__select-wrapper"><span class="eds-field-styled__select-value"><span class="eds-field-styled__select-value-text">Sub-catégorie</span><span
                                                                  class="eds-field-styled__select-icon"><i class="eds-vector-image eds-icon--small" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.2l5 5 5-5-1.4-1.4-3.6 3.6-3.6-3.6z"></path>
                                                                        </svg></i></span></span><select aria-invalid="false" class="eds-field-styled__input eds-field-styled__select" role="listbox" name="eventSubTopic">
                                                                <option value="" data-spec="select-option">Sub-catégorie</option>
                                                                <option value="14011" data-spec="select-option">Agnosticism</option>
                                                                <option value="14010" data-spec="select-option">Atheism</option>
                                                                <option value="14099" data-spec="select-option">Autre</option>
                                                                <option value="14005" data-spec="select-option">Buddisme</option>
                                                                <option value="14001" data-spec="select-option">Christianisme</option>
                                                                <option value="14014" data-spec="select-option">Folk Religions</option>
                                                                <option value="14013" data-spec="select-option">Hinduism</option>
                                                                <option value="14003" data-spec="select-option">Islam</option>
                                                                <option value="14002" data-spec="select-option">Judaïsme</option>
                                                                <option value="14004" data-spec="select-option">Mormonisme</option>
                                                                <option value="14008" data-spec="select-option">Mysticisme et sciences occultes</option>
                                                                <option value="14009" data-spec="select-option">New Age</option>
                                                                <option value="14007" data-spec="select-option">Religions d'Orient</option>
                                                                <option value="14015" data-spec="select-option">Shintoism</option>
                                                                <option value="14006" data-spec="select-option">Sikhisme</option>
                                                                <option value="14012" data-spec="select-option">Unaffiliated</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            -->
                            </fieldset>
                            <!--
                            <div class="tagging-form-field__container">
                                <div class="tagging-form-field__tags-input eds-l-mar-bot-4">
                                    <div class="eds-g-cell eds-g-cell-8-12 eds-l-pad-right-2">
                                        <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                            <div class="eds-field-styled__border-simulation">
                                                <div class="eds-field-styled__internal">
                                                    <div class="eds-field-styled__input-container">
                                                        <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary" id="tagging-form-field-label" for="tagging-form-field" data-spec="label-label"><span
                                                                  class="eds-label__content">Saisir la balise</span></label></div><input data-spec="input-field-input-element" aria-invalid="false" class="eds-field-styled__input"
                                                          id="tagging-form-field" maxlength="25" placeholder="Ajoutez des mots clés à votre événement" role="textbox" type="text" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="eds-field__sub">
                                                <div class="eds-field__sub--left">
                                                    <aside class="eds-field-styled__annotation eds-text-bs eds-fx--fade-in eds-l-pad-top-1" data-automation="eds-field-annotation" role="alert">0/10 tags.</aside>
                                                </div>
                                                <div class="eds-field__sub--right">
                                                    <aside class="eds-field-styled__character-counter eds-text-bs eds-fx--fade-in eds-l-pad-top-1">0/25</aside>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <aside class="eds-g-cell eds-g-cell-4-12 eds-g-cell--has-overflow eds-l-pad-left-2">
                                        <div
                                          class="tagging-form-field__tags-aside eds-align--right eds-align--sw-space-between eds-align--mn-space-between eds-align--md-space-between eds-align--mw-space-between eds-align--ln-space-between eds-align--l-space-between eds-align--lw-space-between">
                                            <div class="tagging-form-field__tag-button-container"><button class="eds-btn eds-btn--button eds-btn--neutral eds-btn--block" type="button">Ajouter</button></div>
                                            <div class="eds-l-pad-left-4 eds-show-up-sw">
                                                <div class="flow-tip__container flow-tip__container--active"><span class="eds-icon-button eds-icon-button--outline" data-spec="icon-button"><button
                                                          class="eds-btn--button eds-btn--none eds-btn--icon-only" type="button"><i class="eds-vector-image eds-icon--small eds-vector-image--block" title="Cliquer ici pour des conseils sur les balises"
                                                              data-spec="icon"><svg class="bolt-fill_svg__eds-icon--bolt-fill_svg" viewBox="0 0 24 24">
                                                                    <path class="bolt-fill_svg__eds-icon--bolt-fill_base" fill-rule="evenodd" clip-rule="evenodd" d="M12 2L5 15h7v7l7-13h-7z"></path>
                                                                </svg><span class="eds-is-hidden-accessible">Cliquer ici pour des conseils sur les balises</span></i></button></span>
                                                    <div class="flow-tip__tooltip flow-tip__tooltip--showing">
                                                        <div class="flow-tip__close-container"><span class="eds-icon-button eds-icon-button--neutral" data-spec="icon-button"><button class="eds-btn--button eds-btn--none eds-btn--icon-only"
                                                                  type="button"><i class="eds-vector-image eds-icon--small eds-vector-image--block" title="Cliquez pour fermer les infobulles de conseils" data-spec="icon"><svg viewBox="0 0 24 24">
                                                                            <path d="M13.4 12l3.5-3.5-1.4-1.4-3.5 3.5-3.5-3.5-1.4 1.4 3.5 3.5-3.5 3.5 1.4 1.4 3.5-3.5 3.5 3.5 1.4-1.4z"></path>
                                                                        </svg><span class="eds-is-hidden-accessible">Cliquez pour fermer les infobulles de conseils</span></i></button></span></div>
                                                        <div class="eds-text-bm eds-text-weight--heavy eds-l-mar-bot-2">Conseil professionnel</div>
                                                        <div>Améliorez la visibilité de votre événement en ajoutant les balises pertinentes au sujet</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        -->
                        <!--
                            <div>
                                <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                    <div class="eds-field-styled__border-simulation">
                                        <div class="eds-field-styled__internal">
                                            <div class="eds-field-styled__input-container">
                                                <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary" id="event-basicinfo-create-organizer-profile-label" for="event-basicinfo-create-organizer-profile"
                                                      data-spec="label-label"><span class="eds-label__content">Organisateur</span></label></div><input data-spec="input-field-input-element" aria-invalid="false" class="eds-field-styled__input"
                                                  id="event-basicinfo-create-organizer-profile" maxlength="75" name="organizerName" placeholder="Indiquez aux participants qui organisent cet événement." role="textbox" type="text" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p id="organizer-helper-text" class="eds-text-bs">Ce profil décrit un seul organisateur et affiche tous les événements sur une page. <a href="/myprofile" target="_blank" rel="noopener noreferrer">Voir les Infos sur
                                        l'Organisateur</a></p>
                            </div>
                            <div class="eds-l-mar-bot-5">
                                <div class="eds-text--left"><label class="eds-field-styled__label eds-is-hidden-accessible" data-spec="label-label"><span class="eds-label__content">Devise</span></label></div>
                                <div class=""><input type="hidden" value="EUR"></div>
                            </div>
                        </div>
                    </div>
                </div>
            -->
                <hr class="eds-divider__hr eds-bg-color--ui-200 eds-divider--horizontal" data-spec="divider-hr" aria-hidden="true">
                <div class="eds-l-mar-top-10 eds-g-group eds-l-mar-bot-8">
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-1-12 eds-g-offset-1-12 eds-show-up-md eds-l-pad-top-1" style="display: none;"><i class="eds-vector-image eds-icon--medium eds-vector-image--grey-300" data-spec="icon" aria-hidden="true" ><svg
                              viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M20 3c-1.1 0-2 .9-2 2H2v16h17.8c1.1 0 2.1-.9 2.1-2V5c.1-1.1-.8-2-1.9-2zm-.2 17H3V6h15v13h1c0-.6.4-1 1-1 .5 0 .9.4 1 .9-.1.6-.6 1.1-1.2 1.1zm1.2-2.7c-.3-.2-.6-.3-1-.3s-.7.1-1 .3V5c0-.6.4-1 1-1s1 .4 1 1v12.3z">
                                </path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.8 12.7l.7-.7-1.1-1 1.1-1-.7-.7-1.1 1-1-1-.7.7 1 1-1 1 .7.7 1-1zM12 10h2v1h-2zM15 12h1v2h-1zM12 15h2v1h-2zM8 15h2v1H8z"></path>
                            </svg></i></div>
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-12-12 eds-g-cell-sw-10-12 eds-g-cell-lw-9-12 eds-g-cell-lg-8-12 eds-g-cell-ln-8-12 eds-g-cell-md-8-12 eds-g-offset-sw-1-12 eds-g-offset-md-0-12 eds-g-cell--has-overflow">
                        <div>
                            <h1 class="eds-text-hm eds-text-color--grey-900">Lieu</h1>
                            <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-lw-9-12 eds-g-cell-lg-9-12 eds-g-cell-ln-9-12 eds-g-cell-mw-9-12 eds-g-cell-md-1-1 eds-g-cell-mn-9-12 eds-g-cell-sw-9-12">
                                <p class="eds-text-bm eds-text-color--grey-800"><span>Faites découvrir votre événement aux personnes de la région et faites-leur savoir où cela se passe.</span></p>
                            </div>
                        </div>
                        <div class="eds-l-mar-top-5"><input type="hidden" value="">
                            <div class="eds-g-grid">
                                <div class="eds-g-group">
                                    <div data-spec="coyote-basicinfo-location-event-picker" class="eds-g-cell eds-g-cell-1-1 eds-g-cell-md-8-12 eds-g-cell--has-overflow">
                                        <div class="radio-selector eds-l-mar-bot-5" role="radiogroup" data-spec="radio-selector">
                                            <div class="radio-selector-label-wrap eds-l-mar-right-4 segmented" data-spec="radio-selector-item-padding">
                                            	<label class="radio-selector-label eds-l-pad-hor-2 eds-l-pad-vert-3 eds-text-bm eds-text-color--grey-900"
                                                  for="segmented-venueType-0">Lieu
                                                </label>
                                                <input type="text" id="segmented-venueType-0" name="venueType" data-automation="segmented-venueType-0" data-spec="radio-selector-input" aria-checked="false" value=""
                                                      checked="">
                                            </div>

                                            <div class="radio-selector-label-wrap eds-l-mar-right-4" data-spec="radio-selector-item-padding">
                                            	<label class="radio-selector-label eds-l-pad-hor-2 eds-l-pad-vert-3 eds-text-bm eds-text-color--grey-900 segmented-venueType-1"
                                                  for="segmented-venueType-1">Événement en ligne
                                                  </label>
                                                  <input style="display: block;" type="text" id="segmented-venueType-1" name="venueType" data-automation="segmented-venueType-1" data-spec="radio-selector-input"
                                                      aria-checked="false" value="online">
                                              </div>
                                            <!--div class="radio-selector-label-wrap" data-spec="radio-selector-item-padding"><label class="radio-selector-label eds-l-pad-hor-2 eds-l-pad-vert-3 eds-text-bm radio-selector-label--checked"
                                                  for="segmented-venueType-2">À venir<input type="radio" id="segmented-venueType-2" name="venueType" data-automation="segmented-venueType-2" data-spec="radio-selector-input" aria-checked="true"
                                                      value="tba"></label></div-->
                                        </div>
                                    </div>
                                    <div class="form-group">
	                                    <div style="display: none;" id="form-1">
	                                       <input type="text" class="form-control" id="uname" placeholder="Adresse du lieu" name="" required>
	                                    </div>
	                                    <div class="form-2" id="form-2">
	                                       <input type="url" class="form-control" id="uname1" placeholder="Lien du lieu" name="" required>
	                                    </div>
                                    </div>
                                </div>
                            </div><input type="hidden" value="0">
                        </div>
                    </div>
                </div>
                <hr class="eds-divider__hr eds-bg-color--ui-200 eds-divider--horizontal" data-spec="divider-hr" aria-hidden="true">
                <div class="eds-l-mar-top-10 eds-g-group eds-l-mar-bot-8">
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-1-12 eds-g-offset-1-12 eds-show-up-md eds-l-pad-top-1" style="display: none;"><i class="eds-vector-image eds-icon--medium eds-vector-image--grey-300" data-spec="icon" aria-hidden="true"><svg
                              viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17 4V2h-1v2H8V2H7v2H2v18h20V4h-5zm4 17H3V9h18v12zM3 8V5h4v1h1V5h8v1h1V5h4v3H3z"></path>
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path d="M15 16h2v2h-2zM11 16h2v2h-2zM7 16h2v2H7zM15 12h2v2h-2zM11 12h2v2h-2zM7 12h2v2H7z"></path>
                                </g>
                            </svg></i></div>
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-12-12 eds-g-cell-sw-10-12 eds-g-cell-lw-9-12 eds-g-cell-lg-8-12 eds-g-cell-ln-8-12 eds-g-cell-md-8-12 eds-g-offset-sw-1-12 eds-g-offset-md-0-12 eds-g-cell--has-overflow">
                        <div>
                            <h1 class="eds-text-hm eds-text-color--grey-900">Date et heure</h1>
                            <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-lw-9-12 eds-g-cell-lg-9-12 eds-g-cell-ln-9-12 eds-g-cell-mw-9-12 eds-g-cell-md-1-1 eds-g-cell-mn-9-12 eds-g-cell-sw-9-12">
                                <p class="eds-text-bm eds-text-color--grey-800"><span>Indiquez aux participants potentiels quand votre événement commence et se termine pour qu'ils puissent planifier au mieux leur venue.</span></p>
                            </div>
                        </div>
                        <!--
                        <div class="eds-g-group eds-l-mar-top-5">
                            <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-md-1-2 eds-g-cell--has-overflow">
                                <div class="radio-selector eds-l-mar-bot-5" role="radiogroup" data-spec="radio-selector">
                                    <div class="radio-selector-label-wrap eds-l-mar-right-4" data-spec="radio-selector-item-padding"><label class="radio-selector-label eds-l-pad-hor-2 eds-l-pad-vert-3 eds-text-bm radio-selector-label--checked"
                                          for="segmented-isSeriesParent-0">Événement unique<input type="radio" id="segmented-isSeriesParent-0" name="isSeriesParent" data-automation="segmented-isSeriesParent-0" data-spec="radio-selector-input"
                                              aria-checked="true" value="off" checked=""></label></div>
                                    <div class="radio-selector-label-wrap" data-spec="radio-selector-item-padding"><label class="radio-selector-label eds-l-pad-hor-2 eds-l-pad-vert-3 eds-text-bm eds-text-color--grey-900"
                                          for="segmented-isSeriesParent-1">Événements récurrents<input type="radio" id="segmented-isSeriesParent-1" name="isSeriesParent" data-automation="segmented-isSeriesParent-1" data-spec="radio-selector-input"
                                              aria-checked="false" value="on"></label></div>
                                </div>
                            </div>
                        </div>
                    -->
                        <p class="eds-text-bm">Les événements uniques ont lieu une seule fois et peuvent s'étendre sur plusieurs jours</p>
                        <div data-spec="event-date-time-pair">
                            <div class="eds-g-grid eds-l-mar-top-5 eds-l-mar-bot-2">
                                <div class="eds-g-group">
                                    <div class="eds-g-cell eds-g-cell--has-overflow eds-l-pad-right-2 eds-g-cell-12-12 eds-g-cell-sm-6-12">
                                        <div class="eds-date-picker eds-date-picker--split eds-date-picker--blue">
                                            <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                                <div class="eds-field-styled__border-simulation">
                                                    <div class="eds-field-styled__internal"><span class="eds-field-styled__aside eds-field-styled__aside-prefix"><i class="eds-vector-image eds-icon--small eds-vector-image--grey-800" data-spec="icon"
                                                              aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                    <path d="M16.9 6.5v-2h-2v2h-6v-2h-2v2h-2v13h14v-13h-2zm0 11h-10v-7h10v7z"></path>
                                                                </svg></i></span>
                                                        <div class="eds-field-styled__input-container">
                                                            <div class="eds-field-styled__label-wrapper">
                                                            	<label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-startDate-label" for="event-startDate"
                                                                  data-spec="label-label">
                                                                  <span class="eds-label__content">Début de l'événement</span>
                                                              </label>
                                                          </div>
                                                          <input data-spec="input-field-input-element" aria-invalid="false" aria-required="true"
                                                              class="eds-field-styled__input" id="event-startDate" name="begin_date" role="textbox" type="datetime-local" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="eds-g-cell eds-g-cell--has-overflow eds-l-pad-right-2 eds-g-cell-12-12 eds-g-cell-sm-6-12">
                                        <div class="eds-timepicker">
                                            <div tabindex="-1">
                                                <div class="eds-autocomplete-field" data-spec="autocompletefield-field">
                                                    <div class="eds-autocomplete-field__dropdown-holder">
                                                        <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                                            <div class="eds-field-styled__border-simulation">
                                                                <div class="eds-field-styled__internal">
                                                                    <div class="eds-field-styled__input-container">
                                                                        <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary" id="event-startTime-label" for="event-startTime"
                                                                              data-spec="label-label"><span class="eds-label__content">Date de début</span></label></div><input data-spec="input-field-input-element" aria-invalid="false"
                                                                          class="eds-field-styled__input" id="event-startTime" name="event-startTime" role="combobox" type="text" aria-expanded="false" aria-autocomplete="list"
                                                                          aria-owns="event-startTime-listbox" autocomplete="off" tabindex="0" value="19:00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                -->
                                </div>
                            </div>
                            <div class="eds-g-grid eds-l-mar-bot-2">
                                <div class="eds-g-group">
                                    <div class="eds-g-cell eds-g-cell--has-overflow eds-l-pad-right-2 eds-g-cell-12-12 eds-g-cell-sm-6-12">
                                        <div class="eds-date-picker eds-date-picker--split eds-date-picker--blue">
                                            <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                                <div class="eds-field-styled__border-simulation">
                                                    <div class="eds-field-styled__internal"><span class="eds-field-styled__aside eds-field-styled__aside-prefix"><i class="eds-vector-image eds-icon--small eds-vector-image--grey-800" data-spec="icon"
                                                              aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                    <path d="M16.9 6.5v-2h-2v2h-6v-2h-2v2h-2v13h14v-13h-2zm0 11h-10v-7h10v7z"></path>
                                                                </svg></i></span>
                                                        <div class="eds-field-styled__input-container">
                                                            <div class="eds-field-styled__label-wrapper">
                                                            	<label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-endDate-label" for="event-endDate"
                                                                  data-spec="label-label">
                                                                  <span class="eds-label__content">Fin de l'événement</span>
                                                              </label>
                                                          </div>
                                                          <input data-spec="input-field-input-element" aria-invalid="false" aria-required="true"
                                                              class="eds-field-styled__input" id="event-endDate" name="end_date" role="textbox" type="datetime-local" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--
                                    <div class="eds-g-cell eds-g-cell--has-overflow eds-l-pad-right-2 eds-g-cell-12-12 eds-g-cell-sm-6-12">
                                        <div class="eds-timepicker">
                                            <div tabindex="-1">
                                                <div class="eds-autocomplete-field" data-spec="autocompletefield-field">
                                                    <div class="eds-autocomplete-field__dropdown-holder">
                                                        <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="input-field-wrapper" data-spec="input-field">
                                                            <div class="eds-field-styled__border-simulation">
                                                                <div class="eds-field-styled__internal">
                                                                    <div class="eds-field-styled__input-container">
                                                                        <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary" id="event-endTime-label" for="event-endTime" data-spec="label-label"><span
                                                                                  class="eds-label__content">Date de fin</span></label></div><input data-spec="input-field-input-element" aria-invalid="false" class="eds-field-styled__input"
                                                                          id="event-endTime" name="event-endTime" role="combobox" type="text" aria-expanded="false" aria-autocomplete="list" aria-owns="event-endTime-listbox" autocomplete="off"
                                                                          tabindex="0" value="22:00">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                -->
                                </div>
                            </div>
                        </div>
                        <!-- 
                        <div>
                            <div class="eds-expansion-panel" data-spec="expansion-panel-button-wrapper">
                                <div class="eds-btn-toggle eds-btn-toggle--is-pressed" data-spec="eds-btn-toggle"><button class="eds-btn--button eds-btn--none" type="button">
                                        <div class="eds-expansion-panel__link">
                                            <div class="eds-expansion-panel__link-text">Advanced settings</div><i class="eds-vector-image eds-icon--small" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17 13.8l-5-5-5 5 1.4 1.4 3.6-3.6 3.6 3.6z"></path>
                                                </svg></i>
                                        </div>
                                    </button></div>
                            </div>
                            <div class="eds-expansion-panel__content" data-spec="expansion-panel-content">
                                <div class="eds-l-mar-top-4" data-spec="advanced-settings__content">
                                	
                                    <div class="eds-l-mar-bot-5">
                                        <div class="eds-text--left"><label class="eds-field-styled__label eds-is-hidden-accessible" for="displayStartDateTime" data-spec="label-label"><span class="eds-label__content">Afficher l'heure de
                                                    début.</span></label></div>
                                        <div class="">
                                            <div class="eds-checkbox"><input id="displayStartDateTime" type="checkbox" class="eds-checkbox__input" name="displayStartDateTime" data-spec="display-start-date-time-section"
                                                  data-automation="checkbox-displayStartDateTime" value="displayStartDateTime" checked=""><label class="eds-checkbox__label eds-checkbox__delegate eds-text--center" for="displayStartDateTime"
                                                  data-spec="checkbox-delegate"><span class="eds-label__content">
                                                        <div class="eds-checkbox__background"></div>
                                                        <div class="eds-checkbox__checkmark"><i class="eds-vector-image eds-icon--small eds-vector-image--stroke-white" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                    <path d="M5.5 12.2L9.4 16l9.1-9" fill="none" stroke="#050505" stroke-width="2" stroke-miterlimit="10"></path>
                                                                </svg></i></div>
                                                        <div class="eds-checkbox__foreground"></div>
                                                    </span></label><label class="eds-checkbox__label" data-automation="displayStartDateTime-label" for="displayStartDateTime" data-spec="checkbox-display-label"><span class="eds-label__content">
                                                        <p class="eds-text-color--grey-800">Afficher l'heure de début.</p>
                                                        <p class="eds-text-bs eds-text-color--grey-700">Les participants verront s'afficher l'heure de début de votre événement.</p>
                                                    </span></label></div>
                                        </div>
                                    </div>
                                    <div class="eds-l-mar-bot-5">
                                        <div class="eds-text--left"><label class="eds-field-styled__label eds-is-hidden-accessible" for="displayEndDateTime" data-spec="label-label"><span class="eds-label__content">Afficher l'heure de
                                                    fin.</span></label></div>
                                        <div class="">
                                            <div class="eds-checkbox"><input id="displayEndDateTime" type="checkbox" class="eds-checkbox__input" name="displayEndDateTime" data-spec="checkbox" data-automation="checkbox-displayEndDateTime"
                                                  value="displayEndDateTime" checked=""><label class="eds-checkbox__label eds-checkbox__delegate eds-text--center" for="displayEndDateTime" data-spec="checkbox-delegate"><span
                                                      class="eds-label__content">
                                                        <div class="eds-checkbox__background"></div>
                                                        <div class="eds-checkbox__checkmark"><i class="eds-vector-image eds-icon--small eds-vector-image--stroke-white" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                    <path d="M5.5 12.2L9.4 16l9.1-9" fill="none" stroke="#050505" stroke-width="2" stroke-miterlimit="10"></path>
                                                                </svg></i></div>
                                                        <div class="eds-checkbox__foreground"></div>
                                                    </span></label><label class="eds-checkbox__label" data-automation="displayEndDateTime-label" for="displayEndDateTime" data-spec="checkbox-display-label"><span class="eds-label__content">
                                                        <p class="eds-text-color--grey-800">Afficher l'heure de fin.</p>
                                                        <p class="eds-text-bs eds-text-color--grey-700">Les participants verront s'afficher l'heure de fin de votre événement.</p>
                                                    </span></label></div>
                                        </div>
                                    </div>
                                
                                    <div class="eds-l-mar-top-6">
                                        <div class="eds-g-group">
                                            <div class="eds-g-cell eds-g-cell-12-12 eds-g-cell-sw-6-12">
                                                <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="select-field-wrapper" data-spec="select-field">
                                                    <div class="eds-field-styled__border-simulation">
                                                        <div class="eds-field-styled__internal">
                                                            <div class="eds-field-styled__input-container">
                                                                <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary" id="undefined-label" data-spec="label-label"><span class="eds-label__content">Fuseau
                                                                            horaire</span></label></div>
                                                                <div class="eds-field-styled__select-wrapper"><span class="eds-field-styled__select-value"><span class="eds-field-styled__select-value-text">(GMT+0000) heure : Côte d’Ivoire</span><span
                                                                          class="eds-field-styled__select-icon"><i class="eds-vector-image eds-icon--small" data-spec="icon" aria-hidden="true"><svg viewBox="0 0 24 24">
                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.2l5 5 5-5-1.4-1.4-3.6 3.6-3.6-3.6z"></path>
                                                                                </svg></i></span></span><select aria-invalid="false" class="eds-field-styled__input eds-field-styled__select" role="listbox" name="venueTimeZone">
                                                                        <option value="Pacific/Midway" data-spec="select-option">(GMT-1100) heure : Îles mineures éloignées des États-Unis (Midway)</option>
                                                                        <option value="Pacific/Niue" data-spec="select-option">(GMT-1100) heure : Niue</option>
                                                                        <option value="Pacific/Pago_Pago" data-spec="select-option">(GMT-1100) heure : Samoa américaines</option>
                                                                        <option value="Pacific/Honolulu" data-spec="select-option">(GMT-1000) heure : États-Unis (Honolulu)</option>
                                                                        <option value="Pacific/Rarotonga" data-spec="select-option">(GMT-1000) heure : Îles Cook</option>
                                                                        <option value="Pacific/Tahiti" data-spec="select-option">(GMT-1000) heure : Polynésie française</option>
                                                                        <option value="Pacific/Marquesas" data-spec="select-option">(GMT-0930) heure : Monde (Marquises)</option>
                                                                        <option value="America/Adak" data-spec="select-option">(GMT-0900) heure : Monde (Adak)</option>
                                                                        <option value="Pacific/Gambier" data-spec="select-option">(GMT-0900) heure : Monde (Gambier)</option>
                                                                        <option value="America/Anchorage" data-spec="select-option">(GMT-0800) heure : États-Unis (Anchorage)</option>
                                                                        <option value="America/Juneau" data-spec="select-option">(GMT-0800) heure : États-Unis (Juneau)</option>
                                                                        <option value="America/Metlakatla" data-spec="select-option">(GMT-0800) heure : États-Unis (Metlakatla)</option>
                                                                        <option value="America/Nome" data-spec="select-option">(GMT-0800) heure : États-Unis (Nome)</option>
                                                                        <option value="America/Sitka" data-spec="select-option">(GMT-0800) heure : États-Unis (Sitka)</option>
                                                                        <option value="America/Yakutat" data-spec="select-option">(GMT-0800) heure : États-Unis (Yakutat)</option>
                                                                        <option value="Pacific/Pitcairn" data-spec="select-option">(GMT-0800) heure : Monde (Pitcairn)</option>
                                                                        <option value="America/Creston" data-spec="select-option">(GMT-0700) heure : Canada (Creston)</option>
                                                                        <option value="America/Dawson_Creek" data-spec="select-option">(GMT-0700) heure : Canada (Dawson Creek)</option>
                                                                        <option value="America/Dawson" data-spec="select-option">(GMT-0700) heure : Canada (Dawson)</option>
                                                                        <option value="America/Fort_Nelson" data-spec="select-option">(GMT-0700) heure : Canada (Fort Nelson)</option>
                                                                        <option value="America/Vancouver" data-spec="select-option">(GMT-0700) heure : Canada (Vancouver)</option>
                                                                        <option value="America/Whitehorse" data-spec="select-option">(GMT-0700) heure : Canada (Whitehorse)</option>
                                                                        <option value="America/Los_Angeles" data-spec="select-option">(GMT-0700) heure : États-Unis (Los Angeles)</option>
                                                                        <option value="America/Phoenix" data-spec="select-option">(GMT-0700) heure : États-Unis (Phoenix)</option>
                                                                        <option value="America/Hermosillo" data-spec="select-option">(GMT-0700) heure : Mexique (Hermosillo)</option>
                                                                        <option value="America/Santa_Isabel" data-spec="select-option">(GMT-0700) heure : Mexique (Santa Isabel)</option>
                                                                        <option value="America/Tijuana" data-spec="select-option">(GMT-0700) heure : Mexique (Tijuana)</option>
                                                                        <option value="America/Belize" data-spec="select-option">(GMT-0600) heure : Belize</option>
                                                                        <option value="America/Cambridge_Bay" data-spec="select-option">(GMT-0600) heure : Canada (Cambridge Bay)</option>
                                                                        <option value="America/Edmonton" data-spec="select-option">(GMT-0600) heure : Canada (Edmonton)</option>
                                                                        <option value="America/Inuvik" data-spec="select-option">(GMT-0600) heure : Canada (Inuvik)</option>
                                                                        <option value="America/Regina" data-spec="select-option">(GMT-0600) heure : Canada (Regina)</option>
                                                                        <option value="America/Swift_Current" data-spec="select-option">(GMT-0600) heure : Canada (Swift Current)</option>
                                                                        <option value="America/Yellowknife" data-spec="select-option">(GMT-0600) heure : Canada (Yellowknife)</option>
                                                                        <option value="Pacific/Easter" data-spec="select-option">(GMT-0600) heure : Chili (Île de Pâques)</option>
                                                                        <option value="America/Costa_Rica" data-spec="select-option">(GMT-0600) heure : Costa Rica</option>
                                                                        <option value="America/El_Salvador" data-spec="select-option">(GMT-0600) heure : El Salvador</option>
                                                                        <option value="Pacific/Galapagos" data-spec="select-option">(GMT-0600) heure : Équateur (Galápagos)</option>
                                                                        <option value="America/Boise" data-spec="select-option">(GMT-0600) heure : États-Unis (Boise)</option>
                                                                        <option value="America/Denver" data-spec="select-option">(GMT-0600) heure : États-Unis (Denver)</option>
                                                                        <option value="America/Guatemala" data-spec="select-option">(GMT-0600) heure : Guatemala</option>
                                                                        <option value="America/Tegucigalpa" data-spec="select-option">(GMT-0600) heure : Honduras</option>
                                                                        <option value="America/Chihuahua" data-spec="select-option">(GMT-0600) heure : Mexique (Chihuahua)</option>
                                                                        <option value="America/Mazatlan" data-spec="select-option">(GMT-0600) heure : Mexique (Mazatlán)</option>
                                                                        <option value="America/Ojinaga" data-spec="select-option">(GMT-0600) heure : Mexique (Ojinaga)</option>
                                                                        <option value="America/Managua" data-spec="select-option">(GMT-0600) heure : Nicaragua</option>
                                                                        <option value="America/Eirunepe" data-spec="select-option">(GMT-0500) heure : Brésil (Eirunepé)</option>
                                                                        <option value="America/Rio_Branco" data-spec="select-option">(GMT-0500) heure : Brésil (Rio Branco)</option>
                                                                        <option value="America/Atikokan" data-spec="select-option">(GMT-0500) heure : Canada (Atikokan)</option>
                                                                        <option value="America/Rainy_River" data-spec="select-option">(GMT-0500) heure : Canada (Rainy River)</option>
                                                                        <option value="America/Rankin_Inlet" data-spec="select-option">(GMT-0500) heure : Canada (Rankin Inlet)</option>
                                                                        <option value="America/Resolute" data-spec="select-option">(GMT-0500) heure : Canada (Resolute)</option>
                                                                        <option value="America/Winnipeg" data-spec="select-option">(GMT-0500) heure : Canada (Winnipeg)</option>
                                                                        <option value="America/Bogota" data-spec="select-option">(GMT-0500) heure : Colombie</option>
                                                                        <option value="America/Guayaquil" data-spec="select-option">(GMT-0500) heure : Équateur (Guayaquil)</option>
                                                                        <option value="America/North_Dakota/Beulah" data-spec="select-option">(GMT-0500) heure : États-Unis (Beulah (Dakota du Nord))</option>
                                                                        <option value="America/North_Dakota/Center" data-spec="select-option">(GMT-0500) heure : États-Unis (Center (Dakota du Nord))</option>
                                                                        <option value="America/Chicago" data-spec="select-option">(GMT-0500) heure : États-Unis (Chicago)</option>
                                                                        <option value="America/Indiana/Knox" data-spec="select-option">(GMT-0500) heure : États-Unis (Knox [Indiana])</option>
                                                                        <option value="America/Menominee" data-spec="select-option">(GMT-0500) heure : États-Unis (Menominee)</option>
                                                                        <option value="America/North_Dakota/New_Salem" data-spec="select-option">(GMT-0500) heure : États-Unis (New Salem (Dakota du Nord))</option>
                                                                        <option value="America/Indiana/Tell_City" data-spec="select-option">(GMT-0500) heure : États-Unis (Tell City [Indiana])</option>
                                                                        <option value="America/Cayman" data-spec="select-option">(GMT-0500) heure : Îles Caïmans</option>
                                                                        <option value="America/Jamaica" data-spec="select-option">(GMT-0500) heure : Jamaïque</option>
                                                                        <option value="America/Bahia_Banderas" data-spec="select-option">(GMT-0500) heure : Mexique (Bahia de Banderas)</option>
                                                                        <option value="America/Cancun" data-spec="select-option">(GMT-0500) heure : Mexique (Cancún)</option>
                                                                        <option value="America/Matamoros" data-spec="select-option">(GMT-0500) heure : Mexique (Matamoros)</option>
                                                                        <option value="America/Merida" data-spec="select-option">(GMT-0500) heure : Mexique (Mérida)</option>
                                                                        <option value="America/Mexico_City" data-spec="select-option">(GMT-0500) heure : Mexique (Mexico)</option>
                                                                        <option value="America/Monterrey" data-spec="select-option">(GMT-0500) heure : Mexique (Monterrey)</option>
                                                                        <option value="America/Panama" data-spec="select-option">(GMT-0500) heure : Panama</option>
                                                                        <option value="America/Lima" data-spec="select-option">(GMT-0500) heure : Pérou</option>
                                                                        <option value="America/Anguilla" data-spec="select-option">(GMT-0400) heure : Anguilla</option>
                                                                        <option value="America/Antigua" data-spec="select-option">(GMT-0400) heure : Antigua-et-Barbuda</option>
                                                                        <option value="America/Aruba" data-spec="select-option">(GMT-0400) heure : Aruba</option>
                                                                        <option value="America/Nassau" data-spec="select-option">(GMT-0400) heure : Bahamas</option>
                                                                        <option value="America/Barbados" data-spec="select-option">(GMT-0400) heure : Barbade</option>
                                                                        <option value="America/La_Paz" data-spec="select-option">(GMT-0400) heure : Bolivie</option>
                                                                        <option value="America/Boa_Vista" data-spec="select-option">(GMT-0400) heure : Brésil (Boa Vista)</option>
                                                                        <option value="America/Campo_Grande" data-spec="select-option">(GMT-0400) heure : Brésil (Campo Grande)</option>
                                                                        <option value="America/Cuiaba" data-spec="select-option">(GMT-0400) heure : Brésil (Cuiabá)</option>
                                                                        <option value="America/Manaus" data-spec="select-option">(GMT-0400) heure : Brésil (Manaos)</option>
                                                                        <option value="America/Porto_Velho" data-spec="select-option">(GMT-0400) heure : Brésil (Porto Velho)</option>
                                                                        <option value="America/Blanc-Sablon" data-spec="select-option">(GMT-0400) heure : Canada (Blanc-Sablon)</option>
                                                                        <option value="America/Iqaluit" data-spec="select-option">(GMT-0400) heure : Canada (Iqaluit)</option>
                                                                        <option value="America/Nipigon" data-spec="select-option">(GMT-0400) heure : Canada (Nipigon)</option>
                                                                        <option value="America/Pangnirtung" data-spec="select-option">(GMT-0400) heure : Canada (Pangnirtung)</option>
                                                                        <option value="America/Thunder_Bay" data-spec="select-option">(GMT-0400) heure : Canada (Thunder Bay)</option>
                                                                        <option value="America/Toronto" data-spec="select-option">(GMT-0400) heure : Canada (Toronto)</option>
                                                                        <option value="America/Santiago" data-spec="select-option">(GMT-0400) heure : Chili (Santiago)</option>
                                                                        <option value="America/Havana" data-spec="select-option">(GMT-0400) heure : Cuba</option>
                                                                        <option value="America/Curacao" data-spec="select-option">(GMT-0400) heure : Curaçao</option>
                                                                        <option value="America/Dominica" data-spec="select-option">(GMT-0400) heure : Dominique</option>
                                                                        <option value="America/Detroit" data-spec="select-option">(GMT-0400) heure : États-Unis (Détroit)</option>
                                                                        <option value="America/Indiana/Indianapolis" data-spec="select-option">(GMT-0400) heure : États-Unis (Indianapolis)</option>
                                                                        <option value="America/Kentucky/Louisville" data-spec="select-option">(GMT-0400) heure : États-Unis (Louisville)</option>
                                                                        <option value="America/Indiana/Marengo" data-spec="select-option">(GMT-0400) heure : États-Unis (Marengo [Indiana])</option>
                                                                        <option value="America/Kentucky/Monticello" data-spec="select-option">(GMT-0400) heure : États-Unis (Monticello [Kentucky])</option>
                                                                        <option value="America/New_York" data-spec="select-option">(GMT-0400) heure : États-Unis (New York)</option>
                                                                        <option value="America/Indiana/Petersburg" data-spec="select-option">(GMT-0400) heure : États-Unis (Petersburg [Indiana])</option>
                                                                        <option value="America/Indiana/Vevay" data-spec="select-option">(GMT-0400) heure : États-Unis (Vevay [Indiana])</option>
                                                                        <option value="America/Indiana/Vincennes" data-spec="select-option">(GMT-0400) heure : États-Unis (Vincennes [Indiana])</option>
                                                                        <option value="America/Indiana/Winamac" data-spec="select-option">(GMT-0400) heure : États-Unis (Winamac [Indiana])</option>
                                                                        <option value="America/Grenada" data-spec="select-option">(GMT-0400) heure : Grenade</option>
                                                                        <option value="America/Guadeloupe" data-spec="select-option">(GMT-0400) heure : Guadeloupe</option>
                                                                        <option value="America/Guyana" data-spec="select-option">(GMT-0400) heure : Guyana</option>
                                                                        <option value="America/Port-au-Prince" data-spec="select-option">(GMT-0400) heure : Haïti</option>
                                                                        <option value="America/Grand_Turk" data-spec="select-option">(GMT-0400) heure : Îles Turques-et-Caïques</option>
                                                                        <option value="America/Tortola" data-spec="select-option">(GMT-0400) heure : Îles Vierges britanniques</option>
                                                                        <option value="America/St_Thomas" data-spec="select-option">(GMT-0400) heure : Îles Vierges des États-Unis</option>
                                                                        <option value="America/Martinique" data-spec="select-option">(GMT-0400) heure : Martinique</option>
                                                                        <option value="America/Montserrat" data-spec="select-option">(GMT-0400) heure : Montserrat</option>
                                                                        <option value="America/Asuncion" data-spec="select-option">(GMT-0400) heure : Paraguay</option>
                                                                        <option value="America/Kralendijk" data-spec="select-option">(GMT-0400) heure : Pays-Bas caribéens</option>
                                                                        <option value="America/Puerto_Rico" data-spec="select-option">(GMT-0400) heure : Porto Rico</option>
                                                                        <option value="America/Santo_Domingo" data-spec="select-option">(GMT-0400) heure : République dominicaine</option>
                                                                        <option value="America/St_Barthelemy" data-spec="select-option">(GMT-0400) heure : Saint-Barthélemy</option>
                                                                        <option value="America/St_Kitts" data-spec="select-option">(GMT-0400) heure : Saint-Christophe-et-Niévès</option>
                                                                        <option value="America/Marigot" data-spec="select-option">(GMT-0400) heure : Saint-Martin</option>
                                                                        <option value="America/Lower_Princes" data-spec="select-option">(GMT-0400) heure : Saint-Martin (partie néerlandaise)</option>
                                                                        <option value="America/St_Vincent" data-spec="select-option">(GMT-0400) heure : Saint-Vincent-et-les-Grenadines</option>
                                                                        <option value="America/St_Lucia" data-spec="select-option">(GMT-0400) heure : Sainte-Lucie</option>
                                                                        <option value="America/Port_of_Spain" data-spec="select-option">(GMT-0400) heure : Trinité-et-Tobago</option>
                                                                        <option value="America/Caracas" data-spec="select-option">(GMT-0400) heure : Venezuela</option>
                                                                        <option value="Antarctica/Palmer" data-spec="select-option">(GMT-0300) heure : Antarctique (Palmer)</option>
                                                                        <option value="Antarctica/Rothera" data-spec="select-option">(GMT-0300) heure : Antarctique (Rothera)</option>
                                                                        <option value="America/Argentina/Buenos_Aires" data-spec="select-option">(GMT-0300) heure : Argentine (Buenos Aires)</option>
                                                                        <option value="America/Argentina/Catamarca" data-spec="select-option">(GMT-0300) heure : Argentine (Catamarca)</option>
                                                                        <option value="America/Argentina/Cordoba" data-spec="select-option">(GMT-0300) heure : Argentine (Córdoba)</option>
                                                                        <option value="America/Argentina/Jujuy" data-spec="select-option">(GMT-0300) heure : Argentine (Jujuy)</option>
                                                                        <option value="America/Argentina/La_Rioja" data-spec="select-option">(GMT-0300) heure : Argentine (La Rioja)</option>
                                                                        <option value="America/Argentina/Mendoza" data-spec="select-option">(GMT-0300) heure : Argentine (Mendoza)</option>
                                                                        <option value="America/Argentina/Rio_Gallegos" data-spec="select-option">(GMT-0300) heure : Argentine (Río Gallegos)</option>
                                                                        <option value="America/Argentina/Salta" data-spec="select-option">(GMT-0300) heure : Argentine (Salta)</option>
                                                                        <option value="America/Argentina/San_Juan" data-spec="select-option">(GMT-0300) heure : Argentine (San Juan)</option>
                                                                        <option value="America/Argentina/San_Luis" data-spec="select-option">(GMT-0300) heure : Argentine (San Luis)</option>
                                                                        <option value="America/Argentina/Tucuman" data-spec="select-option">(GMT-0300) heure : Argentine (Tucumán)</option>
                                                                        <option value="America/Argentina/Ushuaia" data-spec="select-option">(GMT-0300) heure : Argentine (Ushuaïa)</option>
                                                                        <option value="Atlantic/Bermuda" data-spec="select-option">(GMT-0300) heure : Bermudes</option>
                                                                        <option value="America/Araguaina" data-spec="select-option">(GMT-0300) heure : Brésil (Araguaína)</option>
                                                                        <option value="America/Bahia" data-spec="select-option">(GMT-0300) heure : Brésil (Bahia)</option>
                                                                        <option value="America/Belem" data-spec="select-option">(GMT-0300) heure : Brésil (Belém)</option>
                                                                        <option value="America/Fortaleza" data-spec="select-option">(GMT-0300) heure : Brésil (Fortaleza)</option>
                                                                        <option value="America/Maceio" data-spec="select-option">(GMT-0300) heure : Brésil (Maceió)</option>
                                                                        <option value="America/Recife" data-spec="select-option">(GMT-0300) heure : Brésil (Recife)</option>
                                                                        <option value="America/Santarem" data-spec="select-option">(GMT-0300) heure : Brésil (Santarém)</option>
                                                                        <option value="America/Sao_Paulo" data-spec="select-option">(GMT-0300) heure : Brésil (São Paulo)</option>
                                                                        <option value="America/Glace_Bay" data-spec="select-option">(GMT-0300) heure : Canada (Glace Bay)</option>
                                                                        <option value="America/Goose_Bay" data-spec="select-option">(GMT-0300) heure : Canada (Goose Bay)</option>
                                                                        <option value="America/Halifax" data-spec="select-option">(GMT-0300) heure : Canada (Halifax)</option>
                                                                        <option value="America/Moncton" data-spec="select-option">(GMT-0300) heure : Canada (Moncton)</option>
                                                                        <option value="America/Thule" data-spec="select-option">(GMT-0300) heure : Groenland (Thulé)</option>
                                                                        <option value="America/Cayenne" data-spec="select-option">(GMT-0300) heure : Guyane française</option>
                                                                        <option value="Atlantic/Stanley" data-spec="select-option">(GMT-0300) heure : Îles Malouines</option>
                                                                        <option value="America/Paramaribo" data-spec="select-option">(GMT-0300) heure : Suriname</option>
                                                                        <option value="America/Montevideo" data-spec="select-option">(GMT-0300) heure : Uruguay</option>
                                                                        <option value="America/Punta_Arenas" data-spec="select-option">(GMT-0300) heure : région indéterminée (Punta Arenas)</option>
                                                                        <option value="America/St_Johns" data-spec="select-option">(GMT-0230) heure : Canada (Saint-Jean de Terre-Neuve)</option>
                                                                        <option value="America/Noronha" data-spec="select-option">(GMT-0200) heure : Brésil (Noronha)</option>
                                                                        <option value="Atlantic/South_Georgia" data-spec="select-option">(GMT-0200) heure : Géorgie du Sud et îles Sandwich du Sud</option>
                                                                        <option value="America/Godthab" data-spec="select-option">(GMT-0200) heure : Groenland (Nuuk)</option>
                                                                        <option value="America/Miquelon" data-spec="select-option">(GMT-0200) heure : Monde (Miquelon)</option>
                                                                        <option value="Atlantic/Cape_Verde" data-spec="select-option">(GMT-0100) heure : Cap-Vert</option>
                                                                        <option value="UTC" data-spec="select-option">UTC</option>
                                                                        <option value="Africa/Ouagadougou" data-spec="select-option">(GMT+0000) heure : Burkina Faso</option>
                                                                        <option value="Africa/Abidjan" data-spec="select-option">(GMT+0000) heure : Côte d’Ivoire</option>
                                                                        <option value="Africa/Banjul" data-spec="select-option">(GMT+0000) heure : Gambie</option>
                                                                        <option value="Africa/Accra" data-spec="select-option">(GMT+0000) heure : Ghana</option>
                                                                        <option value="America/Danmarkshavn" data-spec="select-option">(GMT+0000) heure : Groenland (Danmarkshavn)</option>
                                                                        <option value="America/Scoresbysund" data-spec="select-option">(GMT+0000) heure : Groenland (Ittoqqortoormiit)</option>
                                                                        <option value="Africa/Conakry" data-spec="select-option">(GMT+0000) heure : Guinée</option>
                                                                        <option value="Africa/Bissau" data-spec="select-option">(GMT+0000) heure : Guinée-Bissau</option>
                                                                        <option value="Atlantic/Reykjavik" data-spec="select-option">(GMT+0000) heure : Islande</option>
                                                                        <option value="Africa/Monrovia" data-spec="select-option">(GMT+0000) heure : Libéria</option>
                                                                        <option value="Africa/Bamako" data-spec="select-option">(GMT+0000) heure : Mali</option>
                                                                        <option value="Africa/Casablanca" data-spec="select-option">(GMT+0000) heure : Maroc</option>
                                                                        <option value="Africa/Nouakchott" data-spec="select-option">(GMT+0000) heure : Mauritanie</option>
                                                                        <option value="Atlantic/Azores" data-spec="select-option">(GMT+0000) heure : Portugal (Açores)</option>
                                                                        <option value="Africa/El_Aaiun" data-spec="select-option">(GMT+0000) heure : Sahara occidental</option>
                                                                        <option value="Atlantic/St_Helena" data-spec="select-option">(GMT+0000) heure : Sainte-Hélène</option>
                                                                        <option value="Africa/Sao_Tome" data-spec="select-option">(GMT+0000) heure : Sao Tomé-et-Principe</option>
                                                                        <option value="Africa/Dakar" data-spec="select-option">(GMT+0000) heure : Sénégal</option>
                                                                        <option value="Africa/Freetown" data-spec="select-option">(GMT+0000) heure : Sierra Leone</option>
                                                                        <option value="Africa/Lome" data-spec="select-option">(GMT+0000) heure : Togo</option>
                                                                        <option value="Africa/Algiers" data-spec="select-option">(GMT+0100) heure : Algérie</option>
                                                                        <option value="Africa/Luanda" data-spec="select-option">(GMT+0100) heure : Angola</option>
                                                                        <option value="Africa/Porto-Novo" data-spec="select-option">(GMT+0100) heure : Bénin</option>
                                                                        <option value="Africa/Douala" data-spec="select-option">(GMT+0100) heure : Cameroun</option>
                                                                        <option value="Africa/Brazzaville" data-spec="select-option">(GMT+0100) heure : Congo-Brazzaville</option>
                                                                        <option value="Africa/Kinshasa" data-spec="select-option">(GMT+0100) heure : Congo-Kinshasa (Kinshasa)</option>
                                                                        <option value="Atlantic/Canary" data-spec="select-option">(GMT+0100) heure : Espagne (Îles Canaries)</option>
                                                                        <option value="Africa/Libreville" data-spec="select-option">(GMT+0100) heure : Gabon</option>
                                                                        <option value="Europe/Guernsey" data-spec="select-option">(GMT+0100) heure : Guernesey</option>
                                                                        <option value="Africa/Malabo" data-spec="select-option">(GMT+0100) heure : Guinée équatoriale</option>
                                                                        <option value="Europe/Isle_of_Man" data-spec="select-option">(GMT+0100) heure : Île de Man</option>
                                                                        <option value="Atlantic/Faroe" data-spec="select-option">(GMT+0100) heure : Îles Féroé</option>
                                                                        <option value="Europe/Dublin" data-spec="select-option">(GMT+0100) heure : Irlande</option>
                                                                        <option value="Europe/Jersey" data-spec="select-option">(GMT+0100) heure : Jersey</option>
                                                                        <option value="Africa/Niamey" data-spec="select-option">(GMT+0100) heure : Niger</option>
                                                                        <option value="Africa/Lagos" data-spec="select-option">(GMT+0100) heure : Nigéria</option>
                                                                        <option value="Europe/Lisbon" data-spec="select-option">(GMT+0100) heure : Portugal (Lisbonne)</option>
                                                                        <option value="Atlantic/Madeira" data-spec="select-option">(GMT+0100) heure : Portugal (Madère)</option>
                                                                        <option value="Africa/Bangui" data-spec="select-option">(GMT+0100) heure : République centrafricaine</option>
                                                                        <option value="Europe/London" data-spec="select-option">(GMT+0100) heure : Royaume-Uni</option>
                                                                        <option value="Africa/Ndjamena" data-spec="select-option">(GMT+0100) heure : Tchad</option>
                                                                        <option value="Africa/Tunis" data-spec="select-option">(GMT+0100) heure : Tunisie</option>
                                                                        <option value="Africa/Johannesburg" data-spec="select-option">(GMT+0200) heure : Afrique du Sud</option>
                                                                        <option value="Europe/Tirane" data-spec="select-option">(GMT+0200) heure : Albanie</option>
                                                                        <option value="Europe/Berlin" data-spec="select-option">(GMT+0200) heure : Allemagne (Berlin)</option>
                                                                        <option value="Europe/Busingen" data-spec="select-option">(GMT+0200) heure : Allemagne (Büsingen)</option>
                                                                        <option value="Europe/Andorra" data-spec="select-option">(GMT+0200) heure : Andorre</option>
                                                                        <option value="Europe/Vienna" data-spec="select-option">(GMT+0200) heure : Autriche</option>
                                                                        <option value="Europe/Brussels" data-spec="select-option">(GMT+0200) heure : Belgique</option>
                                                                        <option value="Europe/Sarajevo" data-spec="select-option">(GMT+0200) heure : Bosnie-Herzégovine</option>
                                                                        <option value="Africa/Gaborone" data-spec="select-option">(GMT+0200) heure : Botswana</option>
                                                                        <option value="Africa/Bujumbura" data-spec="select-option">(GMT+0200) heure : Burundi</option>
                                                                        <option value="Africa/Lubumbashi" data-spec="select-option">(GMT+0200) heure : Congo-Kinshasa (Lubumbashi)</option>
                                                                        <option value="Europe/Zagreb" data-spec="select-option">(GMT+0200) heure : Croatie</option>
                                                                        <option value="Europe/Copenhagen" data-spec="select-option">(GMT+0200) heure : Danemark</option>
                                                                        <option value="Africa/Cairo" data-spec="select-option">(GMT+0200) heure : Égypte</option>
                                                                        <option value="Africa/Ceuta" data-spec="select-option">(GMT+0200) heure : Espagne (Ceuta)</option>
                                                                        <option value="Europe/Madrid" data-spec="select-option">(GMT+0200) heure : Espagne (Madrid)</option>
                                                                        <option value="Europe/Vatican" data-spec="select-option">(GMT+0200) heure : État de la Cité du Vatican</option>
                                                                        <option value="Europe/Paris" data-spec="select-option">(GMT+0200) heure : France</option>
                                                                        <option value="Europe/Gibraltar" data-spec="select-option">(GMT+0200) heure : Gibraltar</option>
                                                                        <option value="Europe/Budapest" data-spec="select-option">(GMT+0200) heure : Hongrie</option>
                                                                        <option value="Europe/Rome" data-spec="select-option">(GMT+0200) heure : Italie</option>
                                                                        <option value="Africa/Maseru" data-spec="select-option">(GMT+0200) heure : Lesotho</option>
                                                                        <option value="Africa/Tripoli" data-spec="select-option">(GMT+0200) heure : Libye</option>
                                                                        <option value="Europe/Vaduz" data-spec="select-option">(GMT+0200) heure : Liechtenstein</option>
                                                                        <option value="Europe/Luxembourg" data-spec="select-option">(GMT+0200) heure : Luxembourg</option>
                                                                        <option value="Europe/Skopje" data-spec="select-option">(GMT+0200) heure : Macédoine</option>
                                                                        <option value="Africa/Blantyre" data-spec="select-option">(GMT+0200) heure : Malawi</option>
                                                                        <option value="Europe/Malta" data-spec="select-option">(GMT+0200) heure : Malte</option>
                                                                        <option value="Europe/Monaco" data-spec="select-option">(GMT+0200) heure : Monaco</option>
                                                                        <option value="Antarctica/Troll" data-spec="select-option">(GMT+0200) heure : Monde (Troll)</option>
                                                                        <option value="Europe/Podgorica" data-spec="select-option">(GMT+0200) heure : Monténégro</option>
                                                                        <option value="Africa/Maputo" data-spec="select-option">(GMT+0200) heure : Mozambique</option>
                                                                        <option value="Africa/Windhoek" data-spec="select-option">(GMT+0200) heure : Namibie</option>
                                                                        <option value="Europe/Oslo" data-spec="select-option">(GMT+0200) heure : Norvège</option>
                                                                        <option value="Europe/Amsterdam" data-spec="select-option">(GMT+0200) heure : Pays-Bas</option>
                                                                        <option value="Europe/Warsaw" data-spec="select-option">(GMT+0200) heure : Pologne</option>
                                                                        <option value="Europe/Prague" data-spec="select-option">(GMT+0200) heure : République tchèque</option>
                                                                        <option value="Europe/Kaliningrad" data-spec="select-option">(GMT+0200) heure : Russie (Kaliningrad)</option>
                                                                        <option value="Africa/Kigali" data-spec="select-option">(GMT+0200) heure : Rwanda</option>
                                                                        <option value="Europe/San_Marino" data-spec="select-option">(GMT+0200) heure : Saint-Marin</option>
                                                                        <option value="Europe/Belgrade" data-spec="select-option">(GMT+0200) heure : Serbie</option>
                                                                        <option value="Europe/Bratislava" data-spec="select-option">(GMT+0200) heure : Slovaquie</option>
                                                                        <option value="Europe/Ljubljana" data-spec="select-option">(GMT+0200) heure : Slovénie</option>
                                                                        <option value="Africa/Khartoum" data-spec="select-option">(GMT+0200) heure : Soudan</option>
                                                                        <option value="Europe/Stockholm" data-spec="select-option">(GMT+0200) heure : Suède</option>
                                                                        <option value="Europe/Zurich" data-spec="select-option">(GMT+0200) heure : Suisse</option>
                                                                        <option value="Arctic/Longyearbyen" data-spec="select-option">(GMT+0200) heure : Svalbard et Jan Mayen</option>
                                                                        <option value="Africa/Mbabane" data-spec="select-option">(GMT+0200) heure : Swaziland</option>
                                                                        <option value="Africa/Lusaka" data-spec="select-option">(GMT+0200) heure : Zambie</option>
                                                                        <option value="Africa/Harare" data-spec="select-option">(GMT+0200) heure : Zimbabwe</option>
                                                                        <option value="Antarctica/Syowa" data-spec="select-option">(GMT+0300) heure : Antarctique (Showa)</option>
                                                                        <option value="Asia/Riyadh" data-spec="select-option">(GMT+0300) heure : Arabie saoudite</option>
                                                                        <option value="Asia/Bahrain" data-spec="select-option">(GMT+0300) heure : Bahreïn</option>
                                                                        <option value="Europe/Minsk" data-spec="select-option">(GMT+0300) heure : Biélorussie</option>
                                                                        <option value="Europe/Sofia" data-spec="select-option">(GMT+0300) heure : Bulgarie</option>
                                                                        <option value="Asia/Nicosia" data-spec="select-option">(GMT+0300) heure : Chypre</option>
                                                                        <option value="Indian/Comoro" data-spec="select-option">(GMT+0300) heure : Comores</option>
                                                                        <option value="Africa/Djibouti" data-spec="select-option">(GMT+0300) heure : Djibouti</option>
                                                                        <option value="Africa/Asmara" data-spec="select-option">(GMT+0300) heure : Érythrée</option>
                                                                        <option value="Europe/Tallinn" data-spec="select-option">(GMT+0300) heure : Estonie</option>
                                                                        <option value="Africa/Addis_Ababa" data-spec="select-option">(GMT+0300) heure : Éthiopie</option>
                                                                        <option value="Europe/Helsinki" data-spec="select-option">(GMT+0300) heure : Finlande</option>
                                                                        <option value="Europe/Athens" data-spec="select-option">(GMT+0300) heure : Grèce</option>
                                                                        <option value="Europe/Mariehamn" data-spec="select-option">(GMT+0300) heure : Îles Åland</option>
                                                                        <option value="Asia/Baghdad" data-spec="select-option">(GMT+0300) heure : Irak</option>
                                                                        <option value="Asia/Jerusalem" data-spec="select-option">(GMT+0300) heure : Israël</option>
                                                                        <option value="Asia/Amman" data-spec="select-option">(GMT+0300) heure : Jordanie</option>
                                                                        <option value="Africa/Nairobi" data-spec="select-option">(GMT+0300) heure : Kenya</option>
                                                                        <option value="Asia/Kuwait" data-spec="select-option">(GMT+0300) heure : Koweït</option>
                                                                        <option value="Europe/Riga" data-spec="select-option">(GMT+0300) heure : Lettonie</option>
                                                                        <option value="Asia/Beirut" data-spec="select-option">(GMT+0300) heure : Liban</option>
                                                                        <option value="Europe/Vilnius" data-spec="select-option">(GMT+0300) heure : Lituanie</option>
                                                                        <option value="Indian/Antananarivo" data-spec="select-option">(GMT+0300) heure : Madagascar</option>
                                                                        <option value="Indian/Mayotte" data-spec="select-option">(GMT+0300) heure : Mayotte</option>
                                                                        <option value="Europe/Chisinau" data-spec="select-option">(GMT+0300) heure : Moldavie</option>
                                                                        <option value="Asia/Gaza" data-spec="select-option">(GMT+0300) heure : Monde (Gaza)</option>
                                                                        <option value="Asia/Hebron" data-spec="select-option">(GMT+0300) heure : Monde (Hébron)</option>
                                                                        <option value="Africa/Kampala" data-spec="select-option">(GMT+0300) heure : Ouganda</option>
                                                                        <option value="Asia/Qatar" data-spec="select-option">(GMT+0300) heure : Qatar</option>
                                                                        <option value="Europe/Bucharest" data-spec="select-option">(GMT+0300) heure : Roumanie</option>
                                                                        <option value="Europe/Moscow" data-spec="select-option">(GMT+0300) heure : Russie (Moscou)</option>
                                                                        <option value="Europe/Simferopol" data-spec="select-option">(GMT+0300) heure : Russie (Simferopol)</option>
                                                                        <option value="Africa/Mogadishu" data-spec="select-option">(GMT+0300) heure : Somalie</option>
                                                                        <option value="Africa/Juba" data-spec="select-option">(GMT+0300) heure : Soudan du Sud</option>
                                                                        <option value="Asia/Damascus" data-spec="select-option">(GMT+0300) heure : Syrie</option>
                                                                        <option value="Africa/Dar_es_Salaam" data-spec="select-option">(GMT+0300) heure : Tanzanie</option>
                                                                        <option value="Europe/Istanbul" data-spec="select-option">(GMT+0300) heure : Turquie</option>
                                                                        <option value="Europe/Kiev" data-spec="select-option">(GMT+0300) heure : Ukraine (Kiev)</option>
                                                                        <option value="Europe/Uzhgorod" data-spec="select-option">(GMT+0300) heure : Ukraine (Oujgorod)</option>
                                                                        <option value="Europe/Zaporozhye" data-spec="select-option">(GMT+0300) heure : Ukraine (Zaporojie)</option>
                                                                        <option value="Asia/Aden" data-spec="select-option">(GMT+0300) heure : Yémen</option>
                                                                        <option value="Asia/Famagusta" data-spec="select-option">(GMT+0300) heure : région indéterminée (Famagusta)</option>
                                                                        <option value="Europe/Kirov" data-spec="select-option">(GMT+0300) heure : région indéterminée (Kirov)</option>
                                                                        <option value="Asia/Yerevan" data-spec="select-option">(GMT+0400) heure : Arménie</option>
                                                                        <option value="Asia/Baku" data-spec="select-option">(GMT+0400) heure : Azerbaïdjan</option>
                                                                        <option value="Asia/Dubai" data-spec="select-option">(GMT+0400) heure : Émirats arabes unis</option>
                                                                        <option value="Asia/Tbilisi" data-spec="select-option">(GMT+0400) heure : Géorgie</option>
                                                                        <option value="Indian/Reunion" data-spec="select-option">(GMT+0400) heure : La Réunion</option>
                                                                        <option value="Indian/Mauritius" data-spec="select-option">(GMT+0400) heure : Maurice</option>
                                                                        <option value="Asia/Muscat" data-spec="select-option">(GMT+0400) heure : Oman</option>
                                                                        <option value="Europe/Samara" data-spec="select-option">(GMT+0400) heure : Russie (Samara)</option>
                                                                        <option value="Europe/Volgograd" data-spec="select-option">(GMT+0400) heure : Russie (Volgograd)</option>
                                                                        <option value="Indian/Mahe" data-spec="select-option">(GMT+0400) heure : Seychelles</option>
                                                                        <option value="Europe/Astrakhan" data-spec="select-option">(GMT+0400) heure : région indéterminée (Astrakhan)</option>
                                                                        <option value="Europe/Saratov" data-spec="select-option">(GMT+0400) heure : région indéterminée (Saratov)</option>
                                                                        <option value="Europe/Ulyanovsk" data-spec="select-option">(GMT+0400) heure : région indéterminée (Ulyanovsk)</option>
                                                                        <option value="Asia/Kabul" data-spec="select-option">(GMT+0430) heure : Afghanistan</option>
                                                                        <option value="Asia/Tehran" data-spec="select-option">(GMT+0430) heure : Iran</option>
                                                                        <option value="Antarctica/Mawson" data-spec="select-option">(GMT+0500) heure : Antarctique (Mawson)</option>
                                                                        <option value="Asia/Aqtau" data-spec="select-option">(GMT+0500) heure : Kazakhstan (Aktaou)</option>
                                                                        <option value="Asia/Aqtobe" data-spec="select-option">(GMT+0500) heure : Kazakhstan (Aktioubinsk)</option>
                                                                        <option value="Asia/Qyzylorda" data-spec="select-option">(GMT+0500) heure : Kazakhstan (Kzyl Orda)</option>
                                                                        <option value="Asia/Oral" data-spec="select-option">(GMT+0500) heure : Kazakhstan (Ouralsk)</option>
                                                                        <option value="Indian/Maldives" data-spec="select-option">(GMT+0500) heure : Maldives</option>
                                                                        <option value="Asia/Samarkand" data-spec="select-option">(GMT+0500) heure : Ouzbékistan (Samarcande)</option>
                                                                        <option value="Asia/Tashkent" data-spec="select-option">(GMT+0500) heure : Ouzbékistan (Tachkent)</option>
                                                                        <option value="Asia/Karachi" data-spec="select-option">(GMT+0500) heure : Pakistan</option>
                                                                        <option value="Asia/Yekaterinburg" data-spec="select-option">(GMT+0500) heure : Russie (Ekaterinbourg)</option>
                                                                        <option value="Asia/Dushanbe" data-spec="select-option">(GMT+0500) heure : Tadjikistan</option>
                                                                        <option value="Indian/Kerguelen" data-spec="select-option">(GMT+0500) heure : Terres australes françaises</option>
                                                                        <option value="Asia/Ashgabat" data-spec="select-option">(GMT+0500) heure : Turkménistan</option>
                                                                        <option value="Asia/Atyrau" data-spec="select-option">(GMT+0500) heure : région indéterminée (Atyrau)</option>
                                                                        <option value="Asia/Kolkata" data-spec="select-option">(GMT+0530) heure : Inde</option>
                                                                        <option value="Asia/Colombo" data-spec="select-option">(GMT+0530) heure : Sri Lanka</option>
                                                                        <option value="Asia/Kathmandu" data-spec="select-option">(GMT+0545) heure : Népal</option>
                                                                        <option value="Antarctica/Vostok" data-spec="select-option">(GMT+0600) heure : Antarctique (Vostok)</option>
                                                                        <option value="Asia/Dhaka" data-spec="select-option">(GMT+0600) heure : Bangladesh</option>
                                                                        <option value="Asia/Thimphu" data-spec="select-option">(GMT+0600) heure : Bhoutan</option>
                                                                        <option value="Asia/Urumqi" data-spec="select-option">(GMT+0600) heure : Chine (Ürümqi)</option>
                                                                        <option value="Asia/Almaty" data-spec="select-option">(GMT+0600) heure : Kazakhstan (Alma Ata)</option>
                                                                        <option value="Asia/Bishkek" data-spec="select-option">(GMT+0600) heure : Kirghizistan</option>
                                                                        <option value="Asia/Omsk" data-spec="select-option">(GMT+0600) heure : Russie (Omsk)</option>
                                                                        <option value="Indian/Chagos" data-spec="select-option">(GMT+0600) heure : Territoire britannique de l’océan Indien</option>
                                                                        <option value="Asia/Qostanay" data-spec="select-option">(GMT+0600) heure : région indéterminée (Qostanay)</option>
                                                                        <option value="Indian/Cocos" data-spec="select-option">(GMT+0630) heure : Îles Cocos</option>
                                                                        <option value="Asia/Rangoon" data-spec="select-option">(GMT+0630) heure : Myanmar (Birmanie)</option>
                                                                        <option value="Asia/Yangon" data-spec="select-option">(GMT+0630) heure : région indéterminée (Yangon)</option>
                                                                        <option value="Antarctica/Davis" data-spec="select-option">(GMT+0700) heure : Antarctique (Davis)</option>
                                                                        <option value="Asia/Phnom_Penh" data-spec="select-option">(GMT+0700) heure : Cambodge</option>
                                                                        <option value="Indian/Christmas" data-spec="select-option">(GMT+0700) heure : Île Christmas</option>
                                                                        <option value="Asia/Jakarta" data-spec="select-option">(GMT+0700) heure : Indonésie (Jakarta)</option>
                                                                        <option value="Asia/Pontianak" data-spec="select-option">(GMT+0700) heure : Indonésie (Pontianak)</option>
                                                                        <option value="Asia/Vientiane" data-spec="select-option">(GMT+0700) heure : Laos</option>
                                                                        <option value="Asia/Hovd" data-spec="select-option">(GMT+0700) heure : Monde (Hovd)</option>
                                                                        <option value="Asia/Krasnoyarsk" data-spec="select-option">(GMT+0700) heure : Russie (Krasnoïarsk)</option>
                                                                        <option value="Asia/Novokuznetsk" data-spec="select-option">(GMT+0700) heure : Russie (Novokuznetsk)</option>
                                                                        <option value="Asia/Novosibirsk" data-spec="select-option">(GMT+0700) heure : Russie (Novossibirsk)</option>
                                                                        <option value="Asia/Bangkok" data-spec="select-option">(GMT+0700) heure : Thaïlande</option>
                                                                        <option value="Asia/Ho_Chi_Minh" data-spec="select-option">(GMT+0700) heure : Vietnam</option>
                                                                        <option value="Asia/Barnaul" data-spec="select-option">(GMT+0700) heure : région indéterminée (Barnaul)</option>
                                                                        <option value="Asia/Tomsk" data-spec="select-option">(GMT+0700) heure : région indéterminée (Tomsk)</option>
                                                                        <option value="Antarctica/Casey" data-spec="select-option">(GMT+0800) heure : Antarctique (Casey)</option>
                                                                        <option value="Australia/Perth" data-spec="select-option">(GMT+0800) heure : Australie (Perth)</option>
                                                                        <option value="Asia/Brunei" data-spec="select-option">(GMT+0800) heure : Brunéi Darussalam</option>
                                                                        <option value="Asia/Shanghai" data-spec="select-option">(GMT+0800) heure : Chine (Shanghai)</option>
                                                                        <option value="Asia/Makassar" data-spec="select-option">(GMT+0800) heure : Indonésie (Macassar)</option>
                                                                        <option value="Asia/Kuala_Lumpur" data-spec="select-option">(GMT+0800) heure : Malaisie (Kuala Lumpur)</option>
                                                                        <option value="Asia/Kuching" data-spec="select-option">(GMT+0800) heure : Malaisie (Kuching)</option>
                                                                        <option value="Asia/Ulaanbaatar" data-spec="select-option">(GMT+0800) heure : Mongolie (Oulan-Bator)</option>
                                                                        <option value="Asia/Choibalsan" data-spec="select-option">(GMT+0800) heure : Mongolie (Tchoïbalsan)</option>
                                                                        <option value="Asia/Manila" data-spec="select-option">(GMT+0800) heure : Philippines</option>
                                                                        <option value="Asia/Hong_Kong" data-spec="select-option">(GMT+0800) heure : R.A.S. chinoise de Hong Kong</option>
                                                                        <option value="Asia/Macau" data-spec="select-option">(GMT+0800) heure : R.A.S. chinoise de Macao</option>
                                                                        <option value="Asia/Irkutsk" data-spec="select-option">(GMT+0800) heure : Russie (Irkoutsk)</option>
                                                                        <option value="Asia/Singapore" data-spec="select-option">(GMT+0800) heure : Singapour</option>
                                                                        <option value="Asia/Taipei" data-spec="select-option">(GMT+0800) heure : Taïwan</option>
                                                                        <option value="Australia/Eucla" data-spec="select-option">(GMT+0845) heure : Monde (Eucla)</option>
                                                                        <option value="Asia/Pyongyang" data-spec="select-option">(GMT+0900) heure : Corée du Nord</option>
                                                                        <option value="Asia/Seoul" data-spec="select-option">(GMT+0900) heure : Corée du Sud</option>
                                                                        <option value="Asia/Jayapura" data-spec="select-option">(GMT+0900) heure : Indonésie (Jayapura)</option>
                                                                        <option value="Asia/Tokyo" data-spec="select-option">(GMT+0900) heure : Japon</option>
                                                                        <option value="Pacific/Palau" data-spec="select-option">(GMT+0900) heure : Palaos</option>
                                                                        <option value="Asia/Yakutsk" data-spec="select-option">(GMT+0900) heure : Russie (Iakoutsk)</option>
                                                                        <option value="Asia/Khandyga" data-spec="select-option">(GMT+0900) heure : Russie (Khandyga)</option>
                                                                        <option value="Asia/Chita" data-spec="select-option">(GMT+0900) heure : Russie (Tchita)</option>
                                                                        <option value="Asia/Dili" data-spec="select-option">(GMT+0900) heure : Timor oriental</option>
                                                                        <option value="Australia/Adelaide" data-spec="select-option">(GMT+0930) heure : Australie (Adélaïde)</option>
                                                                        <option value="Australia/Broken_Hill" data-spec="select-option">(GMT+0930) heure : Australie (Broken Hill)</option>
                                                                        <option value="Australia/Darwin" data-spec="select-option">(GMT+0930) heure : Australie (Darwin)</option>
                                                                        <option value="Antarctica/DumontDUrville" data-spec="select-option">(GMT+1000) heure : Antarctique (Dumont d’Urville)</option>
                                                                        <option value="Australia/Brisbane" data-spec="select-option">(GMT+1000) heure : Australie (Brisbane)</option>
                                                                        <option value="Australia/Currie" data-spec="select-option">(GMT+1000) heure : Australie (Currie)</option>
                                                                        <option value="Australia/Hobart" data-spec="select-option">(GMT+1000) heure : Australie (Hobart)</option>
                                                                        <option value="Australia/Lindeman" data-spec="select-option">(GMT+1000) heure : Australie (Lindeman)</option>
                                                                        <option value="Australia/Melbourne" data-spec="select-option">(GMT+1000) heure : Australie (Melbourne)</option>
                                                                        <option value="Australia/Sydney" data-spec="select-option">(GMT+1000) heure : Australie (Sydney)</option>
                                                                        <option value="Pacific/Chuuk" data-spec="select-option">(GMT+1000) heure : États fédérés de Micronésie (Chuuk)</option>
                                                                        <option value="Pacific/Guam" data-spec="select-option">(GMT+1000) heure : Guam</option>
                                                                        <option value="Pacific/Saipan" data-spec="select-option">(GMT+1000) heure : Îles Mariannes du Nord</option>
                                                                        <option value="Pacific/Port_Moresby" data-spec="select-option">(GMT+1000) heure : Papouasie-Nouvelle-Guinée (Port Moresby)</option>
                                                                        <option value="Asia/Ust-Nera" data-spec="select-option">(GMT+1000) heure : Russie (Ust-Nera)</option>
                                                                        <option value="Asia/Vladivostok" data-spec="select-option">(GMT+1000) heure : Russie (Vladivostok)</option>
                                                                        <option value="Australia/Lord_Howe" data-spec="select-option">(GMT+1030) heure : Monde (Lord Howe)</option>
                                                                        <option value="Antarctica/Macquarie" data-spec="select-option">(GMT+1100) heure : Australie (Macquarie)</option>
                                                                        <option value="Pacific/Kosrae" data-spec="select-option">(GMT+1100) heure : États fédérés de Micronésie (Kosrae)</option>
                                                                        <option value="Pacific/Pohnpei" data-spec="select-option">(GMT+1100) heure : États fédérés de Micronésie (Pohnpei)</option>
                                                                        <option value="Pacific/Norfolk" data-spec="select-option">(GMT+1100) heure : Île Norfolk</option>
                                                                        <option value="Pacific/Guadalcanal" data-spec="select-option">(GMT+1100) heure : Îles Salomon</option>
                                                                        <option value="Pacific/Noumea" data-spec="select-option">(GMT+1100) heure : Nouvelle-Calédonie</option>
                                                                        <option value="Pacific/Bougainville" data-spec="select-option">(GMT+1100) heure : Papouasie-Nouvelle-Guinée (Bougainville)</option>
                                                                        <option value="Asia/Magadan" data-spec="select-option">(GMT+1100) heure : Russie (Magadan)</option>
                                                                        <option value="Asia/Sakhalin" data-spec="select-option">(GMT+1100) heure : Russie (Sakhaline)</option>
                                                                        <option value="Asia/Srednekolymsk" data-spec="select-option">(GMT+1100) heure : Russie (Srednekolymsk)</option>
                                                                        <option value="Pacific/Efate" data-spec="select-option">(GMT+1100) heure : Vanuatu</option>
                                                                        <option value="Antarctica/McMurdo" data-spec="select-option">(GMT+1200) heure : Antarctique (McMurdo)</option>
                                                                        <option value="Pacific/Fiji" data-spec="select-option">(GMT+1200) heure : Fidji</option>
                                                                        <option value="Pacific/Kwajalein" data-spec="select-option">(GMT+1200) heure : Îles Marshall (Kwajalein)</option>
                                                                        <option value="Pacific/Majuro" data-spec="select-option">(GMT+1200) heure : Îles Marshall (Majuro)</option>
                                                                        <option value="Pacific/Wake" data-spec="select-option">(GMT+1200) heure : Îles mineures éloignées des États-Unis (Wake)</option>
                                                                        <option value="Pacific/Tarawa" data-spec="select-option">(GMT+1200) heure : Kiribati (Tarawa)</option>
                                                                        <option value="Pacific/Nauru" data-spec="select-option">(GMT+1200) heure : Nauru</option>
                                                                        <option value="Pacific/Auckland" data-spec="select-option">(GMT+1200) heure : Nouvelle-Zélande</option>
                                                                        <option value="Asia/Anadyr" data-spec="select-option">(GMT+1200) heure : Russie (Anadyr)</option>
                                                                        <option value="Asia/Kamchatka" data-spec="select-option">(GMT+1200) heure : Russie (Kamtchatka)</option>
                                                                        <option value="Pacific/Funafuti" data-spec="select-option">(GMT+1200) heure : Tuvalu</option>
                                                                        <option value="Pacific/Wallis" data-spec="select-option">(GMT+1200) heure : Wallis-et-Futuna</option>
                                                                        <option value="Pacific/Chatham" data-spec="select-option">(GMT+1245) heure : Monde (Chatham)</option>
                                                                        <option value="Pacific/Enderbury" data-spec="select-option">(GMT+1300) heure : Kiribati (Enderbury)</option>
                                                                        <option value="Pacific/Apia" data-spec="select-option">(GMT+1300) heure : Samoa</option>
                                                                        <option value="Pacific/Fakaofo" data-spec="select-option">(GMT+1300) heure : Tokélaou</option>
                                                                        <option value="Pacific/Tongatapu" data-spec="select-option">(GMT+1300) heure : Tonga</option>
                                                                        <option value="Pacific/Kiritimati" data-spec="select-option">(GMT+1400) heure : Kiribati (Kiritimati)</option>
                                                                    </select></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    -->
                    </div>
                </div>
                <div class="below-the-fold-indicator eds-l-pad-all-2 eds-bg-color--grey-800 below-the-fold-indicator--moved-up" data-spec="below-the-fold"><i class="eds-vector-image eds-icon--small eds-vector-image--white" data-spec="icon"
                      aria-hidden="true"><svg class="arrow-down_svg__eds-icon--down-arrow_svg" viewBox="0 0 24 24">
                            <path class="arrow-down_svg__eds-icon--down-arrow_base" fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M12 20l.2-.2 5.8-5.6-.7-.8-4.8 4.7V4h-1v14.1l-4.8-4.7-.7.7z"></path>
                        </svg></i></div>
                        <button type="submit" class="btn btn-primary">Validez</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		$('.segmented').click(function() {
    		$("#segmented-venueType-0").show();
  		});
	}
</script>

@endsection

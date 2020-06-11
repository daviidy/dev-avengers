@extends('layouts.menu')
@section('title', 'Créer un business')

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
.form-2{display: none;}
.eds-checkbox__input:disabled~.eds-checkbox__label{color:#a9a8b3;color:var(--eds-ui-500,#a9a8b3);cursor:not-allowed;}
body .eds-text-color--grey-700{color:#4b4d63;}
body .eds-text-color--grey-800{color:#39364f;}
body .eds-bg-color--grey-800{background-color:#39364f;}
body .eds-text-color--grey-900{color:#007808;padding: 25px 0;}
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
.quill-0{height: 300px;width: 100%!important;}
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
.kv-upload-progress{display: none!important;}
.input-group-btn{display: inline-block!important;}
.btn-primary{
	background-color: #D86000 !important;
	border-color: #D86000!important;
}
.btn-primary:hover{
	background-color: #fff!important;
	color: #000!important;
	border-color:
	border: 3px solid #D86000!important;
}

@media (max-width: 600px){
.input-group-btn{display:flex!important;}
}

</style>

<!-- ==============================================
 Site Branding Section
 =============================================== -->
<div class="site-branding">
    <div class="container">
        <h1 class="site-title"><a> Créer un business </a></h1>
    </div>
    <!-- /container -->
</div>
<!-- .site-branding -->


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
            <form id="information-container" enctype="multipart/form-data" method="post" action="{{route('projects.store')}}">
                @csrf
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
                                <p class="eds-text-bm eds-text-color--grey-800"><span>Nommez votre projet.</span></p>
                            </div>
                        </div>
                        <div class="eds-l-mar-top-5">
                            <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--static eds-field-styled--error" data-automation="coyote-basicinfo-event-title-wrapper" data-spec="coyote-basicinfo-event-title">
                                <div class="eds-field-styled__border-simulation">
                                    <div class="eds-field-styled__internal">
                                        <div class="eds-field-styled__input-container">
                                            <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-basicInfo-title-label" for="event-basicInfo-title"
                                                  data-spec="label-label"><span class="eds-label__content">Nom du projet</span><span class="eds-label__required-indicator eds-text-bs" data-spec="required-indicator"><span> *</span><span
                                                          class="eds-is-hidden-accessible">(obligatoire)</span></span></label></div>
                                                          <input data-spec="input-field-input-element" aria-invalid="true" aria-required="true" class="eds-field-styled__input"
                                              data-automation="coyote-basicinfo-event-title" id="event-basicInfo-title" maxlength="75" name="name" role="textbox" type="text" value="" placeholder="Soyez clair et précis.">
                                        </div>
                                    </div>
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

                            <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--static eds-field-styled--error" data-automation="coyote-basicinfo-event-title-wrapper" data-spec="coyote-basicinfo-event-title">
                                <div class="eds-field-styled__border-simulation">
                                    <div class="eds-field-styled__internal">
                                        <div class="eds-field-styled__input-container">
                                            <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-basicInfo-title-label" for="event-basicInfo-title"
                                                  data-spec="label-label"><span class="eds-label__content">Type</span><span class="eds-label__required-indicator eds-text-bs" data-spec="required-indicator"><span> *</span><span
                                                          class="eds-is-hidden-accessible">(obligatoire)</span></span></label></div>
                                                        <select class="eds-field-styled__input" name="type" role="listbox">
                                                            <option value="Projet">Projet</option>
                                                            <option value="Achat et vente">Achat et vente</option>
                                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                <!--div class="eds-field__sub">
                                    <div class="eds-field__sub--left">
                                        <aside class="eds-field-styled__annotation eds-text-bs eds-fx--fade-in eds-l-pad-top-1" data-automation="eds-field-annotation" role="alert">Le titre est obligatoire.</aside>
                                    </div>
                                    <div class="eds-field__sub--right">
                                        <aside class="eds-field-styled__character-counter eds-text-bs eds-fx--fade-in eds-l-pad-top-1">0/75</aside>
                                    </div>
                                </div-->
                            </div>

                            <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--static eds-field-styled--error" data-automation="coyote-basicinfo-event-title-wrapper" data-spec="coyote-basicinfo-event-title">
                                <div class="eds-field-styled__border-simulation">
                                    <div class="eds-field-styled__internal">
                                        <div class="eds-field-styled__input-container">
                                            <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-basicInfo-title-label" for="event-basicInfo-title"
                                                  data-spec="label-label"><span class="eds-label__content">Secteur</span><span class="eds-label__required-indicator eds-text-bs" data-spec="required-indicator"><span> *</span><span
                                                          class="eds-is-hidden-accessible">(obligatoire)</span></span></label></div>
                                                        <select class="eds-field-styled__input" name="sector" role="listbox">
                                                            <option value="Agriculture">Agriculture</option>
                                                            <option value="Finance">Finance</option>
                                                            <option value="Education">Education</option>
                                                        </select>
                                        </div>
                                    </div>
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

                            <div class="eds-field-styled eds-l-mar-bot-4 eds-field-styled--static eds-field-styled--error" data-automation="coyote-basicinfo-event-title-wrapper" data-spec="coyote-basicinfo-event-title">
                                <div class="eds-field-styled__border-simulation">
                                    <div class="eds-field-styled__internal">
                                        <div class="eds-field-styled__input-container">
                                            <div class="eds-field-styled__label-wrapper"><label class="eds-field-styled__label eds-label-primary eds-field-styled__label--required" id="event-basicInfo-title-label" for="event-basicInfo-title"
                                                  data-spec="label-label"><span class="eds-label__content">Prix (en FCFA)</span><span class="eds-label__required-indicator eds-text-bs" data-spec="required-indicator"><span> *</span><span
                                                          class="eds-is-hidden-accessible">(obligatoire)</span></span></label></div>
                                                          <input data-spec="input-field-input-element" aria-invalid="true" aria-required="true" class="eds-field-styled__input"
                                              data-automation="coyote-basicinfo-event-title" id="event-basicInfo-title" maxlength="75" name="price" role="textbox" type="number" value="" placeholder="Soyez clair et précis.">
                                        </div>
                                    </div>
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
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-1-12 eds-g-offset-1-12 eds-show-up-md eds-l-pad-top-1" style="display: none;"><i class="eds-vector-image eds-icon--medium eds-vector-image--grey-300" data-spec="icon" aria-hidden="true"><svg
                              viewBox="0 0 24 24">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17 4V2h-1v2H8V2H7v2H2v18h20V4h-5zm4 17H3V9h18v12zM3 8V5h4v1h1V5h8v1h1V5h4v3H3z"></path>
                                <g fill-rule="evenodd" clip-rule="evenodd">
                                    <path d="M15 16h2v2h-2zM11 16h2v2h-2zM7 16h2v2H7zM15 12h2v2h-2zM11 12h2v2h-2zM7 12h2v2H7z"></path>
                                </g>
                            </svg></i></div>
                    <div class="eds-g-cell eds-vertical-group eds-g-cell-12-12 eds-g-cell-sw-10-12 eds-g-cell-lw-9-12 eds-g-cell-lg-8-12 eds-g-cell-ln-8-12 eds-g-cell-md-8-12 eds-g-offset-sw-1-12 eds-g-offset-md-0-12 eds-g-cell--has-overflow">
                        <div>
                            <h1 class="eds-text-hm eds-text-color--grey-900">Date</h1>
                            <div class="eds-g-cell eds-g-cell-1-1 eds-g-cell-lw-9-12 eds-g-cell-lg-9-12 eds-g-cell-ln-9-12 eds-g-cell-mw-9-12 eds-g-cell-md-1-1 eds-g-cell-mn-9-12 eds-g-cell-sw-9-12">
                                <p class="eds-text-bm eds-text-color--grey-800"><span>Indiquez quand vous voudrez commencer et terminer ce business</span></p>
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
                        <p class="eds-text-bm">Les projets peuvent s'étendre sur plusieurs jours</p>
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
                                                                  <span class="eds-label__content">Début du projet</span>
                                                              </label>
                                                          </div>
                                                          <input data-spec="input-field-input-element" aria-invalid="false" aria-required="true"
                                                              class="eds-field-styled__input" id="event-startDate" name="begin_date" role="textbox" type="date" value="">
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
                                                                  <span class="eds-label__content">Fin du projet</span>
                                                              </label>
                                                          </div>
                                                          <input data-spec="input-field-input-element" aria-invalid="false" aria-required="true"
                                                              class="eds-field-styled__input" id="event-endDate" name="end_date" role="textbox" type="date" value="">
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

                        <div>
                        	<h1 class="eds-text-hm eds-text-color--grey-900">Autres informations</h1>

                            <div class="col-md-12 text-left mb-4">
                                <h4 class="mb-3">Joindre des fichiers</h4>
                                <div class="form-group">

                                          <span style="width: 100%;" class="btn btn-default btn-file">
                                            <input id="input-2" name="input2[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                                          </span>
                                </div>
                            </div>

                            <div class="eds-expansion-panel__content" data-spec="expansion-panel-content">
                                <div class="eds-l-mar-top-4" data-spec="advanced-settings__content">


                                    <h4>Description du projet</h4>
                                    <div class="eds-l-mar-top-6">
                                        <div class="eds-g-group">
                                            <div class="eds-g-cell eds-g-cell-12-12 eds-g-cell-sw-6-12 quill-0">
                                                <div class="eds-field-styled eds-l-mar-bot-2 eds-field-styled--static" data-automation="select-field-wrapper" data-spec="select-field" style="display: block;">
                                                    <div class="eds-field-styled__border-simulation">
                                                        <div class="eds-field-styled__internal">

                                                            <div class="eds-field-styled__input-container">

                                                                <div class="eds-field-styled__select-wrapper">
                                                                	<input type="hidden" name="details" value="">
                                    									<div class="" id="editorDetails" style="height: 200px;">

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
                            </div>
                        </div>

                    </div>
                </div>
                <div class="below-the-fold-indicator eds-l-pad-all-2 eds-bg-color--grey-800 below-the-fold-indicator--moved-up" data-spec="below-the-fold"><i class="eds-vector-image eds-icon--small eds-vector-image--white" data-spec="icon"
                      aria-hidden="true"><svg class="arrow-down_svg__eds-icon--down-arrow_svg" viewBox="0 0 24 24">
                            <path class="arrow-down_svg__eds-icon--down-arrow_base" fill-rule="evenodd" clip-rule="evenodd" fill="#231F20" d="M12 20l.2-.2 5.8-5.6-.7-.8-4.8 4.7V4h-1v14.1l-4.8-4.7-.7.7z"></path>
                        </svg></i></div>
                        <button type="submit" class="btn btn-primary">Valider</button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="/js/quill/image-resize.min.js"></script>
<script src="/js/quill/video-resize.min.js"></script>


        <script>
        var options = {
        modules: {
          toolbar: [
            [{ header: [1, 2, false] }],
            ['size', 'bold', 'italic', 'underline'],
            ['image','video', 'blockquote', 'align', 'link'],
            ['color'],
            [{ list: 'ordered' }, { list: 'bullet' }]
        ],
        imageResize: {
             modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
         },
         videoResize: {
                modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
            },
         syntax: true,
        },
        placeholder: 'Ecrivez ici...',
        theme: 'snow'  // or 'bubble'
        };
        var quill = new Quill('#editorDetails', options);

            //a la sumissio  du formulmaire ob recupêre
            //le contenu de la div qui a le texte riche
            //et on met ce contenu dans l'input hidden
            var form = document.getElementById('information-container');
            form.onsubmit = function() {
              // Populate hidden form on submit
              var text = document.querySelector('input[name=details]');
              text.value = quill.root.innerHTML;

            //   console.log("Submitted", $(form).serialize(), $(form).serializeArray());

              // No back end to actually submit to!
            //   alert('Open the console to see the submit data!')
              return true;
            };
          </script>
<script>


  		$('.segmented label').click(function() {
  			$('.form-1').toggle('slow');
  			$('.form-2').hide();
  		});
  		$('.segmented-2 label').click(function() {
  			$('.form-2').toggle('slow');
  			$('.form-1').hide();
  		});

</script>

@endsection

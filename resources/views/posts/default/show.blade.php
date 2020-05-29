@extends('layouts.menu')
@section('title', $post->title)

@section('content')

<!--style header-->
<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
header{display:block;}
h1{font-size:2em;margin:0.67em 0;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h1{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
a{-ms-touch-action:manipulation;touch-action:manipulation;}
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
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
div,span,h1,p,a,header,time{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
header{display:block;}
h1{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h1{font-size:30px;line-height:54px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active{text-decoration:none;outline:0;color:#16A085!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
p a,p a:visited{line-height:inherit;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
header.page-post-2{background:linear-gradient(rgba(34, 34, 34, 0.7), rgba(34, 34, 34, 0.7)), url("/storage/images/posts/{{$post->image}}") no-repeat center center fixed;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-attachment:scroll;color:#fff;height:65vh;display:flex;flex-direction:column;justify-content:center;align-items:center;text-align:center;}
header.page-post-2 .post-heading{padding:100px 0 50px;color:white;}
@media only screen and (min-width: 767px){
header.page-post-2 .post-heading{padding:150px 0;}
}
header.page-post-2 .post-heading p.entry-meta{color:#adaeb3;font-family:'Abhaya Libre', serif;font-size:13px;font-style:normal;letter-spacing:1px;margin-bottom:20px;text-transform:uppercase;}
header.page-post-2 .post-heading p.entry-meta a{border:none;color:#1ab394;font-style:normal;}
header.page-post-2 .post-heading h1{font-family:'Montserrat', sans-serif;font-weight:700;text-align:center;color:#fff;letter-spacing:1px;font-size:55px;}
@media only screen and (max-width: 768px){
header.page-post-2 .post-heading h1{font-size:25px;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>

<!--style header avatar-->

<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
img{border-style:none;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
p{margin-top:0;margin-bottom:1rem;}
img{vertical-align:middle;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
div,p,img{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
.header-avatar{margin-bottom:-110px;position:relative;top:-40px;text-align:center;}
.header-avatar img{border:7px solid #f5f5f6;border-radius:50%;float:none;height:80px;width:80px;}
.header-avatar p{color:#adaeb3;font-family:'Abhaya Libre', serif;font-size:16px;font-weight:700;letter-spacing:1px;margin-bottom:0;text-transform:uppercase;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.header-avatar{margin-bottom:-110px;position:relative;top:-40px;text-align:center;}
.header-avatar img{border:7px solid #f5f5f6;border-radius:50%;float:none;height:80px;width:80px;}
.header-avatar p{color:#adaeb3;font-family:'Abhaya Libre', serif;font-size:16px;font-weight:700;letter-spacing:1px;margin-bottom:0;text-transform:uppercase;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>


<!--style article-->

<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
article{display:block;}
strong{font-weight:inherit;}
strong{font-weight:bolder;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
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
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
div,h4,p,strong,article{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
strong{font-weight:700;color:#333;}
article h4{font-family:'Abhaya Libre', serif;font-weight:700;color:#555555;font-size:18px;}
article p{font-family:'Abhaya Libre', serif;line-height:1.5;margin:30px 0;color:#858686;font-size:17px;}
article h4{font-family:'Abhaya Libre', serif;font-weight:800;}
article.entry-content{border:20px solid #f5f5f6;padding:10% 0%;}
article.entry-content h4{font-family:'Abhaya Libre', serif;font-weight:700;color:#555555;font-size:18px;}
article.entry-content p{font-family:'Abhaya Libre', serif;line-height:1.5;margin:30px 0;color:#858686;font-size:17px;}
article.entry-content h4{font-family:'Abhaya Libre', serif;font-weight:800;}
@media only screen and (max-width: 768px){
article.entry-content h4{padding-top:40px!important;}
p{margin-bottom:0px!important;}
}
.entry-content{border:20px solid #f5f5f6;padding:5% 0%;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>

<!--style comments-->

<style media="screen">
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/bower_components/bootstrap/dist/css/bootstrap.css */
article{display:block;}
a{background-color:transparent;-webkit-text-decoration-skip:objects;}
a:active,a:hover{outline-width:0;}
img{border-style:none;}
button,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0;}
button{overflow:visible;}
button{text-transform:none;}
button,[type="submit"]{-webkit-appearance:button;}
button::-moz-focus-inner,[type="submit"]::-moz-focus-inner{border-style:none;padding:0;}
button:-moz-focusring,[type="submit"]:-moz-focusring{outline:1px dotted ButtonText;}
fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em;}
textarea{overflow:auto;}
@media print{
*,*::before,*::after,p::first-letter,div::first-letter,p::first-line,div::first-line{text-shadow:none!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
a,a:visited{text-decoration:underline;}
img{page-break-inside:avoid;}
p{orphans:3;widows:3;}
}
*,*::before,*::after{-webkit-box-sizing:inherit;box-sizing:inherit;}
h4{margin-top:0;margin-bottom:.5rem;}
p{margin-top:0;margin-bottom:1rem;}
a{color:#0275d8;text-decoration:none;}
a:focus,a:hover{color:#014c8c;text-decoration:underline;}
img{vertical-align:middle;}
a,button,label,textarea{-ms-touch-action:manipulation;touch-action:manipulation;}
label{display:inline-block;margin-bottom:.5rem;}
button:focus{outline:1px dotted;outline:5px auto -webkit-focus-ring-color;}
button,textarea{line-height:inherit;}
textarea{resize:vertical;}
fieldset{min-width:0;padding:0;margin:0;border:0;}
h4{margin-bottom:0.5rem;font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
h4{font-size:1.5rem;}
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
.text-center{text-align:center!important;}
/*! CSS Used from: http://www.themashabrand.com/templates/Masha/Medium/css/app.css */
.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;}
.fa-comment:before{content:"\f075";}
div,span,h4,p,a,img,i,fieldset,form,article{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article{display:block;}
h4{font-family:'Montserrat', sans-serif;color:#2C3E50;letter-spacing:1px;}
h4{font-size:18px;line-height:36px;}
p{font-family:'Varela Round', sans-serif;line-height:24px;margin:0;font-size:14px;letter-spacing:1px;}
a{color:#fff;text-decoration:none;outline:0;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
a:hover,a:focus,a:active{text-decoration:none;outline:0;color:#16A085!important;-webkit-transition:0.5s all ease;-moz-transition:0.5s all ease;-o-transition:0.5s all ease;-ms-transition:0.5s all ease;transition:0.5s all ease;}
.kafe-btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;line-height:1.4;cursor:pointer;background-image:none;border:1px solid transparent;border-radius:4px;khtml-user-select:none;webkit-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;}
.kafe-btn-mint{font-family:'Varela Round', sans-serif;font-weight:700;font-size:14px;padding:13px 31px;color:#fff;background:#05cb95;letter-spacing:1px;}
.kafe-btn-mint:hover{color:#fff!important;background:#0de5ab;text-decoration:none;}
.full-width{width:100%;}
a{cursor:pointer;outline:0;}
a{cursor:pointer;outline:0;}
.kafe-btn{display:inline-block;margin-bottom:0;font-weight:normal;text-align:center;white-space:nowrap;vertical-align:middle;line-height:1.4;cursor:pointer;background-image:none;border-radius:4px;khtml-user-select:none;webkit-select:none;-moz-user-select:none;-ms-user-select:none;-o-user-select:none;user-select:none;}
.kafe-btn-mint{font-family:'Varela Round', sans-serif;font-weight:700;font-size:14px;margin-top:23px;padding:13px 31px;color:#fff;background:#05cb95;letter-spacing:1px;}
.kafe-btn-mint:hover{color:#fff!important;background:#0de5ab;text-decoration:none;}
.full-width{width:100%;}
article h4{font-family:'Abhaya Libre', serif;font-weight:700;color:#555555;font-size:18px;}
article p{font-family:'Abhaya Libre', serif;line-height:1.5;margin:30px 0;color:#858686;font-size:17px;}
article h4{font-family:'Abhaya Libre', serif;font-weight:800;}
article a{font-family:'Abhaya Libre', serif;color:#333333;-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s;}
article a:hover,article a:focus{color:#1ab394;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}
.post-comments{background:#f5f5f6!important;padding-top:10px;}
.post-comments .comments-list-notification{background-color:#fff;padding:5px 8px;margin-bottom:10px;-webkit-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);-moz-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);}
.post-comments .comments-list-notification h4{font-family:'Montserrat', sans-serif;font-weight:700;font-size:14px;text-align:center;}
.post-comments .comments-list{background-color:#fff;padding:25px 30px;margin-bottom:25px;-webkit-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);-moz-box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);box-shadow:0px 0px 10px 0px rgba(0, 0, 0, 0.1);}
.post-comments .comment-body{overflow:hidden;}
.post-comments .author-avatar{width:100px;height:100px;float:left;}
.post-comments .comment-content{overflow:hidden;padding-left:20px;}
.post-comments .author-name{text-transform:uppercase;font-family:'Abhaya Libre', serif;font-size:16px;font-weight:700;color:#1ab394;margin-right:15px;}
.post-comments .author-time{font-family:'Abhaya Libre', serif;font-size:13px;font-weight:300;color:#858686;}
.post-comments p{font-family:'Abhaya Libre', serif;line-height:1.5;margin:10px 0;color:#858686;font-size:17px;}
.post-comments a.comment-reply-link{font-family:'Abhaya Libre', serif;color:#333333;-webkit-transition:all .2s;-moz-transition:all .2s;transition:all .2s;}
.post-comments a.comment-reply-link:hover,.post-comments a.comment-reply-link:focus{text-decoration:none;color:#1ab394;}
.post-comments #contactform{display:block;width:100%;text-align:left;}
.post-comments #contactform label{position:relative;z-index:13;padding-left:10px;color:#2C3E50;}
.post-comments #contactform label{line-height:50px;}
.post-comments #contactform textarea{display:block;position:relative;overflow:hidden;min-height:50px;margin-top:-50px;line-height:50px;font-size:1em;padding-left:30px;padding-right:10px;width:100%;color:#666666;background:#ffffff;border:2px solid #eeeeee;}
.post-comments #contactform textarea{line-height:25px;width:100%;min-height:120px;}
.post-comments #contactform textarea:focus{border:2px solid #25E6B1;background-color:#ffffff;color:#1a1a1a;}
@media only screen and (max-width: 768px){
p{margin-bottom:0px!important;}
}

</style>

@if(session('status'))
@include('includes.status')
@endif

<header class="page-post-2">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="post-heading">
					<p class="entry-meta">
						<span class="date updated time">
							<time class="entry-modified-time">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</time>
                            <!--
                        </span> &nbsp; / &nbsp;
						<span class="entry-categories">
							<a href="http://chrislema.com/wordpress/" rel="category tag">Travel</a>
						</span>
                    -->
					</p>
					<h1>{{$post->title}}</h1>
				</div><!-- /.post-heading -->
			</div><!-- /.col-lg-8 -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</header>

<div class="header-avatar">
	<img alt="{{$post->user->name}}" src="/storage/images/users/{{$post->user->image}}" class="avatar avatar-200 photo" width="200" height="200">
	<p>{{$post->user->name}}</p>
</div>

<article class="entry-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

				{!!$post->content!!}

			</div><!-- /col-lg-8 -->
		</div><!-- /row -->
	</div><!-- /container -->
</article>

<article class="post-comments">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">

				<div class="comments-list-notification">
					<h4><span class="text">{{count($post->comments)}} Commentaires</span></h4>
				</div><!-- /.comment-list -->

                @foreach($post->comments as $comment)
                <div class="comments-list">

					<div class="comment-body">
						<div class="author-avatar">
							<img alt="{{$comment->user->name}}" src="/storage/images/users/{{$comment->user->image}}" class="img-fluid" width="100" height="100">
						</div>
						<div class="comment-content">
							<span class="author-name">{{$comment->user->name}}</span>
							<span class="author-time">{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y H:i') }}</span>
							<p class="author-post">{{$comment->content}}</p>
							<a rel="nofollow" class="comment-reply-link" href="#" aria-label="Reply to Bablofil">Répondre</a>
						</div><!-- /.comment-content -->
					</div><!-- .comment-body -->

				</div><!-- /.comment-list -->
                @endforeach



				<div class="comments-list">
					<!-- The contactform -->
					<form action="{{route('comments.store')}}" method="post" name="contactform" id="contactform">
                        @csrf
						<fieldset>
							<!-- Comments / Message -->
							<label for="comments" accesskey="C"><i class="fa fa-comment"></i></label>
							<textarea name="content" id="comments"></textarea>
                            <input type="text" hidden name="user_id" value="{{Auth::user()->id}}">
                            <input type="text" hidden name="post_id" value="{{$post->id}}">
							<!-- Send button -->
							<div class="text-center">
								<button type="submit" class="kafe-btn kafe-btn-mint full-width">Envoyer</button>
							</div>
						</fieldset>
					</form>
				</div><!-- /.comment-list -->

			</div><!-- /col-lg-8 -->
		</div><!-- /row -->
	</div><!-- /container -->
</article>

@endsection

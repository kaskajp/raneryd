<?php
function ordinal($num) {
  $last=substr($num,-1);
  if( $last>3  or
      $last==0 or
      ( $num >= 11 and $num <= 19 ) )
  {
    $ext='th';
  }
  else if( $last==3 )
  {
    $ext='rd';
  }
  else if( $last==2 )
  {
    $ext='nd';
  }
  else
  {
    $ext='st';
  }
  return $num.$ext;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="application-name" content="Jonas Raneryd">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Jonas Raneryd">
  <meta name="msapplication-TileImage" content="/assets/images/icon-144x144.png">
  <meta name="msapplication-TileColor" content="#000000">
  <meta name="theme-color" content="#000000">
  <meta property="og:title" content="Jonas Raneryd" />
  <meta name="author" content="Jonas Raneryd" />
  <meta property="og:locale" content="en_US" />
  <meta name="description" content="My name is Jonas Raneryd. Everything I do, create, or find interesting shows up here. It's a simple as that!">
  <meta property="og:description" content="My name is Jonas Raneryd. Everything I do, create, or find interesting shows up here. It's a simple as that!" />
  <meta property="og:site_name" content="Jonas Raneryd" />
  <meta property="og:image" content="https://avatars3.githubusercontent.com/u/1626458?s=460&v=4" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@yonasu" />
  <meta name="twitter:creator" content="@yonasu" />
  <meta name="google-site-verification" content="qGWLRuzvdmpsxNoN4Xb15FAtPYw1PvBzcJmOBm6cWps" />
  <title>Jonas Raneryd</title>
  <link rel="manifest" href="/manifest.json">
  <link rel="apple-touch-icon" href="/assets/images/icon-152x152.png">
  <link rel="icon" sizes="192x192" href="/assets/images/icon-192x192.png">
  <link rel="shortcut icon" href="/assets/images/icon-192x192.png">
  <style>
    a,abbr,acronym,address,applet,article,aside,audio,b,big,blockquote,body,canvas,caption,center,cite,code,dd,del,details,dfn,div,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,html,i,iframe,img,ins,kbd,label,legend,li,mark,menu,nav,object,ol,output,p,pre,q,ruby,s,samp,section,small,span,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{border:0;font-size:100%;font:inherit;vertical-align:baseline;margin:0;padding:0}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:none}table{border-collapse:collapse;border-spacing:0}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}body{font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:16px;line-height:1.5;padding:0 20px}h1{font-size:24px;font-weight:700;margin-bottom:30px}em{font-style:italic}strong{font-weight:bold}.main-header{width:100%;max-width:500px;margin:100px auto 0 auto;text-align:center}.main-header h1{font-size:30px;margin-bottom:30px;font-weight:bold}.main-header p{margin-bottom:30px}.main-header a{color:#000;text-decoration:none;margin:0 20px;font-weight:700;border-bottom:2px solid transparent}.main-header a:hover{border-bottom:2px solid #000}.feed{width:100%;max-width:500px;margin:100px auto 200px auto}.time-header{margin-top:70px;margin-bottom:30px;text-transform:uppercase}.time-header.with-year{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.month-name,.year-name{font-weight:bold}.month-name{display:block;text-align:right}.post{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;margin-bottom:30px}.post-title a{color:#000;text-decoration:none}.post-title a:hover{text-decoration:underline}.post-date{color:#666;margin-left:20px}article{width:100%;max-width:500px;margin:100px auto 200px auto}article ol,article p,article ul{margin-bottom:30px}article a{color:#000}article hr{background:#ededed;height:1px;border:none;margin-bottom:30px}article img{display:block;width:100%}article ol,article ul{margin-left:30px}article ul{list-style-type:disc}article ol{list-style-type:decimal}
  </style>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-6168352-9"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-6168352-9');
  </script>

  <script src="https://www.googleoptimize.com/optimize.js?id=OPT-MKR2WK5"></script>
</head>
<body>

<header class="main-header">
	<h1>Jonas Raneryd</h1>
	<p>My name is Jonas Raneryd. Everything I do, create, or find interesting shows up here. It's a simple as that!</p>
	<nav>
		<a href="/">Feed</a>
		<a href="/pages/about">About</a>
		<a href="/pages/contact">Get in touch</a>
	</nav>
</header>

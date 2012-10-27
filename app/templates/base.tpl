<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{block name=title}Page{/block} - WebShop</title>
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Titillium+Web|Open+Sans">
    <link rel="stylesheet" type="text/css" href="static/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="static/css/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="static/css/main.css">
    {block name=custom_styles}{/block}

    <script src="static/js/vendor/modernizr-2.6.1.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
  <h1><a href="/">WebShop</a></h1>

  <nav id="nav-top-right">
    <ul class="button-group radius">
      <li><a href="index.php?page=login" class="button radius">Log In</a></li>
      <li><a href="index.php?page=logout" class="button radius">Register</a></li>
    </ul>
  </nav>
</header>

<div id="page">
    <div id="main-wrap" class="row">
        <div class="eight columns" id="content">
            {block name=content}{/block}
        </div>
        <div class="four columns">
            {block name=right_column}{/block}
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

<script src="/static/js/plugins.js"></script>
<script src="/static/js/main.js"></script>
{block name=custom_scripts}{/block}
</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>@yield('title') - WebShop</title>
  <meta name="viewport" content="width=device-width">

  {{ HTML::style('http://fonts.googleapis.com/css?family=Titillium+Web|Open+Sans') }}
  {{ HTML::style('css/normalize.css') }}
  {{ HTML::style('css/foundation.min.css') }}
  {{ HTML::style('css/main.css') }}

  {{ HTML::script('js/vendor/modernizr-2.6.1.min.js') }}
</head>
<body>
<!--[if lt IE 7]>
  <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
  <h1><a href="/">WebShop</a></h1>

  <nav id="nav-top-right">
    @if (Auth::check())
      Nigger!
    @else
    <ul class="button-group radius">
      <li><a href="/accounts/log-in" class="button radius">Log In</a></li>
      <li><a href="/accounts/register" class="button radius">Register</a></li>
    </ul>
    @endif
  </nav>
</header>

<div id="page">
  <div id="main-wrap" class="row">
    <div class="eight columns" id="content">
      @yield('content')

    </div>
    <div class="four columns">
      @yield('right_column')
    </div>
  </div>
</div>

{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js') }}
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
{{ HTML::script('js/plugins.js') }}
{{ HTML::script('js/main.js') }}
</body>
</html>

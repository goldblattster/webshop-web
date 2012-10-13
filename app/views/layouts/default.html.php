<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
  <?php echo $this->html->charset();?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php echo $this->title(); ?> - WebShop</title>
  <meta name="viewport" content="width=device-width">

  <?php echo $this->html->style(array('http://fonts.googleapis.com/css?family=Titillium+Web|Open+Sans', 'normalize', 'foundation', 'main')); ?>

  <?php echo $this->html->script(array('vendor/modernizr-2.6.1.min.js')) ?>
</head>
<body class="app">
<!--[if lt IE 7]>
  <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->

<header>
  <h1><a href="/">WebShop</a></h1>

  <nav id="nav-top-right">
    @if (Auth::check())
    <ul class="button-group radius">
      <li><a href="/accounts" class="button radius">My Account</a></li>
      <li><a href="/accounts/log-out" class="button radius">Log Out</a></li>
    </ul>
    @else
    <ul class="button-group radius">
      <li><a href="/accounts/log-in" class="button radius">Log In</a></li>
      <li><a href="/accounts/register" class="button radius">Register</a></li>
    </ul>
    @endif
  </nav>
</header>

<div id="container">
  <div id="header">

  </div>
  <div id="content">
    <?php echo $this->content(); ?>
  </div>
</div>
</body>
</html>
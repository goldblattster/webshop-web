<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
  <?php echo $this->html->charset();?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Application &gt; <?php echo $this->title(); ?></title>
  <?php echo $this->html->style(array('http://fonts.googleapis.com/css?family=Titillium+Web|Open+Sans', 'normalize', 'foundation', 'main')); ?>
  <?php echo $this->scripts(); ?>
  <?php echo $this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body class="app">
<div id="container">
  <div id="header">
    <h1>Application</h1>

    <h2>
      Powered by <?php echo $this->html->link('Lithium', 'http://lithify.me/'); ?>.
    </h2>
  </div>
  <div id="content">
    <?php echo $this->content(); ?>
  </div>
</div>
</body>
</html>
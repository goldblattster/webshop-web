<?php
require_once('lib/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setCompileDir('templates/compiled');
$smarty->setConfigDir('conf');
$smarty->setCacheDir('cache');

$smarty->assign('name', 'Ned');

$smarty->display('index.tpl');
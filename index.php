<?php
require_once('lib/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir('templates');
$smarty->setTemplateDir('templates_c');
$smarty->setTemplateDir('conf');
$smarty->setTemplateDir('cache');

$smarty->assign('name', 'Ned');

$smarty->display('index.tpl');
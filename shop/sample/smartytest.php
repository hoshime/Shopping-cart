<?php

require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'c:/xampp/htdocs/shop/templates/';
$smarty->compile_dir = 'c:/xampp/htdocs/shop/templates_c/';
$smarty->config_dir = 'c:/xampp/htdocs/shop/configs/';
$smarty->cache_dir = 'c:/xampp/htdocs/shop/cache/';

$smarty->assign('post',$_POST);
$todofuken_data = array(1=>'埼玉',2=>'千葉',3=>'東京');
$smarty->assign('todofuken_data',$todofuken_data);
$colors_data=array('red'=>'赤','blue'=>'青','pink'=>'ピンク');
$smarty->assign('colors_data',$colors_data);
$flowers_data=array('r'=>'ばら','c'=>'ちゅーりっぷ','h'=>'ひまわり');
$smarty->assign('flowers_data',$flowers_data);

$smarty->display('smartytest.tpl');


?>
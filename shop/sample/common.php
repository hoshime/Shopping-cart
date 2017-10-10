<?php

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'c:/xampp/htdocs/shop/templates/';
$smarty->compile_dir = 'c:/xampp/htdocs/shop/templates_c/';
$smarty->config_dir = 'c:/xampp/htdocs/shop/configs/';
$smarty->cache_dir = 'c:/xampp/htdocs/shop/cache/';

$todofuken_data = array(1=>'埼玉',2=>'千葉',3=>'東京');
$colors_data=array('red'=>'赤','blue'=>'青','pink'=>'ピンク');
$flowers_data=array('r'=>'ばら','c'=>'ちゅーりっぷ','h'=>'ひまわり');

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');



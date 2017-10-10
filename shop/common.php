<?php

ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);

session_start();

require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = '../shop/templates/';
$smarty->compile_dir = '../shop/templates_c/';
$smarty->config_dir = '../shop/configs/';
$smarty->cache_dir = '../shop/cache/';

$dsn = 'mysql:dbname=dbnameHere;host=localhost';
$user = 'usernameHere';
$password = 'passwordHere';
$dbh = new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$dbh->query('SET NAMES utf8');

$prefecture_data = array('Chiba','Tokyo','Kanagawa');

?>
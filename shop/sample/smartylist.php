<?php

require_once('libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'c:/xampp/htdocs/shop/templates/';
$smarty->compile_dir = 'c:/xampp/htdocs/shop/templates_c/';
$smarty->config_dir = 'c:/xampp/htdocs/shop/configs/';
$smarty->cache_dir = 'c:/xampp/htdocs/shop/cache/';

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

$sql = 'SELECT * FROM anketo WHERE 1';
$stmt = $dbh->prepare($sql);
$stmt->execute();

$anketo = array();
while(1){
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec == false){
                break;
        }
        $anketo[] = $rec;
}

$smarty->assign("anketo",$anketo);
$smarty->display('smartylist.tpl');

$dbh=null;   

?>






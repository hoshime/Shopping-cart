<?php

include('common.php');

if(empty($_GET['category'])){
    $sql = 'SELECT * FROM goods WHERE 1';
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
}else{
    $sql = 'SELECT * FROM goods WHERE category=?';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_GET['category']));
}
    
$goods = array();
while(1){
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        if($rec == false){
                break;
        }
        
        // 色
        $rec['colors_data'] = explode(',',$rec['colors']);

        // サイズ
        $rec['size_data'] = explode(',',$rec['size']);
        
        $goods[] = $rec;
}

$smarty->assign("goods",$goods);

$smarty->display('index.tpl');

$dbh=null;


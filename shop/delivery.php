<?php

include('common.php');

$smarty->assign('prefecture_data',$prefecture_data);

if($_SERVER['REQUEST_METHOD'] == "POST"){

    // POSTされたデータをセッションに移し替える
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['zipcode1'] = $_POST['zipcode1'];
    $_SESSION['zipcode2'] = $_POST['zipcode2'];
    $_SESSION['prefecture'] = $_POST['prefecture'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['mail'] = $_POST['mail'];
    
    // エラーチェック
    $check = true;
    
    if(empty($_SESSION['name'])){
        
        $smarty->assign('error_name','氏名を入力してください');
        $check = false;
    }
    
    if($check){
        header("Location: confirm.php");
    }else{
        $smarty->display('delivery.tpl');
    }   
    
}else{
    // 画面を表示
    $smarty->display("delivery.tpl");
}
    
?>
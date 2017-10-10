<?php

include('common.php');

$smarty->assign('prefecture_data',$prefecture_data);

if($_SERVER['REQUEST_METHOD'] == "POST"){

    // POSTされたデータをセッションに移し替える
    $_SESSION['login_id'] = $_POST['login_id'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['zipcode1'] = $_POST['zipcode1'];
    $_SESSION['zipcode2'] = $_POST['zipcode2'];
    $_SESSION['prefecture'] = $_POST['prefecture'];
    $_SESSION['address'] = $_POST['address'];
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['mail'] = $_POST['mail'];
    
    // エラーチェック
    $check = true;
    
    if(empty($_SESSION['login_id'])){
        $smarty->assign('error_login_id','Please input the Login Id');
        $check = false;
    }

    if(empty($_SESSION['password'])){
        $smarty->assign('error_password','Please Input the Password');
        $check = false;
    }
	
    if(empty($_SESSION['name'])){
        $smarty->assign('error_name','Please Input the Full Name');
        $check = false;
    }
    
    if($check){
		
		// データベースに登録
		$pref = $prefecture_data[$_SESSION['prefecture']];
		$sql = "INSERT INTO member(login_id,password,name,zipcode1,zipcode2,prefecture,address,tel,mail) VALUES(?,?,?,?,?,?,?,?,?)";
		$stmt = $dbh->prepare($sql);
		$result = $stmt->execute(array($_SESSION['login_id'],$_SESSION['password']
				,$_SESSION['name'],$_SESSION['zipcode1'],$_SESSION['zipcode2']
				,$_SESSION['prefecture'],$_SESSION['address'],$_SESSION['tel'],$_SESSION['mail']));
		
		if($result){
			// ジャンプ先
			header("Location: delivery.php");
		}else{
			$smarty->assign('error_db','Not Register to Database ');
			$smarty->display('memberinput.tpl');
		}
    }else{
        $smarty->display('memberinput.tpl');
    }   
    
}else{
    // 画面を表示
    $smarty->display("memberinput.tpl");
}
    
?>
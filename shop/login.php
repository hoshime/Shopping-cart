<?php

include('common.php');

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$_SESSION['login_id'] = $_POST['login_id'];
	$_SESSION['password'] = $_POST['password'];
	
	// データベースから会員情報を取得する
	$sql = 'SELECT * FROM member WHERE login_id=?';
	$stmt = $dbh->prepare($sql);
	$stmt->execute(array($_SESSION['login_id']));
	$rec = $stmt->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		// ログインIDがみつからない
		$smarty->assign("error_db","Error Login Id");
		$smarty->display("login.tpl");
	}else{
		// パスワードの判定を行う
		if($_SESSION['password'] == $rec['password']){
			// 認証OK
			$_SESSION['name'] = $rec['name'];
			$_SESSION['zipcode1'] = $rec['zipcode1'];
			$_SESSION['zipcode2'] = $rec['zipcode2'];
			$_SESSION['prefecture'] = $rec['prefecture'];
			$_SESSION['address'] = $rec['address'];
			$_SESSION['tel'] = $rec['tel'];
			$_SESSION['mail'] = $rec['mail'];
			header('Location: delivery.php');
		}else{
			// パスワードが間違っている
			$smarty->assign("error_db","Error Password");
			$smarty->display("login.tpl");
		}
	}
}else{
	// 入力画面を表示する
	$smarty->display("login.tpl");
}

?>
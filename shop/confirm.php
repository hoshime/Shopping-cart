<?php
include('common.php');
// 都道府県を表示
$pref = $prefecture_data[$_SESSION['prefecture']];
$smarty->assign('pref',$pref);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    // カート情報
    $smarty->assign('goods',$_SESSION['cart']);
	
	// メールを送る
	$to = $_SESSION['mail'];
	$subject = "購入明細";
	$smarty->assign('zeikomi',$_SESSION['zeikomi']);
	$message = $smarty->fetch('mail.tpl');
	$from = 'info@crayonsoft.jp';
	mb_language("japanese");
	mb_internal_encoding("UTF-8");
	mb_send_mail($to,$subject,$message,"From:" . $from);
	
	// DBにInsertする(sales)
	$sql = 'INSERT INTO sales(name,zipcode1,zipcode2,prefecture'
			. ',address,tel,mail,goukei,zei,zeikomi) VALUES(?,?,?,?,?,?,?,?,?,?)';
	$stmt = $dbh->prepare($sql);
	$result = $stmt->execute(array($_SESSION['name'],$_SESSION['zipcode1'],$_SESSION['zipcode2']
			,$pref,$_SESSION['address'],$_SESSION['tel'],$_SESSION['mail']
			,$_SESSION['goukei'],$_SESSION['zei'],$_SESSION['zeikomi']));
	
	// AutoIncrementで自動作成されたIDを取得する
	$code = $dbh->lastInsertId('code');
	
	// DBにInsertする（salesgoods)
	foreach($_SESSION['cart'] as $rec){
		$sql = 'INSERT INTO salesgoods(sales_id,goodsname,colors,size,price) VALUES(?,?,?,?,?)';
		$stmt = $dbh->prepare($sql);
		$result2 = $stmt->execute(array($code,$rec['goodsname'],$rec['colors'],$rec['size'],$rec['price']));
	}
		
	if($result && $result2){
		// 終了画面へジャンプ
		header("Location: thankyou.php");
		
	}else{
		// エラー
		$smarty->assign('error_db','データが登録できませんでした');
		$smarty->display('confirm.tpl');
	}

}else{
    // 合計額計算
    $goukei = 0;
    $zei = 0;
    $zeikomi = 0;
    foreach($_SESSION['cart'] as $rec){
		$goukei += $rec['price'];
    }
	$zei = $goukei * 0.08;
	$zeikomi = $goukei + $zei;
	
	// 金額を表示
	$smarty->assign('goukei',$goukei);
	$smarty->assign('zei',$zei);
	$smarty->assign('zeikomi',$zeikomi);
	
	// セッションにいれておく	
	$_SESSION['goukei'] = $goukei;
	$_SESSION['zei'] = $zei;
	$_SESSION['zeikomi'] = $zeikomi;
    
    // カート情報
    $smarty->assign('goods',$_SESSION['cart']);
    
    // 画面を表示
    $smarty->display("confirm.tpl");
}
    
?>
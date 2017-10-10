<?php
/* Smarty version 3.1.30, created on 2016-12-13 01:33:45
  from "C:\xampp\htdocs\shop\confirm.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_584f41e9686b68_16500103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52b79cdd2f2323617f0d5c1db40b42270b939512' => 
    array (
      0 => 'C:\\xampp\\htdocs\\shop\\confirm.php',
      1 => 1481589219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_584f41e9686b68_16500103 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>include('common.php');
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
	
	// DBにInsertする
	$sql = 'INSERT INTO sales(name,zipcode1,zipcode2,prefecture,tel,mail,goukei,zei,zeikomi) values(?,?,?,?,?,?,?,?,?)';
	$stmt = $dbh->prepare($sql);
	$result = $stmt->execute(array($_SESSION['name'],$_SESSION['zipcode1'],$_SESSION['zipcode2'],$_SESSION['pref'],$_SESSION['tel'],$_SESSION['mail'],$_SESSION['goukei'],$_SESSION['zei'],$_SESSION['zeikomi']));
	
	if($result){
		// 終了画面へジャンプ
		header("Location: thankyou.php");
		
	}else{
		// エラー
		$smarty->assign('error_db','データが登録できませんでした');
		$smarty->display('confirm.php');
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
    
<?php echo '?>';
}
}

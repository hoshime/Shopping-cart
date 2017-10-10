<?php

include('common.php');

if($_SERVER['REQUEST_METHOD'] == "GET"){
    // URLからIDを取得
    $id = $_GET['id'];
    $colors = $_GET['colors'];
    $size = $_GET['size'];

    // IDが取得できた場合にカートに入れる処理
    if(!empty($id)){
        // データベースからデータを取り出す
        $sql = 'SELECT * FROM goods WHERE id=?';
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($id));
        $rec = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // 色とサイズをrecに入れる
        $rec['colors'] = $colors;
        $rec['size'] = $size;

        // セッションに入れる
        if($rec != false){
            // $_SESSION['cart'][] = $rec;       //同じ商品も入る
            $_SESSION['cart'][$rec['id']] = $rec; // 同じ商品は入らない
        }
    }
}else{
    // セッションをクリアする
    $_SESSION['cart'] = array();
}

// カートを表示する
$smarty->assign('goods',$_SESSION['cart']);

// 画面を表示
$smarty->display("cart.tpl");

?>
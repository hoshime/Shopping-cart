<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ichiran</title>
</head>

<body>
    <p><a href="insert.php">追加</a></p>
    <form action="ichiran.php" method="POST">
        <input type="text" name="search" value="<?= $_POST['search'] ?>">
        <input type="submit" value="検索">
    </form>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    $sql = 'SELECT * FROM anketo WHERE nickname like ?';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array('%' . $_POST['search'] . '%'));

    while(1){
            $rec = $stmt->fetch(PDO::FETCH_ASSOC);
            if($rec == false){
                    break;
            }
            print $rec['code'];
            print $rec['nickname'];
            print $rec['email'];
            print $rec['goiken'];
            print "<a href=\"delete.php?code=" . $rec['code'] . "\">削除</a>";
            print "&nbsp;";
            print '<a href="edit.php?code=' . $rec['code'] . '">変更</a>';
            print '<br />';
    }
    $dbh=null;   
}
?>






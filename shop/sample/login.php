<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>

<body>
    
    <form action="login.php" method="POST">
        <input type="text" name="login_id" value="<?= $_POST['login_id'] ?>">
        <input type="text" name="password" value="<?= $_POST['password'] ?>">
        <input type="submit" value="検索">
    </form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    $sql = 'SELECT * FROM member WHERE login_id=? and password=?';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_POST['login_id'],$_POST['password']));

    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec == false){
        print "ログインIDもしくはパスワードが間違っています";
    }else{
        print "ログインしました";
    }

    $dbh=null;
    
}

?>






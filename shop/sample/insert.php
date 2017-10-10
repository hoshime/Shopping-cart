<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>insert</title>
</head>

<body>
    
    <a href="ichiran.php">一覧へ戻る</a>
    
    <form action="insert.php" method="POST">
        <p>ニックネーム：<input type="text" name="nickname"></p>
        <p>email:<input type="text" name="email"></p>
        <p>ご意見:<input type="text" name="goiken"></p>
        <input type="submit" value="追加">
    </form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    $sql = 'INSERT INTO anketo(nickname,email,goiken) VALUES (?,?,?)';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_POST['nickname'],$_POST['email'],$_POST['goiken']));

    echo '登録しました';

    $dbh=null;
    
}

?>

</body>
</html>




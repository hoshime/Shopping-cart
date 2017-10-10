<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>delete</title>
</head>

<body>
   

<?php

    $dsn = 'mysql:dbname=phpkiso;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    $sql = 'DELETE FROM anketo WHERE code=?';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_GET['code']));

    echo '削除しました';
    echo '<p><a href="ichiran.php">戻る</a></p>';

    $dbh=null;
    

?>

</body>
</html>




<!doctype html>
<html><head>
<meta charset="utf-8"><title>edit</title>
</head>
<body>   
    <a href="ichiran.php">一覧へ戻る</a>
<?php
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);
$dbh->query('SET NAMES utf8');

if($_SERVER["REQUEST_METHOD"] == "GET"){
    
    $sql = 'SELECT * FROM anketo WHERE code=?';
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_GET['code']));
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($rec != false){
        echo '<form action="edit.php" method="POST">';
        echo '<input type="hidden" name="code" value="' . $rec['code'] . '">';
        echo '<p>ニックネーム：<input type="text" name="nickname" value="'
          . $rec['nickname'] . '"></p>';
        echo '<p>email:<input type="text" name="email" value="'
          . $rec['email'] . '"></p>';
        echo '<p>ご意見:<input type="text" name="goiken" value="'
          . $rec['goiken'] . '"></p>';
        echo '<input type="submit" value="変更">';
        echo '</form>';
    }
}else if($_SERVER["REQUEST_METHOD"] == "POST"){

    $sql = "UPDATE anketo SET nickname=?,email=?,goiken=? WHERE code=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute(array($_POST['nickname'],$_POST['email'],$_POST['goiken']
            ,$_POST['code']));
    echo "<p>更新しました</p>";
}
$dbh=null;
?>
</body>
</html>


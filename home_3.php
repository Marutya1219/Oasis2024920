<?php
// データベース接続情報
$host = 'localhost';
$dbname = 'ecommerce';
$username = 'LAA1553845';
$password = 'pass1234';


    // データベースに接続
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>

<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./home_3.php" method="post">
        <input type="search" name="search">
        <img src="./images/oasislogo.jpg" width="200" height="100">
        <hr>

        <h2>海外</h2>
        <img src="./images/eberesuto.jpg" width="200" height="100"><br>エベレスト
        <img src="./images/kannchenjunnga.jpg" width="200" height="100"><br>カンチェンジュンガ
        <img src="./images/manasuru.jpg" width="200" height="100"><br>マナスル

        <h2>国内</h2>
        <img src="./images/hujisan.jpg" width="200" height="100"><br>富士山
        <img src="./images/hodaka.jpg" width="200" height="100"><br>穂高岳
        <img src="./images/sakurajima.jpg" width="200" height="100"><br>桜島

        <img src="./images/oasislogo.jpg" width="200" height="100">
        <a href="./kounyurireki_8.php">購入履歴</a>
    </form>
</body>
</html>
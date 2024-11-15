<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet_3.css">
    <title>ホーム</title>
    <?php
    $pdo = new PDO('mysql:host=mysql306.phy.lolipop.lan;
                    dbname=LAA1602729-oasis;charset=utf8',
                    'LAA1602729',
                    'oasis5');
    ?>
  <style>
    div{
        display: flex;
        justify-content: center;
    }
    .container{
        background-color: black;
        width: 200px;
        height: 200px;
        margin-right: 50px;
    }
    .box1{
        border-radius: 10px 30px 0 40px;
    }
    .box2{
        border-radius: 50%;
    }
    .box3{
        border-radius: 20px 60px;
    }
    </style>
</head>
<body>
  <div>
    <div class="container box1"></div>
    <div class="container box2"></div>
    <div class="container box3"></div>
  </div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesheet_4.css">
    <title>商品情報</title>
</head>
<body>
    <div class="header-img">
        <a href="./_3_home.php"><img src="./images/oasislogo.jpg" width="100" height="50"></a>
    </div>
    <hr>

<?php
    // データベース接続（PDO）
    $pdo = new PDO('mysql:host=mysql306.phy.lolipop.lan;
                    dbname=LAA1602729-oasis;charset=utf8',
                    'LAA1602729',
                    'oasis5');
    
    // POSTされたyama_nameを受け取る
    if (isset($_POST['name'])) {
        // POSTで送信されたyama_nameを取得
        $yama_name = $_POST['name'];
    
        // yama_nameに基づいて情報を取得するSQLクエリ
        $sql = "SELECT * FROM Oasis_yama WHERE yama_name = :yama_name";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':yama_name', $yama_name, PDO::PARAM_STR);
        $stmt->execute();
    
        // 結果を取得
        $result = $stmt->fetch(PDO::FETCH_ASSOC);  // 1件の結果を連想配列として取得
    ?>
        <!--取得したデータを表示-->
        <div class="body_img">
            <img id="mt_img" src="<?= $result['yama_img'] ?>" alt="<?= $result['yama_name'] ?>">
        </div>
        <div class="body_text">
            <label><?= $result['yama_name'] ?></label><!--山名-->
            <label>￥<?= $result['price'] ?></label><!--価格-->
        </div>
        <div class="text_container">
            <p id="mt_imfo"><?= $result['yama_info'] ?></p>
        </div>
    
        <!--購入・レンタル用のフォームを表示-->
        <!--購入フォーム-->
        <div class="btn_container">
            <form action="_5_kounyu.php" method="POST">
                <input type="hidden" name="yama_id" value="<?= $result['yama_id'] ?>">
                <input type="hidden" name="yama_name" value="<?= $result['yama_name'] ?>">
                <input type="hidden" name="price" value="<?= $result['price'] ?>">
                <input type="submit" id="btn_buy" value="購入する">
            </form>
        
            <!--レンタルフォーム-->
            <form action="_9_rentaru.php" method="POST">
                <input type="hidden" name="yama_id" value="<?= $result['yama_id'] ?>">
                <input type="hidden" name="yama_name" value="<?= $result['yama_name'] ?>">
                <input type="hidden" name="price" value="<?= $result['price'] ?>">
                <input type="submit" id="btn_rental" value="レンタルする">
            </form>

            <!--レビュー閲覧フォーム-->
            <form action="_7_review.php" method="POST">
                <input type="hidden" name="yama_id" value="<?= $result['yama_id'] ?>"><!--yama_idを送信-->
                <input type="submit" id="btn_review" value="レビュー閲覧">
            </form>
        </div>
</body>
</html>
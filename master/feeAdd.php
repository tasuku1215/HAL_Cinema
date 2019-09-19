<!DOCTYPE html>
<html lang="ja" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>HALCinema | 管理者画面</title>
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
</head>

<body>
    <?php
        require_once 'header.php';
    ?>

    <div id="dummy2"></div>

    <div id="main_box">
        <h2>管理者新規登録</h2>
        <p><a href="index.php">管理者メニュー</a>　>　<a href="masterList.php">管理者一覧</a>　>　新規登録</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">
        <p>料金名：<input type="text" name="name"></p>
        <p>価格：<input type="text" name="password"></p>
        <p>確認用パスワード：<input type="text" name="rePassword"></p>
        <br>
        <p></p>
        <p><input type="submit" value="登録"></p>
    </div>
</body>

</html>

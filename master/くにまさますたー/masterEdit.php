<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>HALCinema | 管理者画面</title>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../css/header.css" type="text/css">
</head>

<body>
    <?php
        require_once '../header.php';
    ?>

    <div id="dummy2"></div>

    <div id="main_box">
        <h2>管理者新規登録</h2>
        <p><a href="../index.php">管理者メニュー</a>　>　<a href="../masterList.php">管理者一覧</a>　>　新規登録</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">
        <p>ログインID：<input type="text" name="loginId" value="aaaa"></p>
        <p>管理者名：<input type="text" name="name" value="山田一郎"></p>
        <p>パスワード：<input type="text" name="password" value="*******"></p>
        <br>
        <p><input type="submit" value="更新"></p>
    </div>
</body>

</html>

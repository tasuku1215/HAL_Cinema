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
        <h2>料金一覧</h2>
        <p><a href="index.php">管理者メニュー</a>　>　料金一覧</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">

        <p><a href="#">新規登録→</a></p>
        <table border="1px">
            <tr>
                <th>料金ID</th>
                <th>料金名</th>
                <th>価格</th>
                <th>開始年月日</th>
                <th>終了年月日</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>大人</td>
                <td>1000</td>
                <td>2019-01-01</td>
                <td>2019-12-31</td>
                <td><a href="#">更新</a> <a href="#">削除</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>学生</td>
                <td>800</td>
                <td>2019-01-01</td>
                <td>2019-12-31</td>
                <td>更新 削除</td>
            </tr>
            <tr>
                <td>3</td>
                <td>子ども(～中学生)</td>
                <td>500</td>
                <td>2019-01-01</td>
                <td>2019-12-31</td>
                <td>更新 削除</td>
            </tr>
        </table>
    </div>
</body>

</html>

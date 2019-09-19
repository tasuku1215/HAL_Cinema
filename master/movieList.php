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
        <h2>映画情報一覧</h2>
        <p><a href="index.php">管理者メニュー</a>　>　映画情報一覧</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">

        <p><a href="くにまさますたー/movieregist.html">新規登録→</a></p>
        <table border="1px">
            <tr>
                <th>映画ID</th>
                <th>映画タイトル</th>
                <th>上映時間</th>
                <th>監督</th>
                <th>主演</th>
                <th>放映日</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ショーシャンクの空に</td>
                <td>02:20:00</td>
                <td>フランク・ダラボン</td>
                <td>ティム・ロビンス</td>
                <td>1995</td>
                <td><a href="movieData.php">詳細</a> <a href="#">更新</a> <a href="#">削除</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>ショーシャンクの空に</td>
                <td>02:20:00</td>
                <td>フランク・ダラボン</td>
                <td>ティム・ロビンス</td>
                <td>1995</td>
                <td>詳細 更新 削除</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ショーシャンクの空に</td>
                <td>02:20:00</td>
                <td>フランク・ダラボン</td>
                <td>ティム・ロビンス</td>
                <td>1995</td>
                <td>詳細 更新 削除</td>
            </tr>
        </table>
    </div>
</body>

</html>

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
        <h2>スケジュール一覧</h2>
        <p><a href="index.php">管理者メニュー</a>　>　スケジュール一覧</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">

        <p><a href="scheduleregist.php">新規登録→</a></p>
        <table border="1px">
            <tr>
                <th>スケジュールID</th>
                <th>タイトル</th>
                <th>スクリーン番号</th>
                <th>上映日時</th>
                <th>上映時間</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ショーシャンクの空に</td>
                <td>1</td>
                <td>2019-09-20</td>
                <td>10:15</td>
                <td><a href="scheduleEdit.html">更新</a> <a href="#">削除</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>ショーシャンクの空に</td>
                <td>1</td>
                <td>2019-09-20</td>
                <td>16:00</td>
                <td>更新 削除</td>
            </tr>
            <tr>
                <td>3</td>
                <td>アイ アム レジェンド</td>
                <td>2</td>
                <td>2019-09-20</td>
                <td>13:15</td>
                <td>更新 削除</td>
            </tr>
        </table>
    </div>
</body>

</html>

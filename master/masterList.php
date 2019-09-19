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
        <h2>管理者一覧</h2>
        <p><a href="index.php">管理者メニュー</a>　>　管理者一覧</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">

        <p><a href="addMasterList.php">新規登録→</a></p>
        <table border="1px">
            <tr>
                <th>管理者ID</th>
                <th>管理者ID</th>
                <th>管理者名</th>
                <th>登録日時</th>
                <th>操作</th>
            </tr>
            <tr>
                <td>1</td>
                <td>aaaa</td>
                <td>山田一郎</td>
                <td>2019-01-01 18:00:00</td>
                <td><a href="#">更新</a> <a href="#">削除</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>bbbb</td>
                <td>山田二郎</td>
                <td>2019-02-02 18:00:00</td>
                <td>更新 削除</td>
            </tr>
            <tr>
                <td>3</td>
                <td>cccc</td>
                <td>山田三郎</td>
                <td>2019-03-03 18:00:00</td>
                <td>更新 削除</td>
            </tr>
        </table>
    </div>
</body>

</html>

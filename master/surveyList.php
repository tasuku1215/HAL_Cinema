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
        <h2>アンケート一覧</h2>
        <p><a href="index.php">管理者メニュー</a>　>　アンケート一覧</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">

        <table border="1px">
            <tr>
                <th>アンケートID</th>
                <th>映画タイトル</th>
                <th>登録日時</th>
                <th>内容</th>
            </tr>
            <tr>
                <td>1</td>
                <td>ショーシャンクの空に</td>
                <td>2019-09-20 20:00</td>
                <td>とても楽しめました。ありがとうございました。</td>
            </tr>
            <tr>
                <td>2</td>
                <td>ショーシャンクの空に</td>
                <td>2019-09-20 21:00</td>
                <td>見たかった作品。上映してくれてありがとう。</td>
            </tr>
            <tr>
                <td>3</td>
                <td>ショーシャンクの空に</td>
                <td>2019-09-20 22:00</td>
                <td>久しぶりに見た。やはり良作。</td>
            </tr>
        </table>
    </div>
</body>

</html>

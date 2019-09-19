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
        <h2>管理者メニュー</h2>
        <div id="dummy"></div>
            <div id="nav">
                <a href="masterList.php" class="btn-sticky">管理者一覧</a>
                <a href="movieList.php" class="btn-sticky">映画情報一覧</a>
                <a href="scheduleList.php" class="btn-sticky">スケジュール一覧</a>
                <a href="feeList.php" class="btn-sticky">料金一覧</a>
                <a href="surveyList.php" class="btn-sticky">アンケート一覧</a>
            </div>
    </div>
</body>

</html>

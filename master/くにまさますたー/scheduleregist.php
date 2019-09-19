<!DOCTYPE html>
<html lang="ja" dir="ltr">
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
        <h2>管理者情報更新</h2>
        <p><a href="../index.php">管理者メニュー</a>　>　<a href="../masterList.php">管理者一覧</a>　>　管理者情報更新</p>
    </div>

    <div id="dummy2"></div>

    <div id="main_box">
        <p>映画名：<input type="text" name="loginId"></p>
        <p>スクリーン番号：
            <select name="screen" id="screen" required>
                <option value="one">1</option>
                <option value="two">2</option>
            </select>
        </p>
        <p>
            上映日時：
                <select name="month" id="month" required>
                    <option value="">--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                月
                <select name="day" id="day" required>日
                    <option value="">--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                </select>
                日
        </p>
        <p>上映時間：
            <select name="hour" id="hour" required>
                <option value="">--</option>
                <?php
                    for($i=0;$i<=9;$i++){
                        echo "<option value=".$i.">".$i."</option>";
                    }
                 ?>
            </select>時間
            <select name="hour" id="hour" required>
                <option value="">--</option>
                <?php
                    for($x=1;$x<60;$x++){
                        echo "<option value=".$x.">".$x."</option>";
                    }
                 ?>
            </select>分
        </p>
        <br>
        <p><input type="submit" value="更新"></p>
    </div>
</section>
</body>
</html>

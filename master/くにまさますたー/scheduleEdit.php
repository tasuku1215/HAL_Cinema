<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>映画情報登録ページ</title>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scala-1">
  <link rel="stylesheet" href=>
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Monoton|Sacramento|Tangerine&display=swap" rel="stylesheet">
<body>
  <header>
    <h1>スケジュール編集</h1>
</header>
<section>
    <p>
        情報を入力し、登録ボタンをクリックしてください。
    </p>
    <form action="/ph34/movieTheater/public/scheduleEdit.php" method="post">
        <dl>
            <dt>映画名</dt>
            <dd>
                <input type="text" id="movienama" name="movienama"  required>
            </dd>
            <dt>スクリーン番号</dt>
            <dd>
              <select name="screen" id="screen" required>
              <option value="one">1</option>
              <option value="two">2</option>
              </select>
            </dd>
            <dt>上映日時</dt>
            <dd>
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
                </SELECT>
                月　
                <select name="day" id="month" required>
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
                </select>日
            </dd>
            <dt>上映時間</dt>
            <dd>
                <input type="time" id="movietime" name="movietime" step="1" required>
            </dd>

        </dl>
        <button type="submit">登録</button>
    </form>
</section>
</body>
</html>

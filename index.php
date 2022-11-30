
<!DOCTYPE html>
<html lang="kr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="새로운 해를 기리며 소원이나 빌어볼까.." />
    <link rel="stylesheet" href="global.css"></link>
    <title>NEW YEAR COUNT!</title>
  </head>
  <body>
    <div id="newYear">
      <h1>New Year</h1>
      <h2 class="Days">DAY - 00</h2>
      <div class="container">
        <div class="Hours">00:</div>
        <div class="Minutes">00:</div>
        <div class="Seconds">00</div>
      </div>
      <div>
        <form action="hope.php" method="post" style="margin: auto;">
          <textarea style="width: 400px; height: 120px; margin-bottom: 10px; font-size: large;" name="hope" placeholder="자신의 소원을 적어보아요!"></textarea><br/>
          <input type="text" style="width: 400px; height: 45px; margin-bottom: 10px; font-size: medium; text-align: center;" placeholder="이메일을 입력해주세요(소원 확인할 때 필요)" name="code"/>
          <input class="submit" type="submit" value="소원 빌기!" style="width: 400px; height: 40px"  name="submit">
        </form>
      </div>
      <?php
      include "db_conn.php";
      $year = getdate();
      $year = $year["year"];
      if ($year == "2023" && isset($_GET["code"])) {
        $code = $_GET["code"];
        $sql = "SELECT * FROM hopeNewYears WHERE code='$code'";
        $result = mysqli_query($conn,$sql);
        while($data = mysqli_fetch_array($result)) {
      
      ?>
      <div class="content-box-wrap">
        <div class="content-box">
          <div class="box-info">
            <div class="box-count"><?= $data["id"]?>번째 소원</div>
            <div class="box-date">
              <?= $data["created_At"]?>
            </div>
          </div>
          <div class="box-text">
            <span class="box-content-text"><?= $data["hope"] ?></span>
          </div>
        </div>
      </div>
      <?php
        }
      }
      ?>
    </div>
    <canvas id="canvas"></canvas>
    <script type="text/javascript" src="./countDown.js"></script>
    <script type="text/javascript" src="./firework.js"></script>
  </body>
</html>
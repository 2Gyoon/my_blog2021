<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CODing-ing</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/portfolio.css">
</head>
<body>
  <header>
    <?php include "./header.php" ?>
  </header>

  <div class="title">
    <div class="wrap">
      <p class="jua">지윤이는 코딩중</p>
      <h1 class="jua">Portfolio</h1>
    </div>
  </div>

  <main>
    <div class="wrap">
      <ul class="port_list">
<?php
  include "./CODing_ing_db.php";
  $sql = "select * from port order by num desc";
  $result = mysqli_query($db, $sql);
  $total_record = mysqli_num_rows($result);
  for($i = 0; $i < $total_record; $i++){
    mysqli_data_seek($result,$i);
    $row = mysqli_fetch_array($result);
    $num = $row["num"];
    $title = $row["title"];
    $content = $row["content"];
    $regist_day = $row["regist_day"];
    $link = $row["link"];
    $file_copied = "./data/".$row["file_copied"];
?>        
        <li style="background-image: url(<?=$file_copied?>);">
          <a href=<?=$link?> class="black">
            <p class="jua"><?=$title?></p>
          </a>
        </li>
<?php
  }
?>
      </ul>
    </div>
  </main>

  <footer>
    <div class="wrap">
      <img src="./image/logo.svg" alt="로고이미지">
    </div>
  </footer>

</body>
</html>
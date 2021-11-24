<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CODing-ing</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/study.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>    
  <script defer src="./js/study_post.js"></script>
</head>
<body>
  <header>
    <?php include "./header.php"?>
  </header>

  <div class="title">
    <div class="wrap">
      <p class="jua">지윤이는 코딩중</p>
      <h1 class="jua">Study</h1>
    </div>
  </div>

  <main>
    <div class="wrap">
      <h3 class="gowun">오늘도 꾸준히 공부하고 있습니다 :)</h3>
<?php
  include "./CODing_ing_db.php";
  $sql = "select * from study order by num desc";
  $result = mysqli_query($db, $sql);
  $total_record = mysqli_num_rows($result);
?>      
      <ul class="study_lists gowun" contNum=<?=$total_record?>>
<?php
  for($i = 0; $i < 5; $i++){
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_array($result);
    $num = $row["num"];
    $title = $row["title"];
    $content = $row["content"];
    $regist_day = $row["regist_day"];
    $link = $row["link"];
?>        
        <li class="study_list">
          <p class="regist_day"><?=$regist_day?> : <?=$num?></p>
          <a href=<?=$link?> target="_blank"><?=$title?></a>
          <p class="content"><?=$content?></p>
        </li>
<?php
  }
?>
      </ul>
      <div class="more">
        <h3 class="gowun">더보기 ▼</h3>
      </div>
    </div>
  </main>

  <footer>
    <div class="wrap">
      <img src="./image/logo.svg" alt="로고이미지">
    </div>
  </footer>

</body>
</html>
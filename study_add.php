<style>
  @import url(./css/study.css);
</style>

<?php

  include "./CODing_ing_db.php";

  $sql = "select * from study order by num desc";
  $result = mysqli_query($db, $sql);
  $total_record = mysqli_num_rows($result);
  $number = $_GET["count"] - 1;
  $intervalS = 5 * $number;
  $intervalE = 5 * ($number + 1);

  for($i = $intervalS; $i < $intervalE && $i < $total_record; $i++){
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

<script src="./js/study_post.js"></script>
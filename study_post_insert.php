<?php

$title = str_replace("'", "&#39;", $_POST["title"]);
$regist_day = date("Y/m/d");
$content = str_replace("'", "&#39;", $_POST["content"]);
$link = str_replace("'", "&#39;", $_POST["link"]);


include "./CODing_ing_db.php";

$sql = "insert into study (title, content, regist_day, link) values('$title', '$content', '$regist_day', '$link')";

mysqli_query($db, $sql);

echo ("
  <script>
    location.href='./study.php';
  </script>
");









?>
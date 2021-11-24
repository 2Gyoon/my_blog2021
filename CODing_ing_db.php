<?php
  // 로컬환경
  $db = mysqli_connect("localhost", "root", "000000", "CODing_ing", 3306);

  // 닷홈환경
  //$db = mysqli_connect("localhost", "dnlsl70", "gozldgkwlakdy13!", "dnlsl70");

  mysqli_query($db, "SET NAMES utf-8"); // sql언어 설정

?>
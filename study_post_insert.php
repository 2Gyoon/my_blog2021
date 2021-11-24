<?php

$title = str_replace("'", "&#39;", $_POST["title"]);
$regist_day = date("Y/m/d");
$content = str_replace("'", "&#39;", $_POST["content"]);
$link = str_replace("'", "&#39;", $_POST["link"]);

/*
$upload_dir = "./data/";
$upfile_name = $_FILES["upfile"]["name"];
$upfile_tep_name = $_FILES["upfile"]["tep_name"];
$upfile_type = $_FILES["upfile"]["type"];
$upfile_size = $_FILES["upfile"]["size"];
$upfile_error = $_FILES["upfile"]["error"];

if($upfile_name && !$upfile_error){
  $file = explode(".", $upfile_name);
  $file_name = $file[0];
  $file_ext = $file[1];

  $new_file_name = date("m_d_Y_H");
  $final_file_name = $new_file_name.".".$file_ext;

  $upload_file = $upload_dir.$final_file_name;  // 새로운 경로

  move_uploaded_file($upfile_tep_name, $upload_file);
}else{
  $upfile_name = "";
  $upfile_type = "";
  $final_file_name = "";
}
*/

include "./CODing_ing_db.php";

$sql = "insert into study (title, content, regist_day, link) values('$title', '$content', '$regist_day', '$link')";

mysqli_query($db, $sql);

echo ("
  <script>
    location.href='./study.php';
  </script>
");









?>
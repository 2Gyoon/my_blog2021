<?php

$title = str_replace("'", "&#39;", $_POST["title"]);
$regist_day = date("Y-m-d (H:i)");
$content = str_replace("'", "&#39;", $_POST["content"]);
$link = str_replace("'", "&#39;", $_POST["link"]);

$upload_dir = "./data/";
$upfile_name = $_FILES["upfile"]["name"];
$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
$upfile_type = $_FILES["upfile"]["type"];
$upfile_size = $_FILES["upfile"]["size"];
$upfile_error = $_FILES["upfile"]["error"];

if($upfile_name && !$upfile_error){
  $file = explode(".", $upfile_name);
  $file_name = $file[0];
  $file_ext = $file[1];

  $new_file_name = date("m_d_H_i_s");
  $final_file_name = $new_file_name.".".$file_ext;

  $upload_file = $upload_dir.$final_file_name;  // 새로운 경로

  move_uploaded_file($upfile_tmp_name, $upload_file);
}else{
  $upfile_name = "";
  $upfile_type = "";
  $final_file_name = "";
}

include "./CODing_ing_db.php";

$sql = "insert into port (title, content, regist_day, link, file_name, file_type, file_copied) values('$title', '$content', '$regist_day', '$link', '$upfile_name', '$upfile_type', '$final_file_name')";

mysqli_query($db, $sql);

echo ("
  <script>
    location.href='./portfolio.php';
  </script>
");


?>
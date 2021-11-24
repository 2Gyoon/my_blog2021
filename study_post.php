<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>study내용추가</title>
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

  <main>
    <div class="wrap">
      <div class="content">
        <div id="study_box">
          <form name="post_form" method="post" enctype="multipart/form-data" action="./study_post_insert.php">
            <ul id="post_form">
              <li class="study_title">
                <div class="label">
                  <label for="title">제목 : </label>
                </div>
                <div class="input">
                  <input type="text" name="title">
                </div>
              </li>
              <li class="study_cont">
                <div class="label">
                  <label for="content">내용 : </label>
                </div>
                <div class="textarea">
                  <textarea name="content"></textarea>
                </div>
              </li>
              <li class="study_upload_link">
                <div class="label">
                  <label for="link">링크 : </label>
                </div>
                <div class="input">
                  <input type="text" name="link">
                </div>
              </li>
            </ul>
            <button type="button" onclick="check_input();">등록</button>

          </form>
        </div>
      </div>
    </div>

  </main>






</body>
</html>
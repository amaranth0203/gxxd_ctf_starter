<?php
ob_start();
?>
<html>

<head>
  <meta charset="UTF-8">
  <script src="./jquery-3.2.1.min.js"></script>
  <script src="./story.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstram.min.css">
  <style>
    body {
      margin-left: auto;
      margin-right: auto;
      margin-TOP: 100PX;
      width: 40em;
    }
  </style>
  <title>伪造请求header3</title>
</head>

<body>
  <h1>
    给我一个请求<br />
    使用的浏览器标识符为 Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/536.36<br />
  </h1>
  <?php
  include("config.php");
  echo $_SERVER['HTTP_USER_AGENT'];
  if ($_SERVER["HTTP_USER_AGENT"] == 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.97 Safari/536.36') {
    echo $flag;
  }
  ?>
</body>

</html>
<?php
ob_end_flush();
?>
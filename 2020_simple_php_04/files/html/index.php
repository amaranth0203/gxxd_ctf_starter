<?php
show_source(__FILE__);
include("config.php");
if (isset($_GET['Username']) && isset($_GET['password'])) {
  $logined = true;
  $Username = $_GET['Username'];
  $password = $_GET['password'];
  if (!ctype_alpha($Username)) {
    $logined = false;
  }
  if (!is_numeric($password)) {
    $logined = false;
  }
  if (md5($Username) != md5($password)) {
    $logined = false;
  }
  if ($logined) {
    echo $flag;
  } else {
    echo "失败了,再试试看吧";
  }
}
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
      width: 20em;
    }
  </style>
  <title>简单php4</title>
</head>

<body>
  <h1>php是世界上最好的语言,就是若类型比较头疼</h1>
</body>

</html>
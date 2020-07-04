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
  <title>http_head请求</title>
</head>

<body>
  <h1>
    给我一个head请求<br />
    参数名字:I_wanna_f1ag<br />
    参数值:I_wanna_flag<br />
  </h1>

  <?php
  include("config.php");
  if ($_SERVER['REQUEST_METHOD'] == 'HEAD') {
    if ($_GET['I_wanna_f1ag'] === "I_wanna_flag") {
      header("f1ag: $flag");
    } else {
      header("f1ag: 是header方法了,但是变量名不对");
    }
  } else {
    header('f1ag: 这不是header方法噢');
  }
  ?>

</body>

</html>
<?php
ob_end_flush();
?>
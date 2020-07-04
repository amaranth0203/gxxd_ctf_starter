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
  <title>伪造请求header1</title>
</head>

<body>
  <h1>
    给我一个请求<br />
    XFF地址必须是1.1.1.1<br />
  </h1>
  <?php
  include("config.php");
  if ($_SERVER["HTTP_X_FORWARDED_FOR"] == '1.1.1.1') {
    echo $flag;
  }
  ?>
</body>

</html>
<?php
ob_end_flush();
?>
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
  <title>简单php</title>
</head>

<body>
  <h1>发送一个get请求,参数名字:I_wanna_flag,参数值:I_wanna_f1ag</h1>

  <?php
  include("config.php");
  if (isset($_GET['I_wanna_flag'])) {
    if ($_GET['I_wanna_flag'] === "I_wanna_f1ag") {
      echo $flag;
    } else {
      echo "不对..想想怎么发 get 请求的";
    }
  }
  ?>

</body>

</html>
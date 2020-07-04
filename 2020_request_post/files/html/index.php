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
  <title>http_post请求</title>
</head>

<body>
  <h1>
    给我一个post请求<br />
    参数名字:I_wanna_flag<br />
    参数值:I_wanna_f1ag<br />
  </h1>

  <?php
  include("config.php");
  if (isset($_POST['I_wanna_flag'])) {
    if ($_POST['I_wanna_flag'] === "I_wanna_f1ag") {
      echo $flag;
    } else {
      echo "不对..想想怎么发 post 请求的";
    }
  }
  ?>

</body>

</html>
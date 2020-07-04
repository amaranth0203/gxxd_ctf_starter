<?php
show_source(__FILE__);
include("config.php");
$id = intval($_GET['id']);
if ($_GET['id'] == 1024) {
  echo "不对..再试试看";
} else {
  if ($id == 1024) {
    echo $flag;
  } else {
    echo 'id必须是1024噢';
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
  <title>简单php3</title>
</head>

<body>
  <h1>php是世界上最好的语言,就是若类型比较头疼</h1>
</body>

</html>
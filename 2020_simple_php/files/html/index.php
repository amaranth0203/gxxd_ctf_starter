<?php
show_source(__FILE__);
include("config.php");
$a=@$_GET['a'];
$b=@$_GET['b'];
if($a==0 and $a){
  echo "第一关过了, 加油!(ง •̀_•́)ง\n";
}
if(is_numeric($b)){
  exit();
}
if($b>1234){
  echo $flag;
}
?>
<html>

<head>
  <meta charset="UTF-8">
  <script src="./jquery-3.2.1.min.js"></script>
  <script src="./story.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstram.min.css">
  <style>
    body{
    margin-left:auto;
    margin-right:auto;
    margin-TOP:100PX;
    width:20em;
    }
  </style>
  <title>简单php</title>
</head>

<body>
  <h1>php是世界上最好的语言,就是若类型比较头疼</h1>
</body>

</html>



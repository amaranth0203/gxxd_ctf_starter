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
  <title>PING</title>
</head>

<body>
  <h1>PING</h1>
  <form class="form-inline" method="post">
    <div class="input-group">
      <input style="width:280px;" id="target" type="text" class="form-control" placeholder="请输入需要ping的地址" aria-describedby="basic-addon1" name="target">
    </div>
    <br>
    <br>
    <button style="width:280px;" class="btn btn-default">PING</button>
  </form>
</body>

</html>
<?php
if (isset($_POST['target'])) {
  $target = $_POST['target'];
  exec("ping -c 1 $target 2>&1", $output, $return_var);
  echo "<pre>";
  echo implode("\r\n", $output);
}
?>
<?php
ob_end_flush();
?>
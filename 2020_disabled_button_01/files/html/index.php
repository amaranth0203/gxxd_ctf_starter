
<?php
if (isset($_POST['gxxd_auth'])) {
  if ($_POST['gxxd_auth'] == 'gxxd_wassup') {
    include_once('I_guess_you_can_not_guess_my_file_name_flag.php');
  }
}
?>

<html>

<head>
  <meta charset="UTF-8">
  <script src="./story.js"></script>
  <title>按钮失效1</title>
</head>

<body>
  <h1>美工跑路了，只有一个简单的按钮，但是按不了</h1>
  <form action="" method="post">
    <input disabled style="height:50px;width:200px;" type="submit" value="显示flag" name=" gxxd_auth" />
  </form>

</body>

</html>

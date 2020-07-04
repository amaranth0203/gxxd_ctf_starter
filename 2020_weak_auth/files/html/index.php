
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
  <title>弱密码</title>
</head>

<body>
  <h1>没有验证次数的弱密码题,猜不到的话就用bp暴力破解吧</h1>
  <form class="form-inline" method="post" action="./backend.php">
    <div class="input-group">
      <input style="width:280px;" id="username" type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1" name="username">
    </div>
    <br>
    <br>
    <div class="input-group">
      <input style="width:280px;" id="password" type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon1" name="password">
    </div>
    <br>
    <br>
    <button style="width:280px;" class="btn btn-default">登录</button>
    <br>
    <br>
    <button style="width:280px;" class="btn btn-default" type="reset">重置</button>
  </form>

</body>

</html>



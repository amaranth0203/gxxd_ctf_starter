<html>

<head>
    <meta charset="UTF-8">
    <title>万能密码</title>
</head>

<body>
  <h1>
    万能密码属于sql注入的一种<br />
    不过又略有不同<br />
    你能说出相同点和不同点不<br />
  </h1>
    <form method="post">
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

    <pre>
<?php
include("config.php");
if (isset($_POST['username'])) {
    $id = $_POST['username'];
    $mysqli = new mysqli("127.0.0.1", "root", "root", "gxxd");
    //多条sql语句
    $sql = "select * from `words` where id = '$id';";
    echo "当前执行语句：" . $sql . "<br><hr>";
    if (!$result = $mysqli->query($sql)) {
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }
    if ($result->num_rows === 0) {
        echo "用户名或密码错误";
        exit;
    } else {
        //echo "var_dump(\$mysqli->query(\$sql)->fetch_assoc()):<br><hr>";
        //var_dump($result->fetch_assoc());
        echo $flag;
    }

    $result->free();
    $mysqli->close();  //关闭数据库连接
}


?>

</body>

</html>
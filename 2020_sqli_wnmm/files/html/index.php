<html>

<head>
    <meta charset="UTF-8">
    <title>union select</title>
</head>

<body>
  <h1>sqlmap是没有灵魂的</h1>
<form method="get">
    姿势: <input type="text" name="inject" value="1">
    <input type="submit">
</form>

<pre>
<?php
if(isset($_GET['inject'])) {
    $id = $_GET['inject'];
    $mysqli = new mysqli("127.0.0.1","root","root","gxxd");
    //多条sql语句
    $sql = "select * from `words` where id = '$id';";
    echo "当前执行语句：".$sql."<br><hr>";
    if (!$result = $mysqli->query($sql)) {
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }
    if ($result->num_rows === 0) {
        echo "We could not find a match for ID $id, sorry about that. Please try again.";
        exit;
    }
    else {
        //echo "var_dump(\$mysqli->query(\$sql)->fetch_assoc()):<br><hr>";
        //var_dump($result->fetch_assoc());
        echo "找到了一些记录....但我不告诉你是什么"
        echo "<br>";
    }

    $result->free();
    $mysqli->close();  //关闭数据库连接
}


?>
</pre>

</body>

</html>

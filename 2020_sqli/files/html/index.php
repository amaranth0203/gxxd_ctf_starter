<html>

<head>
    <meta charset="UTF-8">
    <title>简单注入</title>
</head>

<body>
    <h1>
        sql注入是没有灵魂的...<br />
    </h1>
    <form method="get">
        姿势: <input type="text" name="inject" value="1">
        <input type="submit">
    </form>
    <?php
    if (isset($_GET['inject'])) {
        $id = $_GET['inject'];
        $mysqli = new mysqli("127.0.0.1", "root", "root", "gxxd");
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
            var_dump($result->fetch_assoc());
        }

        $result->free();
        $mysqli->close();  //关闭数据库连接
    }


    ?>

</body>

</html>
<!DOCTYPE html>
<html>
<body>

<!-- 设置按钮---刷新 -->
<form action="Reload.php" method="post">
<button type="submit" name="reload">Reload</button>
</form>

<!-- 设置按钮---日志 -->
<form action="log.php" method="post">
<button type="submit" name="log">查看日志</button>
</form>

<!-- 设置按钮---泥土 -->
<form action="dirtdata.php" method="post">
<button type="submit" name="dirtdata">查看泥土</button>
</form>

<!-- 设置按钮---查询 -->
<form action = "checkpoint.php" method = "post">
ID: <input type="text" name= "id">
<input type="submit" value = 提交 name="checkpoint">
</form>
<?php 

//设置回到主页面
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["action"])) {
    if ($_POST["action"] === "reload") {
        echo "<h2>页面重新加载了！</h2><p>这是通过 AJAX 收到的内容。</p>";
    }
}

if (isset($_GET["id"]) && isset($_GET["point"]) && isset($_GET["successful"])) {
    $id = $_GET["id"];
    $point = $_GET["point"];
    $successful = $_GET["successful"];
    echo $successful."<br>";
    echo $id."<br>"; 
    echo $point."<br";
}
?>
</body>
<html>
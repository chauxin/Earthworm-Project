<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Server.php" method="post">
<button type="submit" name="reload" value="reload">退回</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["log"])){
    $file=fopen(__dir__."\serverinfor\log.txt","r"); //读取文件
    if($file){
    while(($line = fgets($file))!==FALSE){
    echo nl2br($line);}}
}

?>
</body>
</html>

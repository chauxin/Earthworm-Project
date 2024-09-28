<!DOCTYPE html>
<html>
    <body>

<h1>客户端</h1>

<?php
if (isset($_GET["action"]) && $_GET["action"] === "getpoint") {

    if (isset($_GET["ID"]) && $_GET["POINT"]) {
        $id = $_GET["ID"];
        $point = $_GET["POINT"];
        $directory = __DIR__."\userInfor";
        $filename = $directory . "\\" . $id;
        $txtname = $filename."\\".$id . ".txt";

        $message = "ID: ". $id ."\n"."POINT: " . $point . "\n";
        

        if (!is_dir($filename)) {

            if (mkdir($filename, 0777, true)) {
                echo "目录创建成功<br>";
                if (file_put_contents($txtname, $message) === false) {
                    echo "写入文件失败！";
                } else {
                    echo "数据已写入文件<br>"."ID: ". $id. "<br>". "Point". $point;}
            } else {
                echo "目录创建失败。";
            }
        } else {
            echo "目录已创建<br>";
            if (file_put_contents($txtname, $message) === false) {
                echo "写入文件失败！";
            } else {
                echo "数据已写入文件<br>"."ID: ". $id. "<br>". "Point". $point;


            }
        }
    }
}

?>

<?php

$filename = "log.txt";

$message = "This file was accessed on " . date('Y-m-d H:i:s') . "\n";

file_put_contents($filename, $message, FILE_APPEND);

?>

    </body>
</html>

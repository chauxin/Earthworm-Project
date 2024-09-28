<!DOCTYPE html>
<html>
    <body>
<?php
$filename = __DIR__ . "/serverinfor/dirtinfor.txt";
$temperature = "NG";
$humidity = "NG";
$pH = "NG";
if (isset($_GET["action"]) && $_GET["action"] == "data") {
    if (isset($_GET["temperature"])){
        $temperature = $_GET["temperature"];
    }
    if (isset($_GET["humidity"])){
        $humidity = $_GET["humidity"];
    }
    if (isset($_GET["pH"])){
        $pH = $_GET["pH"];
    }
    $message = date('Y-m-d H:i:s')."土壤数据"."\n"."温度: ".$temperature."\n". "湿度: ". $humidity. "\n". "酸度: ". $pH. "\n";
      # 文件写入
    if (file_put_contents($filename, $message, FILE_APPEND) === false) {
        echo "写入文件失败！";
    } else {
        echo "数据已写入文件<br>".date('Y-m-d H:i:s')."土壤数据"."<br>"."温度: ".$temperature."<br>". "湿度: ". $humidity. "<br>". "酸度: ". $pH. "<br>";
    }
}
?>
    </body>
</html>

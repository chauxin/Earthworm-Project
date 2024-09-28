<?php 
$id = $_POST["id"];
$point = "POINT: NG";
$successful = "该用户暂未注册";
if ($_SERVER['REQUEST_METHOD'] === "POST"&& isset($_POST["checkpoint"])) {
$file = __DIR__."\userInfor"."\\".$id."\\".$id.".txt";
$directory = __DIR__."\userInfor"."\\".$id;
if (is_dir($directory)) {
    $file=fopen($file,"r"); //读取文件
    if($file){
        while(($line = fgets($file))!==FALSE){
            echo nl2br($line);
    if (strpos($line, "POINT") !== false) {
        $point = $line;
        $successful = "查询成功";
                }
            }
        }
    }
    $id = "id: ".$id;
    header("Location: server.php"."?successful=".$successful."&"."id=".$id."&point=".$point);
}
if ($_SERVER['REQUEST_METHOD'] === "POST"&& isset($_POST["indexcheckpoint"]) && !empty( $_POST["id"])) {
    $file = __DIR__."\userInfor"."\\".$id."\\".$id.".txt";
    $directory = __DIR__."\userInfor"."\\".$id;
    if (is_dir($directory)) {
        $file=fopen($file,"r"); //读取文件
        if($file){
            while(($line = fgets($file))!==FALSE){
                echo nl2br($line);
        if (strpos($line, "POINT") !== false) {
            $point = $line;
            $successful = "查询成功";
            $id = "id: ".$id;
                }
            }
        }
    }
    $id = "id: ".$id;
    header("Location: index.php"."?successful=".$successful."&"."id=".$id."&point=".$point);
}

if ($_SERVER['REQUEST_METHOD'] === "POST"&& isset($_POST["indexcheckpoint"]) && empty( $_POST["id"])) {
    $successful = "NULL";
    header("Location: index.php"."?successful=".$successful);
}
?>
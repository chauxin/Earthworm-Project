<!-- 设置按钮---退回 -->
<form action="Server.php" method="post">
    <button type="submit" name="reload">退回</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["dirtdata"])) {
    $file = fopen(__DIR__ . "\serverinfor\dirtinfor.txt", "r"); //读取文件
    if ($file) {
        while (($line = fgets($file)) !== FALSE) {
            echo nl2br($line);
        }
    }
}

?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["indexdirtdata"])) {
    $filePath = "./serverinfor/dirtinfor.txt";
    if (file_exists($filePath)) {
        $lines = file($filePath);
        $total = count($lines);
        $startLine = max(0, $total - 3);

        $temperature = null;
        $humidity = null;
        $acidity = null;

        for ($i = $startLine; $i < $total; $i++) {
            $line = htmlspecialchars($lines[$i]);

            if (preg_match('/温度:\s*([\d]+(?:\.\d+)?)°C/', $line, $matches)) {
                $temperature = $matches[1]; // 提取温度
            } elseif (preg_match('/湿度:\s*([\d]+(?:\.\d+)?)%/', $line, $matches)) {
                $humidity = $matches[1]; // 提取湿度
            } elseif (preg_match('/酸度:\s*([\d]+(?:\.\d+)?)/', $line, $matches)) {
                $acidity = $matches[1]; // 提取酸度
            }
        }

        echo "温度: " . $temperature . "°C<br>";
        echo "湿度: " . $humidity . "%<br>";
        echo "酸度: " . $acidity . "<br>";

        header("Location:checkdirt.php?"."dirtdata"."&temperature=".$temperature."&humidity=". $humidity ."&acidity=".$acidity);
    }
}
?>
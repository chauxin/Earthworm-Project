<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>日志-绿色环保</title>
    <link rel="icon" href="./png/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a href="./index.php" class="navbar-brand">首页</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="切换导航">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./datalog.php">日志</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">关于我们</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.canva.com/design/DAGRB0c-eFw/roYh_gYRnZ83jNqwpeSzcw/edit?utm_content=DAGRB0c-eFw&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton
">更多</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-5 text-white text-center text-sm-start bg-dark" style="height:400px">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-primary">日志</span>目录</h1>
                    <p class="my-4">该页面是用作查看上传时间的最近五个上传记录
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white text-white p-5">
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item active fw-bold" aria-current="true">日志</li>
                <?php
                $filePath = "./serverinfor/log.txt";
                if (file_exists($filePath)) {
                    $lines = file($filePath);
                    $total = count($lines);
                    $startLine = max(0, $total - 5);
                    for ($i = $startLine; $i < $total; $i++) {
                        echo '<li class="list-group-item">' . htmlspecialchars($lines[$i]) . '</li>';
                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
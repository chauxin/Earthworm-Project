<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>主页-绿色环保</title>
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

    <section class="p-5 text-center text-sm-start bg-dark" style="height:400px">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-white">绿色</span><span class="text-warning">环保</span></h1>
                    <p class="my-4 text-white">绿色环保一直是我们的追求
                    </p>
                    <form action="checkdirt.php" method="post">
                        <button class="btn btn-primary btn-lg" name="dirtdata">开始环保之旅</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-primary p-5">
        <div class="container">
            <div class="d-md-flex justify-content-center align-items-center">
                <p class="text-white fs-5 fw-bold mb-0 me-5">查询编号</p>
                <form action="./checkpoint.php" method="post" class="flex-grow-1">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="ID" name="id">
                        <button class="btn btn-dark btn-lg" name="indexcheckpoint">查询</button>
                </form>
            </div>
        </div>
        </div>
    </section>

    <?php
    if (isset($_GET['successful']) && $_GET["successful"] == "查询成功") {
        echo '<div class="alert alert-primary" role="alert">' . $_GET["successful"] . "<br>" . $_GET["id"] . "<br>" . $_GET["point"] . '</div>';
    } elseif (isset($_GET['successful']) && $_GET["successful"] == "该用户暂未注册") {
        echo '<div class="alert alert-danger" role="alert">' . $_GET["successful"] . "<br>" . $_GET["id"] . "<br>" . $_GET["point"] . '</div>';
    } elseif (isset($_GET['successful']) && $_GET['successful'] == "NULL") {
        echo '<div class="alert alert-warning" role="alert">请先输入ID</div>';
    }
    ?>

    <section class="p-5">
        <div class="d-flex justify-content-center">
            <div class="row g-4 ">
                <div class="col-md">
                    <div class="card bg-dark text-white" style="width: 18rem; height: 40;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">江嘉漩</h5>
                            <p class="card-text fs-5">Some quick example text to build on the card title and make up the
                                bulk of the card's content.Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#Jiang" class="btn btn-primary text-center">关于</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-white" style="width: 18rem; height: 40;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">谢家盈</h5>
                            <p class="card-text fs-5">Some quick example text to build on the card title and make up the
                                bulk of the card's content.Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#Xie" class="btn btn-primary text-center">关于</a>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex">
                    <div class="card bg-dark text-white" style="width: 18rem; height: 40;">
                        <div class="card-body text-center">
                            <h5 class="card-title text-center">林可欣</h5>
                            <p class="card-text fs-5">Some quick example text to build on the card title and make up the
                                bulk of the card's content.Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>
                            <a href="#Lin" class="btn btn-primary">关于</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>

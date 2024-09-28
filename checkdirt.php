<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>泥土数据-绿色环保</title>
    <link rel="icon" href="./png/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    class Fraction  # ChatGPT代写
    {
        private $numerator;   // 分子
        private $denominator; // 分母
    
        // 构造函数
        public function __construct($numerator, $denominator)
        {
            $this->numerator = $numerator;
            $this->denominator = $denominator;
            $this->reduce(); // 约分
        }

        // 约分
        private function reduce()
        {
            $gcd = $this->gcd($this->numerator, $this->denominator);
            $this->numerator /= $gcd;
            $this->denominator /= $gcd;
        }

        // 计算最大公约数
        private function gcd($a, $b)
        {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return abs($a);
        }

        // 字符串表示
        public function toDecimal()
        {
            return $this->numerator / $this->denominator;
        }
    } ?>

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

    <section class="p-5 text-center text-sm-start bg-dark" style="height: 400px">
        <div class="container">
            <div class="d-flex">
                <div>
                    <h1><span class="text-white">泥土</span><span class="text-success">侦测</span></h1>
                    <p class="my-4 text-white">这是我们的主要功能 用作侦测泥土的各项数据</p>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($_GET["dirtdata"])) {
        $acidityValue = (int) $_GET["acidity"];
        $alkaline = (14 - $acidityValue);
        $acidityFrac = new Fraction($alkaline, 14);
        $alkalineDecimal = $acidityFrac->toDecimal();
        $alkalinePercentage = $alkalineDecimal * 100;
        echo '<div class="">
        <div class="container">
            <div class="row justify-content-start align-items-start">
                <div class="col-12 col-md-6 m-md-5">
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">温度</p>
                        </div>
                        <div class="col-12 col-md">
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar bg-danger" style="width:' . htmlspecialchars($_GET["temperature"]) . '%;">' . htmlspecialchars($_GET["temperature"]) . '°C</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">湿度</p>
                        </div>
                        <div class="col-12 col-md">
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar" style="width:' . htmlspecialchars($_GET["humidity"]) . '%;">' . htmlspecialchars($_GET["humidity"]) . '%</div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">酸度</p>
                        </div>
                        <div class="col-12 col-md">
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar bg-warning" style="width:' . htmlspecialchars($acidityFrac->toDecimal() * 100) . '%;">pH' . htmlspecialchars($_GET["acidity"]) . '</div>
                            </div>

                            <form action="./dirtdata.php" method="POST">
                            <button class="btn mt-5 text-white bg-warning" name="indexdirtdata">查询</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>';
    } else {
        echo '<div class="">
        <div class="container">
            <div class="row justify-content-start align-items-start">
                <div class="col-12 col-md-6 m-md-5" style:"box-sizing:border-box">
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">温度</p>
                        </div>
                        <div class="col-12 col-md " >
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar bg-danger" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">湿度</p>
                        </div>
                        <div class="col-12 col-md">
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 fw-bold">酸度</p>
                        </div>
                        <div class="col-12 col-md">
                        <div class="progress" style="width: 80%;">
                                <div class="progress-bar bg-warning" style="width: 0%;"></div>
                            </div>

                            <form action="./dirtdata.php" method="POST">
                            <button class="btn mt-5 text-white bg-warning" name="indexdirtdata">查询</button>
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>';
    }
    ?>

    <div>
        <div class="container">
            <div class="d-flex justify-content-start">
                <div class="row">
                    <div class="col-md pt-4">
                        <div class="card col mx-4" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">温度</h5>
                                <p class="card-text">正常的温度应该在80%</p>
                                <a href="#" class="btn btn-primary">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pt-4">
                        <div class="card col mx-4" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">湿度</h5>
                                <p class="card-text">正常的湿度应该在20-36°C</p>
                                <a href="#" class="btn btn-primary">了解更多</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md pt-4 pb-5">
                        <div class="card col mx-4" style="width: 20rem;">
                            <div class="card-body">
                                <h5 class="card-title">酸度</h5>
                                <p class="card-text">正常的酸度应该在3-7ph</p>
                                <a href="#" class="btn btn-primary">了解更多</a>
                            </div>
                        </div>
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
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/js/js.js')}}">
    <title>喜歡的事物介紹</title>
    <style>
        #formSection {
            width: 500px;
            margin: auto;
            text-align: center;

        }

        .petal {
            position: absolute;
            width: 20px;
            height: 20px;
            background: url('./11.jpg') no-repeat center center;
            background-size: contain;
            opacity: 0.7;
            animation: fall 3s linear, rotate 1s linear infinite;
        }

        @keyframes fall {
            0% {
                top: -10%;
                transform: translateX(0);
            }

            100% {
                top: 100%;
                transform: translateX(calc(100vw * (random() - 0.5)));
                /* 隨機橫向漂移 */
            }
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">喜好的事物</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active bg-warning" href="#">首頁</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-danger" href="#carouselExample">圖片輪播</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-success me-5" href="#formSection">聯絡我</a>
                    </li>
                </ul>

                <form class="d-flex justify-content-center align-items-center w-50">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                <button class="btn btn-info ms-auto" type="button" onclick="login()">管理登入</button>
                <div id="modal"></div>
            </div>
        </div>
    </nav>


    <div class="container my-5">
        <h1 class="text-center">【喜好的事物】 </h1>
        <br>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-4">
                <h2>美食</h2>
                <p>最喜歡的食物有很多，諸如從燒肉，壽司，火鍋...日式，中式，異國料理都讚！</p>
                <button class="btn btn-primary">了解更多</button>
            </div>
            <div class="col-lg-4 col-md-4">
                <h2>旅遊</h2>
                <p>最喜歡的旅遊國家是日本，每隔一段時間都會前往體驗日本在地文化及美景。</p>
                <button class="btn btn-success">查看旅行足跡</button>
            </div>
            <div class="col-lg-4 col-md-4">
                <h2>休閒活動</h2>
                <p>最喜歡從事的休閒是戶外踏青及釣魚，享受郊外的清新空氣和無憂時光。</p>
                <button class="btn btn-warning">查看休閒雜記</button>
            </div>
        </div>
    </div>
    <br> <br>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row no-gutters"> <!-- 使用 no-gutters 來去掉圖片之間的間隙 -->
                    <div class="col-12 col-sm-6 col-md-3 p-0"> <!-- 使用 p-0 去除 padding -->
                        <img src="{{asset('assets/images/燒肉.png')}}" class="d-block w-100" alt="食物">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/壽司.png')}}" class="d-block w-100" alt="食物">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/燒肉.png')}}" class="d-block w-100" alt="食物">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/壽司.png')}}" class="d-block w-100" alt="食物">
                    </div>
                </div>
                <br> <br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>美食</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/japan.jpg')}}" class="d-block w-100" alt="旅行">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/summer.jpg')}}" class="d-block w-100" alt="旅行">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/japan.jpg')}}" class="d-block w-100" alt="旅行">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="{{asset('assets/images/summer.jpg')}}" class="d-block w-100" alt="旅行">
                    </div>
                </div>
                <br> <br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>旅遊地點</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row no-gutters">
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="./play.jpg" class="d-block w-100" alt="休閒">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="./play1.jpg" class="d-block w-100" alt="休閒">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="./fishing.jpg" class="d-block w-100" alt="休閒">
                    </div>
                    <div class="col-12 col-sm-6 col-md-3 p-0">
                        <img src="./fishing1.jpg" class="d-block w-100" alt="休閒">
                    </div>
                </div>
                <br> <br>
                <div class="carousel-caption d-none d-md-block">
                    <h5>休閒活動</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="formSection" class="container my-5" style="background-color:lightblue; padding: 20px;">
        <h2 class="text-center">聯絡我</h2>
        <br>
        <form>
            <div class="mb-3">
                <label for="name" class="form-label">姓名</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">電子郵件</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">訊息</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-20" onclick="clickSubmit()">送出</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"
        integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        function createPetals() {
            // 設定生成的櫻花瓣數量
            const petalCount = 30;

            for (let i = 0; i < petalCount; i++) {
                const petal = document.createElement('div');
                petal.classList.add('petal');
                petal.style.left = `${Math.random() * 100}vw`;
                petal.style.animationDuration = `${Math.random() * 5 + 5}s`;

                document.body.appendChild(petal);

                setTimeout(() => {
                    petal.remove();
                }, (Math.random() * 5 + 5) * 3000);
            }
        }
        setInterval(createPetals, 15000);

        function clickSubmit() {
            let chk = confirm('確定要提交嗎?');
        }

        function login() {
            $.get("./login_form.php", function (html) {
                $("#modal").html(html);
                let LoginModal = new bootstrap.Modal('#LoginModal');
                LoginModal.show();
            })
        }

    </script>
</body>

</html>

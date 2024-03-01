<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- header css -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!-- 登入畫面字體 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <header th:fragment="header"> -->
        <header>
            <div class="login_modal" style="display: none;">

                <form class="animate login_modal-content" method="post">
                    <div class="imgcontainer">
                        <img src="../img/close_icon2.png" alt="貓爪圖案" class="paw">
                    </div>
                    <section class="login_bar_up">
                        <h2 class="loginarticle">Login</h2>
                        <div class="login_box">
                            <div class="option">
                                <label for="uname">
                                    <p class="login_text">使用者帳號</p>
                                </label>
                                <input type="text" placeholder="請輸入帳號" name="uname" required>
                            </div>
                            <div class="option">
                                <label for="psw">
                                    <p class="login_text">使用者密碼</p>
                                </label>
                                <input type="password" placeholder="請輸入密碼" name="psw" required>
                            </div>

                            <div class="option2">
                                <a href="#" style="margin-right: 10px;">
                                    <p class="login_text2">忘記密碼?</p>
                                </a>
                                <p class="login_text2">|</p>
                                <a href="#" style="margin-left: 10px;">
                                    <p class="login_text2">會員註冊</p>
                                </a>
                                <button type="submit">登入</button>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
            <div class="container">
                <section class="h_logo">
                    <a href="#"><img src="../img/logo_01.png" alt="header_logo" title="logo" aria-label="logo"></a>
                </section>
                <section class="h_nav_bar">
                    <div class="search_login">
                        <div class="register">
                            <div class="shopping_icon">
                                <!-- 購物車icon -->
                                <a href="#"><i class="fa fa-xl fa-cart-shopping"></i></a>
                            </div>
                            <button class="login_bar">註冊/登入</button>
                            <button class="login_bar d-none">登出</button>
                        </div>
                    </div>
                    <nav class="navbar">
                        <div class="btn">
                            <div class="btn-icon"></div>
                            <div class="btn-icon"></div>
                            <div class="btn-icon"></div>
                        </div>
                        <ul>
                            <li><a class="active" href="https://getbootstrap.com/docs/5.3/getting-started/download/"><i
                                        class="fa fa-fw fa-home"></i> 首頁</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-user"></i> 關於我們</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-paw"></i> 給牠個家</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-newspaper"></i> 最新消息</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-shop"></i> 周邊商品</a></li>
                            <li><a href="#"><i class="fa fa-fw fa-clipboard-question"></i> 常見問題</a></li>
                        </ul>
                    </nav>

                </section>

            </div>
        </header>
        <script src="../js/login.js"></script>
    <!-- </header> -->

</body>

</html>
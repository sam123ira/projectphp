<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <title>Document</title>
    <link rel="stylesheet" href="./css/owl.carousel.css">
    <link rel="stylesheet" href="./css/owl.theme.default.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/resopnsive.css">
    <link rel="stylesheet" href="./css/mstyle.css">
</head>

<body>
<!-- scroll-up -->
<button id="scroll-up">
    <i class="fa fa-2x fa-chevron-up" aria-hidden="true"></i>
</button>
<!-- header -->
<header>
    <!-- nav -->
    <nav id="nav">
        <div class="nav-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul class="navbar">
            <li class="nav-item submenu">
                <a href="#">درباره‌ما</a>
                <ul class="dropdown">
                    <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                    <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                    <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#">همکاری با‌ما</a>
            </li>
            <li class="nav-item submenu">
                <a href="#">تماس ‌با‌ما</a>
                <ul class="dropdown">
                    <li class="dropdown-item"><a href="#">آیتم 1</a></li>
                    <li class="dropdown-item"><a href="#">آیتم 2</a></li>
                    <li class="dropdown-item"><a href="#">آیتم 3</a></li>
                </ul>
            </li>
            <li class="blog-item">
                <a href="#">مردم</a>
            </li>
            <li class="blog-item">
                <a href="#">سفرها</a>
            </li>
            <li class="dots">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </li>
            <?php
            if(isLogin()){
                ?>
                <li class="blog-item"><a href='showcontent.php'>نوشته ها</a></li>
                <li class="blog-item"><a href='Add.php'>افزودن مطلب </a></li>
                <li class="blog-item"><a href='<?php echo"ChangePassword.php?id={$_SESSION['user']["email"]}"; ?>'>تغییر رمزعبور</a></li>
                <li class="blog-item"><a href='logout.php'>خروج</a></li>
            <?php }
            else{
                ?>
                <li>
                    <button class="btn_lr" style="background-color: #2c6cff;"><a href="login.php">ورود</a></button>
                </li>
                <li>
                    <button class="btn_lr" style="background-color: #5a6268;"><a href="register.php">عضویت</a></button>
                </li>
                <?php
            }
            ?>
            <form action="" class="search">
                <input class="search-box" type="search" placeholder="جستجو">
                <a href="#" class="search-btn" type="submit">
                    <img src="./img/Layer 2.png" alt="search-icon">
                </a>
            </form>
        </ul>
    </nav>
    <!-- slider -->
    <div id="slider" class="owl-carousel owl-theme">
        <div class="item item1">
            <div class="card animated bounceInRight">
                <figure class="figure">
                    <img src="./img/Layer 4.png" class="user-img" alt="user">
                    <figcaption class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="item item2">
            <div class="card animated bounceInRight">
                <figure class="figure">
                    <img src="./img/Layer 4.png" class="user-img" alt="user">
                    <figcaption class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                    </figcaption>
                </figure>
            </div>
        </div>
        <div class="item item3">
            <div class="card animated bounceInRight">
                <figure class="figure">
                    <img src="./img/Layer 4.png" class="user-img" alt="user">
                    <figcaption class="card-text">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</header>
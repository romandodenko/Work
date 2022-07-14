<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOCIAL-CASINO.COM</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet icon" href="img/logo1.png">
</head>

<body>
    <header>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between p-2">
                <div class="col-3 col-sm-7 d-flex align-items-center col-xl-4 ">
                    <ul class="menu d-flex justify-content-around p-4 w-100  d-none d-md-flex">
                        <li><a class="item" href="main-page.php">Strona główna</a></li>
                        <li><a class="item" href="main-page.php#about">O nas</a></li>
                        <li><a class="item" href="main-page.php#games">Gry</a></li>
                    </ul>
                    <div class="hamburger-menu d-flex align-items-center d-md-none">
                        <input id="menu__toggle" type="checkbox" />
                        <label class="menu__btn" id="burger">
                            <span></span>
                        </label>
                        <ul class="menu__box  animate__animated animate__bounceInLeft" id="mobileMenu">
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="main-page.php">Strona główna</a></li>
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="main-page.php#about">O nas</a></li>
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="main-page.php#games">Gry</a></li>
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="terms.php">Zasady i warunki</a></li>
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="privacy.php">Polityka prywatności</a></li>
                            <li><a class="menu__item animate__animated animate__bounceInLeft" href="cookie.php">Polityka Cookie</a></li>
                            <div class="logoMob ">
                                <a href="main-page.php"><img src="img/logo1.png" alt=""></a>
                            </div>
                            <div class="close closeMob" id="closeMob"></div>
                        </ul>

                    </div>
                </div>
                <div class="col-4 col-xl-2 mx-4 m-auto">
                    <div class="logo">
                        <a class="social" href="main-page.php">Social casino</a>
                    </div>
                </div>
            </div>


        </div>

    </header>
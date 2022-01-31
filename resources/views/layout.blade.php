<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700;900&family=Pacifico&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d881bdf81d.js" crossorigin="anonymous"></script>
    <script src="https://api.mapy.cz/loader.js"></script>
    <script>Loader.load()</script>
    <title>Předporodní kurzy - Hradec Králové</title>
</head>
<body>
<header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="myGradient" gradientTransform="rotate(90)">
                <stop offset="0%" stop-color="#d293b6"/>
                <stop offset="100%" stop-color="#f7e7f0"/>
            </linearGradient>
        </defs>
        <path fill="url('#myGradient')" fill-opacity="1"
              d="M0,64L80,53.3C160,43,320,21,480,21.3C640,21,800,43,960,48C1120,53,1280,43,1360,37.3L1440,32L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="left">
            <a href="/" class="logo">uporodniasistenky.cz</a>
        </div>
        <div class="right">
            <ul class="menu">
                <li>
                    <a href="/clanky/1">O nás</a>
                </li>
                <li>
                    <a href="/kurzy">Kurzy</a>
                </li>
                <li>
                    <a href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
        <div class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <svg class="wave" id="wave-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#d293b6" fill-opacity="1"
              d="M0,128L60,112C120,96,240,64,360,74.7C480,85,600,139,720,170.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <svg class="wave" id="wave-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e3c6d7" fill-opacity="1"
              d="M0,128L60,112C120,96,240,64,360,74.7C480,85,600,139,720,170.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <svg class="wave" id="wave-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <defs>
            <linearGradient id="myGradient2" gradientTransform="rotate(90)">
                <stop offset="0%" stop-color="#f7e7f0"/>
                <stop offset="100%" stop-color="#d293b6"/>
            </linearGradient>
        </defs>
        <path fill="url('#myGradient2')" fill-opacity="1"
              d="M0,128L60,112C120,96,240,64,360,74.7C480,85,600,139,720,170.7C840,203,960,213,1080,202.7C1200,192,1320,160,1380,144L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="left">
            <h4>Kontakt</h4>
            <div>
                <strong>E-mail: </strong><a href="#">renata.kolaciova@gmail.com</a>
            </div>
            <div>
                <strong>Telefon 1: </strong><a href="tel:+420603701417">+420 603 701 417</a>
            </div>
            <div>
                <strong>Telefon 2: </strong><a href="tel:+420723996072" >+420 723 996 072</a>
            </div>
        </div>
        <div class="right">
            <ul>
                <li>
                    <a href="/clanky/1">O nás</a>
                </li>
                <li>
                    <a href="/kurzy">Kurzy</a>
                </li>
                <li>
                    <a href="/kontakt">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<script src="/js/app.js"></script>
</body>
</html>

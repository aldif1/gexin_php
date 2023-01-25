<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gexin Market</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/animate.css">
    <link rel="stylesheet" href="user/css/fontawesome.css">
    <link rel="stylesheet" href="user/css/styles.css">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        /*nav {
    padding-left: 5%;
    padding-right: 5%;
    background: #11101D;
}*/
        
        nav {
            width: 100%;
            z-index: 999;
            padding-left: 5%;
            padding-right: 5%;
            background: #11101D;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
        }
        
        nav {
            display: flex;
        }
        
        ul {
            list-style: none;
        }
        
        a {
            text-decoration: none;
            color: #fff;
        }
        
        .nav-link {
            font-weight: 500;
            color: #39c58b;
        }
        
        .nav-link:hover {
            opacity: 0.7;
            color: #11101D;
        }
        
        .hero {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 370px;
            background: #11101D;
        }
        
        .hero-info {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 300px;
            background: #11101D;
        }
        
        .image {
            width: 150%;
        }
        
        .explore {
            margin-top: 3em;
        }
        
        hr {
            width: 60px;
        }
        /*.content {
    padding-left: 10%;
    padding-right: 10%;
    display: grid;
    margin: 1rem;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr;
}

.content .contentlist {
    width: 300px;
    height: 300px;
    background: #fff;
    box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
}*/
        
        .main {
            display: grid;
            grid-template-columns: 1fr repeat(12, minmax(auto, 60px)) 1fr;
            grid-gap: 40px;
            padding: 60px 0;
        }
        
        .main-admin {
            display: grid;
            grid-template-columns: 1fr repeat(12, minmax(auto, 60px)) 1fr;
            grid-gap: 40px;
            padding: 30px 0;
        }
        
        .text--medium {
            font-family: "Open Sans", sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #11101D;
        }
        
        .cards {
            grid-column: 2 / span 12;
            display: grid;
            grid-template-columns: repeat(12, minmax(auto, 60px));
            grid-gap: 40px;
        }
        
        .card {
            grid-column-end: span 4;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease 0s;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
        }
        
        .card:hover {
            transform: translateY(-7px);
        }
        
        .card__image-container {
            width: 100%;
            padding-top: 100%;
            overflow: hidden;
            position: relative;
            border-radius: 15px 15px 0px 0px;
        }
        
        .card__image-container img {
            width: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .card__content {
            padding-top: 20px;
            padding-left: 20px;
            padding-right: 20px;
        }
        
        .card__title {
            font-size: 18px;
        }
        
        .text-rute {
            color: #39c58b;
        }
        
        .card__info a {
            margin-right: auto;
        }
        
        .card__price {
            margin-right: auto;
            padding: 5px 20px;
            background-color: #11101D;
            border-radius: 20px;
            color: #fff;
            transition: .3s;
        }
        
        .card__price:hover {
            background-color: #2a6681;
        }
        
        .tour-info {
            padding-left: 10%;
            padding-right: 10%;
            margin-left: 10%;
            margin-right: 10%;
            padding-top: 6em;
            background: #fff;
        }
        
        .map {
            background: #fff;
            padding-top: 2em;
            padding-bottom: 6em;
        }
        
        .map .title {
            padding-left: 20%;
            padding-right: 20%;
            padding-bottom: 2em;
            justify-content: space-between;
            align-items: center;
        }
        
        .profilimg {
            width: 45%;
        }
        
        .nav-mb {
            display: none;
        }
        
        .tourbtn {
            position: relative;
            top: -6em;
            cursor: pointer;
            font-weight: 600;
            color: #fff;
            padding: .5em 2em;
            border: none;
            background: #39c58b;
            border-radius: 8px;
            transition: .3s;
        }
        
        .tourbtn:hover {
            background: #11101D;
        }
        
        @media only screen and (max-width: 1000px) {
            .card {
                grid-column-end: span 6;
            }
        }
        
        @media only screen and (max-width: 700px) {
            .nav-ds {
                display: none;
            }
            .nav-mb {
                display: block;
            }
            .profilimg {
                width: 100%;
            }
            .tour-info {
                padding-left: 10%;
                padding-right: 10%;
                margin-left: 0;
                margin-right: 0;
                padding-top: 2em;
            }
            .map .title {
                padding-left: 10%;
                padding-right: 10%;
            }
            main {
                grid-gap: 20px;
            }
            .card {
                grid-column-end: span 12;
            }
        }
        
        @media only screen and (max-width: 500px) {
            .title h3 {
                padding-left: 2em;
                padding-right: 2em;
                font-size: 21px;
            }
            main {
                grid-template-columns: 10px repeat(8, 1fr) 10px;
                grid-gap: 10px;
            }
            .cards {
                grid-column: 2 / span 9;
                grid-template-columns: repeat(6, 2fr);
                grid-gap: 20px;
            }
            .card {
                grid-column-end: span 9;
            }
        }
        
        @media only screen and (max-width: 300px) {
            .title h3 {
                width: 100px;
                padding-left: 3em;
                padding-right: 3em;
                font-size: 16px;
            }
            main {
                grid-template-columns: 10px repeat(6, 1fr) 10px;
                grid-gap: 10px;
            }
            .cards {
                grid-column: 2 / span 8;
                grid-template-columns: repeat(6, 2fr);
                grid-gap: 20px;
            }
            .card {
                grid-column-end: span 8;
            }
        }
    </style>
    <link rel="stylesheet" href="./tegaltourism-floatingChatButton/chat.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="./tegaltourism-floatingChatButton/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>



    <div class="wrapper">
        <nav class="navbar navbar-expand-lg margin-bottom:1em">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <img src="./img/logo.jpg" style="width: 50px; height: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">gexin-market.xyz</a>
                    </li>
                </ul>
            </div>
        </nav>
        <img src="./img/banner.jpg" style="width: 100%; ">
        <!--div class="hero" style="padding-top:3em">
            <h1 class="wow fadeInUp text-white ">Eksplorasi Virtual Tour<br> Wisata Kabupaten Tegal</h1>
            <div class="htext">
                <div class="text-center">
                    <div class="wow fadeInUp">
                        <div class="arrow">
                            <a href="#exp">
                                <svg style="font-size:32px;transform: rotate(180deg)" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="angle-up"
                                    class="svg-inline--fa fa-angle-up fa-w-10" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                    <path fill="white"
                                        d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="headerImg">
                <img src="user/images/header1.png" alt="header">
            </div>
        </div-->
        <div class="explore" style="padding-top:1em">
            <div class="title">
                <center>
                    <hr>
                </center>
            </div>
            <main class="main">
                <section class="cards" id="exp">
                    <div class="card">
                        <div class="card__image-container">
                            <a href="https://wa.me/08">
                                <img src="./img/joki_eceran.jpeg" style="height: 370px; width: 100%;" alt="Detailed image description would go here." /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Joki Rank Eceran
                            </p>
                            <div class="card__info">
                                <a href="https://wa.me/08">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="https://wa.me/08">
                                <img src="./img/joki_classic.jpeg" alt="Detailed image description would go here." style="height: 370px; width: 100%;" /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Joki Classic
                            </p>
                            <div class="card__info">
                                <a href="vt_cempaka/index.html">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/guci.php">
                                <img src="./img/joki_paketan.jpeg" style="height: 370px; width: 100%;" alt="Detailed image description would go here." />
                            </a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                Joki rank paketan
                            </p>
                            <div class="card__info">
                                <a href="vt_guci/index.html">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="https://wa.me/08">
                                <img src="./img/char-mlbb-4.jpg" style="height: 370px; width: 100%;" alt="Detailed image description would go here." />
                                <a href="user/deskripsi/sigedong.php">
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                JUAL AKUN MLBB
                            </p>
                            <div class="card__info">
                                <a href="vt_sigedong/index.html">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/cempaka.php">
                                <img src="./img/icon_instagram.png" alt="Detailed image description would go here." style="height: 370px; width: 100%;" /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                FOLLOWERS INSTAGRAM 
                            </p>
                            <div class="card__info">
                                <a href="vt_cempaka/index.html">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card__image-container">
                            <a href="user/deskripsi/cempaka.php">
                                <img src="./img/logo_yt.png" alt="Detailed image description would go here." style="height: 370px; width: 100%;" /></a>
                        </div>
                        <div class="card__content d-flex" style="justify-content: space-between;align-items: center">
                            <p class="card__title text--medium">
                                SUBSCRIBER YOUTUBE
                            </p>
                            <div class="card__info">
                                <a href="vt_cempaka/index.html">
                                    <p class="card__price text--medium">order</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    

                </section>
            </main>
        </div>
    </div>
</body>
<script src="user/js/wow.js"></script>
<script>
    new WOW().init();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="user/js/bootstrap.min.js"></script>
<script src="user/js/fontawesome.js"></script>


</html>
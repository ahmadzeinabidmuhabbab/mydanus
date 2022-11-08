<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap Icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/5022cbfede.js" crossorigin="anonymous"></script>
    <!-- swiperjs -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body id="home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark shadow-lg fixed-top py-md-3 px-md-3" id="mainnavbar">
        <div class="container">
            <a href="/home"><img class="logo d-none d-sm-block d-sm-none d-md-block" src="img/header logo.png" id="logo"
                    alt="logo mydanus"></a>
            <!-- <img class="logo d-block d-sm-none d-none d-sm-block d-md-none" src="img/dana icon.png" id="logo" alt="logo small mydanus"> -->
            <form class="d-flex" role="search">
                <input class="form-control mx-3 " type="search" placeholder="Cari himada/UKM" aria-label="Search">
                <button class="btn btn-outline-light" type="submit" href><a href="search"> Search</a></button>
            </form>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-3">
                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($beranda)) {
                                                echo $beranda;
                                            }; ?>" aria-current="page" href="/home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/logout">Keluar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($profil)) {
                                                echo $profil;
                                            }; ?>" href="/profile"><i class="fa-solid fa-user fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- maincontent  -->
    <?= $this->renderSection('maincontent'); ?>
    <!-- Akhir maincontent  -->

    <!-- footer -->
    <footer class="greenpeach">
        <div class="container ">

            <div class="row credit text-center py-3">
                <small>All rights reserved by &copyMydanus 2022</small>
            </div>
        </div>

    </footer>
    <!-- wall -->
    <section id="wall" class="p-0">
        <img src="img/tembok berwarna.png" alt="">
    </section>
    <!-- Akhir wall -->
    <!-- footer -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- JS swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Main JS -->
    <script src="script.js"></script>
</body>

</html>
<?= $this->extend('mydanus/seller/template'); ?>

<?= $this->section('maincontent'); ?>
<!-- content utama -->
<html lang="en" xmlns:th="http://www.thymeleaf.org" xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
    xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity5" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Pesanan Saya</title>
    <link rel=”icon” href=”https://stis.ac.id/media/source/up.png”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf9192ff90.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <link href="assets/css/style2.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
    .box {
        /* width: 300px; */
        margin-left: 35px;
        width: 75%;
        border-bottom: 20px solid #255c37;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .gambarpesanan img {
        width: 100%;
        height: 100%;
        justify-content: center;
    }


    .gambarpesanan {

        padding: 2%;

    }

    .pesanan {
        background-color: #f9efd7;
    }

    .main-content h2 {
        color: rgb(243, 181, 25);
    }
    </style>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><span>Jiddan Najdi</span></h3>
            <small>2219011xxx</small>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="/home" id="home" class="<?php if (isset($beranda)) {
                                                            echo $beranda;
                                                        }; ?>"><span><i class="fa-solid fa-house"></i></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="profile" id="profil" class="<?php if (isset($profile)) {
                                                                echo $profile;
                                                            }; ?>"><span><i class="fa-solid fa-user"></i></span>
                        <span>Profil</span></a>
                </li>
                <li>
                    <a href="myorder" id="keranjang" class="<?php if (isset($myorder)) {
                                                                echo $myorder;
                                                            }; ?>"> <span>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <span>Pesanan Saya</span></a>
                </li>
                <li>
                    <a href="complaint" id="keluhan" class="<?php if (isset($complaint)) {
                                                                echo $complaint;
                                                            }; ?>"><span><i
                                class="fa-solid fa-triangle-exclamation"></i></span>
                        <span>Ajukan Keluhan</span></a>
                </li>
                <li>
                    <a href="/" id="login"><span><i class="fa-solid fa-right-from-bracket pe-3"></i></span>
                        <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>

    <main>
        <div class="container py-5">
            <!-- Content Section -->
            <div class="isi main-content">
                <h2>Pesanan Saya</h2>
                <p>Silakan cek di bawah ini untuk melihat apa aja yang sudah sobat MyDanus pesan</p>
                <section>
                    <div>
                        <h4>Progress</h4>
                        <table class>
                            <tr>
                                <td><i class="fa-solid fa-bag-shopping"></i></td>
                                <td> Pesanan telah siap</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-truck-fast"></i></td>
                                <td> Pesanan diantarkan</td>
                            </tr>
                            <tr>
                                <td><i class="fa-solid fa-check"></i></td>
                                <td> Pesanan selesai</td>
                            </tr>
                        </table>

                        <br /> <br />
                        <h4>Deskripsi pesanan</h4>

                        <div class="container">
                            <div class="row content pesanan">
                                <div class="col-md-6 mb-3 gambarpesanan">
                                    <img src="img/sampel produk 1.png" class="img-fluid">
                                </div>
                                <div class="col-md-6 loginlist">
                                    <h4 class="signin-text mb-3">Deskripsi</h4>

                                    <div class="card-header toko">
                                        @penjualCookies235
                                    </div>
                                    <p class="card-text">ini Cookies yang the best. Produk ini terbuat dari tepung,
                                        Penyedap, perencah kue, dan cinta ibu.
                                        jika kalian rindu ibu, makanlah kue ini. Campur resep cinta Ibu
                                        Cloud bread, cloud bread
                                        Kita 'kan punya cloud bread
                                        Cloud bread, cloud bread
                                        Ku senang punya cloud bread
                                    </p>

                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- </main> -->
                </section>
            </div>
        </div>
    </main>

    </div>
    <?= $this->endSection(); ?>
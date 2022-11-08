<?= $this->extend('mydanus/seller/template'); ?>

<?= $this->section('maincontent'); ?>
<!-- content utama -->
<html lang="en" xmlns:th="http://www.thymeleaf.org" xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout" xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity5" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Pesanan Saya</title>
    <link rel=”icon” href=”https://stis.ac.id/media/source/up.png”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf9192ff90.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <link href="assets/css/style2.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>

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
                                                            }; ?>"><span><i class="fa-solid fa-triangle-exclamation"></i></span>
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
        <div class="container">
            <!-- Content Section -->
            <div class="isi main-content py-5">
                <h2>Ajukan Keluhan</h2>
                <p>Ceritakan kendala atau masalah yang kamu alami di sini</p>
                <div class="box">
                    <form action="#" method="post">
                        <div class="form-group mb-0">
                            <select class="form-select" aria-label="Default example">
                                <option selected disabled>--- Pilih Pesanan yang dikeluhkan ---</option>
                                <option> Nasi Goreng </option>
                                <option> Nasi Kebuli </option>
                                <option> Bunga bakung</option>
                            </select>
                        </div>
                        <textarea class="isikeluhan" name="keluhan" placeholder="ketikkan keluhan Anda di sini"></textarea>
                        <button class="btn btn-class">Kirim</button>
                    </form>
                </div>
            </div>
    </main>

    </div>

    <?= $this->endSection(); ?>
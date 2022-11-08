<?=$this->extend('mydanus/seller/template');?>

<?=$this->section('maincontent');?>
<!-- content utama -->
<html lang="en" xmlns:th="http://www.thymeleaf.org" xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout"
    xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity5" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>layout</title>
    <link rel=”icon” href=”https://stis.ac.id/media/source/up.png”>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf9192ff90.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/style2.css" rel="stylesheet" />
    <style>
    section {
        margin: 5vw;
    }

    #savebutton {
        width: auto;
        margin-top: 3vw;
    }

    .content {
        margin-top: 4%;
        padding: 2%;
        background-color: #fff;
        border: 1px solid black;
    }

    input {
        border: 1px solid #fddd34;
        border-radius: 5px;
        padding: 3px;
        float: right;

    }
    </style>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h3><span><?= session()->get('nama'); ?></span></h3>
            <small><?= session()->get('nim'); ?></small>
        </div>

        <div class="sidebar">
            <div class="sidebar-brand">
                <h3><span><?= session()->get('nama'); ?></span></h3>
                <small><?= session()->get('nim'); ?></small>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li>
                        <a href="/home" id="home" class="<?php if (isset($beranda)) {
    echo $beranda;
}
;?>"><span><i class="fa-solid fa-house"></i></span>
                            <span>Home</span></a>
                    </li>
                    <li>
                        <a href="profile" id="profil" class="<?php if (isset($profile)) {
    echo $profile;
}
;?>"><span><i class="fa-solid fa-user"></i></span>
                            <span>Profil</span></a>
                    </li>
                    <li>
                        <a href="myorder" id="keranjang" class="<?php if (isset($myorder)) {
    echo $myorder;
}
;?>"> <span>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <span>Pesanan Saya</span></a>
                    </li>
                    <li>
                        <a href="complaint" id="keluhan" class="<?php if (isset($complaint)) {
    echo $complaint;
}
;?>"><span><i class="fa-solid fa-triangle-exclamation"></i></span>
                            <span>Ajukan Keluhan</span></a>
                    </li>
                    <li>
                        <a href="/" id="login"><span><i class="fa-solid fa-right-from-bracket pe-3"></i></span>
                            <span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <main>
        <!-- Content Section -->
        <div class="isi main-content">
            <section>
                <div class="container">
                    <form method="post" class="form-signup" id="form-regis">
                        <h2><span><i class="fa-solid fa-user"></i><?=session()->get('nama');?></h2>
                        <p><?=session()->get('nim');?></p>
                        <div class="row content">
                            <!-- <div class="col-md-6"> -->
                            <div class="row">
                                <form action="">
                                    <table>
                                        <tr>
                                            <th width="25%"></th>
                                            <th width="75%"></th>
                                        </tr>
                                        <tr>
                                            <div class="form-group">
                                                <td><label for="namalengkap">Nama Lengkap</label></td>
                                                <td><input type="text" name="namalengkap" id="nama" readonly="readonly"
                                                        value="<?=session()->get('nama');?>">
                                                </td>
                                            </div>
                                        </tr>
                                        <!-- <tr>
                                    <div class="form-group">
                                        <td><label for="NIM">NIM</label></td>
                                        <td><input type="text" name="NIM" id="nim" readonly="readonly" disabled>
                                        </td>
                                    </div>
                                </tr> -->
                                        <tr>
                                            <div class="form-group">
                                                <td><label for="kelas">Kelas</label></td>
                                                <td><input type="kelas" name="kelas" id="kelas"
                                                        value="<?=session()->get('kelas');?>">
                                                </td>
                                            </div>
                                        </tr>
                                        <!-- <tr>
                                    <div class="form-group">
                                        <td><label for="emaillain">Email Lain</label></td>
                                        <td><input type="email" name="emaillain" id="emaillain"></td>
                                    </div>
                                </tr> -->

                                        <tr>
                                            <div class="form-group">
                                                <td><label for="nohp">No. HP</label></td>
                                                <td><input type="text" name="nohp" id="nohp"
                                                        value="<?=session()->get('phone');?>"></td>
                                            </div>
                                        </tr>

                                        <tr>
                                            <div class="form-group">
                                                <td><label for="alamat">Alamat</label></td>
                                                <td><input type="text" name="alamat" id="alamat"
                                                        value="<?=session()->get('alamat');?>"></td>
                                            </div>
                                        </tr>
                                    </table>
                                    <div id="savebutton" action=""><button class="btn btn-class">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>

    </div>
    <?=$this->endSection();?>
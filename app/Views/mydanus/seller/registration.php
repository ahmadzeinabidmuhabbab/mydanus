<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Registrasi MyDanus</title>
    <style>
    section {
        margin: 5vw;
    }

    .content {
        margin-top: 4%;
        padding: 3%;
        background-color: #fff;

    }

    input {
        border: 1px solid #fddd34;
        border-radius: 5px;
        padding: 3px;

    }

    .content {
        border: 1px solid black;
    }

    .atbottom {
        position: absolute;
        bottom: 0;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark shadow-lg fixed-top py-md-3 px-md-3" id="mainnavbar">
            <div class="container">
                <a href="/home"><img class="logo" src="img/header logo.png" id="logo" alt="logo mydanus"></a>
            </div>
        </nav>
    </header>


    <section>
        <div class="container">
            <form action="<?=base_url('prelogin/register');?>" method="post" class="form-signup" id="form-regis">
                <h2>Daftar Sebagai Pembeli</h2>
                <p>Isikan isian berikut untuk mendaftar sebagai pembeli di MyDanus</p>
                <div class="row content">
                    <!-- <div class="col-md-6"> -->
                    <div class="row"></div>
                    <table>
                        <tr>
                            <th width="25%"></th>
                            <th width="80%"></th>
                        </tr>
                        <tr>
                            <?php if (session()->getFlashdata('pesan')): ?>
                            <br>
                            <div class="alert alert-<?=session()->getFlashdata('flag');?> mt-3" role="alert">
                                <?=session()->getFlashdata('pesan');?>
                            </div>
                            <?php endif;?>
                            <div class="form-group">
                                <td><label for="namalengkap">Nama Lengkap</label></td>
                                <td>
                                    <input type="text"
                                        class="form-control <?=($validation->hasError('nama')) ? 'is-invalid' : ''?>"
                                        name="nama" placeholder="isikan nama lengkap Anda" required
                                        value="<?=old('nama');?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('nama');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="kelas">Kelas</label></td>
                                <td>
                                    <input type="text"
                                        class="form-control <?=($validation->hasError('kelas')) ? 'is-invalid' : ''?>"
                                        name="kelas" placeholder="Isikan Kelas Anda" value="<?=old('kelas');?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('kelas');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="email">Email</label></td>
                                <td>

                                    <input type="email"
                                        class="form-control <?=($validation->hasError('email')) ? 'is-invalid' : ''?>"
                                        name="email" placeholder="Isikan e-mail STIS Anda" required
                                        value="<?=old('email');?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('email');?>
                                    </div>

                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="phone">No. HP</label></td>
                                <td>
                                    <input type="text"
                                        class="form-control <?=($validation->hasError('phone')) ? 'is-invalid' : ''?>"
                                        name="phone" placeholder="Isikan No. HP Anda" required
                                        value="<?=old('phone');?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('phone');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="alamat">Alamat</label></td>
                                <td>
                                    <input type="text"
                                        class="form-control <?=($validation->hasError('alamat')) ? 'is-invalid' : ''?>"
                                        name="alamat" placeholder="Isikan alamat Anda" required
                                        value="<?=old('alamat');?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('alamat');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="password">Password</label></td>
                                <td>
                                    <input type="password"
                                        class="form-control <?=($validation->hasError('password')) ? 'is-invalid' : ''?>"
                                        name="password" placeholder="Masukkan password" required>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('password');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                <td><label for="password">Konfirmasi Password</label></td>
                                <td>
                                    <input type="password"
                                        class="form-control <?=($validation->hasError('confirmpassword')) ? 'is-invalid' : ''?>"
                                        name="confirmpassword" placeholder="Masukkan ulang password" required>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?=$validation->getError('confirmpassword');?>
                                    </div>
                                </td>
                            </div>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="btn btn-class" id="regisbutton">Daftar</button></td>
                        </tr>
                    </table>
                    <div class="row px-4">
                        <p for="checkbox" class="form-check-label">Sudah punya akun? <span>
                                <a href="/">login sekarang</a>
                            </span></p>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

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
</body>

</html>
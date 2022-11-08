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
    <title>Login</title>

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark shadow-lg fixed-top py-md-3 px-md-3" id="mainnavbar">
            <div class="container">
                <a href="/home"><img class="logo" src="img/header logo.png" id="logo" alt="logo mydanus"></a>
            </div>
        </nav>
    </header>

    <section class="container">
        <div class="row content">
            <div class="col-md-6 mb-3 align-self-center">
                <img src="img/pict1.png" class="img-fluid">
            </div>
            <div class="col-md-6 loginlist">
                <?php if (session()->getFlashdata('pesan')): ?>
                <br>
                <div class="alert alert-<?=session()->getFlashdata('flag');?> mt-3" role="alert">
                    <?=session()->getFlashdata('pesan');?>
                </div>
                <?php endif;?>
                <h2 class="signin-text mb-5">Masuk</h2>
                <form action="<?= base_url('prelogin/login');?>" method="post">
                    <div class="form-group mb-0">
                        <select class="form-select" aria-label="Default example" name="role" required>
                            <option selected disabled value="">--- Pilih masuk sebagai ---</option>
                            <option value="pembeli">Pembeli</option>
                            <option value="penjual">Penjual</option>
                            <option value="pengawas">Pengawas</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group form-check">
                        <p for="checkbox" class="form-check-label">Belum ada akun? <span><a href="registration">daftar
                                    sekarang</a></span>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-class" id="loginbutton">Login</button>
                </form>
            </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
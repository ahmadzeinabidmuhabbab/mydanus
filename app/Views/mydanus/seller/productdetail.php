    <?= $this->extend('mydanus/seller/template'); ?>

    <?= $this->section('maincontent'); ?>

    <!--Produk-->
    <section id="product" class="peachgreen afternav">
        <div class="container py-5 ">
            <div class="row justify-content-between">
                <div class="col-md-6 picture">
                    <img src="img/sampel produk 2.png" id="mainpic" alt="">
                    <div class="thumbnail float-start mt-3">
                        <img src="img/sampel produk 2.png" class="mb-3 me-3 activepic" alt=""
                            onclick=" changeImage('0')">
                        <img src="img/sampel produk 1.png" class="mb-3 me-3" alt="" onclick=" changeImage('1')">
                        <img src="img/sampel produk 1.png" class="mb-3 me-3" alt="" onclick=" changeImage('2')">
                        <img src="img/sampel produk 2.png" class="mb-3 me-3" alt="" onclick=" changeImage('3')">
                        <img src="img/sampel produk 2.png" class="mb-3 me-3" alt="" onclick=" changeImage('4')">
                        <img src="img/sampel produk 1.png" class="mb-3 me-3" alt="" onclick=" changeImage('5')">
                    </div>
                </div>
                <div class="col-md-5 description">
                    <h2>Donat Hati untuk Menyemangati Kesayanganmu</h2>
                    <p><i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-fill gold"></i>
                        <i class="bi bi-star-half gold"></i>
                    </p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et, exercitationem. Quas temporibus
                        consequatur perspiciatis, aut rerum consequuntur veritatis nihil minus quae sed voluptatibus
                        aliquid ea nulla fugiat ducimus saepe quis praesentium quo modi ullam expedita non. Voluptatibus
                        nemo nihil, at iusto nesciunt error excepturi sed quas nobis nam, labore consequatur.</p>
                    <h6><i class="bi bi-exclamation-triangle-fill gold me-3"></i>Pre-Order</h6>
                    <h1 class="pt-3">Rp. 5000</h1>
                    <div class="d-flex align-items-end flex-column">
                        <form class="d-flex" role="">
                            <input class="form-control" type="text" aria-label="Search" value="(produK)" hidden>
                            <button class="btn btn-success btn-lg mt-auto" type="submit" onclick=""><a href="checkout">
                                    Beli Sekarang</a></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row seller rounded border border-secondary mt-md-5 mt-3">
                <div class="col-2 col-md-1 p-md-3 align-self-center text-center"><img class="rounded-circle"
                        src="img/default big profile icon.png" alt=""></div>
                <div class="col-7 col-md-9 p-md-3 align-self-center">
                    <h1>UKM Kewirausahaan</h1>
                </div>
                <div class="col-3 col-md-2 p-md-3 border-start border-secondary align-self-center text-center"><a
                        href="profiltoko">Kunjungi Toko</a></div>
            </div>
        </div>
    </section>

    <?= $this->endSection(); ?>
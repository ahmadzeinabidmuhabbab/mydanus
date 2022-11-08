<?= $this->extend('mydanus/seller/template'); ?>

<?= $this->section('maincontent'); ?>
<!--Title Checkout-->
<section id="titlecheckout" class="border-bottom border-dark">
    <div class="container py-1">
        <h4>Checkout</h4>
    </div>
</section>


<!--Checkout-->
<section id="checkout" class="peachbg pb-5">
    <div class="container">
        <form action="" method="" id="order">
            <div class="row boxform border border-secondary rounded mb-5 ">
                <div class="col-md-2 border border-dark p-0 ">
                    <img id="imgprod" src="img/sampel produk 2.png" alt="gambar produk">
                </div>
                <div class="col-md-10 p-3 border border-dark ">
                    <h4 id="">Snack for your luck</h4>
                    <h6><span id="variation">Variasi : </span></h6>
                    <h6> Rp.<span id="harga">9.000 </span></h6>
                    <input type="number" id="jumlahproduk" value="2">
                </div>
            </div>

            <div class="row boxform border border-secondary rounded mb-3 p-3">
                <div class="col-md-6">
                    <h4>Metode Pembayaran</h4>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-self-center">
                    <!--<h6>Silahkan pilih metode pembayaran</h6>
                    <a href="paymentmethod"><i class="bi bi-chevron-right ms-3"></i></a> -->
                    <select class="form-select" aria-label="method" id="method" required>
                        <option selected disabled>---Pilih metode pembayaran---</option>
                        <option value="COD">COD</option>
                        <option value="transfer">Transfer Bank/E-wallet</option>
                    </select>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 p-3">
                <div class="col-6">
                    <h4>Harga Total</h4>
                </div>
                <div class="col-6  d-flex justify-content-end">
                    <h4>RP.<span id="hargatotal">18.000</span></h4>
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 p-3">
                <div class="col-md-6">
                    <label for="address" class="form-label ">Alamat</label>
                    <input type="text" class="form-control border border-warning" id="address"
                        placeholder="Silahkan tuliskan alamat">
                </div>
                <div class="col-md-6">
                    <label for="message" class="form-label ">Pesan</label>
                    <input type="text" class="form-control border border-warning" id="message"
                        placeholder="Silahkan tinggalkan pesan">
                </div>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 p-3">
                <div class="row">
                    <div class="col-md-3 col-9">
                        <h6>Subtotal untuk produk :</h6>
                    </div>
                    <div class="col-md-5 col-3">Rp<span id="">9.000</span></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-9">
                        <h6>Subtotal untuk produk :</h6>
                    </div>
                    <div class="col-md-5 col-3"><span id="">2</span> Produk</div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-9">
                        <h6>Jumlah produk :</h6>
                    </div>
                    <div class="col-md-5 col-3">Rp<span id="">1.000</span></div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-9">
                        <h6>Total pembayaran :</h6>
                    </div>
                    <div class="col-md-5 col-3 fw-bold">Rp<span id="">19.000</span></div>
                </div>
            </div>
            <button type="submit" class="btn btn-success my-3 px-5 py-3"><a href="confirmation"> Buat
                    Pesanan</a></button>
        </form>
    </div>
</section>


<?= $this->endSection(); ?>
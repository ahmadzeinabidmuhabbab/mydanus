<?= $this->extend('mydanus/seller/template'); ?>

<?= $this->section('maincontent'); ?>
<!--Title Checkout-->
<section id="titlecheckout" class="border-bottom border-dark">
    <div class="container py-1">
        <h4><a href="checkout"><i class="bi bi-arrow-left me-3"></a></i>Konfirmasi Pembayaran</h4>
    </div>
</section>

<!-- payment method  -->
<section id="confirmation" class="peachbg pb-5">
    <div class="container">
        <form action="" method="" id="paymentConfirmation">
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
                <div class="row">
                    <strong>Lakukan pembayaran sesuai dengan nominal di atas!</strong>
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
                <label for="photo" class="form-label">Upload bukti pembayaran</label>
                <input class="form-control" type="file" id="photo" multiple>
            </div>
            <div class="row boxform border border-secondary rounded mb-3 p-3">
                <h4>Info pengirim</h4>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nama">Nama pengirim</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="nama"
                            placeholder="Nama pengirim di rekening">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="bank">Bank pengirim</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="bank"
                            placeholder="Nama bank pengirim">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="norek">No.Rekening pengirim</label>
                    </div>
                    <div class="col-md-9">
                        <input type="text" class="form-control border border-warning" id="norek"
                            placeholder="Nomor rekening pengirim">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="nominal">Nominal transfer (Rp)</label>
                    </div>
                    <div class="col-md-9">
                        <input type="number" class="form-control border border-warning" id="norek"
                            placeholder="Nominal yang ditransfer pengirim">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success my-3 px-5 py-3"><a href="myorder">Kirimkan</a></button>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>
<?= $this->extend('mydanus/seller/template'); ?>

<?= $this->section('maincontent'); ?>
<!--Title Checkout-->
<section id="titlecheckout" class="border-bottom border-dark">
    <div class="container py-1">
        <h4><a href="checkout"><i class="bi bi-arrow-left me-3"></a></i>Metode Pembayaran</h4>
    </div>
</section>

<!-- payment method  -->
<section id="paymentmethod" class="peachbg pb-5">
    <div class="container">
        <form action="" method="" id="method">
            <div class="row boxform border border-secondary rounded mb-4 p-3">
                <h5><i class="bi bi-cash-coin me-3"></i>COD (Bayar di Tempat)</h5>
            </div>
            <div class="row boxform border border-secondary rounded p-3 mb-2"><img src="" alt="">
                <div class="col-md-6">
                    <h5><i class="bi bi-credit-card me-3"></i>Transfer Bank</h5>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-self-center">
                    <h6>Silahkan pilih metode pembayaran</h6>
                    <button type="button" onclick="" class="btn btn-light"><i
                            class="bi bi-chevron-right ms-3"></i></button>

                </div>
            </div>
            <div class="emoney">
                <div class="row boxform border border-secondary rounded p-3">
                    <img src="img/ovo icon.png" alt="ovo" class="me-3">OVO
                </div>
                <div class="row boxform border border-secondary rounded p-3">
                    <img src="img/ovo icon.png" alt="ovo" class="me-3">OVO
                </div>
                <div class="row boxform border border-secondary rounded p-3">
                    <img src="img/ovo icon.png" alt="ovo" class="me-3">OVO
                </div>

            </div>
            <div class="mb-5"></div>
            <button type="submit" class="btn btn-success my-3 px-5 py-3">Konfirmasi</button>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>
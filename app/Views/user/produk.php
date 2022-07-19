<?= $this->extend('template/navbar_user'); ?>
<?= $this->section('content'); ?>

<div class="landing-page">
    <h2 class="welcome">PRODUK KAMI</h2>
</div>

<div class="mt-4 mb-4">
    <h1 class="headline">PRODUK KAMI</h1>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/website2.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Jasa Pembuatan Website</h3>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>


            </div>
            <div class="lengkap mb-2 mx-2">
                <a href="/elecomp/tentang" class="btn btn-danger mt-4" role="button">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/android.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Jasa Pembuatan Aplikasi</h3>
                <p class="card-text">This is a short card.</p>
            </div>
            <div class="lengkap mb-2 mx-2">
                <a href="/elecomp/tentang" class="btn btn-danger mt-4" role="button">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/corel.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title">Jasa Desain</h3>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia laborum porro asperiores dicta exercitationem quidem, officia vitae impedit
                    quam qui architecto harum! Ipsum quia repudiandae, a esse fugit quas ea.</p>
            </div>
            <div class="lengkap mb-2 mx-2">
                <a href="/elecomp/tentang" class="btn btn-danger mt-4" role="button">Baca Selengkapnya</a>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>
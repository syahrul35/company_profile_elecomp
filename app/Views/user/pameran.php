<?= $this->extend('template/navbar_user'); ?>
<?= $this->section('content'); ?>

<div class="landing-page">
    <h2 class="welcome">PAMERAN</h2>
</div>

<div class="mt-4 mb-4">
    <h1 class="headline">PAMERAN</h1>
</div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/website2.png" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/android.png" class="card-img-top" alt="...">

        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/corel.png" class="card-img-top" alt="...">
        </div>
    </div>
    <div class="col">
        <div class="card h-100">
            <img src="/assets/images/website.png" class="card-img-top" alt="...">
        </div>
    </div>

</div>


<?= $this->endSection(); ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-16">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-50" src="/file/post/<?= $beranda['img']; ?>">
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <a class="alert alert-warning" role="alert"><?= $beranda['kategori'] ?></a>
                            <a class="alert alert-success fas fa-edit"><?= $beranda['created_at'] ?></a>
                            <a class="alert alert-info">
                                <img class="rounded-circle mr-2" src="/img/writer.png" width="25" height="25" alt="">
                                <span><?= $beranda['author'] ?></span>
                            </a>
                        </div>
                        <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $beranda['judul'] ?></h1>
                        <p><?= $beranda['artikel'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<?= $this->endSection(); ?>
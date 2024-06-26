<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php
if (count($berita) > 0) {
    foreach ($berita as $data) :
?>
        <div class="col-md-4 col-xs-1 mt-4">
            <h3 class="text-primary" style="height: 100px;"><?= $data['judul']; ?></h3>
            <img src="/file/post/<?= $data['img']; ?>" alt="" class="img-thumbnail">
            <div>
                <i class="ion-calendar">&nbsp; <?= $data['created_at']; ?> &nbsp; / &nbsp;</i>
                <i class="ion-person">&nbsp; <?= $data['author']; ?></i>
            </div>
            <a href="/home/detail/<?= $data['slug'] ?>" class="btn btn-primary">Baca Selengkapnya</a>
        </div>

<?php endforeach;
} else {
    echo "Tidak Ada Data";
}
?>
<?= \Config\Services::pager()->makeLinks($page, $perPage, $total, 'pagersaya') ?>

<?= $this->endSection(); ?>
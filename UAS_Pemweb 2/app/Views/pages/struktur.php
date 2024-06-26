<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h4>Peraturan Daerah</h4>
<?php foreach ($struktur as $data) : ?>
<embed type="application/pdf" src="/file/pdf/struktur/<?= $data['pdf'] ?>" style="width: 100%; height: 100vh;"></embed>
<?php endforeach; ?>
<?= $this->endSection(); ?>
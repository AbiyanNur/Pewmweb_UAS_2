<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h4>About Us</h4>
<p class="text-center">
    <?php foreach ($about as $data) : ?>
        <?= $data['artikel'] ?>
    <?php endforeach; ?>
</p>
<?= $this->endSection(); ?>
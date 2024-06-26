<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<h4>Gallery</h4>
<div class="row text-center">
	<?php foreach ($galeri as $data) : ?>
		<div class="col-md-4 col-xs-12 mt-3">
			<a href="/file/img/<?= $data['img'] ?>" target="_blank" title="<?= $data['nama'] ?>">
				<img src="/file/img/<?= $data['img'] ?>" alt="" class="img-thumbnail">

				<p><?= $data['nama'] ?></p>
			</a>
		</div>
	<?php endforeach; ?>
</div>
<?= \Config\Services::pager()->makeLinks($page, $perPage, $total, 'pagersaya') ?>

<?= $this->endSection(); ?>
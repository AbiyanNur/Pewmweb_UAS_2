<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header ui-sortable-handle">
				<h3 class="card-title">
					<?php if (session()->getFlashdata('warning')) : ?>
						<button type="button" class="btn btn-success btn-block btn-flat"><i class="fa fa-check"></i> <?= session()->getFlashdata('warning'); ?></button>
					<?php endif; ?>
				</h3>
				<div class="card-tools">
				</div>
				<!-- <a href="/admin/add_beranda" type="button" class="btn btn-block bg-gradient-primary">Tambah Beranda</a> -->
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr class="text-center">
						<th>#</th>
						<th>Artikel</th>
						<th>Date</th>
						<th>Aksi</th>
					</tr>
					<?php $no = 1;
					foreach ($about as $data) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $data['artikel'] ?></td>
							<td><?= $data['created_at'] ?></td>
							<td class="text-center">
								<a href="/admin/edit_about/<?= $data['id'] ?>" class="btn btn-warning text-white">
									<i class="fas fa-edit"></i>
								</a>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>
<?= $this->endSection(); ?>
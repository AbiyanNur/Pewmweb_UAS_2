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
			</div>
			<div class="card-body">
				<table class="table table-responsive">
					<tr class="text-center">
						<th>#</th>
						<th>Alamat</th>
						<th>Telpon</th>
						<th>Email</th>
						<th>Kisi-kisi</th>
						<th>Aksi</th>
					</tr>
					<?php $no = 1;
					foreach ($seting as $data) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><?= $data['alamat'] ?></td>
							<td><?= $data['tlp'] ?></td>
							<td><?= $data['email'] ?></td>
							<td><?= $data['kisikisi'] ?></td>
							<td class="text-center">
								<a href="/admin/edit_setting/<?= $data['id_set'] ?>" class="btn btn-warning text-white">
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
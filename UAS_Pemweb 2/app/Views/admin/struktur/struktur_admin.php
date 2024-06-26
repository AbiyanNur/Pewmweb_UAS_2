<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="card">
	<div class="card">
		<div class="card-header ui-sortable-handle">
			<h3 class="card-title">
				<?php if (session()->getFlashdata('warning')) : ?>
					<button type="button" class="btn btn-success btn-block btn-flat"><i class="fa fa-check"></i> <?= session()->getFlashdata('warning'); ?></button>
				<?php endif; ?>
			</h3>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			if (count($struktur) > 0) {
			?>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width='1%'>#</th>
							<th>Judul</th>
							<th width='15%'>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($struktur as $data) : ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><?= $data['pdf'] ?></td>
								<td class="text-center">
									<a href="/admin/edit_struktur/<?= $data['id'] ?>" class="btn btn-warning text-white">
										<i class="fas fa-edit"></i>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>

				</table>
			<?php
			} else {
			?>
				<p class="text-muted">Data Belum Ada..!!!!</p>
			<?php
			}
			?>
		</div>
		<!-- /.card-body -->
	</div>

	<?= $this->endSection(); ?>
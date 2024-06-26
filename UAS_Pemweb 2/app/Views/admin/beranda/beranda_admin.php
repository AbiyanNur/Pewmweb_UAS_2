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
			<div class="card-tools">
				<ul class="nav nav-pills ml-auto">
					<li class="nav-item">
						<a href="/admin/add_beranda" type="button" class="nav-link active">Tambah Beranda</a>
					</li>
				</ul>
			</div>
			<!-- <a href="/admin/add_beranda" type="button" class="btn btn-block bg-gradient-primary">Tambah Beranda</a> -->
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<?php
			if (count($beranda) > 0) {
			?>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width='1%'>#</th>
							<th>Judul</th>
							<th width='10%'>Date</th>
							<th>Kategori</th>
							<th width='15%'>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($beranda as $data) : ?>
							<tr>
								<td><?= $no++; ?></td>
								<td><a href="/home/detail/<?= $data['slug'] ?>" target="_blank"><?= $data['judul'] ?></a></td>
								<td><?= $data['created_at'] ?></td>
								<td><?= $data['kategori'] ?></td>
								<td class="text-center">
									<a href="/admin/edit_beranda/<?= $data['id_post'] ?>" class="btn btn-warning text-white">
										<i class="fas fa-edit"></i>
									</a>
									<?php
									if ($session->get('user_level') == 'Admin') {
									?>
										<form class="d-inline" action="/admin/beranda/<?= $data['id_post'] ?>" method="post">
											<?= csrf_field() ?>
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin.??')">Delete</button>
										</form>
									<?php } ?>
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
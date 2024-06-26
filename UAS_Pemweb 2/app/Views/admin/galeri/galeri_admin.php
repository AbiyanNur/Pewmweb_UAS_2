<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="card">
	<div class="card-header ui-sortable-handle">
		<h3 class="card-title">
			<?php if (session()->getFlashdata('warning')) : ?>
				<button type="button" class="btn btn-success btn-block btn-flat"><i class="fa fa-check"></i> <?= session()->getFlashdata('warning'); ?></button>
			<?php endif; ?>
		</h3>
		<div class="card-tools">
			<ul class="nav nav-pills ml-auto">
				<!-- <li class="nav-item">
						<a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
					</li> -->
				<li class="nav-item">
					<a href="/admin/add_galeri" type="button" class="nav-link active">Tambah Gambar</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<?php
		if (count($galeri) > 0) {
		?>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th width='1%'>#</th>
						<th>Nama</th>
						<th>Gambar</th>
						<th width='15%'>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($galeri as $data) : ?>
						<tr>
							<td><?= $no++; ?></td>
							<td><a href="/file/img/<?= $data['img'] ?>" target="_blank"><?= $data['nama'] ?></a></td>
							<td><img src="/file/img/<?= $data['img'] ?>" width="180" height="150"> </td>
							<td class="text-center">
								<form class="d-inline" action="/admin/galeri/<?= $data['id_img'] ?>" method="post">
									<?= csrf_field() ?>
									<input type="hidden" name="_method" value="DELETE">
									<button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin.??')">Delete</button>
								</form>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th width='1%'>#</th>
						<th>Nama</th>
						<th>Gamabar</th>
						<th width='15%'>Aksi</th>
					</tr>
				</tfoot>
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
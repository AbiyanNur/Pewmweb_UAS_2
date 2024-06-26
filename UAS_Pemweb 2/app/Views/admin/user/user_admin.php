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
                <li class="nav-item">
                    <a href="/admin/add_user" type="button" class="nav-link active">Tambah User</a>
                </li>
            </ul>
        </div>
        <!-- <a href="/admin/add_beranda" type="button" class="btn btn-block bg-gradient-primary">Tambah Beranda</a> -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Usernam</th>
                    <th>Nama</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($user as $data) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $data['username'] ?></td>
                        <td><?= $data['nama_pengguna'] ?></td>
                        <td class="text-center">
                            <img src="/file/user/<?= $data['img'] ?>" width="80" height="50">
                        </td>
                        <td class="text-center">
                            <a href="/admin/edit_user/<?= $data['id_user'] ?>" class="btn btn-warning text-white">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form class="d-inline" action="/admin/user/<?= $data['id_user'] ?>" method="post">
                                <?= csrf_field() ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin.??')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <!-- <tfoot>
                <tr>
                    <th width='1%'>#</th>
                    <th>Judul</th>
                    <th>Nama</th>
                    <th width='10%'>Foto</th>
                    <th width='15%'>Aksi</th>
                </tr>
            </tfoot> -->
        </table>
    </div>
    <!-- /.card-body -->
</div>

<?= $this->endSection(); ?>
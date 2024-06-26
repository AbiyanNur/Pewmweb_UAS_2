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
                        <a href="/admin/add_kategori" type="button" class="nav-link active">Tambah Kategori</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (count($kategori) > 0) {
            ?>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width='1%'>#</th>
                            <th>Kategori</th>
                            <th width='15%'>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kategori as $data) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['value'] ?></td>
                                <td class="text-center">
                                    <form class="d-inline" action="/admin/kategori/<?= $data['id_kat'] ?>" method="post">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin.??')">Delete</button>
                                    </form>
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
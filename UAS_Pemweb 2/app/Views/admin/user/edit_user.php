<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <!-- <h5><?= $menu; ?></h5> -->
                <!-- Horizontal Form -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"><?= $menu; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/update_user/<?= $user['id_user'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input value="<?= $user['nama_pengguna'] ?>" type="text" class="form-control" id="nama" name="nama" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-2 col-form-label">username</label>
                                <div class="col-sm-10">
                                    <input type="text" value="<?= $user['username'] ?>" class="form-control" id="username" name="username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-2 col-form-label">password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" minlength="8">
                                </div>
                            </div>
                            <?php
                            if ($session->get('user_level') == 'Admin') {
                            ?>
                                <div class="form-group row">
                                    <label for="level" class="col-sm-2 col-form-label">level</label>
                                    <div class="col-sm-10">
                                        <select name="level" class="form-control" required>
                                            <option value="">-- level --</option>
                                            <?php
                                            foreach ($level as $data) : ?>
                                                <option value="<?= $data['id_lvuser'] ?>"><?= $data['leveluser'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="form-group row">
                                <label for="img" class="col-sm-2 col-form-label">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="img" name="img">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <!-- <h5><?= $menu; ?></h5> -->
                <!-- Horizontal Form -->
                <div class="card card-primary">
                    <?php $validation = \Config\Services::validation(); ?>
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Setting</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/update_setting/<?= $seting['id_set'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= $validation->hasError('alamat') ? 'is-invalid' : ''; ?>" id="alamat" name="alamat" value="<?= $seting['alamat'] ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tlp" class="col-sm-2 col-form-label">tlp</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= $validation->hasError('tlp') ? 'is-invalid' : ''; ?>" id="tlp" name="tlp" value="<?= $seting['tlp'] ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= $validation->hasError('email') ? 'is-invalid' : ''; ?>" id="email" name="email" value="<?= $seting['email'] ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kisikisi" class="col-sm-2 col-form-label">kisikisi</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="kisikisi" rows="4" cols="50" required>
                                        <?= $seting['kisikisi'] ?>
                                    </textarea>
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
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
                        <h3 class="card-title"><?= $menu; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/save_kategori" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= $validation->hasError('kategori') ? 'is-invalid' : ''; ?>" id="kategori" name="kategori" autofocus require>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('kategori'); ?>
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
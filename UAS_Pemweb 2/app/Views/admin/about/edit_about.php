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
                        <h3 class="card-title">Form Edit <?= $menu ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/update_about/<?= $about['id'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="artikel" class="col-sm-2 col-form-label">Artikel</label>
                            <div class="col-sm-10">
                                <textarea id="summernote" name="artikel" rows="4" cols="50" required>
                                        <?= $about['artikel'] ?>
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
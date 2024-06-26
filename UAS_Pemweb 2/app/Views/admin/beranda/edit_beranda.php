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
                        <h3 class="card-title">Form Edit Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/update_beranda/<?= $beranda['id_post'] ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" value="<?= $session->get('user_name') ?>" name="author">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= $validation->hasError('judul') ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= $beranda['judul'] ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('judul'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select name="kategori" class="form-control" required>
                                        <option value="<?= $beranda['kategori'] ?>"><?= $beranda['kategori'] ?></option>
                                        <option value="Informasi Umum">Informasi Umum</option>
                                        <option value="Berita">Berita</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-sm-2 col-form-label">Gambar Utama</label>
                                <div class="col-sm-10">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= $validation->hasError('img') ? 'is-invalid' : ''; ?>" id="img" name="img">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('img'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artikel" class="col-sm-2 col-form-label">Artikel</label>
                                <div class="col-sm-10">
                                    <textarea id="summernote" name="artikel" rows="4" cols="50" required>
                                        <?= $beranda['artikel'] ?>
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
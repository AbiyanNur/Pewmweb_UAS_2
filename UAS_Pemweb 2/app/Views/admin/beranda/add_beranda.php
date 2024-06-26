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
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4>Periksa Entrian Form</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="card-header">
                        <h3 class="card-title"><?= $menu; ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" action="/admin/save_beranda" method="post" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" value="<?= $session->get('user_name') ?>" name="author">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control <?= session()->getFlashdata('error') ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul') ?>" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select name="kategori" class="form-control <?= session()->getFlashdata('error') ? 'is-invalid' : ''; ?>">
                                        <option value="">-- Kategori --</option>
                                        <?php
                                        foreach ($kategori as $data) : ?>
                                            <option value="<?= $data['value'] ?>"><?= $data['value'] ?></option>
                                            <!-- <option value="Berita">Berita</option> -->
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-sm-2 col-form-label">Gambar Utama</label>
                                <div class="col-sm-10">
                                    <div class="custom-file ">
                                        <input type="file" class="custom-file-input <?= session()->getFlashdata('error') ? 'is-invalid' : ''; ?>" id="img" name="img">
                                        <label class="custom-file-label" for="customFile">Pilih Gambar</label><i>Type file (Jpg,Jpeg, PNG & WEBP) & Gambar max 1Mb</i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artikel" class="col-sm-2 col-form-label">Artikel</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control <?= session()->getFlashdata('error') ? 'is-invalid' : ''; ?>" id="summernote" name="artikel">
<?= old('artikel') ?>
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
<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?= $Jum_post; ?></h3>

            <p>Jumpal Postingan</p>
          </div>
          <div class="icon">
            <i class="ion ion-pin"></i>
          </div>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <?php
      if ($session->get('user_level') == 'Admin') {
      ?>
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $Jum_user; ?></h3>

              <p>User's </p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $Jum_gal; ?></h3>

              <p>Gambar</p>
            </div>
            <div class="icon">
              <i class="ion ion-image"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      <?php
      }
      ?>
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  <div class="col-lg-12">
    <div class="card">
      <div class="small-box bg-primary text-center">
        <h5>Selamat Datang ! <?= $session->get('user_name') ?></h5>
      </div>
      <div class="card-body">
        <p class="text-center">
          Selamat Beraktifitas & Semoga Harimu Menyenangkan
        </p>
      </div>
    </div>
  </div>
</section>
<?= $this->endSection(); ?>
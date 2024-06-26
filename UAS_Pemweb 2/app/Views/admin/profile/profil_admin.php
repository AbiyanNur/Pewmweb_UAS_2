<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-body box-profile">
        <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="/file/user/<?= $session->get('user_img') ?>" alt="User profile picture">
        </div>

        <h3 class="profile-username text-center"><?= $session->get('user_name') ?></h3>

        <!-- <p class="text-muted text-center">Software Engineer</p> -->

        <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
                <b>Email</b> <a class="float-right"><?= $session->get('user_email') ?></a>
            </li>
            <li class="list-group-item">
                <b>Nama</b> <a class="float-right"><?= $session->get('user_name') ?></a>
            </li>
            <li class="list-group-item">
                <b>Level User</b> <a class="float-right"><?= $session->get('user_level') ?></a>
            </li>
        </ul>

        <a href="/admin/edit_user/<?= $session->get('user_id') ?>" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
    </div>
    <!-- /.card-body -->
</div>

<?= $this->endSection(); ?>
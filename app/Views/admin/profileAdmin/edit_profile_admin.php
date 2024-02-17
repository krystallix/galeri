<?= $this->extend('layout/admin/header'); ?>

<?= $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="/admin/profile">My Profile</a></li>
                        <li class="breadcrumb-item active">Edit Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="edit-profile-admin  card">
                        <div class="card-header">
                            Form Edit Profile
                            <div class="float-right">
                                <a href="/my-profile" class="btn btn-warning btn-sm"><i class="bi bi-arrow-left-short"></i> Back</a>
                            </div>
                        </div>
                        <!-- <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div> -->

                        <form action="" method="post">
                            <div class="card-body">
                                <!-- <h5 class="card-title">Special title treatment</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> -->

                                <div class="foto-profile form-group">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/2.jpg" class="img-preview card-img" alt="gambar" height="100%">
                                    <label for="foto">
                                        <div class="ganti-foto">
                                            <span aria-hidden="true" class="ganti">Ganti Foto</span>
                                        </div>
                                        <input type="file" id="foto" style="display:none" onchange="previewImg()" accept="image/*">
                                    </label>
                                </div>
                                <div class="input-profile form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" class="form-control" id="namaLengkap" name="nama_lengkap" placeholder="Masukkan nama lengkap">
                                </div>
                                <div class="input-profile form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" id="userName" name="username" placeholder="Masukkan username">
                                </div>
                                <div class="input-profile form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control" id="deskripsiProfile" name="deskripsi_profile" cols="30" rows="4" placeholder="Masukkan deskripsi profile"></textarea>
                                </div>
                                <div class="input-profile form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan email">
                                </div>
                                <div class="input-profile form-group">
                                    <label>Password</label>
                                    <div class="input-password">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
                                        <div class="icon-eye">
                                            <i class="bi bi-eye-slash h5" id="togglePassword"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <button type="reset" class="btn btn-secondary">Reset</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>
<?= $this->extend('layout/admin/header'); ?>

<?= $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard v2</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v2</li>
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
                <div class="col-md-6">
                    <div class="tambah_foto_admin card">
                        <div class="card-header">
                            Form Edit Foto
                            <div class="float-right">
                                <a href="/my-profile" class="btn btn-warning btn-sm"><i class="bi bi-arrow-left-short"></i> Back</a>
                            </div>
                        </div>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="preview-foto">
                                            <img src="<?php echo base_url('assets') ?>/img/gallery/2.jpg" class="img-preview card-img" alt="gambar" height="100%">
                                        </div>
                                        <!-- <div>
                                            <input type="file" class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <div class="foto form-group">
                                                <label>Foto</label>
                                                <div>
                                                    <input type="file" class="form-control" id="foto" name="foto" onchange="previewImg()" accept="image/*" style="height:100%;">
                                                </div>
                                            </div>
                                            <div class="judul form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul_foto" placeholder="Masukkan judul foto">
                                            </div>
                                            <div class="deskripsi form-group">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" cols="30" rows="6" placeholder="Masukkan deskripsi foto"></textarea>
                                            </div>
                                            <div>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card-footer text-body-secondary">
                                <button type="submit" class="btn btn-primary">Post</button>
                            </div> -->
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
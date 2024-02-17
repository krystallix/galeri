<?= $this->extend('layout/admin/header'); ?>

<?= $this->section('content'); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">My Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="col-md-12 mx-auto">

                <div class="profile-admin card card-widget widget-user shadow">

                    <div class="widget-user-header">
                        <div class="widget-user-username">Alexander Pierce</div>
                        <div class="widget-user-desc">Admin</div>
                    </div>
                    <div class="widget-user-image">
                        <img class="img-circle elevation-2" src="<?php echo base_url('assets') ?>/dist/img/user1-128x128.jpg" alt="User Avatar">
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center">
                            <div class="username-admin">
                                username
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="deskripsi-admin">
                                ini deskripsi profile
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="button-edit-profile">
                                <a href="/admin/editProfile" class="btn btn-warning">Edit Profile</a>
                                <!-- <button type="button" class="btn btn-warning">Edit Profile</button> -->
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">3,200</h5>
                                    <span class="description-text">SALES</span>
                                </div>

                            </div>

                            <div class="col-sm-4 border-right">
                                <div class="description-block">
                                    <h5 class="description-header">13,000</h5>
                                    <span class="description-text">FOLLOWERS</span>
                                </div>

                            </div>

                            <div class="col-sm-4">
                                <div class="description-block">
                                    <h5 class="description-header">35</h5>
                                    <span class="description-text">PRODUCTS</span>
                                </div>

                            </div>

                        </div> -->

                    </div>
                </div>

            </div>

            <div class="garis"></div>

            <main id="main" data-aos="fade" data-aos-delay="1500">

                <!-- ======= Gallery Section ======= -->
                <section id="gallery" class="gallery">
                    <div class="container-fluid">

                        <div class="induk row gy-4">
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/2.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="/admin/detail" title="Detail" class="preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <form action="" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn-hapus-foto preview-link" title="Hapus" onclick="return confirm('Apakah Anda yakin hapus?');"><i class="bi bi-trash3-fill h3"></i></button>
                                        </form>
                                        <a href="/admin/edit" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                                        <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-2.jpg" title="Gallery 2" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-3.jpg" title="Gallery 3" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-4.jpg" title="Gallery 4" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-5.jpg" title="Gallery 5" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-6.jpg" title="Gallery 6" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-7.jpg" title="Gallery 7" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-8.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-8.jpg" title="Gallery 8" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-9.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-9.jpg" title="Gallery 9" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-10.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-10.jpg" title="Gallery 10" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-11.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-11.jpg" title="Gallery 11" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-12.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-12.jpg" title="Gallery 12" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-13.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-13.jpg" title="Gallery 13" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-14.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-14.jpg" title="Gallery 14" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-15.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-15.jpg" title="Gallery 15" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->
                            <div class="gambar col-xl-3 col-lg-4 col-md-6">
                                <div class="gallery-item h-100">
                                    <img src="<?php echo base_url('assets') ?>/img/gallery/gallery-16.jpg" class="img-fluid" alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="<?php echo base_url('assets') ?>/img/gallery/gallery-16.jpg" title="Gallery 16" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                    </div>
                                </div>
                            </div><!-- End Gallery Item -->

                        </div>

                    </div>
                </section><!-- End Gallery Section -->

            </main><!-- End #main -->

        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection(); ?>
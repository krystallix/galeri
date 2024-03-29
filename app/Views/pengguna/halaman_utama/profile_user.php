<?= $this->extend('layout/pengguna/header'); ?>

<?= $this->section('content_pengguna'); ?>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <img src="assets/img/gallery/gallery-2.jpg" alt="">
                <h2>Ini Nama Lengkap</h2>
                <p class="username">ini username</p>
                <p class="deskripsi-profile">ini deskripsi profile</p>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<div class="garis"></div>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery-myprofile">
        <div class="container-fluid">

            <div class="induk row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="/detail" title="Detail" class="preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item">
                        <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-2.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-3.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-4.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-5.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-6.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="gallery-item h-100">
                        <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-7.jpg" title="Hapus" class="glightbox preview-link"><i class="bi bi-trash3-fill h3"></i></a>
                            <a href="gallery-single.html" title="Edit" class="details-link"><i class="bi bi-pencil-fill"></i></a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

            </div>

        </div>
    </section><!-- End Gallery Section -->

</main><!-- End #main -->

<?= $this->endSection(); ?>
<!-- ======= Hero Section ======= -->
<!-- <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 text-center">
<h2>I'm <span>Jenny Wilson</span> a Professional Photographer from New York City</h2>
<p>Blanditiis praesentium aliquam illum tempore incidunt debitis dolorem magni est deserunt sed qui libero. Qui voluptas amet.</p>
<a href="contact.html" class="btn-get-started">Available for hire</a>
</div>
</div>
</div>
</section> -->
<!-- End Hero Section -->

<?= $this->extend('layout/pengguna/header'); ?>

<?= $this->section('content_pengguna'); ?>

<!-- Modal -->
<div class="modal fade" id="ModalPhoto" tabindex="-1" role="dialog" aria-labelledby="ModalPhotoTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card-detail card">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="container">
                            <div class="blur">
                                <img id="img-blur" src=""
                                    class="card-img" alt="gambar" height="100%">
                            </div>
                            <div class="foto">
                                <img id="img-main" src=""
                                    class="card-img" alt="gambar" height="100%">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="profile-pengguna" >
                                <a href="/profile-user">
                                    <img src="<?php echo base_url('assets') ?>/img/profile/defaultProfile.jpg"
                                        alt="">
                                    <span class="username-pengguna" id="profile-modal">
                                    </span>
                                </a>
                                <span id="close-modal" class="float-end"><i class="bi bi-x-octagon h5"></i></span>
                            </div>
                            <div class="deskripsi">
                                <div class="judul-foto" id="judul-foto-modal">
                                   
                                </div>
                                <div class="deskripsi-foto"  id="deskripsi-foto-modal">
                                </div>
                            </div>
                            <hr>
                            <?php
                                $user_id = userProfileLogin()->user_id;
                                ?>
                            <div class="aksi">
                                <div class="like">
                                    <button type="button" class="btn-sm btn-like" id="likeBtn">
                                    <form id="likes-form" method="post">                                                
                                            <input type="hidden" class="photo-data" name="id_photo" value="">
                                            <input type="hidden" id="user-data" name="user_id" value="<?= $user_id; ?>">

                                        </form>
                                        <div class="icon-like">
                                            <i id="icon-like-status" class="bi bi-heart h5"></i>
                                        </div>
                                    </button>
                                  
                                    
                              
                                <div class="jumlah-like" id="total-like" >
                                      
                                    </div>
                                </div>
                                <div class="share">
                                    <button type="button" class="btn-sm btn-share" id="copyBtn">
                                        <div class="icon-share" photo-data="">
                                            <i class="bi bi-share-fill h5"></i>
                                        </div>
                                    </button>
                                    
                                    <div class="text-share">
                                        Share
                                    </div>
                                </div>

                                <div class="copied" id="copied">
                                    Link tersalin!
                                </div>
                            </div>
                            <hr>
                            <div class="comment">
                                <div class="comment-output" id="comment-section" >
                                    
                                </div>
                               
                            </div>
                            <div class="input-comment">
                                <hr>
                                <div class="comment-profile">
                                    <img id="img-comment-profile" src=""
                                        alt="">
                                </div>
                                <div class="add-comment">
                                    <form method="post" id="add-comment-form">
                                        <?= csrf_field(); ?>
                                        <div class="form-group">
                                        <input type="hidden" class="photo-data" name="id_photo" value="">
                                            <input type="hidden" id="user-data" name="user_id" value="<?= $user_id; ?>">
                                            <input
                                                class="form-control"
                                                id="comment" name="comment" type="text" placeholder="Tambahkan komentar"
                                                value="">
                                            <button type="submit" class="btn-send"><i
                                                    class="icon-send bi bi-send-fill h4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">

            <div class="galeri-main gy-4">
                <div class="galeri-col">
                    <?php
            foreach ($foto as $f) : ?>
                    <div class="gallery-item" data-id="<?= $f->id_photo; ?>">
                        <img src="assets/img/gallery/<?= $f->photo; ?>" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="#" title="Detail" class="preview-link"><i
                                    class="bi bi-arrows-angle-expand"></i></a>
                            <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="galeri-col">
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="/detail" title="Detail" class="preview-link"><i
                                    class="bi bi-arrows-angle-expand"></i></a>
                            <!-- <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-2.jpg" title="Gallery 2"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-3.jpg" title="Gallery 3"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-4.jpg" title="Gallery 4"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-5.jpg" title="Gallery 5"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>

                <div class="galeri-col">
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-6.jpg" title="Gallery 6"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-7.jpg" title="Gallery 7"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-8.jpg" title="Gallery 8"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-9.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-9.jpg" title="Gallery 9"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-10.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-10.jpg" title="Gallery 10"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>

                <div class="galeri-col">
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-11.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-11.jpg" title="Gallery 11"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-12.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-12.jpg" title="Gallery 12"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-13.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-13.jpg" title="Gallery 13"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-14.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-14.jpg" title="Gallery 14"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-15.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-15.jpg" title="Gallery 15"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                    <div class="gallery-item ">
                        <img src="assets/img/gallery/gallery-16.jpg" class="img-fluid" alt="">
                        <div class="gallery-links d-flex align-items-center justify-content-center">
                            <a href="assets/img/gallery/gallery-16.jpg" title="Gallery 16"
                                class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                            <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div><!-- End Gallery Item -->
                </div>


            </div>

        </div>
    </section><!-- End Gallery Section -->

</main><!-- End #main -->



<?= $this->endSection(); ?>
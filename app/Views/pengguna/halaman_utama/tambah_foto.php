<main id="main" data-aos="fade" data-aos-delay="1500">

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="tambah card">
                        <div class="card-header">
                            Form Tambah Foto
                        </div>
                        <form action="" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div>
                                            <img src="assets/img/gallery/2.jpg" class="img-preview card-img" alt="gambar" height="100%">
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
                                                    <input type="file" class="form-control" id="foto" name="foto" onchange="previewImg()">
                                                </div>
                                            </div>
                                            <div class="judul form-group">
                                                <label>Judul</label>
                                                <input type="text" class="form-control" id="judul" name="judul_foto" placeholder="Masukkan judul foto">
                                            </div>
                                            <div class="deskripsi form-group">
                                                <label>Deskripsi</label>
                                                <textarea class="form-control" id="deskripsi" cols="30" rows="10" placeholder="Masukkan deskripsi foto"></textarea>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Post</button>
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
        </div>
    </section><!-- End Gallery Section -->

</main><!-- End #main -->
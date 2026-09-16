<?= $this->extend('frontend/layout/template') ?>
<?= $this->section('content') ?>
<!-- Hero Start -->
<div id="header-carousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img
                class="w-100"
                src="<?= base_url('assets/img/CB6.jpg') ?>"
                alt="Dewangga Gym"
            >

            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                <div class="title mx-5 px-5 animated slideInDown">
                    <div class="title-center">
                        <h5>Selamat Datang di Dewangga Gym</h5>
                        <h1 class="display-2">
                            Sistem Rekomendasi Latihan Fitness untuk Pemula
                        </h1>
                    </div>
                </div>

                <p class="fs-5 mb-5 animated slideInDown">
                    Mulailah perjalanan hidup sehat Anda bersama Dewangga Gym.
                    Dapatkan rekomendasi latihan yang sesuai dengan tujuan,
                    kemampuan, dan tingkat kebugaran Anda.
                </p>

                <a href="<?= base_url('login') ?>" class="btn btn-outline-primary border-2 py-3 px-5 animated slideInDown">
                    Mulai Sekarang
                </a>

            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">

            <img
                class="w-100"
                src="<?= base_url('assets/img/CB.webp') ?>"
                alt="Fitness Training"
            >

            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                <div class="title mx-5 px-5 animated slideInDown">
                    <div class="title-center">
                        <h5>Latihan Lebih Efektif</h5>
                        <h1 class="display-2">
                            Program Latihan yang Tepat untuk Anda
                        </h1>
                    </div>
                </div>

                <p class="fs-5 mb-5 animated slideInDown">
                    Sistem kami membantu pemula memilih latihan fitness yang
                    tepat berdasarkan tujuan latihan, sehingga proses latihan
                    menjadi lebih aman, terarah, dan efektif.
                </p>

                <a href="<?= base_url('about') ?>" class="btn btn-outline-primary border-2 py-3 px-5 animated slideInDown">
                    Pelajari Lebih Lanjut
                </a>

            </div>

        </div>

    </div>

    <!-- Previous -->
    <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>

    </button>

    <!-- Next -->
    <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>

    </button>

</div>
<!-- Hero End -->
    <!-- About Start -->
<div class="container-fluid py-5 bg-secondary">
    <div class="container">

        <div class="row align-items-center g-5">

            <!-- Text -->
            <div class="col-lg-7">

                <h6 class="text-primary text-uppercase mb-2">Fitur Sistem</h6>
                <h2 class="fw-bold mb-3">Keunggulan Sistem Rekomendasi Fitness</h2>

                <p class="mb-4 text-muted">
                    Sistem ini membantu pemula mendapatkan program latihan yang sesuai dengan tujuan,
                    kondisi tubuh, dan waktu yang dimiliki sehingga latihan menjadi lebih aman dan terarah.
                </p>

                <div class="mb-4">
                    <p class="mb-2">✔ Rekomendasi latihan sesuai tujuan fitness</p>
                    <p class="mb-2">✔ Panduan aman untuk pemula</p>
                    <p class="mb-2">✔ Monitoring perkembangan latihan</p>
                    <p class="mb-0">✔ Program fleksibel sesuai jadwal pengguna</p>
                </div>
            </div>

            <!-- Image -->
            <div class="col-lg-5 text-center">
                <img 
                    src="<?= base_url('assets/img/CB4.jpg') ?>" 
                    class="img-fluid rounded"
                    alt="About Fitness System"
                    style="max-width: 420px;"
                >
            </div>

        </div>

    </div>
</div>
<!-- About End -->
<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase">Layanan Kami</h5>
            <h1>Sistem Rekomendasi Latihan Fitness Pemula</h1>
        </div>

        <!-- Service 1 -->
        <div class="service-item service-item-left">
            <div class="row g-0 align-items-center">

                <div class="col-md-5">
                    <div class="service-img p-5 text-center wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">

                        <h3 class="text-uppercase">
                            Rekomendasi Latihan Fitness
                        </h3>

                        <p class="mb-4">
                            Sistem akan memberikan rekomendasi latihan yang sesuai dengan kondisi fisik dan tujuan latihan,
                            sehingga pemula dapat berolahraga dengan lebih aman, efektif, dan terarah.
                        </p>

                        <a class="btn btn-outline-primary border-2 px-4"
                           href="<?= base_url('login') ?>">
                            Mulai Sekarang
                            <i class="fa fa-arrow-right ms-1"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        <!-- Service 2 -->
        <div class="service-item service-item-right">
            <div class="row g-0 align-items-center">

                <div class="col-md-5 order-md-1 text-md-end">
                    <div class="service-img p-5 text-center wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">

                        <h3 class="text-uppercase">
                            Program Sesuai Tujuan
                        </h3>

                        <p class="mb-4">
                            Pilih tujuan latihan seperti menambah massa otot, menurunkan berat badan,
                            meningkatkan kekuatan, atau menjaga kebugaran tubuh.
                        </p>

                        <a class="btn btn-outline-primary border-2 px-4"
                           href="<?= base_url('about') ?>">
                            Selengkapnya
                            <i class="fa fa-arrow-right ms-1"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        <!-- Service 3 -->
        <div class="service-item service-item-left">
            <div class="row g-0 align-items-center">

                <div class="col-md-5">
                    <div class="service-img p-5 text-center wow fadeInRight" data-wow-delay="0.2s">
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 wow fadeInRight" data-wow-delay="0.5s">

                        <h3 class="text-uppercase">
                            Monitoring Perkembangan
                        </h3>

                        <p class="mb-4">
                            Pantau perkembangan latihan Anda secara bertahap sehingga hasil dapat dievaluasi
                            dan ditingkatkan dari waktu ke waktu.
                        </p>

                        <a class="btn btn-outline-primary border-2 px-4"
                           href="<?= base_url('login') ?>">
                            Mulai Latihan
                            <i class="fa fa-arrow-right ms-1"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

        <!-- Service 4 -->
        <div class="service-item service-item-right">
            <div class="row g-0 align-items-center">

                <div class="col-md-5 order-md-1 text-md-end">
                    <div class="service-img p-5 text-center wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="service-icon">
                            <i class="fas fa-person-running"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="service-text px-5 px-md-0 py-md-5 text-md-end wow fadeInLeft" data-wow-delay="0.5s">

                        <h3 class="text-uppercase">
                            Panduan Fitness Pemula
                        </h3>

                        <p class="mb-4">
                            Pelajari teknik latihan yang benar agar terhindar dari cedera dan mendapatkan hasil maksimal
                            dengan panduan yang mudah dipahami.
                        </p>

                        <a class="btn btn-outline-primary border-2 px-4"
                           href="<?= base_url('contact') ?>">
                            Hubungi Kami
                            <i class="fa fa-arrow-right ms-1"></i>
                        </a>

                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Service End -->
<!-- Manfaat Sistem Start -->
<div class="container-fluid py-5 bg-secondary">
    <div class="container py-5">

        <div class="text-center mb-5">
            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                <div class="title-center">
                    <h5>Manfaat Sistem</h5>
                    <h1>Keunggulan Sistem Rekomendasi Latihan Fitness</h1>
                </div>
            </div>
        </div>


        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">


            <!-- Manfaat 1 -->
            <div class="testimonial-item text-center"
                data-dot="<div class='icon-dot'><i class='fa-solid fa-dumbbell'></i></div>">

                <p class="fs-5">
                    Sistem membantu pengguna pemula memperoleh rekomendasi latihan
                    yang sesuai dengan kondisi tubuh dan tujuan latihan sehingga
                    latihan menjadi lebih efektif.
                </p>

                <h5 class="text-uppercase">Rekomendasi Tepat</h5>
                <span class="text-primary">Sesuai Kondisi Pengguna</span>

            </div>


            <!-- Manfaat 2 -->
            <div class="testimonial-item text-center"
                data-dot="<div class='icon-dot'><i class='fa-solid fa-weight-scale'></i></div>">

                <p class="fs-5">
                    Sistem menghitung Indeks Massa Tubuh (BMI) secara otomatis
                    sehingga pengguna dapat mengetahui kategori BMI sebelum
                    memperoleh rekomendasi latihan.
                </p>

                <h5 class="text-uppercase">Perhitungan BMI</h5>
                <span class="text-primary">Otomatis dan Akurat</span>

            </div>


            <!-- Manfaat 3 -->
            <div class="testimonial-item text-center"
                data-dot="<div class='icon-dot'><i class='fa-solid fa-circle-play'></i></div>">

                <p class="fs-5">
                    Setiap hasil rekomendasi dilengkapi video tutorial latihan
                    sehingga pengguna dapat mengikuti gerakan dengan benar dan
                    mengurangi risiko kesalahan saat berolahraga.
                </p>

                <h5 class="text-uppercase">Video Tutorial</h5>
                <span class="text-primary">Mudah Dipelajari</span>

            </div>


            <!-- Manfaat 4 -->
            <div class="testimonial-item text-center"
                data-dot="<div class='icon-dot'><i class='fa-solid fa-brain'></i></div>">

                <p class="fs-5">
                    Metode Decision Tree membantu proses pengambilan keputusan
                    dalam menentukan latihan yang sesuai berdasarkan data yang
                    dimasukkan oleh pengguna.
                </p>

                <h5 class="text-uppercase">Decision Tree</h5>
                <span class="text-primary">Rekomendasi Cerdas</span>

            </div>


        </div>

    </div>
</div>
<!-- Manfaat Sistem End -->

<?= $this->endSection() ?>
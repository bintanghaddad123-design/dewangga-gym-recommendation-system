<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>

<!-- Page Header Start -->
<div
    class="container-fluid page-header py-5 mb-5"
    style="
        background:
            linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)),
            url('<?= base_url('assets/img/CB5.jpg') ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">

    <div class="container text-center py-5">

        <h1 class="display-3 text-white text-uppercase mb-3">
            Tentang Kami
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">

                <li class="breadcrumb-item">
                    <a href="<?= base_url('/') ?>">Home</a>
                </li>

                <li class="breadcrumb-item text-white active" aria-current="page">
                    About
                </li>

            </ol>
        </nav>

    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container py-5">
    <div class="row g-5 align-items-center">

        <!-- Gambar -->
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
            <img
                src="<?= base_url('assets/img/CB3.jpg') ?>"
                class="img-fluid rounded shadow"
                alt="Dewangga Gym">
        </div>

        <!-- Konten -->
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">

            <h5 class="text-primary text-uppercase">
                Tentang Dewangga Gym
            </h5>

            <h1 class="display-5 mb-4">
                Tempat Terbaik untuk Membangun Tubuh yang Sehat dan Kuat
            </h1>

            <p class="mb-4">
                Dewangga Gym hadir untuk membantu setiap orang mencapai
                gaya hidup sehat melalui fasilitas olahraga yang lengkap,
                lingkungan yang nyaman, serta didukung oleh pelatih
                profesional.
            </p>

            <p class="mb-4">
                Kami menyediakan berbagai program latihan yang dapat
                disesuaikan dengan kebutuhan setiap anggota, mulai dari
                pembentukan otot, penurunan berat badan, hingga menjaga
                kebugaran tubuh.
            </p>

            <div class="row g-3 mb-4">

                <div class="col-sm-6">
                    <p>
                        <i class="fa fa-check text-primary me-2"></i>
                        Alat Gym Lengkap
                    </p>

                    <p>
                        <i class="fa fa-check text-primary me-2"></i>
                        Pelatih Profesional
                    </p>
                </div>

                <div class="col-sm-6">
                    <p>
                        <i class="fa fa-check text-primary me-2"></i>
                        Program Latihan Terarah
                    </p>

                    <p>
                        <i class="fa fa-check text-primary me-2"></i>
                        Suasana Nyaman & Bersih
                    </p>
                </div>

            </div>

            <a href="<?= base_url('login') ?>" class="btn btn-primary py-3 px-5">
                Mulai Sekarang
            </a>

        </div>

    </div>
</div>
<!-- About End -->

<!-- Vision Mission Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="text-primary text-uppercase">
                Visi & Misi
            </h5>

            <h1 class="display-5 text-white">
                Komitmen Dewangga Gym
            </h1>

            <p class="text-light mt-3">
                Dewangga Gym berkomitmen memberikan fasilitas dan pelayanan terbaik
                untuk membantu setiap anggota mencapai gaya hidup yang lebih sehat
                dan bugar.
            </p>
        </div>

        <div class="row g-4">

            <!-- Visi -->
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="bg-secondary rounded p-5 h-100 shadow-lg">

                    <div class="mb-3">
                        <i class="fas fa-eye fa-3x text-primary"></i>
                    </div>

                    <h3 class="text-white mb-3">
                        Visi
                    </h3>

                    <p class="text-light mb-0">
                        Menjadi pusat kebugaran terpercaya yang mampu
                        menginspirasi masyarakat untuk hidup lebih sehat,
                        aktif, dan berkualitas melalui pelayanan terbaik
                        serta fasilitas yang modern.
                    </p>

                </div>
            </div>

            <!-- Misi -->
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="bg-secondary rounded p-5 h-100 shadow-lg">

                    <div class="mb-3">
                        <i class="fas fa-bullseye fa-3x text-primary"></i>
                    </div>

                    <h3 class="text-white mb-3">
                        Misi
                    </h3>

                    <ul class="text-light mb-0 ps-3">
                        <li class="mb-2">Menyediakan fasilitas gym yang modern dan lengkap.</li>
                        <li class="mb-2">Memberikan pelayanan terbaik kepada seluruh anggota.</li>
                        <li class="mb-2">Menyediakan program latihan yang efektif dan terarah.</li>
                        <li class="mb-2">Mendorong gaya hidup sehat melalui olahraga yang rutin.</li>
                    </ul>

                </div>
            </div>

        </div>

    </div>
</div>
<!-- Vision Mission End -->

<?= $this->endSection() ?>
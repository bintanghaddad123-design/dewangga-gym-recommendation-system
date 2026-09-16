<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>

<!-- Hero Member Start -->
<div id="member-carousel" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img class="w-100" src="<?= base_url('assets/img/CB6.jpg') ?>" alt="Member Dashboard">

            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                <div class="container text-center">

                    <h6 class="text-uppercase text-primary mb-2 animated slideInDown">
                        Member Dashboard
                    </h6>

                    <h1 class="display-3 fw-bold mb-3 animated slideInDown">
                        Halo, <?= session()->get('nama'); ?> 👋
                    </h1>

                    <p class="fs-5 mb-5 animated slideInDown">
                        Selamat datang di sistem rekomendasi latihan fitness.
                        Gunakan fitur yang tersedia untuk mengatur profil, mendapatkan rekomendasi, dan melihat hasil latihan Anda.
                    </p>

                    <a href="<?= base_url('member/rekomendasi') ?>"
                       class="btn btn-outline-primary border-2 py-3 px-5 animated slideInDown">
                        Mulai Rekomendasi
                    </a>

                </div>

            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img class="w-100" src="<?= base_url('assets/img/CB.webp') ?>" alt="Fitness System">

            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">

                <div class="container text-center">

                    <h6 class="text-uppercase text-primary mb-2 animated slideInDown">
                        Fitur Member
                    </h6>

                    <h1 class="display-3 fw-bold mb-3 animated slideInDown">
                        Rekomendasi • Hasil Latihan • Riwayat Latihan
                    </h1>

                    <p class="fs-5 mb-5 animated slideInDown">
                        Kelola data diri Anda, dapatkan program latihan otomatis,
                        dan pantau perkembangan tubuh Anda secara berkala.
                    </p>

                    <div class="d-flex justify-content-center gap-3 flex-wrap animated slideInDown">

                        <a href="<?= base_url('member/rekomendasi') ?>"
                       class="btn btn-outline-primary border-2 py-3 px-5 animated slideInDown">
                        Mulai Rekomendasi
                    </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Prev -->
    <button class="carousel-control-prev" type="button" data-bs-target="#member-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <!-- Next -->
    <button class="carousel-control-next" type="button" data-bs-target="#member-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>

<?= $this->endSection() ?>
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
            Contact
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/') ?>">Home</a>
                </li>

                <li class="breadcrumb-item text-white active">
                    Contact
                </li>
            </ol>
        </nav>

    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width:700px;">

            <h5 class="text-primary text-uppercase">
                Hubungi Kami
            </h5>

            <h1 class="display-5 text-white">
                Kami Siap Membantu Anda
            </h1>

            <p class="text-light mt-3">
                Jangan ragu untuk menghubungi Dewangga Gym apabila Anda memiliki
                pertanyaan mengenai membership, jadwal latihan, maupun informasi
                lainnya.
            </p>

        </div>

        <div class="row g-5">

        <!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">

        <div class="row g-5 align-items-stretch">

            <!-- Contact Info -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">

                <div class="bg-secondary rounded shadow-lg p-5 h-100">

                    <h3 class="text-white mb-3">
                        Informasi Kontak
                    </h3>

                    <p class="text-light mb-4">
                        Hubungi kami apabila Anda memiliki pertanyaan mengenai
                        sistem rekomendasi latihan fitness atau membutuhkan
                        informasi lebih lanjut mengenai Dewangga Gym.
                    </p>

                    <!-- Alamat -->
                    <div class="d-flex align-items-start mb-4">

                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3"
                            style="width:55px; height:55px;">

                            <i class="fa fa-map-marker-alt text-white"></i>

                        </div>

                        <div>

                            <h5 class="text-white mb-2">
                                Alamat
                            </h5>

                            <p class="text-light mb-0">
                                Jl. Magelang - Salatiga,<br>
                                Sorobayan, Banyuurip,<br>
                                Kecamatan Tegalrejo,<br>
                                Kabupaten Magelang,<br>
                                Jawa Tengah 56192.
                            </p>

                        </div>

                    </div>

                    <!-- Telepon -->
                    <div class="d-flex align-items-center mb-4">

                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3"
                            style="width:55px; height:55px;">

                            <i class="fa fa-phone-alt text-white"></i>

                        </div>

                        <div>

                            <h5 class="text-white mb-1">
                                Telepon
                            </h5>

                            <p class="text-light mb-0">
                                +62 812-3456-7890
                            </p>

                        </div>

                    </div>

                    <!-- Email -->
                    <div class="d-flex align-items-center mb-4">

                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3"
                            style="width:55px; height:55px;">

                            <i class="fa fa-envelope text-white"></i>

                        </div>

                        <div>

                            <h5 class="text-white mb-1">
                                Email
                            </h5>

                            <p class="text-light mb-0">
                                info@dewanggagym.com
                            </p>

                        </div>

                    </div>

                    <!-- Jam Operasional -->
                    <div class="d-flex align-items-center">

                        <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center flex-shrink-0 me-3"
                            style="width:55px; height:55px;">

                            <i class="fa fa-clock text-white"></i>

                        </div>

                        <div>

                            <h5 class="text-white mb-1">
                                Jam Operasional
                            </h5>

                            <p class="text-light mb-0">
                                Senin - Minggu<br>
                                <span class="text-primary fw-bold">
                                    06.00 - 22.00 WIB
                                </span>
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">

                <div class="bg-secondary rounded shadow-lg p-5 h-100">

                    <h3 class="text-white mb-3">
                        Kirim Pesan
                    </h3>

                    <p class="text-light mb-4">
                        Silakan isi formulir di bawah ini untuk mengirimkan
                        pertanyaan, kritik, maupun saran kepada Dewangga Gym.
                    </p>

                    <form>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <input
                                    type="text"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Nama Lengkap">
                            </div>

                            <div class="col-md-6">
                                <input
                                    type="email"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Email">
                            </div>

                            <div class="col-12">
                                <input
                                    type="text"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Subjek">
                            </div>

                            <div class="col-12">
                                <textarea
                                    class="form-control bg-dark border-0 text-white"
                                    rows="7"
                                    placeholder="Tulis pesan Anda..."></textarea>
                            </div>

                            <div class="col-12 mt-4">
                                <button
                                    class="btn btn-primary py-3 px-5"
                                    type="submit">
                                    <i class="fa fa-paper-plane me-2"></i>
                                    Kirim Pesan
                                </button>
                            </div>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>
<!-- Contact End -->
<!-- Google Maps Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5" style="max-width: 700px;">
            <h5 class="text-primary text-uppercase">
                Lokasi Kami
            </h5>

            <h1 class="display-5 text-white">
                Temukan Dewangga Gym
            </h1>

            <p class="text-light">
                Kunjungi lokasi Dewangga Gym dan mulai perjalanan kebugaran Anda bersama kami.
            </p>
        </div>

        <div class="rounded overflow-hidden shadow-lg">

            <iframe
                src="https://www.google.com/maps/embed?pb=PASTE_LINK_EMBED_DISINI"
                width="100%"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>
</div>
<!-- Google Maps End -->

<?= $this->endSection() ?>
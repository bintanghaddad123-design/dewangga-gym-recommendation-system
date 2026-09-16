<?= $this->include('frontend/layout/header') ?>
<?= $this->include('frontend/layout/navbar') ?>

<main class="main">

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
        "
    >
        <div class="container text-center py-5">

            <h1 class="display-3 text-white text-uppercase mb-3">
                Hasil Rekomendasi
            </h1>

            <p class="text-light">
                Berikut adalah rekomendasi latihan terbaik berdasarkan data tubuh
                dan tujuan fitness yang telah Anda masukkan.
            </p>

        </div>
    </div>
    <!-- Page Header End -->

    <!-- Result Start -->
    <div class="container-fluid bg-dark py-5">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="bg-secondary rounded shadow-lg p-5 wow fadeInUp">

                        <!-- Header -->
                        <div class="text-center mb-5">

                            <i class="fas fa-medal fa-3x text-primary mb-3"></i>

                            <h2 class="text-white">
                                Hasil Analisis Latihan
                            </h2>

                            <p class="text-light mb-0">
                                Sistem telah menentukan latihan yang paling sesuai
                                untuk kondisi tubuh Anda.
                            </p>

                        </div>

                        <div class="row g-5">

                            <!-- BMI -->
                            <div class="col-lg-3">

                                <div class="bg-dark rounded text-center p-4 h-100">

                                    <i class="fas fa-heartbeat fa-3x text-primary mb-3"></i>

                                    <h5 class="text-light">
                                        Body Mass Index
                                    </h5>

                                    <h1 class="display-4 text-primary fw-bold">
                                        <?= $bmi ?>
                                    </h1>

                                    <span class="badge bg-primary fs-6 px-3 py-2">
                                        <?= $kategori ?>
                                    </span>

                                </div>

                            </div>

                            <!-- Data Pengguna -->
                            <div class="col-lg-3">

                                <div class="bg-dark rounded p-4 h-100">

                                    <div class="text-center mb-4">

                                        <i class="fas fa-user-circle fa-3x text-primary mb-3"></i>

                                        <h5 class="text-white">
                                            Data Pengguna
                                        </h5>

                                    </div>

                                    <table class="table table-dark table-borderless mb-0">

                                        <tr>
                                            <td>
                                                <div class="text-light mb-1">
                                                    <i class="fas fa-birthday-cake text-warning me-2"></i>
                                                    Usia
                                                </div>

                                                <div class="text-white fw-bold">
                                                    <?= esc($usia) ?> Tahun
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-light mb-1">
                                                    <i class="fas fa-venus-mars text-info me-2"></i>
                                                    Jenis Kelamin
                                                </div>

                                                <div class="text-white fw-bold">
                                                    <?= esc($jenis_kelamin) ?>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>

                                </div>

                            </div>

                            <!-- Detail Latihan -->
                            <div class="col-lg-6">

                                <h2 class="text-white mb-4">
    <i class="fas fa-dumbbell text-primary me-2"></i>
    <?= esc($latihan['nama_latihan']) ?>
</h2>

<!-- Deskripsi Latihan -->
<div class="bg-dark rounded p-4 mb-4">

    <h5 class="text-primary mb-3">
        <i class="fas fa-align-left me-2"></i>
        Deskripsi Latihan
    </h5>

    <p
        class="text-light mb-0"
        style="
            text-align: justify;
            line-height: 1.9;
            text-indent: 30px;
        "
    >
        <?= nl2br(esc($latihan['deskripsi'])) ?>
    </p>

</div>

<hr class="border-secondary">

                                <div class="table-responsive">

                                    <table class="table table-dark table-borderless align-middle">

                                        <tbody>

                                            <tr>
                                                <th width="220">
                                                    <i class="fas fa-bullseye text-primary me-2"></i>
                                                    Fokus Otot
                                                </th>
                                                <td><?= $latihan['otot'] ?></td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <i class="fas fa-calendar-alt text-primary me-2"></i>
                                                    Frekuensi
                                                </th>
                                                <td><?= $latihan['frekuensi'] ?></td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <i class="fas fa-redo text-primary me-2"></i>
                                                    Set & Repetisi
                                                </th>
                                                <td><?= $latihan['set_repetisi'] ?></td>
                                            </tr>

                                            <tr>
                                                <th>
                                                    <i class="fas fa-clock text-primary me-2"></i>
                                                    Waktu Istirahat
                                                </th>
                                                <td><?= $latihan['istirahat'] ?></td>
                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                                <!-- Video Tutorial -->
                                <div class="mt-5">

                                    <h4 class="text-white mb-3">

                                        <i class="fas fa-play-circle text-primary me-2"></i>

                                        Video Tutorial Latihan

                                    </h4>

                                    <div class="ratio ratio-16x9 rounded overflow-hidden shadow">

                                        <video controls class="w-100 rounded">

                                            <source
                                                src="<?= base_url('assets/video/' . $latihan['video']) ?>"
                                                type="video/mp4"
                                            >

                                            Browser Anda tidak mendukung pemutaran video.

                                        </video>

                                    </div>

                                    <small class="text-light d-block mt-2">
                                        Ikuti gerakan sesuai video untuk memperoleh teknik latihan yang benar dan mengurangi risiko cedera.
                                    </small>

                                </div>

                            </div>

                        </div>

                        <hr class="border-secondary my-5">

                        <!-- Button -->
                        <div class="text-center">

                            <a
                                href="<?= base_url('member/rekomendasi') ?>"
                                class="btn btn-outline-primary btn-lg px-5 me-3"
                            >
                                <i class="fas fa-redo me-2"></i>
                                Rekomendasi Lagi
                            </a>

                            <a
                                href="<?= base_url('member') ?>"
                                class="btn btn-primary btn-lg px-5"
                            >
                                <i class="fas fa-home me-2"></i>
                                Kembali ke Beranda
                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Result End -->

</main>

<?= $this->include('frontend/layout/footer') ?>
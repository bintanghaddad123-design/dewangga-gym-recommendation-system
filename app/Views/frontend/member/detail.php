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
        ">

        <div class="container text-center py-5">

            <h1 class="display-3 text-white text-uppercase mb-3">
                Detail Riwayat
            </h1>

            <p class="text-light">
                Informasi lengkap hasil rekomendasi latihan yang pernah Anda lakukan.
            </p>

        </div>

    </div>
    <!-- Page Header End -->


    <!-- Detail Start -->
    <div class="container-fluid bg-dark py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-10 wow fadeInUp">

                    <div class="bg-secondary rounded shadow-lg p-5">

                        <div class="text-center mb-5">

                            <i class="fas fa-dumbbell fa-3x text-primary mb-3"></i>

                            <h2 class="text-white">
                                Detail Rekomendasi Latihan
                            </h2>

                            <p class="text-light">
                                Berikut detail hasil rekomendasi yang tersimpan.
                            </p>

                        </div>

                        <div class="row">

                           <!-- Informasi User -->
<div class="col-md-6 col-12 detail-latihan">

    <div class="card bg-dark border-primary">

        <div class="card-body">

            <h3 class="text-primary mb-3">

                <i class="fas fa-user-circle me-2"></i>
                Informasi Pengguna

            </h3>

            <p class="text-light">

                Data yang digunakan untuk menghasilkan rekomendasi latihan.

            </p>

            <hr class="border-secondary">

            <table class="table table-dark table-borderless detail-info-table">

                <tr>
                    <th width="170">
                        <i class="fas fa-calendar-alt me-2 text-primary"></i>
                        Tanggal
                    </th>
                    <td><?= date('d-m-Y', strtotime($riwayat['created_at'])) ?></td>
                </tr>

                <tr>
                    <th>
                        <i class="fas fa-bullseye me-2 text-primary"></i>
                        Tujuan
                    </th>
                    <td><?= esc($riwayat['tujuan']) ?></td>
                </tr>

                <tr>
                    <th>
                        <i class="fas fa-weight me-2 text-primary"></i>
                        Berat Badan
                    </th>
                    <td><?= esc($riwayat['berat']) ?> Kg</td>
                </tr>

              <tr>
    <th>
        <i class="fas fa-ruler-vertical me-2 text-primary"></i>
        Tinggi Badan
    </th>
    <td><?= esc($riwayat['tinggi']) ?> Cm</td>
</tr>

<tr>
    <th>
        <i class="fas fa-birthday-cake me-2 text-primary"></i>
        Usia
    </th>
    <td><?= esc($riwayat['usia']) ?> Tahun</td>
</tr>

<tr>
    <th>
        <i class="fas fa-venus-mars me-2 text-primary"></i>
        Jenis Kelamin
    </th>

    <td>

        <?php if (strcasecmp(trim($riwayat['jenis_kelamin']), 'Pria') == 0) : ?>

            <span class="badge bg-info">
                <i class="fas fa-mars me-1"></i>
                <?= esc($riwayat['jenis_kelamin']) ?>
            </span>

        <?php elseif (strcasecmp(trim($riwayat['jenis_kelamin']), 'Wanita') == 0) : ?>

            <span class="badge bg-danger">
                <i class="fas fa-venus me-1"></i>
                <?= esc($riwayat['jenis_kelamin']) ?>
            </span>

        <?php else : ?>

            <span class="badge bg-secondary">
                <?= esc($riwayat['jenis_kelamin']) ?>
            </span>

        <?php endif; ?>

    </td>
</tr>

<tr>
    <th>
        <i class="fas fa-calculator me-2 text-primary"></i>
        BMI
    </th>
    <td><?= number_format($riwayat['bmi'], 2) ?></td>
</tr>

                <tr>
                    <th>
                        <i class="fas fa-heartbeat me-2 text-primary"></i>
                        Kategori BMI
                    </th>
                    <td>
                        <?php
                        $badge = 'primary';

                        if ($riwayat['kategori_bmi'] == 'Kurus') {
                            $badge = 'warning';
                        } elseif ($riwayat['kategori_bmi'] == 'Normal') {
                            $badge = 'success';
                        } elseif ($riwayat['kategori_bmi'] == 'Gemuk') {
                            $badge = 'info';
                        } elseif ($riwayat['kategori_bmi'] == 'Obesitas') {
                            $badge = 'danger';
                        }
                        ?>

                        <span class="badge bg-<?= $badge ?>">
                            <?= esc($riwayat['kategori_bmi']) ?>
                        </span>
                    </td>
                </tr>

                <tr>
                    <th>
                        <i class="fas fa-band-aid me-2 text-primary"></i>
                        Kondisi Cedera
                    </th>
                    <td><?= esc($riwayat['cedera']) ?></td>
                </tr>

                <tr>
                    <th>
                        <i class="fas fa-running me-2 text-primary"></i>
                        Tingkat Kebugaran
                    </th>
                    <td><?= esc($riwayat['kebugaran']) ?></td>
                </tr>

            </table>

        </div>

    </div>

</div>

                            <!-- Informasi Latihan -->
                            <div class="col-md-6">

                                <div class="card bg-dark border-primary">

                                    <div class="card-body">

                                        <h3 class="text-primary mb-3">

                                            <?= $riwayat['nama_latihan'] ?>

                                        </h3>

    <p
        class="text-light mb-0"
        style="
            text-align: justify;
            line-height: 1.9;
            text-indent: 30px;
        "
    >
        <?= nl2br(esc($riwayat['deskripsi'])) ?>
    </p>

                                        <hr class="border-secondary">

                                        <table class="table table-dark table-borderless">

                                            <tr>

                                                <th width="170">Fokus Otot</th>

                                                <td><?= $riwayat['otot'] ?></td>

                                            </tr>

                                            <tr>

                                                <th>Frekuensi</th>

                                                <td><?= $riwayat['frekuensi'] ?></td>

                                            </tr>

                                            <tr>

                                                <th>Set & Repetisi</th>

                                                <td><?= $riwayat['set_repetisi'] ?></td>

                                            </tr>

                                            <tr>

                                                <th>Istirahat</th>

                                                <td><?= $riwayat['istirahat'] ?></td>

                                            </tr>

                                        </table>

                                        <?php if (!empty($riwayat['video'])) : ?>

    <div class="mt-4">

        <h4 class="text-white mb-3">
            <i class="fas fa-play-circle text-primary me-2"></i>
            Video Tutorial Latihan
        </h4>

        <div class="ratio ratio-16x9 rounded overflow-hidden shadow">

            <video controls class="w-100 rounded">

                <source
                    src="<?= base_url('assets/video/' . $riwayat['video']) ?>"
                    type="video/mp4">

                Browser Anda tidak mendukung pemutaran video.

            </video>

        </div>

        <small class="text-light d-block mt-2">
            Ikuti gerakan sesuai video agar teknik latihan benar dan meminimalkan risiko cedera.
        </small>

    </div>

<?php endif; ?>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <hr class="border-secondary my-5">

                        <div class="text-center">

                            <a href="<?= base_url('member/riwayat') ?>"
                                class="btn btn-outline-primary btn-lg px-5 me-3">

                                <i class="fas fa-arrow-left me-2"></i>

                                Kembali

                            </a>

                            <a href="<?= base_url('member/rekomendasi') ?>"
                                class="btn btn-success btn-lg px-5 me-3">

                                <i class="fas fa-redo me-2"></i>

                                Rekomendasi Baru

                            </a>

                            <a href="<?= base_url('member') ?>"
                                class="btn btn-primary btn-lg px-5">

                                <i class="fas fa-home me-2"></i>

                                Beranda

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Detail End -->

</main>

<?= $this->include('frontend/layout/footer') ?>
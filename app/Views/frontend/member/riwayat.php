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
                Riwayat Rekomendasi
            </h1>

            <p class="text-light">
                Seluruh hasil rekomendasi latihan yang pernah Anda lakukan akan
                ditampilkan pada halaman ini.
            </p>

        </div>

    </div>
    <!-- Page Header End -->


    <!-- Riwayat Start -->
    <div class="container-fluid bg-dark py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-12 wow fadeInUp">

                    <div class="bg-secondary rounded shadow-lg p-5">

                        <div class="text-center mb-5">

                            <i class="fas fa-history fa-3x text-primary mb-3"></i>

                            <h2 class="text-white">
                                Riwayat Rekomendasi Latihan
                            </h2>

                            <p class="text-light mb-0">
                                Berikut adalah daftar seluruh rekomendasi latihan
                                yang pernah Anda lakukan.
                            </p>

                        </div>

                        <div class="table-responsive">

                            <table class="table table-dark table-hover align-middle">

                                <thead>

                                    <tr>

                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Tujuan</th>
                                        <th>BMI</th>
                                        <th>Kategori</th>
                                        <th>Latihan</th>
                                        <th>Aksi</th>

                                    </tr>

                                </thead>

                                <tbody>

                                    <?php if (!empty($riwayat)) : ?>

                                        <?php $no = 1; ?>

                                        <?php foreach ($riwayat as $row) : ?>

                                            <tr>

                                                <td><?= $no++ ?></td>

                                                <td><?= date('d-m-Y', strtotime($row['created_at'])) ?></td>

                                                <td><?= $row['tujuan'] ?></td>

                                                <td><?= $row['bmi'] ?></td>

                                                <td>

                                                    <span class="badge bg-primary">

                                                        <?= $row['kategori_bmi'] ?>

                                                    </span>

                                                </td>

                                                <td><?= $row['nama_latihan'] ?></td>

                                                <td>

                                                    <a
                                                        href="<?= base_url('member/detail/' . $row['id']) ?>"
                                                        class="btn btn-primary btn-sm">

                                                        <i class="fas fa-eye"></i>

                                                    </a>

                                                    <a
                                                        href="<?= base_url('member/hapus/' . $row['id']) ?>"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Hapus riwayat ini?')">

                                                        <i class="fas fa-trash"></i>

                                                    </a>

                                                </td>

                                            </tr>

                                        <?php endforeach; ?>

                                    <?php else : ?>

                                        <tr>

                                            <td colspan="7" class="text-center py-5">

                                                <i class="fas fa-folder-open fa-3x text-secondary mb-3"></i>

                                                <h5 class="text-light">

                                                    Belum ada riwayat rekomendasi.

                                                </h5>

                                                <a
                                                    href="<?= base_url('member/rekomendasi') ?>"
                                                    class="btn btn-outline-primary mt-3">

                                                    <i class="fas fa-dumbbell me-2"></i>

                                                    Mulai Rekomendasi

                                                </a>

                                            </td>

                                        </tr>

                                    <?php endif; ?>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Riwayat End -->

</main>

<?= $this->include('frontend/layout/footer') ?>
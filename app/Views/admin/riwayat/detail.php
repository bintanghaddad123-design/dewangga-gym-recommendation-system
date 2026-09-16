<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h3 class="mb-3">
                Detail Riwayat Rekomendasi
            </h3>

            <div class="card shadow">

                <div class="card-header bg-primary">

                    <h5 class="mb-0">
                        Data Member
                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>

                            <th width="250">Nama Member</th>

                            <td><?= $riwayat['nama']; ?></td>

                        </tr>

                        <tr>

                            <th>Tujuan</th>

                            <td><?= $riwayat['tujuan']; ?></td>

                        </tr>

                        <tr>

                            <th>Berat Badan</th>

                            <td><?= $riwayat['berat']; ?> Kg</td>

                        </tr>

                        <tr>

                            <th>Tinggi Badan</th>

                            <td><?= $riwayat['tinggi']; ?> Cm</td>

                        </tr>

                        <tr>

                            <th>BMI</th>

                            <td>

                                <?= $riwayat['bmi']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>Kategori BMI</th>

                            <td>

                                <?php

                                if ($riwayat['kategori_bmi'] == 'Normal') {

                                    echo '<span class="badge badge-success">Normal</span>';

                                } elseif ($riwayat['kategori_bmi'] == 'Kurus') {

                                    echo '<span class="badge badge-info">Kurus</span>';

                                } elseif ($riwayat['kategori_bmi'] == 'Gemuk') {

                                    echo '<span class="badge badge-warning">Gemuk</span>';

                                } else {

                                    echo '<span class="badge badge-danger">Obesitas</span>';

                                }

                                ?>

                            </td>

                        </tr>

                        <tr>

                            <th>Cedera</th>

                            <td><?= $riwayat['cedera']; ?></td>

                        </tr>

                        <tr>

                            <th>Tingkat Kebugaran</th>

                            <td><?= $riwayat['kebugaran']; ?></td>

                        </tr>

                        <tr>

                            <th>Fokus Otot</th>

                            <td><?= $riwayat['otot']; ?></td>

                        </tr>

                    </table>

                </div>

            </div>

            <div class="card shadow mt-4">

                <div class="card-header bg-success">

                    <h5 class="mb-0">
                        Hasil Rekomendasi Latihan
                    </h5>

                </div>

                <div class="card-body">

                    <table class="table table-bordered">

                        <tr>

                            <th width="250">
                                Nama Latihan
                            </th>

                            <td>

                                <?= $riwayat['nama_latihan']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Kelompok Otot
                            </th>

                            <td>

                                <?= $riwayat['otot']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Deskripsi
                            </th>

                            <td>

                                <?= $riwayat['deskripsi']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Frekuensi
                            </th>

                            <td>

                                <?= $riwayat['frekuensi']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Set & Repetisi
                            </th>

                            <td>

                                <?= $riwayat['set_repetisi']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Waktu Istirahat
                            </th>

                            <td>

                                <?= $riwayat['istirahat']; ?>

                            </td>

                        </tr>

                        <tr>

                            <th>
                                Video
                            </th>

                            <td>

                                <?= $riwayat['video']; ?>

                            </td>

                        </tr>

                    </table>

                    <a href="<?= base_url('riwayat'); ?>"
                        class="btn btn-secondary">

                        <i class="fas fa-arrow-left"></i>

                        Kembali

                    </a>

                </div>

            </div>

        </div>

    </section>

</div>

<?= $this->endSection(); ?>
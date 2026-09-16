<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Kelola Riwayat Rekomendasi</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('dashboard') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Riwayat Rekomendasi
                        </li>
                    </ol>
                </div>

            </div>

        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>

                    <i class="fas fa-check-circle mr-2"></i>
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <div class="card card-primary card-outline shadow">

                <div class="card-header">

                    <h3 class="card-title">
                        <i class="fas fa-history mr-2"></i>
                        Data Riwayat Rekomendasi
                    </h3>

                </div>

                <div class="card-body">

                    <table id="datatable" class="table table-bordered table-hover table-striped">

                        <thead class="bg-primary">
                            <tr>
                                <th width="50">No</th>
                                <th>Member</th>
                                <th>Tujuan</th>
                                <th>BMI</th>
                                <th>Kategori BMI</th>
                                <th>Latihan</th>
                                <th>Tanggal</th>
                                <th width="170">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (!empty($riwayat)) : ?>

                                <?php $no = 1; ?>

                                <?php foreach ($riwayat as $r) : ?>

                                    <?php
                                    $badge = [
                                        'Kurus' => 'info',
                                        'Normal' => 'success',
                                        'Gemuk' => 'warning',
                                        'Obesitas' => 'danger'
                                    ];

                                    $warna = $badge[$r['kategori_bmi']] ?? 'secondary';
                                    ?>

                                    <tr>

                                        <td><?= $no++ ?></td>

                                        <td><?= esc($r['nama']) ?></td>

                                        <td><?= esc($r['tujuan']) ?></td>

                                        <td><?= number_format($r['bmi'], 2) ?></td>

                                        <td>
                                            <span class="badge badge-<?= $warna ?>">
                                                <?= esc($r['kategori_bmi']) ?>
                                            </span>
                                        </td>

                                        <td><?= esc($r['nama_latihan']) ?></td>

                                        <td>
                                            <?= date('d-m-Y H:i', strtotime($r['created_at'])) ?>
                                        </td>

                                        <td>

                                            <a href="<?= base_url('riwayat/detail/' . $r['id']) ?>"
                                                class="btn btn-info btn-sm">

                                                <i class="fas fa-eye"></i>
                                                Detail

                                            </a>

                                            <a href="<?= base_url('riwayat/hapus/' . $r['id']) ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus riwayat rekomendasi ini?')">

                                                <i class="fas fa-trash"></i>
                                                Hapus

                                            </a>

                                        </td>

                                    </tr>

                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr>
                                    <td colspan="8" class="text-center text-muted">
                                        <i class="fas fa-info-circle mr-1"></i>
                                        Belum ada data riwayat rekomendasi.
                                    </td>
                                </tr>

                            <?php endif; ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>
    </section>

</div>

<?= $this->endSection() ?>

<?= $this->section('script') ?>

<script>
$(document).ready(function() {

    $('#datatable').DataTable({

        responsive: true,
        autoWidth: false,
        pageLength: 10,
        ordering: true,
        order: [[6, 'desc']],

        language: {

            search: "Cari :",

            lengthMenu: "Tampilkan _MENU_ data",

            info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",

            infoEmpty: "Tidak ada data",

            zeroRecords: "Data tidak ditemukan",

            paginate: {

                previous: "Sebelumnya",

                next: "Berikutnya"

            }

        }

    });

});
</script>

<?= $this->endSection() ?>
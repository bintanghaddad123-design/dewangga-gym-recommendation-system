<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Data Latihan</h3>

                <a href="<?= base_url('latihan/tambah'); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Data
                </a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">

                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Nama Latihan</th>
                                <th>Otot</th>
                                <th width="170">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>

                            <?php foreach ($latihan as $l): ?>
                                <tr>
                                    <td><?= $no++; ?></td>

                                    <td><?= $l['nama_latihan']; ?></td>

                                    <td><?= $l['otot']; ?></td>

                                    <td>
                                        <a href="<?= base_url('latihan/edit/' . $l['id']); ?>" class="btn btn-warning btn-sm">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>

                                        <a href="<?= base_url('latihan/hapus/' . $l['id']); ?>"
                                           class="btn btn-danger btn-sm"
                                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            <i class="fas fa-trash"></i> Hapus
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                            <?php if (empty($latihan)): ?>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        Data latihan belum tersedia.
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

<?= $this->endSection(); ?>
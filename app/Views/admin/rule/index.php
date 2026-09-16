<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3>Data Rule Decision Tree</h3>

                <a href="<?= base_url('rule/create'); ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah Rule
                </a>
            </div>

            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success'); ?>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm">
                <div class="card-body">

                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Tujuan</th>
                                <th>Kategori BMI</th>
                                <th>Cedera</th>
                                <th>Kebugaran</th>
                                <th>Otot</th>
                                <th>Latihan</th>
                                <th width="170">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (!empty($rule)) : ?>

                                <?php $no = 1; ?>

                                <?php foreach ($rule as $r) : ?>

                                    <tr>
                                        <td><?= $no++; ?></td>

                                        <td><?= esc($r['tujuan']); ?></td>

                                        <td><?= esc($r['kategori_bmi']); ?></td>

                                        <td><?= esc($r['cedera']); ?></td>

                                        <td><?= esc($r['kebugaran']); ?></td>

                                        <td><?= esc($r['otot']); ?></td>

                                        <td><?= esc($r['nama_latihan']); ?></td>

                                        <td>
                                            <a href="<?= base_url('rule/edit/' . $r['id']); ?>"
                                                class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <a href="<?= base_url('rule/delete/' . $r['id']); ?>"
                                                class="btn btn-danger btn-sm"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr>
                                    <td colspan="8" class="text-center">
                                        Belum ada data rule.
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
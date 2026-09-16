<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="mb-0">Kelola User</h3>

                <a href="<?= base_url('user/tambah') ?>" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Tambah User
                </a>
            </div>

            <!-- Flash Message -->
            <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Card -->
            <div class="card shadow-sm">
                <div class="card-body">

                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th width="60">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th width="120">Role</th>
                                <th width="180">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php if (!empty($users)) : ?>

                                <?php $no = 1; ?>
                                <?php foreach ($users as $u) : ?>

                                    <tr>
                                        <td><?= $no++ ?></td>

                                        <td><?= esc($u['nama']) ?></td>

                                        <td><?= esc($u['email']) ?></td>

                                        <td>
                                            <?php if ($u['role'] == 'admin') : ?>
                                                <span class="badge badge-danger">
                                                    Admin
                                                </span>
                                            <?php else : ?>
                                                <span class="badge badge-success">
                                                    Member
                                                </span>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <a href="<?= base_url('user/edit/' . $u['id']) ?>"
                                               class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>

                                            <a href="<?= base_url('user/hapus/' . $u['id']) ?>"
                                               class="btn btn-danger btn-sm"
                                               onclick="return confirm('Yakin ingin menghapus user ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                            <?php else : ?>

                                <tr>
                                    <td colspan="5" class="text-center">
                                        Belum ada data user.
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
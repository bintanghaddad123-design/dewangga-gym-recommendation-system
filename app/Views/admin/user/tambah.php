<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h3 class="mb-3">Tambah User</h3>

            <div class="card">

                <div class="card-body">

                    <form action="<?= base_url('user/simpan'); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Role</label>

                            <select name="role" class="form-control">

                                <option value="member">Member</option>

                                <option value="admin">Admin</option>

                            </select>

                        </div>

                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Simpan
                        </button>

                        <a href="<?= base_url('user'); ?>"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </section>

</div>

<?= $this->endSection(); ?>
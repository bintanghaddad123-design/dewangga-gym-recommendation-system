<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <h3 class="mb-3">Edit User</h3>

            <div class="card">

                <div class="card-body">

                    <form action="<?= base_url('user/update/' . $user['id']); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text"
                                   name="nama"
                                   class="form-control"
                                   value="<?= esc($user['nama']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?= esc($user['email']); ?>"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Password Baru</label>
                            <input type="password"
                                   name="password"
                                   class="form-control">

                            <small class="text-muted">
                                Kosongkan jika tidak ingin mengubah password.
                            </small>
                        </div>

                        <div class="form-group">

                            <label>Role</label>

                            <select name="role" class="form-control">

                                <option value="admin"
                                    <?= $user['role']=='admin' ? 'selected' : ''; ?>>
                                    Admin
                                </option>

                                <option value="member"
                                    <?= $user['role']=='member' ? 'selected' : ''; ?>>
                                    Member
                                </option>

                            </select>

                        </div>

                        <button class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Update
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
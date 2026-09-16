<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content pt-3">
        <div class="container-fluid">

            <div class="card shadow-sm">
                <div class="card-header bg-warning">
                    <h3 class="card-title">Edit Rule Decision Tree</h3>
                </div>

                <div class="card-body">

                    <form action="<?= base_url('rule/update/' . $rule['id']); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <select name="tujuan" class="form-select" required>
                                <option value="Menambah Massa Otot"
                                    <?= $rule['tujuan'] == 'Menambah Massa Otot' ? 'selected' : ''; ?>>
                                    Menambah Massa Otot
                                </option>

                                <option value="Menurunkan Berat Badan"
                                    <?= $rule['tujuan'] == 'Menurunkan Berat Badan' ? 'selected' : ''; ?>>
                                    Menurunkan Berat Badan
                                </option>

                                <option value="Menjaga Kebugaran"
                                    <?= $rule['tujuan'] == 'Menjaga Kebugaran' ? 'selected' : ''; ?>>
                                    Menjaga Kebugaran
                                </option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori BMI</label>
                            <select name="kategori_bmi" class="form-select" required>
                                <option value="Kurus" <?= $rule['kategori_bmi'] == 'Kurus' ? 'selected' : ''; ?>>Kurus</option>
                                <option value="Normal" <?= $rule['kategori_bmi'] == 'Normal' ? 'selected' : ''; ?>>Normal</option>
                                <option value="Gemuk" <?= $rule['kategori_bmi'] == 'Gemuk' ? 'selected' : ''; ?>>Gemuk</option>
                                <option value="Obesitas" <?= $rule['kategori_bmi'] == 'Obesitas' ? 'selected' : ''; ?>>Obesitas</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cedera</label>
                            <select name="cedera" class="form-select" required>
                                <option value="Ya" <?= $rule['cedera'] == 'Ya' ? 'selected' : ''; ?>>Ya</option>
                                <option value="Tidak" <?= $rule['cedera'] == 'Tidak' ? 'selected' : ''; ?>>Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kebugaran</label>
                            <select name="kebugaran" class="form-select" required>
                                <option value="Pemula" <?= $rule['kebugaran'] == 'Pemula' ? 'selected' : ''; ?>>Pemula</option>
                                <option value="Menengah" <?= $rule['kebugaran'] == 'Menengah' ? 'selected' : ''; ?>>Menengah</option>
                                <option value="Lanjutan" <?= $rule['kebugaran'] == 'Lanjutan' ? 'selected' : ''; ?>>Lanjutan</option>
                            </select>
                        </div>

                        <div class="mb-3">
    <label class="form-label">Otot</label>
    <select name="otot" class="form-select" required>
        <option value="Chest" <?= $rule['otot'] == 'Chest' ? 'selected' : ''; ?>>Chest</option>
        <option value="Shoulders" <?= $rule['otot'] == 'Shoulders' ? 'selected' : ''; ?>>Shoulders</option>
        <option value="Back" <?= $rule['otot'] == 'Back' ? 'selected' : ''; ?>>Back</option>
        <option value="Legs" <?= $rule['otot'] == 'Legs' ? 'selected' : ''; ?>>Legs</option>
    </select>
</div>

                        <div class="mb-3">
                            <label class="form-label">Latihan</label>

                            <select name="latihan_id" class="form-select" required>

                                <?php foreach ($latihan as $l) : ?>

                                    <option value="<?= $l['id']; ?>"
                                        <?= $rule['latihan_id'] == $l['id'] ? 'selected' : ''; ?>>

                                        <?= esc($l['nama_latihan']); ?>

                                    </option>

                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?= base_url('rule'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-warning">
                                Update Rule
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </section>

</div>

<?= $this->endSection(); ?>
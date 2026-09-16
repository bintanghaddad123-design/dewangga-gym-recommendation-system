<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content pt-3">
        <div class="container-fluid">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h3 class="card-title">Tambah Rule Decision Tree</h3>
                </div>

                <div class="card-body">

                    <form action="<?= base_url('rule/store'); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Tujuan</label>
                            <select name="tujuan" class="form-select" required>
                                <option value="">-- Pilih Tujuan --</option>
                                <option value="Menambah Massa Otot">Menambah Massa Otot</option>
                                <option value="Menurunkan Berat Badan">Menurunkan Berat Badan</option>
                                <option value="Menjaga Kebugaran">Menjaga Kebugaran</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori BMI</label>
                            <select name="kategori_bmi" class="form-select" required>
                                <option value="">-- Pilih BMI --</option>
                                <option value="Kurus">Kurus</option>
                                <option value="Normal">Normal</option>
                                <option value="Gemuk">Gemuk</option>
                                <option value="Obesitas">Obesitas</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cedera</label>
                            <select name="cedera" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kebugaran</label>
                            <select name="kebugaran" class="form-select" required>
                                <option value="">-- Pilih --</option>
                                <option value="Pemula">Pemula</option>
                                <option value="Menengah">Menengah</option>
                                <option value="Lanjutan">Lanjutan</option>
                            </select>
                        </div>

                        <div class="mb-3">
    <label class="form-label">Otot</label>
    <select name="otot" class="form-select" required>
        <option value="">-- Pilih Otot --</option>
        <option value="Chest">Chest</option>
        <option value="Shoulders">Shoulders</option>
        <option value="Back">Back</option>
        <option value="Legs">Legs</option>
    </select>
</div>
                        <div class="mb-3">
                            <label class="form-label">Latihan</label>

                            <select name="latihan_id" class="form-select" required>

                                <option value="">-- Pilih Latihan --</option>

                                <?php foreach ($latihan as $l) : ?>

                                    <option value="<?= $l['id']; ?>">
                                        <?= esc($l['nama_latihan']); ?>
                                    </option>

                                <?php endforeach; ?>

                            </select>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="<?= base_url('rule'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-success">
                                Simpan Rule
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>
    </section>

</div>

<?= $this->endSection(); ?>
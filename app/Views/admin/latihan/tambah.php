<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <section class="content pt-3">
        <div class="container-fluid">

            <div class="card shadow-sm">
                <div class="card-header bg-success">
                    <h3 class="card-title text-white">Tambah Data Latihan</h3>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('latihan/simpan'); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="mb-3">
                            <label for="nama_latihan" class="form-label">Nama Latihan</label>
                            <input
                                type="text"
                                name="nama_latihan"
                                id="nama_latihan"
                                class="form-control"
                                placeholder="Masukkan nama latihan"
                                required>
                        </div>

                        <div class="mb-3">
    <label for="otot" class="form-label">Otot</label>
    <select name="otot" id="otot" class="form-select" required>
        <option value="">-- Pilih Otot --</option>
        <option value="Chest">Chest</option>
        <option value="Shoulders">Shoulders</option>
        <option value="Back">Back</option>
        <option value="Legs">Legs</option>
    </select>
</div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea
                                name="deskripsi"
                                id="deskripsi"
                                class="form-control"
                                rows="4"
                                placeholder="Masukkan deskripsi latihan"
                                required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label">Link Video</label>
                            <input
                                type="text"
                                name="video"
                                id="video"
                                class="form-control"
                                placeholder="https://youtube.com/...">
                        </div>

                        <div class="mb-3">
                            <label for="frekuensi" class="form-label">Frekuensi</label>
                            <input
                                type="text"
                                name="frekuensi"
                                id="frekuensi"
                                class="form-control"
                                placeholder="Contoh: 3x seminggu">
                        </div>

                        <div class="mb-3">
                            <label for="set_repetisi" class="form-label">Set & Repetisi</label>
                            <input
                                type="text"
                                name="set_repetisi"
                                id="set_repetisi"
                                class="form-control"
                                placeholder="Contoh: 3 Set x 12 Repetisi">
                        </div>

                        <div class="mb-3">
                            <label for="istirahat" class="form-label">Waktu Istirahat</label>
                            <input
                                type="text"
                                name="istirahat"
                                id="istirahat"
                                class="form-control"
                                placeholder="Contoh: 60 Detik">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('latihan'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-success">
                                Simpan Data
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>

</div>

<?= $this->endSection(); ?>
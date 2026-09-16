<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <section class="content pt-3">
        <div class="container-fluid">

            <div class="card shadow-sm">
                <div class="card-header bg-warning">
                    <h3 class="card-title">Edit Data Latihan</h3>
                </div>

                <div class="card-body">
                    <form action="<?= base_url('latihan/update/' . $latihan['id']); ?>" method="post">

                        <?= csrf_field(); ?>

                        <div class="mb-3">
                            <label for="nama_latihan" class="form-label">Nama Latihan</label>
                            <input
                                type="text"
                                name="nama_latihan"
                                id="nama_latihan"
                                class="form-control"
                                value="<?= $latihan['nama_latihan']; ?>"
                                required>
                        </div>

                       <div class="mb-3">
    <label for="otot" class="form-label">Otot</label>
    <select name="otot" id="otot" class="form-select" required>
        <option value="Chest" <?= $latihan['otot'] == 'Chest' ? 'selected' : ''; ?>>
            Chest
        </option>
        <option value="Shoulders" <?= $latihan['otot'] == 'Shoulders' ? 'selected' : ''; ?>>
            Shoulders
        </option>
        <option value="Back" <?= $latihan['otot'] == 'Back' ? 'selected' : ''; ?>>
            Back
        </option>
        <option value="Legs" <?= $latihan['otot'] == 'Legs' ? 'selected' : ''; ?>>
            Legs
        </option>
    </select>
</div>

                        <div class="mb-3">
                            <label for="deskripsi" class="form-label">Deskripsi</label>
                            <textarea
                                name="deskripsi"
                                id="deskripsi"
                                class="form-control"
                                rows="4"
                                required><?= $latihan['deskripsi']; ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="video" class="form-label">Link Video</label>
                            <input
                                type="text"
                                name="video"
                                id="video"
                                class="form-control"
                                value="<?= $latihan['video']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="frekuensi" class="form-label">Frekuensi</label>
                            <input
                                type="text"
                                name="frekuensi"
                                id="frekuensi"
                                class="form-control"
                                value="<?= $latihan['frekuensi']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="set_repetisi" class="form-label">Set & Repetisi</label>
                            <input
                                type="text"
                                name="set_repetisi"
                                id="set_repetisi"
                                class="form-control"
                                value="<?= $latihan['set_repetisi']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="istirahat" class="form-label">Waktu Istirahat</label>
                            <input
                                type="text"
                                name="istirahat"
                                id="istirahat"
                                class="form-control"
                                value="<?= $latihan['istirahat']; ?>">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url('latihan'); ?>" class="btn btn-secondary">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Update Data
                            </button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection(); ?>
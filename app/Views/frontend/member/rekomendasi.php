<?= $this->include('frontend/layout/header') ?>
<?= $this->include('frontend/layout/navbar') ?>

<main class="main">

    <!-- Page Header Start -->
    <div
        class="container-fluid page-header py-5 mb-5"
        style="
            background:
                linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)),
                url('<?= base_url('assets/img/CB5.jpg') ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        ">

        <div class="container text-center py-5">

            <h1 class="display-3 text-white text-uppercase mb-3">
                Rekomendasi Latihan
            </h1>

            <p class="text-light">
                Lengkapi data berikut untuk mendapatkan rekomendasi latihan fitness
                yang sesuai dengan kondisi tubuh dan tujuan Anda.
            </p>

        </div>

    </div>
    <!-- Page Header End -->


    <!-- Form Start -->
    <div class="container-fluid bg-dark py-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.2s">

                    <div class="bg-secondary rounded shadow-lg p-5">

                        <div class="text-center mb-5">

                            <i class="fas fa-dumbbell fa-3x text-primary mb-3"></i>

                            <h2 class="text-white">
                                Form Rekomendasi Latihan
                            </h2>

                            <p class="text-light mb-0">
                                Lengkapi seluruh data berikut agar sistem dapat
                                memberikan rekomendasi latihan terbaik.
                            </p>

                        </div>

                        <form action="<?= base_url('member/proses') ?>" method="post">

                            <?= csrf_field() ?>

                            <div class="row g-4">

                                <div class="col-md-6">

                                    <label class="form-label text-white">
                                        Tujuan Fitness
                                    </label>

                                    <select
                                        name="tujuan"
                                        class="form-select bg-dark border-0 text-white"
                                        required>

                                        <option value="">Pilih Tujuan</option>
                                        <option>Menambah Massa Otot</option>
                                        <option>Menurunkan Berat Badan</option>
                                        <option>Menjaga Kebugaran</option>

                                    </select>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label text-white">
                                        Tingkat Kebugaran
                                    </label>

                                    <select
                                        name="kebugaran"
                                        class="form-select bg-dark border-0 text-white"
                                        required>

                                        <option>Pemula</option>
                                        <option>Menengah</option>
                                        <option>Mahir</option>

                                    </select>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label text-white">
                                        Berat Badan (Kg)
                                    </label>

                                    <input
                                        type="number"
                                        step="0.1"
                                        name="berat"
                                        class="form-control bg-dark border-0 text-white"
                                        placeholder="Contoh : 65"
                                        required>

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label text-white">
                                        Tinggi Badan (cm)
                                    </label>

                                    <input
                                        type="number"
                                        name="tinggi"
                                        class="form-control bg-dark border-0 text-white"
                                        placeholder="Contoh : 170"
                                        required>

                                </div>
                                <!-- Usia -->
<div class="col-md-6">

    <label class="form-label text-white">
        Usia
    </label>

    <input
        type="number"
        name="usia"
        class="form-control bg-dark border-0 text-white"
        placeholder="Contoh : 22"
        min="15"
        max="70"
        required>

</div>

<!-- Jenis Kelamin -->
<div class="col-md-6">

    <label class="form-label text-white">
        Jenis Kelamin
    </label>

    <select
        name="jenis_kelamin"
        class="form-select bg-dark border-0 text-white"
        required>

        <option value="">Pilih Jenis Kelamin</option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>

    </select>

</div>

                                <div class="col-md-6">

                                    <label class="form-label text-white">
                                        Memiliki Cedera?
                                    </label>

                                    <select
                                        name="cedera"
                                        class="form-select bg-dark border-0 text-white"
                                        required>

                                        <option>Tidak</option>
                                        <option>Ya</option>

                                    </select>

                                </div>

                                <div class="col-md-6">

    <label class="form-label text-white">
        Fokus Otot
    </label>

    <select
        name="otot"
        class="form-select bg-dark border-0 text-white"
        required>

        <option value="Chest">Chest (Dada)</option>
        <option value="Shoulders">Shoulders (Bahu)</option>
        <option value="Back">Back (Punggung)</option>
        <option value="Legs">Legs (Kaki)</option>

    </select>

</div>

                                <div class="col-12 mt-4">

                                    <button
                                        type="submit"
                                        class="btn btn-outline-primary border-2 py-3 px-5 w-100">

                                        <i class="fas fa-dumbbell me-2"></i>
                                        Proses Rekomendasi

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- Form End -->

</main>

<?= $this->include('frontend/layout/footer') ?>
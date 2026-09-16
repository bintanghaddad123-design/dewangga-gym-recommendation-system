<?= $this->extend('frontend/layout/template') ?>

<?= $this->section('content') ?>

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
    "
>
    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3">
            Register
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/') ?>">Home</a>
                </li>

                <li class="breadcrumb-item text-white active">
                    Register
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Register Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6">
                <div class="bg-secondary rounded shadow-lg p-5">

                    <div class="text-center mb-5">
                        <i class="fas fa-user-plus fa-4x text-primary mb-3"></i>

                        <h2 class="text-white">
                            Daftar Akun
                        </h2>

                        <p class="text-light">
                            Buat akun Dewangga Gym untuk mendapatkan rekomendasi latihan yang sesuai dengan kebutuhan Anda.
                        </p>
                    </div>

                    <!-- Form Register -->
                    <form action="<?= base_url('register/simpan') ?>" method="post">

                        <?= csrf_field() ?>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label class="form-label text-white">
                                Nama Lengkap
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-user"></i>
                                </span>

                                <input
                                    type="text"
                                    name="nama"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan Nama Lengkap"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label text-white">
                                Email
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-envelope"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan Email"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label class="form-label text-white">
                                Password
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan Password"
                                    required
                                >
                            </div>
                        </div>

                        <!-- Button Register -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-3"
                        >
                            <i class="fas fa-user-plus me-2"></i>
                            Daftar Sekarang
                        </button>

                    </form>

                    <hr class="border-secondary my-4">

                    <div class="text-center">
                        <p class="text-light mb-3">
                            Sudah memiliki akun?
                        </p>

                        <a
                            href="<?= base_url('login') ?>"
                            class="btn btn-outline-primary w-100 py-3"
                        >
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Login
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Register End -->

<?= $this->endSection() ?>
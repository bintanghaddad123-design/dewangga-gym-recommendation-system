<<?= $this->extend('frontend/layout/template') ?>
<?= $this->section('content') ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5"
    style="
        background:
            linear-gradient(rgba(0,0,0,.75), rgba(0,0,0,.75)),
            url('<?= base_url('assets/img/CB5.jpg') ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    ">

    <div class="container text-center py-5">
        <h1 class="display-3 text-white text-uppercase mb-3">Login</h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/') ?>">Home</a>
                </li>
                <li class="breadcrumb-item text-white active">Login</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Login Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="bg-secondary rounded shadow-lg p-5">

                    <div class="text-center mb-4">
                        <i class="fas fa-dumbbell fa-4x text-primary mb-3"></i>
                        <h2 class="text-white">Dewangga Gym</h2>
                        <p class="text-light mb-0">
                            Sistem Rekomendasi Latihan Fitness
                        </p>
                    </div>

                    <!-- Flash Message -->
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('login/proses') ?>" method="post">
                        <?= csrf_field(); ?>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label text-white">Email</label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-envelope"></i>
                                </span>

                                <input
                                    type="email"
                                    name="email"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan Email"
                                    required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-2">
                            <label class="form-label text-white">Password</label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan Password"
                                    required>
                            </div>
                        </div>

                        <!-- Lupa Password -->
                        <div class="text-end mb-4">
                            <a href="<?= base_url('lupa-password') ?>" class="text-primary text-decoration-none">
                                <i class="fas fa-key me-1"></i>
                                Lupa Password?
                            </a>
                        </div>

                        <!-- Button Login -->
                        <button type="submit" class="btn btn-primary w-100 py-3">
                            <i class="fas fa-sign-in-alt me-2"></i>
                            Login
                        </button>
                    </form>

                    <hr class="border-secondary my-4">

                    <div class="text-center">
                        <p class="text-light mb-3">
                            Belum memiliki akun?
                        </p>

                        <a href="<?= base_url('register') ?>" class="btn btn-outline-primary w-100 py-3">
                            <i class="fas fa-user-plus me-2"></i>
                            Daftar Sekarang
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Login End -->

<?= $this->endSection() ?>
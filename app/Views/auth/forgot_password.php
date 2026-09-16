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
            Lupa Password
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                <li class="breadcrumb-item">
                    <a href="<?= base_url('/') ?>">Home</a>
                </li>

                <li class="breadcrumb-item">
                    <a href="<?= base_url('login') ?>">Login</a>
                </li>

                <li class="breadcrumb-item text-white active">
                    Lupa Password
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Forgot Password Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="bg-secondary rounded shadow-lg p-5">

                    <div class="text-center mb-4">
                        <i class="fas fa-key fa-4x text-primary mb-3"></i>

                        <h2 class="text-white">
                            Lupa Password?
                        </h2>

                        <p class="text-light">
                            Masukkan email yang terdaftar untuk mendapatkan link reset password.
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
                        <div class="alert alert-success text-break">
                            <i class="fas fa-check-circle me-2"></i>
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form -->
                    <form action="<?= base_url('lupa-password') ?>" method="post">

                        <?= csrf_field() ?>

                        <div class="mb-4">
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
                                    placeholder="Masukkan email"
                                    required
                                >
                            </div>
                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-3"
                        >
                            <i class="fas fa-paper-plane me-2"></i>
                            Kirim Link Reset
                        </button>

                    </form>

                    <hr class="border-secondary my-4">

                    <div class="text-center">
                        <a
                            href="<?= base_url('login') ?>"
                            class="text-primary text-decoration-none"
                        >
                            <i class="fas fa-arrow-left me-2"></i>
                            Kembali ke Login
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Forgot Password End -->

<?= $this->endSection() ?>
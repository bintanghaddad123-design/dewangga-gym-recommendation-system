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
            Reset Password
        </h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Reset Password Start -->
<div class="container-fluid bg-dark py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="bg-secondary rounded shadow-lg p-5">

                    <!-- Header -->
                    <div class="text-center mb-4">
                        <i class="fas fa-lock fa-4x text-primary mb-3"></i>

                        <h2 class="text-white">
                            Buat Password Baru
                        </h2>

                        <p class="text-light">
                            Silakan masukkan password baru kamu.
                        </p>
                    </div>

                    <!-- Flash Message -->
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <!-- Form Reset Password -->
                    <form action="<?= base_url('reset-password') ?>" method="post">

                        <?= csrf_field() ?>

                        <!-- Token -->
                        <input
                            type="hidden"
                            name="token"
                            value="<?= esc($token) ?>"
                        >

                        <!-- Password Baru -->
                        <div class="mb-3">
                            <label class="form-label text-white">
                                Password Baru
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Masukkan password baru"
                                    minlength="6"
                                    required
                                >

                                <button
                                    type="button"
                                    class="btn btn-dark border-0 text-primary"
                                    onclick="togglePassword('password', 'iconPassword')"
                                    title="Lihat Password"
                                >
                                    <i
                                        class="fas fa-eye"
                                        id="iconPassword"
                                    ></i>
                                </button>
                            </div>
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="mb-4">
                            <label class="form-label text-white">
                                Konfirmasi Password
                            </label>

                            <div class="input-group">
                                <span class="input-group-text bg-dark border-0 text-primary">
                                    <i class="fas fa-lock"></i>
                                </span>

                                <input
                                    type="password"
                                    name="password_confirm"
                                    id="password_confirm"
                                    class="form-control bg-dark border-0 text-white"
                                    placeholder="Ulangi password baru"
                                    minlength="6"
                                    required
                                >

                                <button
                                    type="button"
                                    class="btn btn-dark border-0 text-primary"
                                    onclick="togglePassword('password_confirm', 'iconPasswordConfirm')"
                                    title="Lihat Password"
                                >
                                    <i
                                        class="fas fa-eye"
                                        id="iconPasswordConfirm"
                                    ></i>
                                </button>
                            </div>
                        </div>

                        <!-- Button Reset -->
                        <button
                            type="submit"
                            class="btn btn-primary w-100 py-3"
                        >
                            <i class="fas fa-key me-2"></i>
                            Reset Password
                        </button>

                    </form>

                    <hr class="border-secondary my-4">

                    <!-- Back to Login -->
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
<!-- Reset Password End -->

<!-- Show / Hide Password -->
<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const icon = document.getElementById(iconId);

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>

<?= $this->endSection() ?>
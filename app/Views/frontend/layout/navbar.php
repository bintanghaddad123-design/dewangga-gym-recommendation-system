<!-- Navbar Start -->
<div class="container-fluid p-0">

    <nav class="navbar navbar-expand-lg navbar-dark px-lg-5 fixed-top">

        <!-- Logo -->
        <a href="<?= session()->get('role') == 'member'
            ? base_url('member/dashboard')
            : base_url('/') ?>"
            class="navbar-brand ms-4 ms-lg-0">

            <h2 class="mb-0 text-primary text-uppercase">
                <i class="fas fa-dumbbell me-2"></i>
                Dewangga Gym
            </h2>

        </a>

        <!-- Toggle -->
        <button
            class="navbar-toggler me-4"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <div class="navbar-nav mx-auto p-4 p-lg-0">

                <?php if (session()->get('role') == 'member') : ?>

                    <!-- Menu Member -->

                    <a href="<?= base_url('member') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('member') ? 'active' : '' ?>">
                        Dashboard
                    </a>

                    <a href="<?= base_url('member/rekomendasi') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('member/rekomendasi') ? 'active' : '' ?>">
                        Rekomendasi
                    </a>

                    <a href="<?= base_url('member/riwayat') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('member/riwayat') ? 'active' : '' ?>">
                        Riwayat
                    </a>

                <?php else : ?>

                    <!-- Menu Pengunjung -->

                    <a href="<?= base_url('/') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('/') ? 'active' : '' ?>">
                        Home
                    </a>

                    <a href="<?= base_url('about') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('about') ? 'active' : '' ?>">
                        About
                    </a>

                    <a href="<?= base_url('contact') ?>"
                        class="nav-item nav-link <?= current_url() == base_url('contact') ? 'active' : '' ?>">
                        Contact
                    </a>

                <?php endif; ?>

            </div>

            <!-- Tombol Kanan -->
            <div class="d-flex align-items-center ms-lg-3">

                <?php if (session()->get('role') == 'member') : ?>

                    <a href="<?= base_url('logout') ?>"
                        class="btn btn-outline-danger border-2 rounded-pill px-4">
                        <i class="fas fa-sign-out-alt me-2"></i>
                        Logout
                    </a>

                <?php else : ?>

                    <a href="<?= base_url('login') ?>"
                        class="btn btn-outline-primary border-2 rounded-pill px-4">
                        Mulai Sekarang
                    </a>

                <?php endif; ?>

            </div>

        </div>

    </nav>

</div>
<!-- Navbar End -->
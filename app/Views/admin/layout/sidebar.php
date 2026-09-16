<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="<?= base_url('/') ?>" class="brand-link text-center">
        <i class="fas fa-dumbbell text-warning mr-2"></i>
        <span class="brand-text font-weight-bold">
            Dewangga Gym
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="info w-100 text-center">

                <h6 class="mb-1 text-white">
                    <?= esc(session()->get('nama')) ?>
                </h6>

                <small class="text-muted">
                    Administrator
                </small>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- ==========================
                     MENU UTAMA
                =========================== -->
                <li class="nav-header">
                    MENU UTAMA
                </li>

                <li class="nav-item">

                    <a href="<?= base_url('dashboard') ?>" class="nav-link active">

                        <i class="nav-icon fas fa-tachometer-alt"></i>

                        <p>Dashboard</p>

                    </a>

                </li>

                <!-- ==========================
                     MASTER DATA
                =========================== -->

                <li class="nav-header">
                    MASTER DATA
                </li>

                <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-database"></i>

                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">

                            <a href="<?= base_url('latihan') ?>" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Data Latihan</p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="<?= base_url('rule') ?>" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Rule Decision Tree</p>

                            </a>

                        </li>

                        <li class="nav-item">

                            <a href="<?= base_url('user') ?>" class="nav-link">

                                <i class="far fa-circle nav-icon"></i>

                                <p>Kelola User</p>

                            </a>

                        </li>

                    </ul>

                </li>

                <!-- ==========================
                     DATA REKOMENDASI
                =========================== -->

                <li class="nav-header">
                    DATA REKOMENDASI
                </li>

                <li class="nav-item">

                    <a href="<?= base_url('riwayat') ?>" class="nav-link">

                        <i class="nav-icon fas fa-history"></i>

                        <p>Kelola Riwayat</p>

                    </a>

                </li>

                <!-- ==========================
                     AKUN
                =========================== -->

                <li class="nav-header">
                    AKUN
                </li>

                <li class="nav-item">

                    <a href="<?= base_url('logout') ?>" class="nav-link">

                        <i class="nav-icon fas fa-sign-out-alt text-danger"></i>

                        <p>Logout</p>

                    </a>

                </li>

            </ul>

        </nav>

    </div>

</aside>
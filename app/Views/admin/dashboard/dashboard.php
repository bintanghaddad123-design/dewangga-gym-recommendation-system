<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper">

    <!-- Header -->
    <section class="content-header">
        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">
                    <h1>Dashboard Admin</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('dashboard') ?>">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>

            </div>

        </div>
    </section>

    <!-- Main Content -->
    <section class="content">

        <div class="container-fluid">

            <!-- Welcome -->
            <div class="alert alert-success">

                <h5>
                    <i class="fas fa-check-circle"></i>
                    Selamat Datang
                </h5>

                <p class="mb-0">
                    Halo,
                    <strong><?= esc(session()->get('nama')) ?></strong>.
                    Selamat datang di Sistem Rekomendasi Latihan Fitness untuk Pemula
                    menggunakan metode Decision Tree pada Dewangga Gym.
                </p>

            </div>

            <!-- Statistik Dashboard -->
            <div class="row">

                <!-- User -->
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="small-box bg-primary">

                        <div class="inner">
                            <h3><?= $jumlahUser ?></h3>
                            <p>Jumlah User</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>

                    </div>

                </div>

                <!-- Latihan -->
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="small-box bg-success">

                        <div class="inner">
                            <h3><?= $jumlahLatihan ?></h3>
                            <p>Data Latihan</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-dumbbell"></i>
                        </div>

                    </div>

                </div>

                <!-- Rule -->
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="small-box bg-warning">

                        <div class="inner">
                            <h3><?= $jumlahRule ?></h3>
                            <p>Rule Decision Tree</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-project-diagram"></i>
                        </div>

                    </div>

                </div>

                <!-- Riwayat -->
                <div class="col-lg-3 col-md-6 col-sm-6">

                    <div class="small-box bg-danger">

                        <div class="inner">
                            <h3><?= $jumlahRiwayat ?></h3>
                            <p>Riwayat Rekomendasi</p>
                        </div>

                        <div class="icon">
                            <i class="fas fa-history"></i>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Informasi -->
            <div class="card">

                <div class="card-header bg-info">

                    <h3 class="card-title">
                        <i class="fas fa-info-circle"></i>
                        Informasi Sistem
                    </h3>

                </div>

                <div class="card-body">

                    <p>
                        Dashboard ini digunakan sebagai halaman utama administrator
                        untuk memantau kondisi sistem rekomendasi latihan fitness.
                    </p>

                    <ul class="mb-0">
                        <li>Melihat jumlah data pengguna.</li>
                        <li>Melihat jumlah data latihan.</li>
                        <li>Melihat jumlah rule Decision Tree.</li>
                        <li>Melihat jumlah riwayat rekomendasi.</li>
                    </ul>

                </div>

            </div>

        </div>

    </section>

</div>

<?= $this->endSection() ?>
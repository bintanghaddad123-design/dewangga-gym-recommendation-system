<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left Navbar -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <span class="nav-link font-weight-bold">
                <i class="fas fa-dumbbell text-primary mr-1"></i>
                Dewangga Gym
            </span>
        </li>
    </ul>

    <!-- Right Navbar -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item d-none d-md-block">
            <span class="nav-link">
                <i class="fas fa-user-circle text-primary mr-1"></i>
                <?= esc(session()->get('nama')) ?>
            </span>
        </li>

        <li class="nav-item">
            <a href="<?= base_url('logout') ?>" class="nav-link text-danger">
                <i class="fas fa-sign-out-alt"></i>
                <span class="d-none d-md-inline">Logout</span>
            </a>
        </li>

    </ul>

</nav>
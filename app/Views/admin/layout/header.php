<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dewangga Gym | Sistem Rekomendasi Latihan Fitness</title>

    <meta name="description" content="Sistem Rekomendasi Latihan Fitness Dewangga Gym">
    <meta name="author" content="Dewangga Gym">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/plugins/fontawesome-free/css/all.min.css') ?>">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/adminlte.min.css') ?>">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            background: #f4f6f9;
            font-size: 15px;
        }

        .wrapper {
            min-height: 100vh;
        }

        /* Brand */
        .brand-link {
            text-align: center;
            font-weight: 600;
            letter-spacing: .5px;
        }

        .brand-link .brand-text {
            font-size: 18px;
        }

        /* Navbar */
        .main-header {
            border-bottom: 1px solid #dee2e6;
        }

        /* Sidebar */
        .main-sidebar {
            box-shadow: 2px 0 15px rgba(0, 0, 0, .08);
        }

        .nav-sidebar .nav-link {
            border-radius: .4rem;
            margin: 2px 8px;
            transition: .2s;
        }

        .nav-sidebar .nav-link:hover {
            transform: translateX(3px);
        }

        .nav-sidebar .nav-link.active {
            border-radius: .4rem;
        }

        .nav-header {
            font-size: 12px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Content */
        .content-wrapper {
            background: #f4f6f9;
        }

        .content-header h1 {
            font-weight: 600;
        }

        /* Card */
        .card {
            border: none;
            border-radius: .75rem;
        }

        .card-header {
            font-weight: 600;
        }

        /* Footer */
        .main-footer {
            font-size: 14px;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">

<div class="wrapper">
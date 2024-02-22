<!DOCTYPE html>
<html>

    <head>
        <!-- FAV ICON -->
        <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png') ?>" type="image/png">
        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">
        <!-- APP.CSS -->
        <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
    </head>

    <body>
    
    <nav class="container-fluid">
        <div class="row align-items-center">
            <div class="col p-3">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="CID BURGER LOGO">
            </div>
            <div class="col p-3 pe-5 d-flex flex-row justify-content-end">
                <div><a class="nav-link ms-5" href="<?= site_url('/') ?>"> INICIO </a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/products') ?>"> PRODUTOS </a></div>
                <div><a class="nav-link ms-5" href="<?= site_url('/where_we_are') ?>"> ONDE ESTAMOS? </a></div>
            </div>
        </div>
    </nav>

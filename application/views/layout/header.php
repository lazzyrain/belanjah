<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="robots" content="noindex"> -->
    <meta http-equiv="Cache-Control" content="max-age=3600">
    <meta name="description" content="Belanjah... belanja ajah, dimana ajah, dan kapan ajah 🛒| Semua bisa didapatkan di Belanjah.">
    <meta content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no, user-scalable=no" name="viewport">

    <meta name="theme-color" content="#FFFFFF">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title><?= $title; ?></title>

    <link rel="icon" href="<?= base_url(); ?>assets/icon/icon.png" type="image/png" />
    <link rel="shortcut icon" href="<?= base_url(); ?>images/icons/icon-72x72.png" type="image/png">
    <link rel="apple-touch-icon" href="<?= base_url(); ?>images/icons/icon-512x512.png" type="image/png">
    <link rel="apple-touch-startup-image" href="<?= base_url(); ?>images/icons/icon-512x512.png">

    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/bootstrap5/css/bootstrap.min.css">

    <!-- General CSS Files -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/fontawesome-free/css/all.min.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">

    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/css/custom.css">

    <noscript>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap5/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/izitoast/css/iziToast.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/custom.css">
    </noscript>

    <script src="<?= base_url('assets/js/jquery/jquery-3.6.0.min.js'); ?>"></script>
    <script defer src="<?= base_url('assets/modules/jquery-ui/jquery-ui.min.js'); ?>"></script>

    <?php
    /**
     * Select 2
     * 
     */
    if (getUrlBySegment(1) != '') { ?>
        <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'" href="<?= base_url(); ?>assets/select2/select2.min.css">
        <noscript>
            <link rel="stylesheet" href="<?= base_url(); ?>assets/select2/select2.min.css">
        </noscript>
        <script src="<?= base_url('assets/select2/select2.min.js'); ?>"></script>
    <?php } ?>
</head>

<body style="background-color: #FEFEFE; font-family: 'Inter Custom', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important; color: black;">
    <main class="tw-min-h-screen tw-w-full">
    <!-- <main class="tw-min-h-screen tw-w-full tw-bg-red-500 sm:tw-bg-green-500 md:tw-bg-blue-500 lg:tw-bg-yellow-500 xl:tw-bg-lime-800"> -->
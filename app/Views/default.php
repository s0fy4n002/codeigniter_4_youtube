<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lunoz - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('template/assets') ?>/images/favicon.ico">

    <!-- App css -->
    <link href="<?= base_url('template/assets') ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/assets') ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('template/assets') ?>/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?= $this->include('partials/header') ?>

        <?= $this->include('partials/sidebar') ?>
       

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

           
            <?= $this->renderSection('content') ?>

            <?= $this->include('partials/footer') ?>

        </div>

    </div>

    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="<?= base_url('template/assets') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/metismenu.min.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/waves.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/simplebar.min.js"></script>

    <!-- Morris Js-->
    <script src="<?= base_url('template/plugins') ?>/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="<?= base_url('template/plugins') ?>/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="<?= base_url('template/assets') ?>/pages/dashboard-demo.js"></script>

    <!-- App js -->
    <script src="<?= base_url('template/assets') ?>/js/theme.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- start: Icons -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- start: Icons -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="<?= base_url('template/assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('template/assets') ?>/css/style.css">
    <?= $this->renderSection('addon-css') ?>

    <!-- end: CSS -->
    <title><?= $this->renderSection('page_title', true) ?></title>
</head>

<body>

  
    <?= $this->include('partials/sidebar') ?>

    <div class="sidebar-overlay"></div>
 

    <main class="bg-light">
        <div class="p-2">           
            <?= $this->include('partials/nav') ?>

            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <script src="<?= base_url('template/assets') ?>/js/jquery.min.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('template/assets') ?>/js/script.js"></script>
    <?= $this->renderSection('addon-script') ?>

</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title><?= $title; ?></title>

    <!-- Site favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body>
    <div class="error-page d-flex align-items-center flex-wrap justify-content-center pd-20">
        <div class="pd-10">
            <div class="error-page-wrap text-center">
                <h1>404</h1>
                <h3>Error: 404 Page Not Found</h3>
                <p>Sorry, the page you’re looking for cannot be accessed.<br>Either check the URL</p>
                <div class="pt-20 mx-auto max-width-200">
                    <a href="<?= base_url('user'); ?>" class="btn btn-success btn-block btn-lg">Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- js -->
    <script src="<?= base_url(); ?>assets/vendors/scripts/core.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/script.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/process.js"></script>
    <script src="<?= base_url(); ?>assets/vendors/scripts/layout-settings.js"></script>
</body>

</html>
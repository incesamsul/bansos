<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title><?= $title; ?></title>

	<!-- Site favicon -->
	<!-- <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>assets/vendors/images/favicon-16x16.png"> -->

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<!-- <link href="<?= base_url(); ?>assets/fontawesome/css/fontawesome.css" rel="stylesheet" type="text/css"> -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendors/styles/style.css">

	<!-- MY CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/mycss.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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
	<!-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo"><img src="<?= base_url(); ?>assets/vendors/images/deskapp-logo.svg" alt=""></div>
            <div class='loader-progress' id="progress_div">
                <div class='bar' id='bar1'></div>
            </div>
            <div class='percent' id='percent1'>0%</div>
            <div class="loading-text">
                Loading...
            </div>
        </div>
    </div> -->

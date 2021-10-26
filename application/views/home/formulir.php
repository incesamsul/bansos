<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title><?= $title; ?></title>
	<link href="<?= base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/template/assets/css/fontawesome.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/template/assets/css/templatemo-sixteen.css">
	<link rel="stylesheet" href="<?= base_url(); ?>assets/template/assets/css/owl.css">

</head>

<body>

	<!-- Header -->
	<header class="">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url('home'); ?>">
					<h2>Bantuan <em>Sosial</em></h2>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="<?= base_url('home'); ?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('home/formulir'); ?>">Formulir
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<?php if (!$this->session->userdata('email')) { ?>
							<li class="nav-item">
								<a class="nav-link" href="<?= base_url('auth'); ?>">Login</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<!-- Page Content -->
	<div class="page-heading contact-heading header-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content">
						<h4>SISTEM INFORMASI</h4>
						<h2>Bantuan Sosial</h2>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="team-members">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Formulir Pendaftaran</h2>
						<?= $this->session->flashdata('message'); ?>
					</div>
				</div>
				<?php foreach ($jenis_bantuan as $jb) : ?>
					<div class="col-md-4">
						<div class="team-member">
							<div class="thumb-container">
								<img src="<?= base_url('assets/img/bantuan/' . $jb['image']); ?>" alt="" style="max-height: 200px;">
							</div>
							<div class="down-content">
								<h4><?= $jb['nama_bantuan']; ?></h4>
								<a href="<?= base_url('home/pendaftaran/' . $jb['slug_bantuan']); ?>" class="filled-button bt-sm mt-2">Daftar</a>
								<a data-jenis_bantuan="<?= $jb['slug_bantuan'] ?>" href="#" data-toggle="modal" data-target="#modalBantuan" class="btn-info-bantuan filled-button text-white bg-info bt-sm mt-2">Info</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="inner-content">
						<?php foreach ($footer as $f) : ?>
							<p>Copyright &copy; <?= date('Y'); ?> <?= $f['nama_perusahaan']; ?> </p>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- MODAL BANTUAN -->
	<!-- Modal -->
	<div class="modal fade" id="modalBantuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Bantuan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="alert alert-info alert-info-wrapper">
						tidak bisa memuat data ...
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Bootstrap core JavaScript -->
	<script src="<?= base_url(); ?>assets/template/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


	<!-- Additional Scripts -->
	<script src="<?= base_url(); ?>assets/template/assets/js/custom.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/owl.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/slick.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/isotope.js"></script>
	<script src="<?= base_url(); ?>assets/template/assets/js/accordions.js"></script>


	<script language="text/Javascript">
		cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
		function clearField(t) { //declaring the array outside of the
			if (!cleared[t.id]) { // function makes it static and global
				cleared[t.id] = 1; // you could use true and false, but that's more typing
				t.value = ''; // with more chance of typos
				t.style.color = '#fff';
			}
		}
	</script>
	<script>
		$('.btn-info-bantuan').on('click', function(e) {
			let jenisBantuan = $(this).data('jenis_bantuan');
			console.log(jenisBantuan);
			if (jenisBantuan == 'bantuan-raskin') {
				$('.alert-info-wrapper').html('Upload foto KIS anda pada form formulir pendaftaran');
			} else if (jenisBantuan == 'bantuan-phk') {
				$('.alert-info-wrapper').html('upload scan surat keterangan PHK dari kantor tempat bekerja sebelumnya pada form formulir pendaftaran');
			} else if (jenisBantuan !== 'bantuan-phk' || jenisBantuan !== 'bantuan-raskin') {
				$('.alert-info-wrapper').html('upload scan surat keterangan perkerjaan yang di buat di kelurahan pada form formulir pendaftaran');
			}


		})
	</script>


</body>

</html>

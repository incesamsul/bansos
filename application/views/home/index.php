<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<title><?= $title; ?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?= base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

	<!-- Additional CSS Files -->
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
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('home'); ?>">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
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
	<!-- Banner Starts Here -->
	<div class="banner header-text">
		<div class="owl-banner owl-carousel">
			<div class="banner-item-01">
				<div class="text-content">
					<h4>SISTEM INFORMASI</h4>
					<h2>Bantuan Sosial</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner Ends Here -->
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<div class="section-heading">
					<h2>Cek Penerima</h2>
				</div>
			</div>
			<div class="col-md-6">
				<?php echo form_open('home'); ?>
				<div class="input-group mb-3">
					<input type="text" name="search_penerima" id="search_penerima" class="form-control" placeholder="Masukkan nik..." autocomplete="off" autofocus>
					<div class="input-group-append">
						<input type="submit" class="btn btn-success " name="submit">
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php
				if (!is_null($datas)) {
					if (count($datas)) {
						foreach ($datas as $d) {
							if ($d->menerima == '0') {
								$menerima = 'belum terkonfirmasi';
							} else {
								$menerima = 'sudah terkonfirmasi';
							}
							$pesan = '<div class="alert alert-success" role="alert">Nik :' . $d->nik . '<br> Nama : ' . $d->nama . '<br>Bantuan : ' . $d->nama_bantuan . '<br>Status : ' . $menerima . '</div>';
							echo $pesan;
						}
					} else {
						$pesan = '<div class="alert alert-danger" role="alert">Maaf, nik : ' . $keyword . ' belum terdaftar!</div>';
						echo $pesan;
					}
				}
				?>
				<!-- <?= $this->session->flashdata('message'); ?> -->
			</div>
		</div>
	</div>
	<div class="latest-products mb-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Jenis Bantuan Sosial</h2>
						<!-- Button trigger modal -->
					</div>
				</div>
				<?php foreach ($getBantuan as $b) : ?>
					<div class="col-md-3">
						<div class="product-item text-center">
							<a data-toggle="modal" data-target="#modalBantuan" href="#"><img src="<?= base_url('assets/img/bantuan/' . $b['image']); ?>" alt=""></a>
							<div class="down-content">
								<h4><?= $b['nama_bantuan']; ?></h4>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>


	<div class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Informasi</h2>
					</div>
				</div>
				<?php foreach ($getNews as $n) : ?>
					<div class="col-md-12">
						<div class="inner-content">
							<div class="row">
								<div class="col-md-8">
									<h4><?= $n['title']; ?></h4>
									<p><?= $n['deskripsi']; ?></p>
								</div>
								<div class="col-md-4">
									<a href="#" class="filled-button"><?= $n['date_created']; ?></a>
								</div>
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
					<h4>Tata cara mendaftar bantuan </h4>
					<ol>
						<li>Datang ke kantor lurah Bonto perak</li>
						<li>Dengan Berkas Sebagai Berkikut</li>
						<ul>
							<li>Kartu Keluarga</li>
							<li>KTP (Kartu Tanda Penduduk)</li>
						</ul>
						<li>Menunggu informasi dari kantor lurah</li>
						<li>Data bisa di cek di situs ketika sudah terdaftar</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</body>

</html>

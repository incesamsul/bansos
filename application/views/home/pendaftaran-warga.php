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
	<div class="page-heading contact-heading header-text">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="text-content">
						<h4>Bantuan Sosial</h4>
						<h2><?= $title; ?></h2>
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
						<a href="<?= base_url('home/formulir'); ?>" class="btn btn-success btn-sm mb-2">Back</a>
						<h2>Formulir <?= $title; ?></h2>
					</div>
				</div>
				<?php foreach ($getPendaftaran as $gp) : ?>
					<div class="col-md-12">
						<?= form_open_multipart('home/pendaftaran/' . $gp['slug_bantuan']); ?>
						<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group row">
									<label for="nik" class="col-sm-3 col-form-label">NIK</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
										<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= set_value('nama_lengkap'); ?>">
										<?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="tempat_lahir" class="col-sm-3 col-form-label">Tempat Lahir</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir'); ?>">
										<?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="tanggal_lahir" class="col-sm-3 col-form-label">Tanggal Lahir</label>
									<div class="col-sm-12 col-md-9">
										<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
										<?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="jkl" class="col-sm-3 col-form-label">Jenis Kelamin</label>
									<div class="col-sm-12 col-md-9">
										<div class="row">
											<div class="col-lg-6">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="jkl1" name="jkl" class="custom-control-input" value="Pria">
													<label class="custom-control-label" for="jkl1">Pria</label>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="jkl2" name="jkl" class="custom-control-input" value="Wanita">
													<label class="custom-control-label" for="jkl2">Wanita</label>
												</div>
											</div>
										</div>
										<?= form_error('jkl', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="status" class="col-sm-3 col-form-label">Status</label>
									<div class="col-sm-12 col-md-9">
										<div class="row">
											<div class="col-lg-6">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="status1" name="status" class="custom-control-input" value="Menikah">
													<label class="custom-control-label" for="status1">Menikah</label>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="custom-control custom-radio mb-5">
													<input type="radio" id="status2" name="status" class="custom-control-input" value="Belum Menikah">
													<label class="custom-control-label" for="status2">Belum Menikah</label>
												</div>
											</div>
										</div>
										<?= form_error('status', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
									<div class="col-sm-12 col-md-9">
										<input type="text" class="form-control" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
										<?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>

								<div class="form-group row">
									<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
									<div class="col-sm-12 col-md-9">
										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<span class="input-group-text" id="foto">Foto</span>
											</div>
											<div class="custom-file">
												<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
												<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
											</div>
										</div>
										<?= $this->session->flashdata('message'); ?>
										<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>

							</div>
							<div class="col-md-6">
								<?php if ($gp['id'] == 4) { ?>
									<div class="form-group row">
										<label for="old_pekerjaan" class="col-sm-3 col-form-label">Pekerjaan Sebelumnya</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="old_pekerjaan" name="old_pekerjaan" value="<?= set_value('old_pekerjaan'); ?>" required>
											<?= form_error('old_pekerjaan', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="nganggur" class="col-sm-3 col-form-label">Lama Menganggur</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="nganggur" name="nganggur" value="<?= set_value('nganggur'); ?>" required>
											<?= form_error('nganggur', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								<?php } else if ($gp['id'] == 5 || $gp['id'] == 6 || $gp['id'] == 7 || $gp['id'] == 8) { ?>
									<?php if ($gp['id'] == 5) { ?>
										<div class="form-group row">
											<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-12 col-md-9">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Guru Mengaji" readonly>
												<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									<?php } else if ($gp['id'] == 6) { ?>
										<div class="form-group row">
											<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-12 col-md-9">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Imam Masjid" readonly>
												<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									<?php } else if ($gp['id'] == 7) { ?>
										<div class="form-group row">
											<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-12 col-md-9">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Pemandi Jenaza" readonly>
												<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									<?php } else { ?>
										<div class="form-group row">
											<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
											<div class="col-sm-12 col-md-9">
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Pembersih Kuburan" readonly>
												<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
									<?php } ?>
									<div class="form-group row">
										<label for="penghasilan" class="col-sm-3 col-form-label">Penghasilan</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="penghasilan" name="penghasilan" value="<?= set_value('penghasilan'); ?>">
											<?= form_error('penghasilan', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="lama_bekerja" class="col-sm-3 col-form-label">Lama Bekerja</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="lama_bekerja" name="lama_bekerja" value="<?= set_value('lama_bekerja'); ?>" required>
											<?= form_error('lama_bekerja', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								<?php } else { ?>
									<div class="form-group row">
										<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?= set_value('pekerjaan'); ?>">
											<?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="penghasilan" class="col-sm-3 col-form-label">Penghasilan</label>
										<div class="col-sm-12 col-md-9">
											<input type="text" class="form-control" id="penghasilan" name="penghasilan" value="<?= set_value('penghasilan'); ?>">
											<?= form_error('penghasilan', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								<?php } ?>
								<div class="form-group row">
									<label for="jml_tanggungan" class="col-sm-6 col-form-label">Jumlah Tanggungan</label>
									<div class="col-sm-12 col-md-6">
										<input type="text" class="form-control" id="jml_tanggungan" name="jml_tanggungan" value="<?= set_value('jml_tanggungan'); ?>">
										<?= form_error('jml_tanggungan', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<div class="form-group row">
									<label for="jml_anak" class="col-sm-6 col-form-label">Jumlah Anak</label>
									<div class="col-sm-12 col-md-6">
										<input type="text" class="form-control" id="jml_anak" name="jml_anak" value="<?= set_value('jml_anak'); ?>">
										<?= form_error('jml_anak', '<small class="text-danger">', '</small>'); ?>
									</div>
								</div>
								<?php if ($gp['id'] == 1 || $gp['id'] == 2) { ?>
									<div class="form-group row">
										<label for="lahan_kontrak" class="col-sm-6 col-form-label">Luas Lahan Kontrak</label>
										<div class="col-sm-12 col-md-6">
											<input type="text" class="form-control" id="lahan_kontrak" name="lahan_kontrak" value="<?= set_value('lahan_kontrak'); ?>" required>
											<?= form_error('lahan_kontrak', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="lahan_pribadi" class="col-sm-6 col-form-label">Luas Lahan Pribadi</label>
										<div class="col-sm-12 col-md-6">
											<input type="text" class="form-control" id="lahan_pribadi" name="lahan_pribadi" value="<?= set_value('lahan_pribadi'); ?>" required>
											<?= form_error('lahan_pribadi', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								<?php } else if ($gp['id'] == 3) { ?>
									<div class="form-group row">
										<label for="rumah" class="col-sm-6 col-form-label">Type Rumah</label>
										<div class="col-sm-12 col-md-6">
											<div class="row">
												<div class="col-lg-6">
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="rumah1" name="rumah" class="custom-control-input" value="Kayu">
														<label class="custom-control-label" for="rumah1">Kayu</label>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="custom-control custom-radio mb-5">
														<input type="radio" id="rumah2" name="rumah" class="custom-control-input" value="Batu">
														<label class="custom-control-label" for="rumah2">Batu</label>
													</div>
												</div>
											</div>
											<?= form_error('rumah', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
									<div class="form-group row">
										<label for="lahan_pribadi" class="col-sm-6 col-form-label">Luas Lahan</label>
										<div class="col-sm-12 col-md-6">
											<input type="text" class="form-control" id="lahan_pribadi" name="lahan_pribadi" value="<?= set_value('lahan_pribadi'); ?>" required>
											<?= form_error('lahan_pribadi', '<small class="text-danger">', '</small>'); ?>
										</div>
									</div>
								<?php } ?>
								<div class="form-group row justify-content-end text-right">
									<div class="col-sm-12 col-md-9">
										<button type="submit" class="btn btn-success">Daftar</button>
									</div>
								</div>
							</div>
						</div>
						</form>
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
	<script>
		$('input[type="file"]').change(function(e) {
			var fileName = e.target.files[0].name;
			$('.custom-file-label').html(fileName);
		});
	</script>


</body>

</html>

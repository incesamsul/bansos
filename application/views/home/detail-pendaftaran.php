<div class="min-height-200px">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title">
					<h4><?= $title; ?></h4>
				</div>
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">SISFOR Bansos Masyarakat</a></li>
						<li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<div class="card-box mb-30">
		<div class="pd-20">
			<h4 class="text-primary h4"><?= $title; ?></h4>
			<a href="<?= base_url('pendaftaran'); ?>" class="btn btn-sm btn-primary">Back</a>
		</div>
		<?php foreach ($getPendaftaran as $gp) : ?>
			<?php if ($gp['id'] == 1) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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


						</div>
						<div class="col-md-6">
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 2) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 3) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 4) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 5) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Guru Mengaji" readonly>
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
							<div class="form-group row">
								<label for="lama_bekerja" class="col-sm-3 col-form-label">Lama Bekerja</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="lama_bekerja" name="lama_bekerja" value="<?= set_value('lama_bekerja'); ?>" required>
									<?= form_error('lama_bekerja', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 6) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Imam Masjid" readonly>
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
							<div class="form-group row">
								<label for="lama_bekerja" class="col-sm-3 col-form-label">Lama Bekerja</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="lama_bekerja" name="lama_bekerja" value="<?= set_value('lama_bekerja'); ?>" required>
									<?= form_error('lama_bekerja', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 7) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Pemandi Jenaza" readonly>
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
							<div class="form-group row">
								<label for="lama_bekerja" class="col-sm-3 col-form-label">Lama Bekerja</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="lama_bekerja" name="lama_bekerja" value="<?= set_value('lama_bekerja'); ?>" required>
									<?= form_error('lama_bekerja', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else if ($gp['id'] == 8) { ?>
				<div class="pd-20">
					<?= form_open_multipart('pendaftaran/bansos/' . $gp['slug_bantuan']); ?>
					<input type="hidden" class="form-control" id="jenis_bantuan_id" name="jenis_bantuan_id" value="<?= $gp['id']; ?>">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group row">
								<label for="alamat" class="col-sm-3 col-form-label">Upload foto</label>
								<div class="col-sm-12 col-md-9">
									<div class="input-group mb-3">
										<div class="custom-file">
											<input required type="file" name="foto" class="custom-file-input" id="foto" aria-describedby="foto">
											<label class="custom-file-label" for="inputGroupFile01">Pilih File</label>
										</div>
									</div>
									<?= $this->session->flashdata('message'); ?>
									<?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nik" class="col-sm-3 col-form-label">NIK</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="nik" name="nik" value="<?= set_value('nik'); ?>" autocomplete="off">
									<?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
							<div class="form-group row">
								<label for="nama_lengkap" class="col-sm-3 col-form-label">Nama Lengkap</label>
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
									<input type="text" class="form-control date-picker" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir'); ?>" autocomplete="off">
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

						</div>
						<div class="col-md-6">
							<div class="form-group row">
								<label for="pekerjaan" class="col-sm-3 col-form-label">Pekerjaan</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="Pembersih Kuburan" readonly>
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
							<div class="form-group row">
								<label for="lama_bekerja" class="col-sm-3 col-form-label">Lama Bekerja</label>
								<div class="col-sm-12 col-md-9">
									<input type="text" class="form-control" id="lama_bekerja" name="lama_bekerja" value="<?= set_value('lama_bekerja'); ?>" required>
									<?= form_error('lama_bekerja', '<small class="text-danger">', '</small>'); ?>
								</div>
							</div>
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
							<div class="form-group row justify-content-end text-right">
								<div class="col-sm-12 col-md-9">
									<button type="submit" class="btn btn-primary">Daftar</button>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
			<?php } else { ?>
				<p>1</p>
			<?php } ?>

		<?php endforeach; ?>
	</div>
</div>

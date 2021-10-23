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
	<div class="row pb-10">
		<?php foreach ($getTotal as $gb) : ?>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<?php if ($gb['menerima'] == '0' || is_null($gb['menerima'])) : ?>
								<div class="weight-700 font-24 text-dark">0 Orang</div>
								<div class="font-14 text-secondary weight-500"><?= $gb['nama_bantuan']; ?> </div>
							<?php else : ?>
								<div class="weight-700 font-24 text-dark"><?= $gb['total']; ?> Orang</div>
								<div class="font-14 text-secondary weight-500"><?= $gb['nama_bantuan']; ?> </div>
							<?php endif ?>
						</div>
						<div class="widget-icon">
							<img src="<?= base_url('assets/img/bantuan/' . $gb['image']); ?>" alt="">
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<div class="row">
		<div class="col-md-6 offset-md-6">
			<?php echo form_open('dashboard'); ?>
			<div class="input-group mb-20">
				<input type="text" name="search_penerima" id="search_penerima" class="form-control" placeholder="Masukkan NIK..." autocomplete="off" autofocus>
				<div class="input-group-append">
					<input type="submit" class="btn btn-primary " name="submit" value="Search">
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<?= $this->session->flashdata('message'); ?>
	<?php if ($this->session->userdata('role_id') < 3) { ?>
		<div class="card-box mb-30">
			<div class="pd-20">
				<h4 class="text-primary h4">Calon Penerima Bantuan</h4>
			</div>
			<div class="pd-20">
				<table class="data-table table stripe hover nowrap">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Bantuan</th>
							<th>Nama</th>
							<th>TTL</th>
							<th>JKL</th>
							<th>Status</th>
							<th>Pekerjaan</th>
							<th>Penghasilan</th>
							<th>Jumlah</th>
							<th class="datatable-nosort">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($getCalonPenerima as $k) : ?>
							<tr>
								<td class="table-plus"><?= $k['nama_bantuan']; ?></td>
								<td><?= $k['nama']; ?></td>
								<td><?= $k['tempat_lahir']; ?>,<br><?= $k['tgl_lahir']; ?></td>
								<td><?= $k['jkl']; ?></td>
								<td><?= $k['status']; ?></td>
								<td><?= $k['pekerjaan']; ?></td>
								<td><?= rupiah($k['penghasilan']); ?></td>
								<td>A : <?= $k['jml_anak']; ?><br> T : <?= $k['jml_tanggungan']; ?></td>
								<td>
									<div class="form-check">
										<input type="checkbox" class="isCalon" value="<?php echo $k['id']; ?>" <?php if ($k['is_active'] == 1) echo "checked='checked'"; ?> data-toggle="checkbox">
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	<?php } ?>
</div>

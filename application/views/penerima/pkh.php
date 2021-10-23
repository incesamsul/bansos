<div class="min-height-200px">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title">
					<h4><?= $title; ?></h4>
				</div>
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('penerima/datapenerima'); ?>">Penerima</a></li>
						<li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<?= $this->session->flashdata('message'); ?>
	<div class="card-box mb-30">
		<div class="pd-20">
			<h4 class="text-primary h4"><?= $title; ?></h4>
		</div>
		<div class="pb-20">
			<table class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th class="table-plus datatable-nosort">NIK</th>
						<th>Nama</th>
						<th>TTL</th>
						<th>JKL</th>
						<th>Status</th>
						<th>Pekerjaan</th>
						<th>Penghasilan</th>
						<th>Foto Pendukung</th>
						<th>Jumlah</th>
						<?php if ($this->session->userdata('role_id') < 3) { ?>
							<th>Menerima</th>
						<?php } ?>
						<?php if ($this->session->userdata('role_id') == 4) : ?>
							<th class="datatable-nosort">Konfirmasi Lurah</th>
						<?php endif; ?>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach ($getPkh as $k) : ?>
						<tr>
							<td class="table-plus"><?= $i++; ?></td>
							<td><?= $k['nama']; ?></td>
							<td><?= $k['tempat_lahir']; ?>,<br><?= $k['tgl_lahir']; ?></td>
							<td><?= $k['jkl']; ?></td>
							<td><?= $k['status']; ?></td>
							<td><?= $k['pekerjaan']; ?></td>
							<td><?= rupiah($k['penghasilan']); ?></td>
							<?php if (!empty($k['foto'])) : ?>
								<td><img src="<?= base_url('assets/img/foto_pendukung/' . $k['foto']); ?>" alt="foto_pendukung"> <span class="badge badge-info preview-foto">Lihat Foto</span> </td>
							<?php else : ?>
								<td><img src="<?= base_url('assets/img/default.jpg'); ?>" alt="foto_pendukung"> <span class="badge badge-info preview-foto">Lihat Foto</span> </td>
							<?php endif; ?>
							<td>Anak : <?= $k['jml_anak']; ?><br> Tanggungan : <?= $k['jml_tanggungan']; ?></td>
							<?php if ($this->session->userdata('role_id') < 3) { ?>
								<td>
									<div class="form-check">
										<input type="checkbox" class="isMenerima" value="<?php echo $k['id']; ?>" <?php if ($k['menerima'] == 1) echo "checked='checked'"; ?> data-toggle="checkbox">
									</div>
								</td>
							<?php } ?>
							<?php if ($this->session->userdata('role_id') == 4) : ?>
								<td>
									<?php if ($k['menerima'] == 1) : ?>
										<i class="badge badge-success">Diterima</i>
									<?php else : ?>
										<i class="badge badge-danger">belum diterima</i>
									<?php endif ?>
								</td>
							<?php endif; ?>
							<td>
								<div class="table-actions">
									<?php if ($k['menerima'] == 1) : ?>
										<a data-color="#265ed7"><i class="icon-copy dw dw-check"></i></a>
										<a data-color="#265ed7"><i class="icon-copy dw dw-check"></i></a>
									<?php else : ?>
										<a href="<?= base_url('penerima/editpenerima/' . $k['nik']); ?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
										<a onclick="return confirm('Yakin ingin hapus data?')" href="<?= base_url('penerima/hapuspenerima/' . $k['nik']); ?>" data-color="#e95959"><i class="icon-copy dw dw-trash"></i></a>
									<?php endif ?>
									<!-- <a href="<?= base_url('penerima/deletepenerima/' . $k['nik']); ?>" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
								</div>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

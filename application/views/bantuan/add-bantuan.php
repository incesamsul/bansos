<div class="min-height-200px">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title">
					<h4><?= $title; ?></h4>
				</div>
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('bantuan'); ?>">Bantuan</a></li>
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
			<a href="<?= base_url('bantuan'); ?>" class="btn btn-sm btn-primary">Back</a>
		</div>
		<div class="pd-20">
			<?= form_open_multipart('bantuan/addbantuan'); ?>
			<div class="form-group row">
				<label for="nama_bantuan" class="col-sm-3 col-form-label">Nama Bantuan </label>
				<div class="col-sm-12 col-md-9">
					<input type="text" class="form-control" id="nama_bantuan" name="nama_bantuan" value="<?= set_value('nama_bantuan'); ?>">
					<?= form_error('nama_bantuan', '<small class="text-danger">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="jml_penerima" class="col-sm-3 col-form-label">Jumlah Penerima</label>
				<div class="col-sm-12 col-md-9">
					<input type="text" class="form-control" id="jml_penerima" name="jml_penerima" value="<?= set_value('jml_penerima'); ?>">
					<?= form_error('jml_penerima', '<small class="text-danger">', '</small>'); ?>
				</div>
			</div>
			<div class="form-group row">
				<label for="image" class="col-sm-3 col-form-label">Image</label>
				<div class="col-sm-12 col-md-9">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="image" name="image">
						<label class="custom-file-label" for="image">Choose file</label>
					</div>
				</div>
			</div>
			<div class="form-group row justify-content-end">
				<div class="col-sm-12 col-md-9">
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

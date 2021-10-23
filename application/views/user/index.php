<div class="min-height-200px">
	<div class="page-header">
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="title">
					<h4><?= $title; ?></h4>
				</div>
				<nav aria-label="breadcrumb" role="navigation">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?= base_url('user'); ?>">User</a></li>
						<li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>
	<?= $this->session->flashdata('message'); ?>
	<div class="row">
		<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
			<div class="pd-20 card-box height-100-p">
				<div class="profile-photo">
					<img src="<?= base_url('assets/img/profile/' . $user['image']); ?>" alt="" class="avatar-photo">
				</div>
				<h5 class="text-center h5 mb-0"><?= ucwords($user['name']); ?></h5>
				<p class="text-center text-muted font-14">Member since <?= date('d F Y', $user['date_created']); ?></p>
				<div class="profile-info">
					<h5 class="mb-20 h5 text-success">Contact Information</h5>
					<ul>
						<li>
							<span class="text-success">Email Address:</span>
							<?= $user['email']; ?>
						</li>
						<li>
							<span class="text-success">Phone Number:</span>
							+<?= $user['telp']; ?>
						</li>
						<li>
							<span class="text-success">Address:</span>
							<?= $user['address']; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
			<div class="card-box height-100-p overflow-hidden">
				<div class="profile-tab height-100-p">
					<div class="tab height-100-p">
						<ul class="nav nav-tabs customtab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active text-success" data-toggle="tab" href="#timeline" role="tab"><?= $title; ?></a>
							</li>
						</ul>
						<div class="tab-content">
							<!-- Form My Profile -->
							<div class="tab-pane fade show active" id="timeline" role="tabpanel">
								<div class="pd-20">
									<div class="profile-timeline">
										<?= form_open_multipart('user'); ?>
										<div class="form-group row">
											<label class="col-sm-12 col-md-2 col-form-label">Email</label>
											<div class="col-sm-12 col-md-10">
												<input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
											</div>
										</div>
										<div class="form-group row">
											<label for="name" class="col-sm-2 col-form-label">Full name</label>
											<div class="col-sm-12 col-md-10">
												<input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
												<?= form_error('name', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="telp" class="col-sm-2 col-form-label">No. Telp <small class="text-danger"><b>(628)</b></small></label>
											<div class="col-sm-12 col-md-10">
												<input type="text" class="form-control" id="telp" name="telp" value="<?= $user['telp']; ?>">
												<?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="address" class="col-sm-2 col-form-label">Address</label>
											<div class="col-sm-12 col-md-10">
												<input type="text" class="form-control" id="address" name="address" value="<?= $user['address']; ?>">
												<?= form_error('address', '<small class="text-danger">', '</small>'); ?>
											</div>
										</div>
										<div class="form-group row">
											<label for="image" class="col-sm-2 col-form-label">Image</label>
											<div class="col-sm-12 col-md-10">
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="image" name="image">
													<label class="custom-file-label" for="image">Choose file</label>
												</div>
											</div>
										</div>
										<div class="form-group row justify-content-end">
											<div class="col-sm-12 col-md-10">
												<button type="submit" class="btn btn-success">Edit</button>
											</div>
										</div>
										</form>
									</div>
								</div>
							</div>
							<!-- End Form My Profile -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="login-header box-shadow">
	<div class="container-fluid d-flex justify-content-between align-items-center">
		<div class="brand-logo">
			<a href="<?= base_url(); ?>">
				<?php foreach ($settingBlack as $sb) : ?>
					<img src="<?= base_url('assets/img/setting/' . $sb['image']); ?>" alt="">
				<?php endforeach; ?>
			</a>
		</div>
		<div class="login-menu">
		</div>
	</div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-7">
				<?php foreach ($settingLogin as $sr) : ?>
					<img src="<?= base_url('assets/img/setting/' . $sr['image']); ?>" alt="">
				<?php endforeach; ?>
			</div>
			<div class="col-md-6 col-lg-5">
				<div class="login-box bg-white box-shadow border-radius-10">
					<div class="login-title">
						<h2 class="text-center text-success"><?= $title; ?></h2>
					</div>
					<?= $this->session->flashdata('message'); ?>
					<!-- Form -->
					<form method="post" action="<?= base_url('auth'); ?>">
						<?= form_error('email', '<small class="text-danger">', '</small>'); ?>
						<div class="input-group custom">
							<input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
						</div>
						<?= form_error('password', '<small class="text-danger">', '</small>'); ?>
						<div class="input-group custom">
							<input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password">
						</div>
						<div class="row pb-30">
							<div class="col-6">
							</div>
							<div class="col-6">
								<div class="forgot-password"><a href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password</a></div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="input-group mb-0">
									<button class="btn btn-success btn-lg btn-block" type="submit">Sign In</button>
								</div>
							</div>
						</div>
					</form>
					<!-- End Form -->
				</div>
			</div>
		</div>
	</div>
</div>
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
            <ul>
                <li><a href="<?= base_url('auth'); ?>" class="text-success">Login</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <?php foreach ($settingRegister as $sr) : ?>
                    <img src="<?= base_url('assets/img/setting/' . $sr['image']); ?>" alt="">
                <?php endforeach; ?>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-success"><?= $title; ?></h2>
                    </div>
                    <!-- Form -->
                    <form method="post" action="<?= base_url('auth/registration'); ?>">
                        <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Full name" value="<?= set_value('name'); ?>">
                        </div>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group custom">
                            <input type="text" class="form-control form-control-lg" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                        </div>
                        <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" id="password1" name="password1" placeholder="Password">
                        </div>
                        <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg" id="password2" name="password2" placeholder="Repeat Password">
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">Register Account</button>
                                </div>
                                <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">
                                    <a href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
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
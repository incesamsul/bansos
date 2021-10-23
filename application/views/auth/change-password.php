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
             <div class="col-md-6">
                 <img src="vendors/images/forgot-password.png" alt="">
             </div>
             <div class="col-md-6">
                 <div class="login-box bg-white box-shadow border-radius-10">
                     <div class="login-title text-center ">
                         <h2 class="text-success">Reset Password</h2>
                         <h6 class="text-secondary"><?= $this->session->userdata('reset_email'); ?></h6>
                     </div>
                     <h6 class="mb-20">Enter your new password, confirm and submit</h6>
                     <form method="post" action="<?= base_url('auth/changepassword'); ?>">
                         <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                         <div class="input-group custom">
                             <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter new password...">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                             </div>
                         </div>

                         <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                         <div class="input-group custom">
                             <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat password...">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                             </div>
                         </div>
                         <div class="row align-items-center">
                             <div class="col-5">
                                 <div class="input-group mb-0">
                                     <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
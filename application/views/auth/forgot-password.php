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
                     <div class="login-title">
                         <h2 class="text-center text-success">Forgot Password</h2>
                     </div>
                     <?= $this->session->flashdata('message'); ?>
                     <h6 class="mb-20">Enter your email address to reset your password</h6>
                     <form method="post" action="<?= base_url('auth/forgotPassword'); ?>">
                         <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                         <div class="input-group custom">
                             <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                             </div>
                         </div>
                         <div class="row align-items-center">
                             <div class="col-5">
                                 <div class="input-group mb-0">
                                     <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
                                 </div>
                             </div>
                             <div class="col-2">
                                 <div class="font-16 weight-600 text-center" data-color="#707373">OR</div>
                             </div>
                             <div class="col-5">
                                 <div class="input-group mb-0">
                                     <a class="btn btn-outline-success btn-lg btn-block" href="<?= base_url('auth'); ?>">Login</a>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
<div class="left-side-bar">
    <div class="brand-logo text-center">
        <a href="<?= base_url('user'); ?>">
            <?php foreach ($settingWhite as $sw) : ?>
                <img src="<?= base_url('assets/img/setting/' . $sw['image']); ?>" alt="" class="light-logo">
            <?php endforeach; ?>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li>
                    <div class="dropdown-divider my-0"></div>
                </li>

                <?php if ($this->session->userdata('role_id') < 3) { ?>
                    <li>
                        <?php if ($title == 'Dashboard') { ?>
                            <a href="<?= base_url('dashboard'); ?>" class="dropdown-toggle no-arrow active">
                                <span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
                            </a>
                        <?php } else {  ?>
                            <a href="<?= base_url('dashboard'); ?>" class="dropdown-toggle no-arrow ">
                                <span class="micon dw dw-home"></span><span class="mtext">Dashboard</span>
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>
                <?php if ($this->session->userdata('role_id') == 4) { ?>
                    <?php if ($title == 'Pendaftaran') { ?>
                        <li>
                            <a href="<?= base_url('pendaftaran'); ?>" class="dropdown-toggle no-arrow active">
                                <span class="micon dw dw-add-user"></span><span class="mtext">Pendaftaran</span>
                            </a>
                        </li>
                    <?php } else {  ?>
                        <li>
                            <a href="<?= base_url('pendaftaran'); ?>" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-add-user"></span><span class="mtext">Pendaftaran</span>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
                <?php if ($this->session->userdata('email')) { ?>
                    <!-- Query Menu -->
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT `user_menu`.`id`, `menu`,`icon`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>

                    <!-- Looping Menu -->
                    <?php foreach ($menu as $m) : ?>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw <?= $m['icon']; ?>"></span><span class="mtext"><?= $m['menu']; ?></span>
                            </a>
                            <ul class="submenu">

                                <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                                <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                            ";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>

                                <?php foreach ($subMenu as $sm) : ?>
                                    <?php if ($title == $sm['title']) : ?>
                                        <li><a href="<?= base_url($sm['url']); ?>" class="active"><?= $sm['title']; ?></a></li>
                                    <?php else : ?>
                                        <li><a href="<?= base_url($sm['url']); ?>"><?= $sm['title']; ?></a></li>
                                    <?php endif; ?>
                                <?php endforeach;; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                    <li>
                        <a href="<?= base_url('auth/logout'); ?>" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-logout"></span><span class="mtext">Log Out</span>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Admin</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box pb-10">
        <div class="h5 pd-20 mb-0">
            <h4 class="text-primary h4"><?= $title; ?></h4>
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Medium-modal" type="button">Add User</a>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New User</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="<?= base_url('admin/user'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <select class="custom-select2 form-control" name="role_id" style="width: 100%; height: 38px;">
                                        <option value="" selected="" disabled="">Role</option>
                                        <?php foreach ($role as $r) : ?>
                                            <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <table class="data-table table nowrap">
            <thead>
                <tr>
                    <th class="table-plus">Name</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Role</th>
                    <th class="datatable-nosort">Active</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $u) : ?>
                    <tr>
                        <td class="table-plus">
                            <div class="name-avatar d-flex align-items-center">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="<?= base_url('assets/img/profile/' . $u['image']); ?>" class="border-radius-100 shadow" width="40" height="40" alt="">
                                </div>
                                <div class="txt">
                                    <div class="weight-600"><?= $u['name']; ?></div>
                                </div>
                            </div>
                        </td>
                        <td><?= $u['email']; ?></td>
                        <td><?= $u['address']; ?></td>
                        <td>+<?= $u['telp']; ?></td>
                        <td>
                            <span class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7"><?= $u['role']; ?></span>
                        </td>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="userActive" value="<?php echo $u['id']; ?>" <?php if ($u['is_active'] == 1) echo "checked='checked'"; ?> data-toggle="checkbox">
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
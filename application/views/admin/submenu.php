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
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-primary h4">Data <?= $title; ?></h4>
            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Medium-modal" type="button">Add Sub Menu</a>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Sub Menu</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="<?= base_url('admin/submenu'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                                </div>
                                <div class="form-group">
                                    <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px;">
                                        <optgroup label="Select Menu">
                                            <?php foreach ($menu as $m) : ?>
                                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                                        <label class="form-check-label" for="is_active">
                                            Active?
                                        </label>
                                    </div>
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
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">No</th>
                        <th>Menu</th>
                        <th>Title</th>
                        <th>Url</th>
                        <th>Active</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($submenu as $m) : ?>
                        <tr>
                            <td class="table-plus"><?= $i++; ?></td>
                            <td><?= $m['menu']; ?></td>
                            <td><?= $m['title']; ?></td>
                            <td><?= $m['url']; ?></td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="isActive" value="<?php echo $m['id']; ?>" <?php if ($m['is_active'] == 1) echo "checked='checked'"; ?> data-toggle="checkbox">
                                </div>
                            </td>
                            <td>
                                <div class="table-actions">
                                    <a href="<?= base_url('admin/editSubMenu/' . $m['id']); ?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                    <a href="<?= base_url('admin/deleteSubMenu/' . $m['id']); ?>" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
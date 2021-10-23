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
            <h4 class="text-primary h4"><?= $title; ?></h4>
            <a href="<?= base_url('admin/submenu'); ?>" class="btn btn-sm btn-primary">Back</a>
        </div>
        <div class="pd-20">
            <form action="<?= base_url('admin/actionEditSubMenu'); ?>" method="post">
                <?php foreach ($editSubMenu as $em) : ?>
                    <div class="row">
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="menu">Menu</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $em['id']; ?>">
                                <select class="custom-select2 form-control" name="menu_id" style="width: 100%; height: 38px;">
                                    <option value="<?= $em['menu_id']; ?>"><?= $em['menu']; ?></option>
                                    <optgroup label="Select Menu">
                                        <?php foreach ($menu as $m) : ?>
                                            <option value="AK"><?= $m['menu']; ?></option>
                                        <?php endforeach; ?>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="<?= $em['title']; ?>">
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="url">url</label>
                                <input type="text" class="form-control" id="url" name="url" value="<?= $em['url']; ?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>
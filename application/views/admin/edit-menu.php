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
            <h4 class="text-primarys h4"><?= $title; ?></h4>
            <a href="<?= base_url('admin/menu'); ?>" class="btn btn-sm btn-primarys">Back</a>
        </div>
        <div class="pd-20">
            <form action="<?= base_url('admin/actionEditMenu'); ?>" method="post">
                <?php foreach ($editMenu as $em) : ?>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="menu">Menu</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $em['id']; ?>">
                                <input type="text" class="form-control" id="menu" name="menu" value="<?= $em['menu']; ?>">
                                <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="icon">Icon</label>
                                <input type="text" class="form-control" id="icon" name="icon" value="<?= $em['icon']; ?>">
                                <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primarys">Edit</button>
                <?php endforeach; ?>
            </form>
        </div>
    </div>
</div>
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
                        <li class="breadcrumb-item active text-succes" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-success h4"><?= $title; ?></h4>
            <a href="<?= base_url('admin/metode'); ?>" class="btn btn-sm btn-success">Back</a>
        </div>
        <div class="pd-20">
            <?php foreach ($editMetode as $em) : ?>
                <form action="<?= base_url('admin/editMetode/' . $em['id']); ?>" method="post">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="nama_bank">Nama Bank</label>
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $em['id']; ?>">
                                <input type="text" class="form-control" id="nama_bank" name="nama_bank" value="<?= $em['nama_bank']; ?>">
                                <?= form_error('nama_bank', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="nama_rek">Nama Rekening</label>
                                <input type="text" class="form-control" id="nama_rek" name="nama_rek" value="<?= $em['nama_rek']; ?>">
                                <?= form_error('nama_rek', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="no_rek">No Rekening</label>
                                <input type="text" class="form-control" id="no_rek" name="no_rek" value="<?= $em['no_rek']; ?>">
                                <?= form_error('no_rek', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
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
                        <li class="breadcrumb-item active text-success" aria-current="page"><?= $title; ?></li>
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
            <h4 class="text-success h4"><?= $title; ?></h4>
            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#Medium-modal" type="button">Add Metode Pembayaran</a>
            <div class="modal fade" id="Medium-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Add New Metode Pembayaran</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="<?= base_url('admin/metode'); ?>" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama_bank" name="nama_bank" placeholder="Nama Bank">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nama_rek" name="nama_rek" placeholder="Atas Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="no_rek" name="no_rek" placeholder="No Rekening">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Save</button>
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
                        <th>Nama Bank</th>
                        <th>Atas Nama</th>
                        <th>No Rek</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($metode_pembayaran as $m) : ?>
                        <tr>
                            <td class="table-plus"><?= $i++; ?></td>
                            <td><?= $m['nama_bank']; ?></td>
                            <td><?= $m['nama_rek']; ?></td>
                            <td><?= $m['no_rek']; ?></td>
                            <td>
                                <div class="table-actions">
                                    <a href="<?= base_url('admin/editMetode/' . $m['id']); ?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                    <a href="<?= base_url('admin/deleteMetode/' . $m['id']); ?>" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
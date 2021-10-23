<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('bantuan'); ?>">Bantuan</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-primary h4"><?= $title; ?></h4>
            <a href="<?= base_url('bantuan/addbantuan'); ?>" class="btn btn-sm btn-primary">Add bantuan</a>
        </div>
        <div class="pb-20">
            <table class="data-table table stripe hover nowrap">
                <thead>
                    <tr>
                        <th class="table-plus datatable-nosort">No</th>
                        <th>Image</th>
                        <th>Jenis Bantuan</th>
                        <th>Jumlah Penerima</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($getBantuan as $k) : ?>
                        <tr>
                            <td class="table-plus"><?= $i++; ?></td>
                            <td>
                                <img src="<?= base_url('assets/img/bantuan/' . $k['image']); ?>" alt="" class="img-fluid" style="max-height: 60px;">
                            </td>
                            <td><?= $k['nama_bantuan']; ?></td>
                            <td><?= $k['jml_penerima']; ?> Orang</td>
                            <td>
                                <div class="table-actions">
                                    <a href="<?= base_url('bantuan/editbantuan/' . $k['slug_bantuan']); ?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                    <!-- <a href="<?= base_url('bantuan/deletebantuan/' . $k['slug_bantuan']); ?>" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
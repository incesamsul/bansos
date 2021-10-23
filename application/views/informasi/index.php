<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('informasi'); ?>">Informasi</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>


    <?php if ($this->session->userdata('role_id') < 3) { ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-primary h4"><?= $title; ?></h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Bantuan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getNews as $k) : ?>
                            <tr>
                                <td class="table-plus"><?= $i++; ?></td>
                                <td><?= $k['title']; ?></td>
                                <td><?= substr($k['deskripsi'], 0, 20); ?>...</td>
                                <td><?= $k['nama_bantuan']; ?></td>
                                <td><?= $k['date_created']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <?php if ($this->session->userdata('role_id') == 3) { ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-primary h4">Calon Penerima Bantuan</h4>
            </div>
            <div class="pd-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Bantuan</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>JKL</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getCalonPenerima as $k) : ?>
                            <tr>
                                <td class="table-plus"><?= $k['nama_bantuan']; ?></td>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['tempat_lahir']; ?>,<br><?= $k['tgl_lahir']; ?></td>
                                <td><?= $k['jkl']; ?></td>
                                <td><?= $k['status']; ?></td>
                                <td><?= $k['pekerjaan']; ?></td>
                                <td><?= rupiah($k['penghasilan']); ?></td>
                                <td>A : <?= $k['jml_anak']; ?><br> T : <?= $k['jml_tanggungan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-primary h4"><?= $title; ?></h4>
                <a href="<?= base_url('informasi/addinformasi'); ?>" class="btn btn-sm btn-primary">Add informasi</a>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Bantuan</th>
                            <th>Tanggal</th>
                            <th class="datatable-nosort">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getNews as $k) : ?>
                            <tr>
                                <td class="table-plus"><?= $i++; ?></td>
                                <td><?= $k['title']; ?></td>
                                <td><?= substr($k['deskripsi'], 0, 20); ?>...</td>
                                <td><?= $k['nama_bantuan']; ?></td>
                                <td><?= $k['date_created']; ?></td>
                                <td>
                                    <div class="table-actions">
                                        <a href="<?= base_url('informasi/editinformasi/' . $k['id']); ?>" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
                                        <a href="<?= base_url('informasi/deleteinformasi/' . $k['id']); ?>" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
    <?php if ($this->session->userdata('role_id') == 4) { ?>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-primary h4">Calon Penerima Bantuan</h4>
            </div>
            <div class="pd-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">Bantuan</th>
                            <th>Nama</th>
                            <th>TTL</th>
                            <th>JKL</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getCalonPenerima as $k) : ?>
                            <tr>
                                <td class="table-plus"><?= $k['nama_bantuan']; ?></td>
                                <td><?= $k['nama']; ?></td>
                                <td><?= $k['tempat_lahir']; ?>,<br><?= $k['tgl_lahir']; ?></td>
                                <td><?= $k['jkl']; ?></td>
                                <td><?= $k['status']; ?></td>
                                <td><?= $k['pekerjaan']; ?></td>
                                <td><?= rupiah($k['penghasilan']); ?></td>
                                <td>A : <?= $k['jml_anak']; ?><br> T : <?= $k['jml_tanggungan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-box mb-30">
            <div class="pd-20">
                <h4 class="text-primary h4"><?= $title; ?></h4>
            </div>
            <div class="pb-20">
                <table class="data-table table stripe hover nowrap">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Title</th>
                            <th>Deskripsi</th>
                            <th>Bantuan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($getNews as $k) : ?>
                            <tr>
                                <td class="table-plus"><?= $i++; ?></td>
                                <td><?= $k['title']; ?></td>
                                <td><?= substr($k['deskripsi'], 0, 20); ?>...</td>
                                <td><?= $k['nama_bantuan']; ?></td>
                                <td><?= $k['date_created']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</div>
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
    <div class="row">
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-primary h4">Sudah Validasi</h4>
                </div>
                <div class="pd-20">
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pertanian</label>
                        <?php foreach ($getRekapPertanian1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Perikanan</label>
                        <?php foreach ($getRekapPerikanan1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Raskin</label>
                        <?php foreach ($getRekapRaskin1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Guru Mengaji</label>
                        <?php foreach ($getRekapGuru1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Imam Masjid</label>
                        <?php foreach ($getRekapImam1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pemandi Jenazah</label>
                        <?php foreach ($getRekapJenazah1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pembersih Makam</label>
                        <?php foreach ($getRekapMakam1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan PHK</label>
                        <?php foreach ($getRekapPhk1 as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-primary h4">Belum Validasi</h4>
                </div>
                <div class="pd-20">
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pertanian</label>
                        <?php foreach ($getRekapPertanian as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Perikanan</label>
                        <?php foreach ($getRekapPerikanan as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Raskin</label>
                        <?php foreach ($getRekapRaskin as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Guru Mengaji</label>
                        <?php foreach ($getRekapGuru as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Imam Masjid</label>
                        <?php foreach ($getRekapImam as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pemandi Jenazah</label>
                        <?php foreach ($getRekapJenazah as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan Pembersih Makam</label>
                        <?php foreach ($getRekapMakam as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-7 col-form-label">Jumlah Bantuan PHK</label>
                        <?php foreach ($getRekapPhk as $p) : ?>
                            <label for="deskripsi" class="col-sm-5 col-form-label"><?= $p['total']; ?></label>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
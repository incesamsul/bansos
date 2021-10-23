<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('settings'); ?>">Settings</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <?php foreach ($settingPerusahaan as $sp) : ?>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                <div class="pd-20 card-box height-100-p">
                    <img src="<?= base_url('assets/img/perusahaan/' . $sp['image']); ?>" class="img mb-3">
                    <h5 class="text-center h5 mb-0"><?= ucwords($sp['bidang']); ?></h5>
                    <p class="text-center text-muted font-14"><?= $sp['nama_perusahaan']; ?></p>
                    <div class="profile-info">
                        <h5 class="mb-20 h5 text-primary">Contact Information</h5>
                        <ul>
                            <li>
                                <span class="text-primary">Email Address:</span>
                                <?= $sp['email']; ?>
                            </li>
                            <li>
                                <span class="text-primary">Facebook Address:</span>
                                <?= $sp['fb']; ?>
                            </li>
                            <li>
                                <span class="text-primary">Instagram Address:</span>
                                <?= $sp['instagram']; ?>
                            </li>
                            <li>
                                <span class="text-primary">Phone Number:</span>
                                <?= $sp['telp']; ?>
                            </li>
                            <li>
                                <span class="text-primary">City:</span>
                                <?= $sp['kota']; ?>
                            </li>
                            <li>
                                <span class="text-primary">Address:</span>
                                <?= $sp['alamat_perusahaan']; ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                <div class="card-box height-100-p overflow-hidden">
                    <div class="profile-tab height-100-p">
                        <div class="tab height-100-p">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-primary" data-toggle="tab" href="#timeline" role="tab">Perusahaan</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <!-- Form My Perusahaan -->
                                <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                    <div class="pd-20">
                                        <div class="profile-timeline">
                                            <?= form_open_multipart('settings/admin'); ?>
                                            <div class="form-group row">
                                                <label for="nama_perusahaan" class="col-sm-4 col-form-label">Nama Perushaan</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="hidden" id="id" name="id" value="<?= $sp['id']; ?>">
                                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="<?= $sp['nama_perusahaan']; ?>">
                                                    <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $sp['image']; ?>">
                                                    <?= form_error('nama_perusahaan', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="bidang" class="col-sm-4 col-form-label">Bidang</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="bidang" name="bidang" value="<?= $sp['bidang']; ?>">
                                                    <?= form_error('bidang', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="alamat_perusahaan" class="col-sm-4 col-form-label">Alamat Perusahaan</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="<?= $sp['alamat_perusahaan']; ?>">
                                                    <?= form_error('alamat_perusahaan', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="kota" class="col-sm-4 col-form-label">City</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="kota" name="kota" value="<?= $sp['kota']; ?>">
                                                    <?= form_error('kota', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="telp" class="col-sm-4 col-form-label">No. Telp</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="telp" name="telp" value="<?= $sp['telp']; ?>">
                                                    <?= form_error('telp', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-4 col-form-label">Email</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="email" name="email" value="<?= $sp['email']; ?>">
                                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="fb" class="col-sm-4 col-form-label">Facebook</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="fb" name="fb" value="<?= $sp['fb']; ?>">
                                                    <?= form_error('fb', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="instagram" class="col-sm-4 col-form-label">Instagram</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $sp['instagram']; ?>">
                                                    <?= form_error('instagram', '<small class="text-danger">', '</small>'); ?>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="image" class="col-sm-4 col-form-label">Image</label>
                                                <div class="col-sm-12 col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="image" name="image">
                                                        <label class="custom-file-label" for="image">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <div class="col-sm-12 col-md-8">
                                                    <button type="submit" class="btn btn-primary">Edit</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form My Profile -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
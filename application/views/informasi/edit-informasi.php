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
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-primary h4"><?= $title; ?></h4>
            <a href="<?= base_url('informasi'); ?>" class="btn btn-sm btn-primary">Back</a>
        </div>
        <div class="pd-20">
            <?php foreach ($editNews as $e) : ?>
                <?= form_open_multipart('informasi/editinformasi/' . $e['id']); ?>
                <input type="hidden" name="id" id="id" value="<?= $e['id']; ?>">
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" class="form-control" id="title" name="title" value="<?= $e['title']; ?>">
                        <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_bantuan_id" class="col-sm-3 col-form-label">Jenis Bantuan</label>
                    <div class="col-sm-12 col-md-9">
                        <select class="custom-select2 form-control" name="jenis_bantuan_id" style="width: 100%; height: 38px;">
                            <option value="<?= $e['jenis_bantuan_id']; ?>" selected=""><?= $e['nama_bantuan']; ?></option>
                            <option value="" disabled="">Jenis Bantuan</option>
                            <?php foreach ($jenisBantuan as $r) : ?>
                                <option value="<?= $r['id']; ?>"><?= $r['nama_bantuan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('jenis_bantuan_id', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="date_created" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-12 col-md-9">
                        <input type="text" class="form-control date-picker" id="date_created" name="date_created" value="<?= $e['date_created']; ?>" autocomplete="off">
                        <?= form_error('date_created', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label">Deskripsi</label>
                    <div class="col-sm-12 col-md-9">
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi"><?= $e['deskripsi']; ?></textarea>
                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-12 col-md-9">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
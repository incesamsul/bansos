<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">SISFOR Bansos Masyarakat</a></li>
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
        </div>
        <div class="pd-20">
            <div class="row">
                <div class="col-md-6 offset-md-6">
                    <?php echo form_open('penerima'); ?>
                    <div class="input-group mb-3">
                        <input type="text" name="search_penerima" id="search_penerima" class="form-control" placeholder="Masukkan nik..." autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary " name="submit">
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
</div>
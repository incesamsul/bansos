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
    <div class="product-wrap">
        <div class="product-list">
            <ul class="row">
                <?php foreach ($getBantuan as $gb) : ?>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="product-box">
                            <div class="producct-img"><img src="<?= base_url('assets/img/bantuan/' . $gb['image']); ?>" alt=""></div>
                            <div class="product-caption text-center">
                                <h4><a href="#"><?= $gb['nama_bantuan']; ?></a></h4>
                                <a href="<?= base_url('pendaftaran/bansos/' . $gb['slug_bantuan']); ?>" class="btn btn-outline-primary mt-3">Daftar</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
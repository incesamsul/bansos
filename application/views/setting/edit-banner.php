<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('settings'); ?>">Setting</a></li>
                        <li class="breadcrumb-item active text-dprimary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="card-box mb-30">
        <div class="pd-20">
            <h4 class="text-dprimary h4"><?= $title; ?></h4>
            <a href="<?= base_url('barang/jenisobat'); ?>" class="btn btn-sm btn-dprimary">Back</a>
        </div>
        <div class="pd-20">
            <?php foreach ($editBanner as $em) : ?>
                <?= form_open_multipart('settings/editBanner/' . $em['id']); ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/banner/' . $em['image']); ?>" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $em['id']; ?>">
                                    <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $em['image']; ?>">
                                    <input type="text" class="form-control" id="title" name="title" value="<?= $em['title']; ?>">
                                    <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                    <?= form_error('image', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="caption">Caption</label>
                                    <textarea type="text" class="form-control" id="caption" name="caption"><?= $em['caption']; ?></textarea>
                                    <?= form_error('caption', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dprimary">Edit</button>
                    </div>
                </div>
                </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
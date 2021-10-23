<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h4><?= $title; ?></h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url('settings/auth'); ?>">Settings</a></li>
                        <li class="breadcrumb-item active text-primary" aria-current="page"><?= $title; ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card-box mb-30" style="background-color: #031e23;">
                <div class="pd-20">
                    <h4 class="text-white h4">Logo White</h4>
                </div>
                <?php foreach ($settingWhite as $sl) : ?>
                    <div class="pb-20">
                        <img src="<?= base_url('assets/img/setting/' . $sl['image']); ?>" alt="" class="img mb-3">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('settings/updateBackground'); ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $sl['id']; ?>">
                            <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $sl['image']; ?>">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-primary h4">Logo Black</h4>
                </div>
                <?php foreach ($settingBlack as $sl) : ?>
                    <div class="pb-20">
                        <img src="<?= base_url('assets/img/setting/' . $sl['image']); ?>" alt="" class="img mb-3">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('settings/updateBackground'); ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $sl['id']; ?>">
                            <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $sl['image']; ?>">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-primary h4">Background Login</h4>
                </div>
                <?php foreach ($settingLogin as $sl) : ?>
                    <div class="pb-20">
                        <img src="<?= base_url('assets/img/setting/' . $sl['image']); ?>" alt="" class="img mb-3">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('settings/updateBackground'); ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $sl['id']; ?>">
                            <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $sl['image']; ?>">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-primary h4">Background Register</h4>
                </div>
                <?php foreach ($settingRegister as $sl) : ?>
                    <div class="pb-20">
                        <img src="<?= base_url('assets/img/setting/' . $sl['image']); ?>" alt="" class="img mb-3">
                    </div>
                    <div class="pd-20">
                        <?= form_open_multipart('settings/updateBackground'); ?>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $sl['id']; ?>">
                            <input type="hidden" class="form-control" id="old_image" name="old_image" value="<?= $sl['image']; ?>">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
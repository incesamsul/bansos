<div class="title pb-20">
    <h2 class="h3 mb-0"><?= $title; ?></h2>
</div>

<div class="row pb-10">
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <?php foreach ($getTotalPenyuluh as $to) : ?>
                        <div class="weight-700 font-24 text-success"><?= $to['totalPenyuluh']; ?></div>
                    <?php endforeach; ?>
                    <div class="font-14 text-secondary weight-500">Total Penyuluh</div>
                </div>
                <div class="widget-icon" style="background-color: #69bb7e;">
                    <div class="icon"><i class="icon-copy dw dw-user1"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <?php foreach ($getTotalTani as $tp) : ?>
                        <div class="weight-700 font-24 text-success"><?= $tp['totalTani']; ?></div>
                    <?php endforeach; ?>
                    <div class="font-14 text-secondary weight-500">Total Kelompok Tani</div>
                </div>
                <div class="widget-icon" style="background-color: #69bb7e;">
                    <div class="icon"><span class="icon-copy dw dw-user2"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <?php foreach ($getTotalDesa as $tp) : ?>
                        <div class="weight-700 font-24 text-success"><?= $tp['totalDesa']; ?></div>
                    <?php endforeach; ?>
                    <div class="font-14 text-secondary weight-500">Total Desa</div>
                </div>
                <div class="widget-icon" style="background-color: #69bb7e;">
                    <div class="icon"><i class="icon-copy dw dw-map-2" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
            <div class="d-flex flex-wrap">
                <div class="widget-data">
                    <?php foreach ($getTotalKeluhan as $tp) : ?>
                        <div class="weight-700 font-24 text-success"><?= $tp['totalKeluhan']; ?></div>
                    <?php endforeach; ?>
                    <div class="font-14 text-secondary weight-500">Total Keluhan</div>
                </div>
                <div class="widget-icon" style="background-color: #69bb7e;">
                    <div class="icon"><i class="icon-copy dw dw-newspaper" aria-hidden="true"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row pb-10">
    <div class="col-md-6 mb-20">
        <div class="card-box pb-10">
            <h4 class="h4 text-success pd-20 mb-0">Jadwal Penyuluh</h4>
            <table class="table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Tanggal</th>
                        <th>Tema</th>
                        <th>Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getJadwal as $gj) : ?>
                        <tr>
                            <td><?= $gj['tanggal']; ?><br><?= $gj['jam']; ?></td>
                            <td><?= $gj['title']; ?></td>
                            <td><?= $gj['tempat']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-6 mb-20">
        <div class="card-box pb-10">
            <h4 class="h4 text-success pd-20 mb-0">Keluhan</h4>
            <table class="table nowrap">
                <thead>
                    <tr>
                        <th class="table-plus">Tanggal</th>
                        <th>Kelompok Tani</th>
                        <th>Solusi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getKeluhan as $gj) : ?>
                        <tr>
                            <td><?= $gj['tanggal']; ?> </td>
                            <td><?= $gj['nama']; ?></td>
                            <td><?= $gj['solusi']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
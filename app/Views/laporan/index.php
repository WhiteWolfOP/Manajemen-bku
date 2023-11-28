<!-- Views untuk menampilkan data laporan perjalanan dinas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Laporan Perjalanan Dinas</h3>
                    </div>
                    <div class="card-body">
                        <a href="<?= site_url('laporan/create') ?>">Tambah Laporan</a>
                        <table id="table1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Nama pelaksana</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>
                                    <th>SP</th>
                                    <th>SPPD</th>
                                    <th>LP</th>
                                    <th>Kwitansi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($laporans as $laporan) : ?>
                                    <tr>
                                        <td><?= $laporan["nama_pelaksana"] ?></td>
                                        <td><?= $laporan["provinsi"] ?></td>
                                        <td><?= $laporan["kota"] ?></td>
                                        <td><a href="<?= $laporan['sp'] ?>" class="btn btn-primary">View <i class="fa fa-eye"></i></a></td>
                                        <td><a href="<?= $laporan['sppd'] ?>" class="btn btn-primary">View <i class="fa fa-eye"></i></a></td>
                                        <td><a href="<?= $laporan['lp'] ?>" class="btn btn-primary">View <i class="fa fa-eye"></i></a></td>
                                        <td><a href="<?= $laporan['kwitansi'] ?>" class="btn btn-primary">View <i class="fa fa-eye"></i></a></td>
                                        <td><?= ($laporan['status'] == 1) ? "Draft" : (($laporan['status'] == 2) ? "Terima" : "Tolak") ?></td>
                                        <td>
                                            <?php if ($laporan['status'] != 2) : ?>
                                                <a href="<?= site_url('laporan/konfirmasi/' . $laporan['id']) ?>" class="btn btn-warning">Konfirmasi <i class="fa fa-edit"></i></a>
                                            <?php else : ?>
                                                <small>Telah di setujui</small>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
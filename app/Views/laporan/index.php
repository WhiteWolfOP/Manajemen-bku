<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
      <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Laporan Perjalanan Dinas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Perjalanan Dinas</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<!-- Main content -->
<section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <a href="<?= site_url('laporan/create') ?>" class="btn btn-block btn-primary btn-sm">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID PERDIN</th>
                    <th>SP</th>
                    <th>SPPD</th>
                    <th>LP</th>
                    <th>Kwitansi</th>
                    <th>Laporan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <?php foreach ($laporans as $laporan) : ?>
            <tbody>
                  <tr>
                    <td>
                      <?= $laporan['perdin_id'] ?>
                    </td>
                    <td>
                    <form action="<?= site_url('public/uploads/sp/') ?>" method="post" enctype="multipart/form-data">
                      <button type="button" class="btn btn-primary btn-block"><i class="fa fa-file"></i><?= $laporan['sp'] ?></button>
                    </form>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary btn-block"><i class="fa fa-file"></i><?= $laporan['sppd'] ?></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary btn-block"><i class="fa fa-file"></i><?= $laporan['lp'] ?></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary btn-block"><i class="fa fa-file"></i><?= $laporan['kwitansi'] ?></button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary btn-block"><i class="fa fa-file"></i><?= $laporan['laporan_pdf'] ?></button>
                    </td>
                    <td>
                      <?= $laporan['status'] ?>
                    </td>
                    <td>
                        <a href="<?= site_url('laporan_perjalanan_dinas/edit/' . $laporan['id']) ?>">Edit</a>
                        <a href="<?= site_url('laporan_perjalanan_dinas/delete/' . $laporan['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
</section>
<?= $this->endSection() ?>
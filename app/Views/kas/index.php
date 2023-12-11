<!-- Views untuk menampilkan data kas -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Perdin ID</th>
                    <th>Bagian</th>
                    <th>keterangan</th>
                    <th>Debet</th>
                    <th>Kredit</th>
                  </tr>
                  </thead>
                  <?php foreach ($kasData as $kas) : ?>
            <tbody>
                  <tr>
                    <td>
                        <?= $kas['id'] ?>
                    </td>
                    <td>
                        <?= $kas['perdin_id'] ?>
                    </td>
                    <td>
                        <?= $kas['bagian_dprd_id'] ?>
                    </td>
                    <td>
                        <?= $kas['keterangan'] ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($kas['debet'], 0, ',', '.') ?>
                    </td>
                    <td>
                        <?= 'Rp.' . number_format($kas['kredit'], 0, ',', '.') ?>
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
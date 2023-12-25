<!-- Views untuk membuat data laporan perjalanan dinas baru -->
<?= $this->extend('layout/tema') ?>

<?= $this->section('content') ?>
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Upload Laporan dan Cetak Kwitansi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Upload Laporan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Upload Laporan</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
    <form action="<?= site_url('laporan/create') ?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <input value="<?= $perdin_id?>" type="hidden" required class="form-control" name="perdin_id">
              </div>
              <div class="form-group">
                <label for="sp">SP:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="sp" class="custom-file-input" id="sp">
                        <label class="custom-file-label" for="sp">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="sppd">SPPD:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="sppd" class="custom-file-input" id="sppd">
                        <label class="custom-file-label" for="sppd">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="lp">LP:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="lp" class="custom-file-input" id="lp">
                        <label class="custom-file-label" for="lp">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label for="laporan_pdf">Laporan:</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="laporan_pdf" class="custom-file-input" id="laporan_pdf">
                        <label class="custom-file-label" for="laporan_pdf">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" id="inputProjectLeader" class="form-control">
              </div> -->
              <!-- <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="<?= site_url('laporan') ?>" class="btn btn-secondary">Cancel</a> -->
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Kwitansi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
    </div>
      <div class="row">
        <div class="col-12">
          <a href="<?= site_url('laporan') ?>" class="btn btn-secondary">Cancel</a>
          <button type="submit" class="btn btn-success float-right">Simpan</button>
        </div>
      </div>
  </form>
</section>
<?= $this->endSection() ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Input</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Tambah Data</h5>
              </div>
              <div class="card-body">
              <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= site_url('sepeda/tambah_data') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="merk">Merek</label>
                    <input type="text" class="form-control" id="merk" name="merk" placeholder="Masukkan Merek">
                  </div>
                  <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan Warna" autocomplete=off>
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukkan Jenis" autocomplete=off>
                  </div>
                  <div>
                  <label for="status">Status</label>
                  <select class="custom-select" name="status" id="status">
                      <option value="ada">Ada</option>
                      <option value="dipinjam">Dipinjam</option>
                  </select>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
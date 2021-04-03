<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Home</h1>
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
                <h5 class="m-0">Edit Data</h5>
              </div>
              <div class="card-body">
              <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <?php foreach($data as $sepeda):?>
              <form action="<?= site_url('sepeda/update_data') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="merk">Merek</label>
                    <input type="hidden" id="id_sepeda" name="id_sepeda" value="<?= $sepeda->id_sepeda; ?>">
                    <input type="text" class="form-control" id="merk" name="merk" value="<?= $sepeda->merk; ?>">
                  </div>
                  <div class="form-group">
                    <label for="warna">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" value="<?= $sepeda->warna; ?>">
                  </div>
                  <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $sepeda->jenis; ?>">
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
              </form>
              <?php endforeach ?>
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
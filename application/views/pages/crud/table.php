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
                <h5 class="m-0">Table Sepeda</h5>
              </div>
              <div class="card-body">
              <a href="<?php echo site_url('sepeda/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
              <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Merek</th>
                    <th>Warna</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach($data as $sepeda):?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $sepeda['merk']; ?></td>
                    <td><?= $sepeda['warna']; ?></td>
                    <td><?= $sepeda['jenis']; ?></td>
                    <td><?= $sepeda['status']; ?></td>
                    <td><a href="<?php echo site_url('sepeda/hapus/' . $sepeda['id_sepeda']) ?>" class="btn btn-danger mr-2">Hapus</a>
                    <a href="<?php echo site_url('sepeda/edit/' . $sepeda['id_sepeda'] ) ?>" class="btn btn-warning">Edit</a> </td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
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
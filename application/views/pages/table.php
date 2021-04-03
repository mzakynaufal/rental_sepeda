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
                <h5 class="m-0">Laporan</h5>
              </div>
              <div class="card-body">
              <?php if ($data): ?>
              <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Peminjam</th>
                    <th>Sepeda</th>
                    <th>Status Sepeda</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach($data as $item):?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $item['tanggal_pinjam']; ?></td>
                    <td><?= $item['tanggal_kembali']; ?></td>
                    <td><?= $item['nama']; ?></td>
                    <td><?= $item['merk']; ?></td>
                    <td><?= $item['status']; ?></td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>
                <?php else: ?>
						<div class="p-3">
								<div class="alert-message">
									<h4 class="alert-heading">Maaf!</h4>
									<p>Data Peminjaman masih kosong!</p>
								</div>
						</div>
				<?php endif; ?>
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
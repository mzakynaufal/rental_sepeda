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
      <?php if ($data1['sepeda']): ?>
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Peminjaman</h5>
              </div>
              <div class="card-body">
              <form action="<?= site_url('peminjaman/tambah_data') ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="sepeda">Sepeda</label>
                      <select name="id_sepeda" class="form-control">
                      <?php foreach($data as $sepeda): ?>
                        <option value="<?= $sepeda['id_sepeda'] ?>"><?= $sepeda['merk'] ?></option>
                      <?php endforeach; ?>
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
          <?php endif ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $count['sepeda'] ?></h3>

                <p>Jumlah Sepeda</p>
              </div>
              <div class="icon">
                <i class="fa fa-bicycle"></i>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <?php if ($data1['dipinjam']): ?>
          <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Sepeda yang belum dikembalikan</h5>
              </div>
              <div class="card-body">
              <table class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Peminjam</th>
                    <th>Merek</th>
                    <th>Tanggal Pinjam</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($data1['dipinjam'] as $item): ?>
									<tr>
										<td><?= $item['nama'] ?></td>
										<td><?= $item['merk'] ?></td>
										<td><?= date('d M Y', strtotime($item['tanggal_pinjam'])) ?></td>
										<td class="table-action">
											<form action="<?= site_url('peminjaman/kembali_data') ?>" method="post">
											<input type="hidden" name="no_peminjaman" value="<?= $item['no_peminjaman'] ?>">
											<input type="hidden" name="id_sepeda" value="<?= $item['id_sepeda'] ?>">
											<button type="submit" class="btn btn-primary" onclick="return confirm('Anda yakin buku ini telah dikembalikan?')">
												Kembalikan
											</button>
											</form>
										</td>
									</tr>
								<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        <?php endif ?>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
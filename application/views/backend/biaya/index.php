   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Biaya Training</h1>
            
          </div>
          <a href="<?= base_url('admin/biaya_training/tambah') ?>" class="btn btn-primary">Tambah</a>
          <br><br>
          <?php 
            if($this->session->flashdata('error')) { 
                echo '<div class="alert alert-danger">';
                echo $this->session->flashdata('error');
                echo '</div>';
            } else if($this->session->flashdata('success')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('success');
                echo '</div>';
            } 
          ?>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Satuan</th>
                  <th>Total</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php $i=1; 
              	if(isset($biaya)) {
              	foreach($biaya as $row) { ?>
              <tbody>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                  <td><?= $row['nama_barang'] ?></td>
                  <td><?= $row['jumlah'] ?> </td>
                  <td><?= $row['harga'] ?></td>
                  <?php $total_harga = $row['jumlah'] * $row['harga'] ?>
                  <td><?= $total_harga ?></td>            
                  <td width="30px"><a href="<?= base_url('admin/biaya_training/edit/'.$row['id_biaya'] ) ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a></td>
                  <td><a href="<?= base_url('admin/biaya_training/delete/'.$row['id_biaya'] ) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')"><i class="fa fa-trash"></i></a></td>
                </tr>
              </tbody>
              <?php } ?> 
              	
                <?php } ?>
            </table>
          </div>
        </main>
      </div>
    </div>
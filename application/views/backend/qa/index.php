   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Quality Assurance</h1>
            
          </div>
          <a href="<?= base_url('admin/qa/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Nomor</th>
                  <th>Departemen</th>
                  <th>Jumlah File</th>
                  <th>Temuan</th>
                  <th>Status</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php $i=1; 
              	if(isset($qa)) {
              	foreach($qa as $row) { ?>
              <tbody>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $row['nama_kategori'] ?></td>
                  <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                  <td><?= $row['nomor'] ?></td>
                  <td><?= $row['nama_departemen'] ?> </td>
                  <td><?= $row['jumlah_file'] ?></td>
                  <td><?= $row['temuan'] ?></td>
                  <td><?= $row['status'] ?></td>            
                  <td width="30px"><a href="<?= base_url('admin/qa/edit/'.$row['id_quality'] ) ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a></td>
                  <td><a href="<?= base_url('admin/qa/delete/'.$row['id_quality'] ) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')"><i class="fa fa-trash"></i></a></td>
                </tr>
              </tbody>
              <?php } } else { ?>
               <tr>
                 <td colspan="7">DATA TIDAK ADA</td>   
               </tr>
              <?php } ?>
            </table>
          </div>
        </main>
      </div>
    </div>
   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Nilai</h1>
            
          </div>
          <a href="<?= base_url('admin/nilai/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                  <th>Kategori</th>
                  <th>Nama Peserta</th>
                  <th>Departemen</th>
                  <th>Jabatan</th>
                  <th>Nilai</th>
                  <th>Keterangan</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php $i=1; 
              	if(isset($nilai)) {
              	foreach($nilai as $row) { ?>
              <tbody>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                  <td><?= $row['nama_test'] ?></td>
                  <td><?= $row['nama_peserta'] ?></td>
                  <td><?= $row['nama_departemen'] ?> </td>
                  <td><?= $row['jabatan'] ?></td>
                  <td><?= $row['nilai'] ?></td>
                  <td>
                    <?php if($row['nilai'] <= 60) 
                            echo"<b style='color:red'>Remidi</b>"; 
                            else 
                              echo"<b style='color:green'>Lulus</b>";
                    ?>
                  </td>                 
                  <td width="30px"><a href="<?= base_url('admin/nilai/edit/'.$row['id_nilai'] ) ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a></td>
                  <td><a href="<?= base_url('admin/nilai/delete/'.$row['id_nilai'] ) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')"><i class="fa fa-trash"></i></a></td>
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
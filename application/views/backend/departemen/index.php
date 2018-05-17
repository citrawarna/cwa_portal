 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Departemen</h1>
            
          </div>
          <a href="<?= base_url('admin/departemen/tambah') ?>" class="btn btn-primary">Tambah</a>
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
                  <th>Nama Departemen</th>
                </tr>
              </thead>
              <?php $i=1; 
                if(isset($departemen)) {
                foreach($departemen as $row) { ?>
              <tbody>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $row['nama_departemen'] ?></td>
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
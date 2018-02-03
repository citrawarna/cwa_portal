   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Pengumuman</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
          <a href="<?= base_url('admin/pengumuman/tambah') ?>" class="btn btn-primary">Tambah</a>
          <br><br>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Tanggal</th>
                  <th>Dari</th>
                  <th>Judul</th>
                  <th>Isi</th>
                  <th colspan="2">Action</th>
                </tr>
              </thead>
              <?php $i=1; 
              	if(isset($pengumuman)) {
              	foreach($pengumuman as $row) { ?>
              <tbody>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                  <td><?= $row['username'] ?></td>
                  <td><?= $row['judul'] ?></td>
                  <td><?= substr($row['isi'], 0, 30);  ?></td>
                  <td width="30px"><a href="<?= base_url('admin/pengumuman/edit/'.$row['id_pengumuman'] ) ?>" class="btn btn-sm btn-warning"><i class="fa fa-cog"></i></a></td>
                  <td><a href="<?= base_url('admin/pengumuman/delete/'.$row['id_pengumuman'] ) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin akan menghapus data? Data yang sudah terhapus tidak dapat dikembalikan')"><i class="fa fa-trash"></i></a></td>
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
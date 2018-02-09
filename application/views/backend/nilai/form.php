<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Nilai</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post">
            <div class="row">
              <div class="col-md-12">
                <table class="table" id="nilai_table">
                  <tr>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Departemen</th>
                    <th>Jabatan</th>
                    <th>Nilai</th>
                  </tr>
                  <tr>
                    <tr>
                      <input type="hidden" name="id_nilai[]" class="form-control">
                      <td><input type="text" name="tanggal[]" class="form-control" required value="<?= date('Y-m-d') ?>" readonly></td>
                      <td><?= form_dropdown('id_kat[]', getDropdownList('kategori_nilai', ['id_kat', 'nama_test'])) ?></td>
                      <td><input type="text" name="nama_peserta[]" class="form-control" required></td>
                      <td><?= form_dropdown('id_departemen[]', getDropdownList('departemen', ['id_departemen', 'nama_departemen'])) ?></td>
                      <td><input type="text" name="jabatan[]" class="form-control" required></td>
                      <td><input type="text" name="nilai[]" class="form-control" required></td>
                    </tr>
                  </tr>
                </table> 
                  
                  <div class="order-btn">
                    <a href="#" class="btn-plus"><i class="fa fa-plus"></i> Tambah</a>
                  </div>

              </div>
            </div>
           <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br>
          </form>
        </main>
      </div>
    </div>
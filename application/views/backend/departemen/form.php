<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Departemen</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post">
            <div class="row">
              <div class="col-md-6">
                <b>Nama Departemen :</b> 
                <input type="text" name="nama_departemen" value="<?= $input['nama_departemen'] ?>" class="form-control" placeholder="Nama test">  
              </div>
            </div>
           
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
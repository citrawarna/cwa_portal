<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah CAR/PAR</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <b>ID QA :</b> 
                <input type="text" name="id_qa" value="<?= $input['id_qa'] ?>" class="form-control" placeholder="Tanggal">  
              </div>
              <div class="col-md-6">
                <b>Tanggal :</b> 
                <input type="text" name="tanggal" value="<?= $input['tanggal'] ?>" class="form-control" placeholder="Tanggal">  
              </div>
            </div>
          
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
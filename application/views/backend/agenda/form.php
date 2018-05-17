<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Agenda Rutin</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" >
            <div class="row">
              <div class="col-md-6">
                <b>agenda :</b> 
                <input type="text" name="agenda" value="<?= $input['agenda'] ?>" class="form-control" placeholder="agenda">  
              </div>
              
              <div class="col-md-6">
                <b>Tanggal :</b> 
                <input type="text" name="tanggal" value="<?= $input['tanggal'] ?>" class="form-control" placeholder="Tanggal" id="datepicker1">  
              </div>
               <div class="col-md-6">
                <b>Jam :</b> 
                <input type="text" name="jam" value="<?= $input['jam'] ?>" class="form-control" placeholder="Jam">  
              </div>
              <div class="col-md-6">
                <b>tempat :</b> 
                <input type="text" name="tempat" value="<?= $input['tempat'] ?>" class="form-control" placeholder="tempat">  
              </div>
        
              <div class="col-md-6">
                <b>keterangan :</b> 
                <input type="text" name="keterangan" value="<?= $input['keterangan'] ?>" class="form-control" placeholder="keterangan">  
              </div>
              
            </div>
          
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
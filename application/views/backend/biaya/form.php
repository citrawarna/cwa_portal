<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Biaya</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" >
            <div class="row">
           
              <div class="col-md-6">
                <b>Tanggal :</b> 
                <input type="text" name="tanggal" value="<?= $input['tanggal'] ?>" class="form-control" placeholder="Tanggal" id="datepicker1">  
              </div>
               <div class="col-md-6">
                <b>Nama Barang :</b> 
                <input type="text" name="nama_barang" value="<?= $input['nama_barang'] ?>" class="form-control" placeholder="Nama Barang">  
              </div>
              <div class="col-md-6">
                <b>Jumlah :</b> 
                <input type="text" name="jumlah" value="<?= $input['jumlah'] ?>" class="form-control" placeholder="Jumlah">  
              </div>
              <div class="col-md-6">
                <b>Harga :</b> 
                <input type="text" name="harga" value="<?= $input['harga'] ?>" class="form-control" placeholder="Harga Satuan">  
              </div>
              
            </div>
          
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah CAR/PAR</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" >
            <div class="row">
              <div class="col-md-6">
                <b>CAR/PAR :</b> 
                <?= form_dropdown('id_qa', getDropdownList('qa_kategori', ['id_qa', 'nama_kategori']), $input["id_qa"], 'class="form-control"') ?>  
              </div>
              <div class="col-md-6">
                <b>Tanggal :</b> 
                <input type="text" name="tanggal" value="<?= $input['tanggal'] ?>" class="form-control" placeholder="Tanggal" id="datepicker1">  
              </div>
               <div class="col-md-6">
                <b>Nomor :</b> 
                <input type="text" name="nomor" value="<?= $input['nomor'] ?>" class="form-control" placeholder="Nomor">  
              </div>
               <div class="col-md-6">
                <b>Departemen :</b> 
                <?= form_dropdown('id_departemen', getDropdownList('departemen', ['id_departemen', 'nama_departemen']), $input["id_departemen"] , 'class="form-control"') ?>  
              </div>
              <div class="col-md-6">
                <b>Jumlah File :</b> 
                <input type="text" name="jumlah_file" value="<?= $input['jumlah_file'] ?>" class="form-control" placeholder="Jumlah File">  
              </div>
              <div class="col-md-6">
                <b>Temuan :</b> 
                <input type="text" name="temuan" value="<?= $input['temuan'] ?>" class="form-control" placeholder="Temuan">  
              </div>
              <div class="col-md-6">
                <b>Status :</b> 
                <input type="text" name="status" value="<?= $input['status'] ?>" class="form-control" placeholder="Status">  
              </div>
            </div>
          
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
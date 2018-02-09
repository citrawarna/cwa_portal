<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah User</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <b>Username :</b> 
                <input type="text" name="username" value="<?= $input['username'] ?>" class="form-control" placeholder="username">  
              </div>
              <div class="col-md-6">
                <b>Password :</b> 
                <input type="password" name="password" value="<?= $input['password'] ?>" class="form-control" placeholder="password" >  
              </div>
            </div>
            <br>
            <b>Level</b>
             <select name="level">
                <option value="admin"> - Pilih - </option>
                <option value="admin">admin</option>
                <option value="owner">owner</option>
             </select>
            <br><br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>
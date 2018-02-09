<?php 
  $id_user = $this->session->userdata('id_user');
  $user = $this->session->userdata('username');
 ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Pengumuman</h1>  
          </div>
          <form action="<?= base_url($form_action) ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <b>Tanggal :</b> 
                <input type="text" name="tanggal" value="<?= $input['tanggal'] ?>" class="form-control" placeholder="Tanggal">  
              </div>
              <div class="col-md-6">
                <b>User :</b> 
                <input type="hidden" name="id_user" value="<?= $id_user ?>">
                <input type="text" class="form-control" placeholder="<?= $user ?>" readonly>  
              </div>
            </div>
            <b>Judul</b>
            <input type="text" name="judul" value="<?= $input['judul'] ?>" class="form-control" placeholder="Judul">

            <b>Isi</b>
            <textarea name="isi" id="editor1"  id="" cols="30" rows="10"><?= $input['isi'] ?></textarea>

           <div class="row">
              <div class="col-md-6">
                <b>File (pdf/docx) :</b> 
                <input type="file" name="file" value="<?= $input['file'] ?>" class="form-control" placeholder="file">  
              </div> 
              <div class="col-md-6">
                <b>Gambar :</b> 
                <?= form_upload('gambar', $input['gambar'], ['class' => 'form-control']) ?>
              </div>
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Simpan">
            <br><br><br><br>
          </form>
        </main>
      </div>
    </div>

    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>
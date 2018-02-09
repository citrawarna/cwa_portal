<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2"><?= $pengumuman['judul']?></h1> 
          </div>
          <?= $pengumuman['isi'] ?>
		  <figure class="figure">
		   <img src="<?= base_url('uploads/gambar/'. $pengumuman['gambar']) ?>" class="figure-img img-fluid rounded" 
		   alt="<?php if($pengumuman['gambar'] == '') echo 'Tidak ada gambar' ?>">
		   <figcaption class="figure-caption">Lampiran gambar.</figcaption>
		  </figure>
		  <br>
		  <?php if($pengumuman['file'] !== $pengumuman['gambar']) { ?>
		  	<a href="<?= base_url('uploads/gambar/'.$pengumuman['file']) ?>">Lampiran File</a>
		  <?php } else { ?>
		  Tidak ada file 
		  <?php } ?>

		  <br><br><br>
  
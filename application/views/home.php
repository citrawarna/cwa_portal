	
	<img src="<?= base_url('assets/img/jumbotron.jpg') ?>" alt="header" class="img-fluid">
		
	<div class="container" style="margin-top:70px">
		<h2>Berita Terbaru</h2>
		<ul class="list-group">
		<?php foreach($pengumuman as $row) { ?>
		  <a href="<?= base_url('welcome/read/'. $row['id_pengumuman']) ?>">
		  	<li class="list-group-item list-group-item-action padding-list">
				<?= $row['judul'] ?> &nbsp; [post : <?= date('d-m-Y', strtotime($row['tanggal'])) ?>]  <?php if($row['tanggal'] == date('Y-m-d')) echo '<span class="badge badge-primary badge-pill">NEW</span>'; ?> 
		  	</li>
		  </a>
		<?php } ?>

		</ul>
	</div>
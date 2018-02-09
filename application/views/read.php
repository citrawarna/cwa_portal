<style>
	p {
		text-align: justify;
		font-size:18px;
	}
</style>
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="display-4"><?= $pengumuman['judul'] ?></h2>
			<p class="lead"><?= date('d-m-Y', strtotime($pengumuman['tanggal'])). ' oleh : ' .$pengumuman['username']; ?></p>
		</div>
	</div>

	<div class="container">
		<?= $pengumuman['isi']; ?>
		
		<p>
		<?php 
			if($pengumuman['gambar'] != '') { ?>
			<img src="<?= base_url('uploads/gambar/'. $pengumuman['gambar']) ?>" alt="<?= $pengumuman['gambar'] ?>" class="img-fluid">
		<?php } ?>
		</p>

		<p>
		<?php if($pengumuman['file'] != $pengumuman['gambar']) { ?>
			<a href="<?= base_url('uploads/gambar/'. $pengumuman['file']) ?>">Lampiran File</a>
		<?php } ?>
		</p>
	</div>
	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="display-4"><?= $ket ?></h2>
		</div>
	</div>
	<div class="container">
		<?php if(!$data == '') { ?>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Kategori</th>
				<th>Tanggal</th>
				<th>Nomor</th>
				<th>Departemen</th>
				<th>Jumlah File</th>
				<th>Temuan</th>
				<th>Status</th>
			</tr>
			<?php $i=1; foreach($data as $row) { ?>
			<tr>
				<td><?= $i++ ?></td>
				<td><?= $row['nama_kategori'] ?></td>
				<td><?= $row['tanggal'] ?></td>
				<td><?= $row['nomor'] ?></td>
				<td><?= $row['nama_departemen'] ?></td>
				<td><?= $row['jumlah_file'] ?></td>
				<td><?= $row['temuan'] ?></td>
				<td><?= $row['status'] ?></td>
			</tr>
			<?php } ?>
		</table>
		<?php } else { ?>
		Tidak ada data 
		<?php } ?>
	</div>
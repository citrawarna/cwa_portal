	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="display-4">Check Nilai Hasil Test</h2>
			<form action="<?= base_url($form_action) ?>" method="get">
				<div class="row">	
					<div class="col-md-6">
						Tanggal :
						<input type="text" name="tanggal" class="form-control" placeholder="YYYY/MM/DD" id="datepicker" required>
					</div>
					<div class="col-md-6">
						Kategori test :
						<?= form_dropdown('id_kat', getDropdownList('kategori_nilai', ['id_kat', 'nama_test']), '', 'class="form-control"') ?>
					</div>
				</div>
				<br>
				<input type="submit" class="btn btn-primary" value="Cek">
			</form>
		</div>
	</div>
	<div class="container">
		<?php if(!$data == '') { ?>
		<table class="table">
			<tr>
				<th>#</th>
				<th>Tanggal</th>
				<th>Kategori</th>
				<th>Nama Peserta</th>
				<th>Departemen</th>
				<th>Jabatan</th>
				<th>Nilai</th>
				<th>Keterangan</th>
			</tr>
			<?php $i=1; foreach($data as $row) { ?>
			<tr>
				<td><?= $i++ ?></td>
				<td><?= $row['tanggal'] ?></td>
				<td><?= $row['nama_test'] ?></td>
				<td><?= $row['nama_peserta'] ?></td>
				<td><?= $row['nama_departemen'] ?></td>
				<td><?= $row['jabatan'] ?></td>
				<td><?= $row['nilai'] ?></td>
				<td>
                    <?php if($row['nilai'] <= 60) 
                            echo"<b style='color:red'>Remidi</b>"; 
                            else 
                              echo"<b style='color:green'>Lulus</b>";
                    ?>
                  </td>
			</tr>
			<?php } ?>
		</table>
		<?php } else { ?>
		Tidak ada data nilai pada tanggal tersebut
		<?php } ?>
	</div>
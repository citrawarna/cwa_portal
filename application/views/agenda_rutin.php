	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h2 class="display-4">Agenda Rutin</h2>
			<p class="lead">By : Management Training</p>
		</div>
	</div>	
	<div class="container" style="margin-top:70px">

		<ul class="list-group">
		
		  <table class="table">
		  	<tr>
	  		 	<th>#</th>
             	<th>Agenda</th>
              	<th>Tanggal</th>
              	<th>Jam</th>
              	<th>Tempat</th>
              	<th>Keterangan</th>
		  	</tr>
		  	<?php $i=1; foreach($data as $row) { ?>
		  	<tr>
				<td><?= $i++; ?></td>
                <td><?= $row['agenda'] ?> </td>
                <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>
                <td><?= $row['jam'] ?></td>
                <td><?= $row['tempat'] ?></td>
                <td><?= $row['keterangan'] ?></td>
            </tr>
		  	<?php } ?>
		  </table>
		

		</ul>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navs fixed-top">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		<div class="container">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item <?php if($this->uri->segment(1) == '') echo "active" ?>">
		        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
		      </li>
		       <li class="nav-item dropdown <?php if($this->uri->segment(1) == 'nilai') echo "active" ?>">
			    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Management Training
			    </a>
			    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			      <a class="dropdown-item" href="<?= base_url('nilai') ?>">Nilai Test</a>
			      <a class="dropdown-item" href="#">Biaya Training</a>
			      <a class="dropdown-item" href="#">Agenda Rutin</a>
			    </div>
			  </li>
	
		      <li class="nav-item <?php if($this->uri->segment(1) == 'visi_misi') echo "active" ?>">
		        <a class="nav-link" href="<?= base_url('visi_misi') ?>">Visi & Misi</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('budaya') ?>">Budaya</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="<?= base_url('departement') ?>">Departement</a>
		      </li>
		    </ul>
		    
		  </div>
		</div>
	</nav>
	<br><br>
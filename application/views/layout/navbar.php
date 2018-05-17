	<nav class="navbar navbar-expand-lg navbar-light navs fixed-top" style="background-color:#fff203">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
		<div class="container">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item <?php if($this->uri->segment(1) == '') echo "active" ?>">
		        <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
		      </li>

		       <li class="nav-item dropdown <?php if($this->uri->segment(1) == 'nilai' || $this->uri->segment(1) == 'agenda_rutin') echo "active" ?>">
			    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Management Training
			    </a>
			    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			      <a class="dropdown-item" href="<?= base_url('nilai') ?>">Nilai Test</a>
			      <a class="dropdown-item" href="<?= base_url('agenda_rutin') ?>">Agenda Rutin</a>
			    </div>
			  </li>

			  <li class="nav-item dropdown <?php if($this->uri->segment(1) == 'quality_assurance') echo "active" ?>">
			    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Quality Assurance
			    </a>
			    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			      <a class="dropdown-item" href="<?= base_url('quality_assurance/car') ?>">Data CAR</a>
			      <a class="dropdown-item" href="<?= base_url('quality_assurance/par') ?>">Data PAR</a>
			    </div>
			  </li>
		    </ul>
		    
		  </div>
		</div>
	</nav>
	<br><br>
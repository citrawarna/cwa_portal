    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='dashboard') echo "active"; ?>" href="<?= base_url('admin/dashboard') ?>">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='pengumuman') echo "active"; ?>" href="<?= base_url('admin/pengumuman') ?>">
                  <span data-feather="file"></span>
                  Pengumuman
                </a>
              </li>

              <?php if($this->session->userdata('level') == 'owner') { ?>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='user') echo "active"; ?>" href="<?= base_url('admin/user') ?>">
                  <span data-feather="user"></span>
                  User
                </a>
              </li>
              <?php } ?>

              <?php if($this->session->userdata('level') == 'owner') { ?>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='kategori_nilai') echo "active"; ?>" href="<?= base_url('admin/kategori_nilai') ?>">
                  <span data-feather="check-square"></span>
                  Kategori Nilai
                </a>
              </li>
              <?php } ?>

              <?php if($this->session->userdata('level') == 'owner') { ?>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='nilai') echo "active"; ?>" href="<?= base_url('admin/nilai') ?>">
                  <span data-feather="bar-chart-2"></span>
                  Nilai
                </a>
              </li>
              <?php } ?>

              <?php if($this->session->userdata('level') == 'owner') { ?>
              <li class="nav-item">
                <a class="nav-link <?php if($this->uri->segment(2)=='qa') echo "active"; ?>" href="<?= base_url('admin/qa') ?>">
                  <span data-feather="list"></span>
                  Quality Assurance
                </a>
              </li>
              <?php } ?>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Departement
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Budaya
                </a>
              </li>
            </ul>            
        </nav>

<?php $this->load->view('backend/layout/head') ?>

  
    

    <div class="container-fluid">
    
    <?php $this->load->view('backend/layout/sidebar') ?>
    
    <?php $this->load->view($content); ?>
     
<?php $this->load->view('backend/layout/footer') ?>
<?php if($this->session->flashdata('status')): ?>
                     <div class="alert alert-success" role="alert">
                     <?=$this->session->flashdata('status');?>
                      </div> 
                      <?php endif ?>
 <?php include('navbar.php');?>
  <div class="card" >
  <h5 class="card-header">user page</h5>
  <div class="card-body" >
    <h5 class="card-title">user page</h5>
    <p class="card-text">you are in user-page</p>
    <h5>first name : <?php echo $this->session->userdata('auth_user')['first_name'];?> </h5>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


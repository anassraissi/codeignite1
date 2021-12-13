<nav class="navbar navbar-expand-lg navbar" style="color:black; background-color:skyblue;">
  <a class="navbar-brand" href="#">Anass</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 800px;">   
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('userpage')?>">user-page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('adminpage')?>">admin-page</a>
      </li>
      <?php if(!$this->session->has_userdata('Authentificated')){?>
      <li class="nav-item">
        <a class="nav-link" href="#">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login')?>">Login</a>
      </li>
      <?php }?>
      <?php if($this->session->has_userdata('Authentificated'))?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $this->session->userdata('auth_user')['first_name'];?><?php echo $this->session->userdata('auth_user')['last_name'];?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?php ?>
          <a class="dropdown-item" href="<?php echo base_url('logout')?>">Log Out</a>
        
         
        </div>
      </li>
    </ul>
  </div>
</nav>
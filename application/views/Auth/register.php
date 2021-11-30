
<!------ Include the above in your HEAD tag ---------->
<center> 
  <?php if($this->session->flashdata('status')): ?>
                     <div class="alert alert-success" role="alert">
                     <?=$this->session->flashdata('status');?>
                      </div> 
                      <?php endif ?>
<form class="form-horizontal" method="Post" action="<?php echo base_url('register');?>">
<fieldset>

<!-- Form Name -->
<legend>Register Yourself</legend>

<!-- Text input-->
<small style="color:red;"><?php echo validation_errors('');?></small>

<div class="form-group" >
  <label class="col-md-4 control-label" for="fist_name">First Name</label>  
  <div class="col-md-4">
  <input id="fname" name="first_name" type="text" value="<?php echo set_value('first_name')?>" class="form-control input-md">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="last_name">Last Name</label>  
  <div class="col-md-4">
  <input id="lname" name="last_name"value="<?php echo set_value('last_name')?>" type="text" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text"value="<?php echo set_value('email')?>" placeholder="johndoe@example.com"  class="form-control input-md" >
 
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password"value="<?php echo set_value('password')?>" type="password" placeholder="" class="form-control input-md">
  </div>
</div>
<!-- Button (Double) -->
<button type="submit" class="btn btn-primary">Reg</button>

</fieldset>
</form>
</center>
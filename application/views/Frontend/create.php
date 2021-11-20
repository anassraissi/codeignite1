<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h5> How to insert data into database</h5> <a href="<?php echo base_url('Employee') ?>" class="btn btn-danger float-right">Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url('Employee/store')?>" method="POST">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" name="firstname" class="form-control">
                            <small style="color:red"><?php echo form_error('firstname');?></small> 
                        </div>
                        <div class="form-group">
                            <label for="Lastname">Last Name</label>
                            <input type="text" name="Lastname" class="form-control"> 
                            <small style="color:red;"><?php echo form_error('Lastname');?></small> 
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone Number</label>
                            <input type="text" name="phonenumber" class="form-control">
                            <small style="color:red;"><?php echo form_error('phonenumber');?></small> 
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="text" name="Email" class="form-control">
                        <small style="color:red;"><?php echo form_error('Email');?></small> 
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary " type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
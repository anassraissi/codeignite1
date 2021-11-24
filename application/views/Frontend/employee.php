
  <body>
     <div class="container">
         <div class="row">
             <div class="col-md-12 mt-4">
                 <div class="card">       
                     <div class="card-header">
                     <?php if($this->session->flashdata('status')): ?>
                     <div class="alert alert-success" role="alert">
                     <?=$this->session->flashdata('status');?>
                      </div> 
                      <?php endif ?>
                           How to insert data into database <a href="<?php echo base_url ('Employee/Add')?>" class="btn btn-primary float-right">Add Employee</a>
                     </div>
                     <div class="card-body">
                           <table id="myTable" class="table table-bordered">
                               <thead>
                                   <tr>
                                   <td>ID</td>
                                   <td>First Name</td>
                                   <td>Last Name</td>
                                   <td>Phone Number</td>
                                   <td>Email_Id</td>
                                   <td>Edit</td>
                                   <td>Delete</td>
                                   <td>Confirm Delete</td>                                         
                                   </tr>
                               </thead>
                               <tbody>
                                <?php foreach($Employee as $result): ?>
                                   <tr>
                                   <td><?= $result->id;?></td>
                                   <td><?= $result->firstname;?></td>
                                   <td><?= $result->Lastname;?></td>
                                   <td><?= $result->phonenumber;?>+</td>
                                   <td><?= $result->Email;?></td>
                                     <td><a href="<?php echo base_url('Employee/edit/'.$result->id);?>" class="btn btn-success">Edit</td></a>
                                     <td><a href="<?php echo base_url('Employee/delete/'.$result->id);?>" class="btn btn-danger">Delete</td</a>
                                      <td><button type="submit" class="btn btn-danger confirm-delete" value="<?=$result->id; ?>">Confirm Delete</button></td>
                                    </tr>
                                   <?php endforeach;?>
                               </tbody>
                           </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
  

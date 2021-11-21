
  <body>
     <div class="container">
         <div class="row">
             <div class="col-md-12 mt-4">
                 <div class="card">
                     <div class="card-header">
                           How to insert data into database <a href="<?php echo base_url ('Employee/Add')?>" class="btn btn-primary float-right">Add Employee</a>
                     </div>
                     <div class="card-body">
                           <table class="table table-bordered">
                               <thead>
                                   <tr>
                                   <td>ID</td>
                                   <td>First Name</td>
                                   <td>Last Name</td>
                                   <td>Phone Number</td>
                                   <td>Email_Id</td>
                                   <td>Edit</td>
                                   <td>Delete</td>                                         
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
                                     <td><a href="" class="btn btn-success">Edit</td></a>
                                     <td><a href="" class="btn btn-danger">Delete</td</a>
                                   </tr>
                                   <?php endforeach;?>
                               </tbody>
                           </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
  

<?php if($this->session->flashdata('status')): ?>
                     <div class="alert alert-success" role="alert">
                     <?=$this->session->flashdata('status');?>
                      </div> 
                      <?php endif ?>

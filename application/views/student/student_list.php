<div class="row" >
<div class="col-md-2" ></div>
<div class="col-md-8" >
    
 <?php echo validation_errors(); ?>
    
<a class="btn btn-success" href ="<?php echo site_url("employes/create/");?>">Create Employee</a>


<table  align="center" class="table table-hover table-striped">
    
     <tr>
    <td >name</td>
    <td >id</td>
    <td ><u>class</u></td>
    <td >session</td>
    <td >address</td>
    <td >Action</td>
      <tr/>      
        
 
  
   <?php foreach ($student as $std_item): ?>
  
  
  
  
  
  
   <tr>
    <td><?php  echo $std_item['name'] ?></td>
     <td><?php echo $std_item['id'] ?></td>
     <td><?php echo $std_item['class'] ?></td>
     <td><?php echo $std_item['session'] ?></td>
     <td><?php echo $std_item['address'] ?></td>
    
     <td><a class="btn btn-success" href ='<?php echo site_url("student/edit_std/".$std_item['id']);?>'>Edit</a>|<a class="btn btn-default" href ='<?php echo site_url("student/delete_std/".$emp_item['Emp_name']);?>'>Delete</a></td>
  </tr>
   <?php endforeach; ?>
</div>
  <div class="col-md-2" ></div>
</div>


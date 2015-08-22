<div class="row" >
<div class="col-md-2" ></div>
<div class="col-md-8" >

<?php echo validation_errors(); ?>
    <a class="btn btn-success" href ="<?php echo site_url("employes/create/");?>">Create Employee</a>
    

<table  align="center" class="table table-hover table-striped">
  <tr>
    <td >Emp Name</td>
    <td >Emp Father Name</td>
    <td ><u>Emp_cnic</u></td>
    <td >Emp_scale</td>
    <td >Emp_post</td>
    <td >Emp_address</td>
    <td >Action</td>
  </tr>
  <?php foreach ($employes as $emp_item): ?>
  
   <tr>
    <td><?php echo $emp_item['Emp_name'] ?></td>
     <td><?php echo $emp_item['Emp_father_name'] ?></td>
     <td><?php echo $emp_item['Emp_cnic'] ?></td>
     <td><?php echo $emp_item['Emp_scale'] ?></td>
     <td><?php echo $emp_item['Emp_post'] ?></td>
     <td><?php echo $emp_item['Emp_address'] ?></td>
     <td><a class="btn btn-success" href ='<?php echo site_url("employes/edit_emp/".$emp_item['id']);?>'>Edit</a>|<a class="btn btn-default" href ='<?php echo site_url("employes/delete_emp/".$emp_item['Emp_name']);?>'>Delete</a></td>
  </tr>
 <?php endforeach ?>
      
</div>
  <div class="col-md-2" ></div>
</div>

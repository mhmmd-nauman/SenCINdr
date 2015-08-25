<div class="row" >
<div class="col-md-1" ></div>
<div class="col-md-10" >

<?php echo validation_errors(); ?>
    <div class="row" >
        <br>
        <div class="col-md-12">
            <a class="btn btn-success" href ="<?php echo site_url("employes/create/");?>">Create Employee</a>
        </div>
        <br>  <br>
        </div>

<table  align="center" class="table table-hover table-striped">
  <tr>
    <td >Emp Id</td>
    <td >Emp Cnic</td>
    <td ><u>Emp Name</u></td>
 <td ><u>Emp Father Name</u></td>
    <td >Emp Scale</td>
    <td >Emp Post</td>
    <td >Emp Address</td>
    <td >Action</td>
  </tr>
  <?php foreach ($employes as $emp_item): ?>
  
   <tr>
    <td><?php echo $emp_item['id'] ?></td>
     <td><?php echo $emp_item['Emp_cnic'] ?></td>
     <td><?php echo $emp_item['Emp_name'] ?></td>
     <td><?php echo $emp_item['Emp_father_name'] ?></td>
     <td><?php echo $emp_item['Emp_scale'] ?></td>
     <td><?php echo $emp_item['Emp_post'] ?></td>
     <td><?php echo $emp_item['Emp_address'] ?></td>
     <td><a class="btn btn-success" href ='<?php echo site_url("employes/edit_emp/".$emp_item['id']);?>'>Edit</a>|<a class="btn btn-default" href ='<?php echo site_url("employes/delete_emp/".$emp_item['Emp_name']);?>'>Delete</a></td>
  </tr>
 <?php endforeach ?>
</table>   
</div>
  <div class="col-md-1" ></div>
</div>

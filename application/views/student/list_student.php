<div class="row" >
<div class="col-md-1" ></div>
<div class="col-md-10" >

<?php echo validation_errors(); ?>
    <div class="row" >
        <br>
        <div class="col-md-12">
            <a class="btn btn-success" href ="<?php echo site_url("student/create/");?>">Create Student</a>
        </div>
        <br>  <br>
        </div>

<table  align="center" class="table table-hover table-striped">
  <tr>
    <td >Id</td>
    <td >">student name</td>
    <td ><u>Father name</u></td>
 <td ><u>Student Cnic</u></td>
    <td >student Class</td>
    <td >">student Session</td>
    <td >student Address</td>
    <td >Action</td>
  </tr>
  <?php foreach ($student as $std_item): ?>
  
   <tr>
    <td><?php echo $std_item['id'] ?></td>
     <td><?php echo $std_item['name'] ?></td>
     <td><?php echo $std_item['Father_name'] ?></td>
     <td><?php echo $std_item['cnic'] ?></td>
     <td><?php echo $std_item['class'] ?></td>
     <td><?php echo $std_item['session'] ?></td>
     <td><?php echo $std_item['address'] ?></td>
     <td><a class="btn btn-success" href ='<?php echo site_url("student/edit_std/".$std_item['id']);?>'>Edit</a>|<a class="btn btn-default" href ='<?php echo site_url("student/delete_std/".$std_item['id']);?>'>Delete</a></td>
  </tr>
 <?php endforeach ?>
</table>   
</div>
  <div class="col-md-1" ></div>
</div>

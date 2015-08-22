<div class="alert alert-danger">
 <?php echo validation_errors(); ?>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php echo form_open('employes/create') ?>
<div class="form-group">
    <label for="name">Employee Name</label>
    <input type="text" class="form-control" name="empname" id="empname" 
       placeholder="Enter Name">
</div>
<div class="form-group">
    <label for="name">Father Name</label>
    <input type="text" class="form-control" name="fathername" id="fathername" 
       placeholder="Enter Name">
</div>
<table width="332" height="203" border="1" align="center" >
  
  <tr>
    <td height="34"><u>Emp cnic</u></td>
    <td><label for="cnc"></label>
      <input type="text" name="cnc" id="cnc" /></td>
  </tr>
  <tr>
    <td height="32">Emp_scale</td>
    <td><label for="scale"></label>
      <input type="text" name="scale" id="scale" /></td>
  </tr>
  <tr>
    <td>Emp_post</td>
    <td><label for="post"></label>
      <input type="text" name="post" id="post" /></td>
  </tr>
  <tr>
    <td>Emp_address</td>
    <td><label for="add"></label>
      <textarea name="add" id="add" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sbtn" id="sbtn" value="Submit" /></td>
  </tr>
</table>


</form>
</div>
<div class="col-md-3"></div>
</div>
</body>
</html>
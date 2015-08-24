<div class="alert alert-danger">
 <?php echo validation_errors(); ?>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php echo form_open('employes/create') ?>
<div class="form-group">
    <label for="name">Emp Id</label>
    <input type="text" class="form-control" name="empid" id="empid" 
       placeholder="Enter id">
</div>
<div class="form-group">
    <label for="name">Emp Cnic</label>
    <input type="text" class="form-control" name="empcnc" id="empcnc" 
       placeholder="Enter cnic">
</div>
        <div class="form-group">
    <label for="name">Emp Name</label>
    <input type="text" class="form-control" name="empname" id="empname" 
       placeholder="Enter Name">
</div>

  <div class="form-group">
    <label for="name">Emp Father Name</label>
    <input type="text" class="form-control" name="empfather" id="empfather" 
       placeholder="Enter Father Name">
</div>
    <div class="form-group">
    <label for="name">Emp Scale</label>
    <input type="text" class="form-control" name="empscale" id="empscale" 
    placeholder="Enter Scale">
    </div>
        <div class="form-group">
    <label for="name">Emp Post</label>
    <input type="text" class="form-control" name="emppost" id="emppost" 
    placeholder="Entir post">
    </div>
        <div class="form-group">
    <label for="name">Emp Address</label>
    <input type="text" class="form-control" name="empadd" id="empadd" 
    placeholder="Enter Address">
    </div>
    
    
    
   
       
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
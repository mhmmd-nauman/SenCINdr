<div class="alert alert-danger">
 <?php echo validation_errors(); ?>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php echo form_open('employes/update_emp') ?>

<div class="form-group">
    <label for="name">Emp Cnic</label>
    <input type="text" class="form-control" name="empcnc" id="empcnc"value="<?php echo $emp[0]->Emp_cnic;?>"
       placeholder="Enter cnic">
</div>
        <div class="form-group">
    <label for="name">Emp Name</label>
    <input type="text" class="form-control" name="empname" id="empname"value="<?php echo $emp[0]->Emp_name;?>"
       placeholder="Enter Name">
</div>

  <div class="form-group">
    <label for="name">Emp Father Name</label>
    <input type="text" class="form-control" name="empfather" id="empfather" value="<?php echo $emp[0]->Emp_father_name;?>" 
       placeholder="Enter Father Name">
</div>
    <div class="form-group">
    <label for="name">Emp Scale</label>
    <input type="text" class="form-control" name="empscale" id="empscale"value="<?php echo $emp[0]->Emp_scale;?>"
    placeholder="Enter Scale">
    </div>
        <div class="form-group">
    <label for="name">Emp Post</label>
    <input type="text" class="form-control" name="emppost" id="emppost"value="<?php echo $emp[0]->Emp_post;?>" 
    placeholder="Entir post">
    </div>
        <div class="form-group">
    <label for="name">Emp Address</label>
    <input type="text" class="form-control" name="empadd" id="empadd"value="<?php echo $emp[0]->Emp_address;?>" 
    placeholder="Enter Address">
    </div>
    
        <input type="hidden" name="id" id="id" value="<?php echo $emp[0]->id;?>">
    
    
   
       
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
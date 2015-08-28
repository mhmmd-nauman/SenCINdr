<div class="alert alert-danger">
 <?php echo validation_errors(); ?>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php echo form_open('student/update_std') ?>

<div class="form-group">
    <label for="name">student name</label>
    <input type="text" class="form-control" name="stdname" id="stdname"value="<?php echo $std[0]->name;?>"
       placeholder="Enter cnic">
</div>
        <div class="form-group">
    <label for="name">Father name</label>
    <input type="text" class="form-control" name="stdfather" id="stdfather"value="<?php echo $std[0]->Father_name;?>"
       placeholder="Enter Name">
</div>

  <div class="form-group">
    <label for="name">Student Cnic</label>
    <input type="text" class="form-control" name="stdcnic" id="stdcnic" value="<?php echo $std[0]->cnic;?>" 
       placeholder="Enter Father Name">
</div>
    <div class="form-group">
    <label for="name">student Class</label>
    <input type="text" class="form-control" name="stdclass" id="stdclass"value="<?php echo $std[0]->class;?>"
    placeholder="Enter Scale">
    </div>
        <div class="form-group">
    <label for="name">student Session</label>
    <input type="text" class="form-control" name="stdsession" id="stdsession"value="<?php echo $std[0]->session;?>" 
    placeholder="Entir post">
    </div>
        <div class="form-group">
    <label for="name">student Address</label>
    <input type="text" class="form-control" name="stdaddress" id="stdaddress"value="<?php echo $std[0]->address;?>" 
    placeholder="Enter Address">
    </div>
    
        <input type="hidden" name="id" id="id" value="<?php echo $std[0]->id;?>">
    
    
   
       
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
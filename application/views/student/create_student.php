<div class="alert-alert-danger">
    
<?php echo validation_errors(); ?>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
<?php echo form_open('student/create') ?>

<div class="form-group">
      <label for="name">student name</label>
    <input type="text" value="<?php echo set_value('stdname'); ?>" class="form-control" name="stdname" id="stdname"
       placeholder="Enter name">
   </div>  
        
<div class="form-group">
      <label for="name">Father name</label>
    <input type="text" value="<?php echo set_value('stdfather'); ?>" class="form-control" name="stdfather" id="stdfather" 
       placeholder="Enter father name">
   </div>         
<div class="form-group">
      <label for="name"> Student CNic</label>
    <input type="text" class="form-control" name="stdcnic" id="stdcnic" 
       placeholder="Enter cnic">
   </div>         
<div class="form-group">
      <label for="name">student Class</label>
    <input type="text" class="form-control" name="stdclass" id="stdclass" 
       placeholder="Enter class">
   </div>         
<div class="form-group">
      <label for="name">student Session</label>
    <input type="text" class="form-control" name="stdsession" id="stdsession" 
       placeholder="Enter session">
   </div>         
<div class="form-group">
      <label for="name">student Address</label>
    <input type="text" class="form-control" name="stdaddress" id="stdaddress" 
       placeholder="Enter address">
   </div>         

         <td>&nbsp;</td>
         
         

   <button type="submit" class="btn btn-primary" 
               data-toggle="button"> submit
 </button>
            <td><input type="submit" name="sbtn" id="sbtn" value="Submit" /></td>
  </tr>
</table>


</form>
</div>
<div class="col-md-3"></div>
</div>
</body>
</html>
     


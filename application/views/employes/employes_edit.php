
 <?php echo validation_errors(); ?>

<?php echo form_open('employes/save_emp') ?>
<table width="332" height="203" border="1" align="center">
  <tr>
    <td height="28" colspan="2"><div align="center">Employes Form</div></td>
    </tr>
  <tr>
    <td width="102" height="29">Emp_name</td>
    <td width="199"><label for="nm"></label>
        <input type="text" name="nm" id="nm" value="<?php echo $emp[0]->Emp_name;?>" /></td>
  </tr>
  <tr>
    <td height="33">Emp_father_name</td>
    <td><label for="fm"></label>
      <input type="text" name="fm" id="fm" value="<?php echo $emp[0]->Emp_father_name;?>" /></td>
  </tr>
  <tr>
    <td height="34"><u>Emp cnic</u></td>
    <td><label for="cnc"></label>
      <input type="text" name="cnc" id="cnc" value="<?php echo $emp[0]->Emp_cnic;?>" /></td>
  </tr>
  <tr>
    <td height="32">Emp_scale</td>
    <td><label for="scale"></label>
      <input type="text" name="scale" id="scale" value="<?php echo $emp[0]->Emp_scale;?>" /></td>
  </tr>
  <tr>
    <td>Emp_post</td>
    <td><label for="post"></label>
      <input type="text" name="post" id="post" value="<?php echo $emp[0]->Emp_post;?>" /></td>
  </tr>
  <tr>
    <td>Emp_address</td>
    <td><label for="add"></label>
      <textarea name="add" id="add" value="<?php echo $emp[0]->Emp_address;?>" cols="45" rows="5" ></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="sbtn" id="sbtn" value="Submit" /></td>
  </tr>
</table>

<input type="hidden" name="id" id="id" value="<?php echo $emp[0]->id;?>" />
</form>
</body>
</html>
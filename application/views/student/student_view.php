
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#0099CC">
    <?php echo validation_errors(); ?>

<?php echo form_open('student/create') ?>
    <table width="258" border="1" align="center">
  <tr>
    <td colspan="2">insert form</td>
    </tr>
  <tr>
    <td width="98">name</td>
    <td width="144"><label for="nm"></label>
      <input type="text" name="nm" id="nm" /></td>
  </tr>
  <tr>
    <td>id</td>
    <td><label for="id"></label>
      <input type="text" name="id" id="id" /></td>
  </tr>
  <tr>
    <td>class</td>
    <td><label for="clss"></label>
      <input type="text" name="clss" id="clss" /></td>
  </tr>
  <tr>
    <td>session</td>
    <td><label for="ssa"></label>
      <input type="text" name="ssa" id="ssa" /></td>
  </tr>
  <tr>
    <td>address</td>
    <td><label for="ara"></label>
      <textarea name="ara" id="ara" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btn" id="btn" value="Submit" /></td>
  </tr>
    </table>

    
    
    
    
</form>
</body>


</html>
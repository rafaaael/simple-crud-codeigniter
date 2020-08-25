<form method="post" name="frmEdit" action="<?php echo base_url('student/update');?>">
<table align="center">
<tr>
<td colspan="2" align="center">Edit Record</td>
</tr>
<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $student['id'] ?>">
<tr>
<td>First Name</td>
<td><input type="text" name="txtFname" value="<?php echo $student['first_name']; ?>"> </td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="txtLname" value="<?php echo $student['last_name']; ?>"> </td>
</tr>
<tr>
<td>Address</td>
<td><textarea name="txtAddress" rows="4" cols="16"><?php echo $student['address']; ?></textarea> </td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="txtEmail" value="<?php echo $student['email']; ?>"> </td>
</tr>
<tr>
<td>Mobile</td>
<td><input type="text" name="txtMobile" value="<?php echo $student['mobile']; ?>"> </td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Edit" name="btnEdit"> </td>
</tr>
</table>
</form>
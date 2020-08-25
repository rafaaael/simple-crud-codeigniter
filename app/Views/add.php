<form method="post" name="frmAdd" action="<?php echo site_url('student/store');?>">
        <table align="center">
            <tr>
                <td colspan="2" align="center">Add Record</td>
            </tr>
 
            <tr>
                <td>First Name</td>
                <td><input type="text" name="txtFname"> </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="txtLname"> </td>
            </tr>
            <tr>
                <td>Address</td>
                <td><textarea name="txtAddress" rows="4" cols="16"></textarea> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtEmail"> </td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><input type="text" name="txtMobile"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Add" name="btnadd"> </td>
            </tr>
        </table>
</form>
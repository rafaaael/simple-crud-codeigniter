<html>
<head>
<title>Codeigniter 4 CRUD (Create Read Update Delete) Tutorial For Beginners - XpertPhp</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
 
<table border="1" align="center">
    <tr>
        <td colspan="5" align="right"><a href="<?php echo site_url('student/create') ?>">Add</a></td>
    </tr>
 
<tr>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
<td>Mobile</td>
<td>Action</td>
</tr>
<?php
foreach($students_detail as $sd){
?>
<tr>
<td><?php echo $sd['first_name']; ?></td>
<td><?php echo $sd['last_name']; ?></td>
<td><?php echo $sd['email']; ?></td>
<td><?php echo $sd['mobile']; ?></td>
<td><a  href="<?php echo base_url(); ?>/student/edit/<?php echo $sd['id']; ?>">Edit</a>&nbsp;<a  href="<?php echo base_url(); ?>/student/delete/<?php echo $sd['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>
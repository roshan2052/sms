<?php

session_start();

if(isset($_SESSION['uid']))
{
  echo " ";
}
else
{
  header('location:../login.php');
}
?>

<?php
include('header.php');
include('titlehead.php');
include('../dbcon.php');

$sid=$_GET['sid'];

$qry="SELECT * FROM `student` WHERE `id`='$sid'";

$run=mysqli_query($con,$qry);

$data=mysqli_fetch_assoc($run);
?>

<form method="POST" action="updatedata.php" enctype="multipart/form-data">
  <table align="center" style="width: 70%;margin-top: 40px" border="1">
    <tr>
     <th>Roll no</th>
     <td><input type="text" name="rollno" value="<?php echo $data['roll no.']; ?>" required="required"></td>
   </tr>
   <tr>
     <th>Full name</th>
     <td><input type="text" name="name" value="<?php echo $data['name']; ?>"   required="required"></td>
   </tr>
   <tr>
     <th>city</th>
     <td><input type="text" name="city" value="<?php echo $data['city']; ?>" required="required"></td>
   </tr>
   <tr>
     <th>parents contact no.</th>
     <td><input type="text" name="pcon" value="<?php echo $data['pcon']; ?>"></td>
   </tr>
   <tr>
     <th>standard</th>
     <td><input type="number" name="std" value="<?php echo $data['standard']; ?>" required="required"></td>
   </tr>
   <tr>
     <th>Image</th>
     <td><input type="file" name="simg" required></td>
   </tr>
   <tr>
     <td colspan="2" align="center">
      <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
      <input type="submit" name="submit" value="submit"></td>
    </tr>
  </table>
</form>
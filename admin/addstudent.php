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
?>
<!DOCTYPE html>
<html>
<head>
  <title>student management system</title>
  <style type="text/css">
  table th
  {
    background-color: #3a6070;
  }
  table
  {
    background-color: grey;
  }
</style>
</head>
<body>
  <form method="POST" action="addstudent.php" enctype="multipart/form-data">
    <table align="center" style="width: 70%;margin-top: 40px" border="1" cellpadding="10">
      <tr>
        <th>Roll no</th>
        <td><input type="text" name="rollno" placeholder="Enter your rollno" required="required"></td>
      </tr>
      <tr>
        <th>Full name</th>
        <td><input type="text" name="name" placeholder="Enter your fullname" required="required"></td>
      </tr>
      <tr>
        <th>City</th>
        <td><input type="text" name="city" placeholder="Enter your city name" required="required"></td>
      </tr>
      <tr>
        <th>Parents contact no.</th>
        <td><input type="text" name="pcon" placeholder="Enter your parent contact no." maxlength="10"></td>
      </tr>
      <tr>
        <th>Standard</th>
        <td><input type="number" name="std" placeholder="Enter standard" required="required"></td>
      </tr>
      <tr>
        <th>Image</th>
        <td><input type="file" name="simg" required="required"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  include('../dbcon.php');
  $rolno=$_POST['rollno'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $pcon=$_POST['pcon'];
  $std=$_POST['std'];
$imagename=$_FILES['simg']['name']; // use video to know how to upload image
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename"); //understand this line by using video
$qry="INSERT INTO `student`( `roll no.`, `name`, `city`, `pcon`, `standard`,`image`) VALUES ('$rolno','$name','$city','$pcon','$std','$imagename') ";
$run=mysqli_query($con,$qry);
if($run==TRUE)
{
  ?>
  <script>
    alert('data inserted successfully');
  </script>
  <?php
}else
{
  echo "Error";
}
}
?>
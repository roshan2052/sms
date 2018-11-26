<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
</head>
<body style="background-color: green">
	<h1 align="center">Admin login</h1>
	<form method="post" action="login.php">

		<table align="center">   

			<tr>
				<td>Username :</td><td><input type="text" name="username" placeholder="Enter your Username" required="required"></td>
			</tr>
			<tr>
				<td>Password :</td><td><input type="Password" name="password" placeholder="Enter your Password" required="required"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="login" value="login"></td>
			</tr>	
		</table>	

	</form>





</body>
</html>

<?php

	  $nameErr = "";
      $name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["username"])) 
  {
    $nameErr = "Name is required";
  } else 
     {
    $name = $_POST["username"];
    
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
       {
      $nameErr = "Only letters and white space allowed"; 
       }
     }
}
?>

<?php

include('dbcon.php');

if(isset($_POST['login']))
{
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$qry="select * from admin where username='$Username' and Password='$Password'";
	$run=mysqli_query($con,$qry);
	$row=mysqli_num_rows($run);
	if($row<1)
	{
		?>
		<script>
			alert('username or Password donot match !!');
			window.open('login.php','_self');
		</script>
		<?php

	}
	else
	{   
		$data=mysqli_fetch_assoc($run);
		$id=$data['id'];
		$_SESSION['uid']=$id;
		header('location:admin/admindash.php');
	}
}
?>
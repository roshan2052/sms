<!DOCTYPE html>
<html>
<head>
	
	<title>student management system</title>
	<style type="text/css">
	table th
	{
		background-color: #3a6070;
		font-size: 20px;
	}
	table td
	{
		background-color: grey;
	} 
	a
	{
		color: red;		}
	</style>
	
</head>
<body style="background-color: green;">

	<h3 align="right" style=""><a href="login.php">Admin login</a></h3>
	<h1 align="center"><i>Welcome to student management system</i></h1>
	<form method="post" action="index.php">
		<table style="width: 50%;" align="center" border="1" cellpadding="10">
			<tr>
				<th colspan="2" align="center">Student Information</th>
			</tr>
			<tr>
				<td >choose standard</td>
				<td>
					<select name="std">
						<option value="1">1st</option>
						<option value="2">2nd</option>
						<option value="3">3rd</option>
						<option value="4">4th</option>
						<option value="5">5th</option>
						<option value="6">6th</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Enter Rollno:</td><td><input type="text" name="Rollno" placeholder="Enter your Rollno" required="required"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="show info"></td>
			</tr>
		</table>
	</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$standard=$_POST['std'];
	$Rollno=$_POST['Rollno'];
	include('function.php');
        showdetails($standard,$Rollno); //try to understand how function works.
    }
    ?>
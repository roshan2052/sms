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
?>
<div class="admintitle">
	<h4><a href="logout.php" style="float: right;margin-right: 30px;font-size: 20px;color: red;">Logout</a></h4>
	<h1 align="center">welcome to Admin Dashboard</h1>
</div>
<div class="dashboard">
	<table align="center" width="50%">
		<tr>
			<td>1.  <a href="addstudent.php" style="color: black;">Insert student details</a></td>
		</tr>
		<tr>
			<td>2.  <a href="updatestudent.php" style="color: black;">Update student details</a></td>
		</tr>
		<tr>
			<td>3.  <a href="delete student.php" style="color: black;">Delete student details</a></td>
		</tr>
		
	</table>
</div>
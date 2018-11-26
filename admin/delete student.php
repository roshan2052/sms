<?php
session_start();
if(isset($_SESSION['uid']))
{
	echo " ";
}
else{
	header('location:../login.php');
}
?>
<?php
include('header.php');
include('titlehead.php');
?>
<form action="delete student.php" method="POST">
	<table align="center">
		<tr>
			<th>Enter standard</th>
			<td><input type="number" name="standard" placeholder="Enter standard" required="required"></td>
			<th>Enter Student Name</th>
			<td><input type="text" name="stuname" placeholder="Enter Student Name" required="required "></td>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Search"></td>
		</tr>
	</table>
</form>
<table align="center" width="80%" border="1" style="margin-top: 10px; " >
	<tr style="background-color: black;color: white">
		<th>NO</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>City</th>
		<th>Pcon</th>
		<th>Edit</th>
	</tr>
	<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		$standard=$_POST['standard'];
		$name=$_POST['stuname'];
	$qry="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'"; //try to understand %$name%...use video to understand
	$run=mysqli_query($con,$qry);
	if(mysqli_num_rows($run)<1)
	{
		?>
		
		<h2 align="center" style="color: red"> <?php echo "No records found"; ?></h2>
		
		<?php
	}
	else
	{
		$count=0;
		while ($data=mysqli_fetch_assoc($run)) {
			$count++
			?>
			<tr>
				<td> <?php echo $count; ?></td>
				<td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width: 100px;" ></td> <!-- here i should begin php code without giving any space -->
				<td><?php echo $data['name']; ?></td>
				<td><?php echo $data['roll no.']; ?></td>
				<td><?php echo $data['city']; ?></td>
				<td><?php echo $data['pcon'];  ?></td>
				<td><a href="deleteform.php?sid=<?php echo $data['id'];  ?>">Delete</a></td> <!--try to understand this line by seeing the video  -->
			</tr>
			<?php
		}
	}
}
?>
</table>
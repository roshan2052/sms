<?php
include('../dbcon.php');
$rolno=$_POST['rollno'];
$name=$_POST['name'];
$city=$_POST['city'];
$pcon=$_POST['pcon'];
$std=$_POST['std'];
$id=$_POST['sid']; //for updating the data we need to keep id ...use video to clear this concept
$imagename=$_FILES['simg']['name'];
$tempname=$_FILES['simg']['tmp_name'];
move_uploaded_file($tempname,"../dataimg/$imagename");
$qry="UPDATE `student` SET `roll no.` = '$rolno', `name` = '$name', `city` = '$city', `pcon` = '$pcon', `standard` = '$std', `image` = '$imagename' WHERE `id` = '$id' ";
$run=mysqli_query($con,$qry);
if($run==TRUE)
{
	?>
	<script>
		alert('data updated successfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self ');
	</script>
	<?php
}
?>
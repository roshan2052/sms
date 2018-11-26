<?php
include('../dbcon.php');
$id=$_REQUEST['sid'];
$qry="DELETE FROM `student` WHERE `id`='$id';";
$run=mysqli_query($con,$qry);
if($run==TRUE)
{
	?>
	<script>
		alert('data deleted successfully');
		window.open('delete student.php','_self ');
	</script>
	<?php
}
?>
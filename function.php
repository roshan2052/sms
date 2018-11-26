<?php

function showdetails($standard,$Rollno)
{
  include('dbcon.php');
  $qry="SELECT * FROM `student` WHERE `roll no.`='$Rollno' AND `standard`='$standard'";
  $run=mysqli_query($con,$qry);

  if(mysqli_num_rows($run)>0)
  {
   $data=mysqli_fetch_assoc($run);
   ?>
   
   <table border="1" align="center" style="width: 50%;margin-top: 30px" cellpadding="10" >
     <tr><th align="center" colspan="3">Student details</th></tr>
     <tr>
      <td rowspan="5">
       <img src="dataimg/<?php echo $data['image']; ?>" style="max-height: 150px;max-width: 120px;padding-left: 30px" >
     </td>
     <th>Roll no</th>
     <td><?php echo $data['roll no.']; ?></td>
     
   </tr>
   <tr>
    <th>Name</th>
    <td><?php echo $data['name']; ?></td>
  </tr>
  <tr>
    <th>City</th>
    <td><?php echo $data['city']; ?></td>
  </tr>
  <tr>
    <th>parent contact</th>
    <td><?php echo $data['pcon']; ?></td>
  </tr>
  <tr>
    <th>standard</th>
    <td><?php echo $data['standard']; ?></td>
  </tr>
</table>

<?php 
}
else
{
 echo "<script> alert('No record found.'); </script>";
 
}

}

?>
<?php

$con=mysqli_connect('localhost','root','','sms');
 
if($con==FALSE)
{
	echo "connection fail";
}
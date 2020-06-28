<?php

try {	
$con = mysqli_connect("localhost","root","","stay_happy");
}
catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}


if (isset($_POST['app_submit'])) {
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$service=$_POST['service'];
	$phone=$_POST['phone'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$message=$_POST['message'];

	
	$query ="insert into create_appointment(first_name,last_name,service,phone,date,time,message) values('$first_name','$last_name','$service','$phone','$date','$time','$message')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert ('Patient Registered') </script>";
    	echo "<script> window.open('appointment.html','_self')</script>";
	}
}
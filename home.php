<?php
mysql_connect("localhost","root","")or die (mysql_error());
mysql_select_db("AppoinmentRegister") or die (mysql_error());


if(isset($_POST['submit']))
{
	$name=$_POST['First Name']
	$name=$_POST['Last Name']
	$name=$_POST['Select Your Services']
	$name=$_POST['Phone']
	$name=$_POST['Date']
	$name=$_POST['Time']
	$name=$_POST['Message']
	$name=$_POST['Appointment']
	

}
?>
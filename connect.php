<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'brainstorm');

$FirstName          = $_POST['fname'];
$LastName           = $_POST['lname'];
$Email              = $_POST['mail'];
$Message			= $_POST['msg'];
$AdditionalDetails  = $_POST['adddetail'];

$query = " insert into contactus(fname,lname,mail,msg,adddetail)
values ('$FirstName','$LastName','$Email','$Message','$AdditionalDetails')";
mysqli_query($con,$query);

header('location:index.php')
?>

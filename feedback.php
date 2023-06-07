 <?php 

  $con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con, 'brainstorm');

$user =$_POST['yname'];
$email =$_POST['mail'];
$addtionaldetails =$_POST['addetail'];

$query = " insert into feedbackform (yname,mail,addetail)
values ('$user','$email','$addtionaldetails')";

mysqli_query($con,$query);
header('location:index.php')
?>
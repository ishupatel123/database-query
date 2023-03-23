<?php
//ob_start();
$con = mysqli_connect("localhost","root","","test");

	if(isset($_FILES['photo']))

   $img_nm= $_FILES['photo']['name'];

$ins = "insert into `faculty` (`name`,`email`,`password`,`contact`,`photo`) values ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['contact']."','".$img_nm."')";
$a = mysqli_query($con,$ins);
if($a)
{
	header("location:form.php");
	echo "record inserted.";
}
else
{
	echo "record not inserted";
}
?>
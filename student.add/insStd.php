<?php 
	include "config.php";
	//	var_dump($_REQUEST);
	if(isset($_REQUEST['sbt']))
	{
		$nm=$_REQUEST['nm'];
		$crs=$_REQUEST['stream'];
		$sem=$_REQUEST['sem'];
		$div=$_REQUEST['divs'];
		$mob=$_REQUEST['mobile'];
		$ins="insert into `student`(`name`,`strm`,`division`,`sem`,`mob`) values('$nm','$crs','$div','$sem','$mob')";
		$res=mysqli_query($con,$ins);
		if($res)
		{
			header("location:add_student.php");
		}
		else
		{
			echo "RECORD NOT INSERTED";
		}
	}
	else
	{
		header("location:add_student.php");
	}
?>
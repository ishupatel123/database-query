<?php 
	include "config.php";
	if(isset($_REQUEST['atdAdd']))
	{
		$crs=$_REQUEST['stream'];
		$sem=$_REQUEST['sem'];
		$div=$_REQUEST['divs'];
		$sql="select * from `student` where `strm`='$crs' and `division`='$div' and `sem`='$sem'";
		$res=mysqli_query($con,$sql);
		while($row=mysqli_fetch_assoc($res))
		{
			$id1=$row['id'];
			$atdId="atd".$id1;
			$name=$row['name'];
			$atd_data=$_REQUEST[$atdId];
			//echo "NAME:".$row['name']."  ATTD:".$atd_data."<br>";
			$ins="insert into `atd`(`strm`,`division`,`sem`,`sid`,`atd`) values('$crs','$div','$sem','$name','$atd_data')";
			$res1=mysqli_query($con,$ins);
			if($res1)
			{
					header("location:viewStudent.php");
			}
			else{
					echo "WRONG";
			}
			
		}
	}
	else
	{
		header("location:viewStudent.php");
	}
?>
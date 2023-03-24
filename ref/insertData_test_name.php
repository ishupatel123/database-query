insertData_test_name.php
<?php
	if(isset($_REQUEST['sbt']))
	{
		include "config.php";
		//var_dump($_REQUEST);
		$nm=$_REQUEST['user'];
		$eml=$_REQUEST['e'];
		$pwd=$_REQUEST['psd'];
		$ref=$_REQUEST['ref'];
		if($ref!="" || !empty($ref))
		{
			$sql="select * from `tst` where `ref`='$ref'";
			$res=mysqli_query($con,$sql);
			if(mysqli_num_rows($res)>0)
			{
				//echo "VALID";
				$pnt="50";
				$ref_det="I".rand(99999,999999);
				$ins="insert into `tst`(`name`,`password`,`email`,`ref`,`ref_by`,`point`) values('$nm','$pwd','$eml','$ref_det','$ref','$pnt')";
				$res=mysqli_query($con,$ins);
				echo $ins;
			}
			else
			{
				header("location:form.php?err=Invalid Ref&user=$nm&e=$eml&psd=$pwd");
			}
		}
		else{
			$pnt="50";
							$ref_det="I".rand(99999,999999);
				$ins="insert into `tst`(`name`,`password`,`email`,`ref`,`point`) values('$nm','$pwd','$eml','$ref_det','$pnt')";
				$res=mysqli_query($con,$ins);
		}
		
	}
	else
	{
		header("location:form.php");
	}
?>
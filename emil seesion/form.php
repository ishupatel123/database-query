<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<h2>Login Form</h2>

<div class="container">
  <form action="form.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">email:</label>
      </div>
      <div class="col-75">
        <input type="email"  name="email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Password:</label>
      </div>
      <div class="col-75">
        <input type="text" name="pwd">
      </div>
    </div>
    <div class="row">
      <input type="submit" name="btnsubmit" value="Login">
    </div>
  </form>
</div>
</body>
</html>
<?php
require "config.php";
if(isset($_POST['btnsubmit']))
{
	$email= $_POST['email'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT * FROM `geet` WHERE `email`='$email' AND `pwd`='$pwd'";
	$result = mysqli_query($con,$sql);
	$data = mysqli_fetch_assoc($result);
	$count = mysqli_num_rows($result);

	if($count > 0)
	{
		session_start();
		$_SESSION['id']=$data['id'];
		$_SESSION['email']=$data['email'];
		header("location:dashboard.php");
	}
	else
	{
		echo "<script>alert('Check Your email & Password!');</script>";
	}
}
?>
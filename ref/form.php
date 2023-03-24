<?php
$style="";
$text="enter Ref.no";
$nm="";
$eml="";
$pwd="";
if(isset($_REQUEST['err']))
{
    $style="border-color:red;";
    $text=$_REQUEST['err'];
     $nm=$_REQUEST['user'];
      $eml=$_REQUEST['e'];
       $pwd=$_REQUEST['psd'];
}
?>
    <form action="insertData_test_name.php" method="post">
	<input type="text" name="user" value="<?php echo $nm; ?>" placeholder="Enter Your Full name">
<br>
	<input type="email" name="e" value="<?php echo $eml; ?>"  placeholder="Enter E-mail Address">
	<br>
    <input type="password" name="psd" value="<?php echo $pwd;?>" placeholder="enter password">
<br>
    <input type="text" name="ref" placeholder="<?php echo $text;?>">
<br>
<input type="submit" value="Submit" name="sbt">
	<a href="login.php">LOGIN</a>
</form>

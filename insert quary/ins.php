<?php
    include "connection.php";

    $fnm=$_REQUEST['fnm'];
    $lnm=$_REQUEST['lnm'];
    $email=$_REQUEST['email'];
    $contact=$_REQUEST['contact'];
    $city=$_REQUEST['city'];
    $add=$_REQUEST['add'];
    $course=$_REQUEST['course'];
    $dob=$_REQUEST['dob'];
    $rd=$_REQUEST['rd'];

    $insert="INSERT INTO `reg`(`fnm`,`lnm`,`email`,`contact`,`city`,`add`,`course`,`dob`,`rd`)VALUES('$fnm','$lnm','$email','$contact','$city','$add','$course','$dob','$rd')";

$result=mysqli_query($con,$insert);
header("location:form.php");
?>
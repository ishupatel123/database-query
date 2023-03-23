<?php
        session_start();
        include"config.php";
        $email=$_POST['email'];
        $psw=$_POST['psw'];
        $sql="SELECT * FROM `login` WHERE 'email'='$email' AND  'psw'='psw';
        $res=mysqli_query($con,$sql);
        if(mysqli_fetch_assoc($result))
        {
            $row="mysqli_fetch_assoc($result));
            $session['email']=$roe['email'];
            if(isset($_SESSION['email']))
            {
                header("location:welcom.php");
            }
            else
            {
                echo "session is not avelabel;"
            }
            else
        }
            {
                echo "invalid email or password";
            }
        
            ?>
        

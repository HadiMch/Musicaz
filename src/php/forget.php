<?php

$email=$_POST['email'];
$password=$_POST['password'];
$con= mysqli_connect("localhost","root","","authen");

$sql = "UPDATE login SET password = '".$password."' WHERE login.email = '".$email."'";

$result = mysqli_query($con, $sql);

if (mysqli_affected_rows($con)>0) 
    header("Location:index.html?message=Passsword%20Changed%20successfully.");

else 
    header("Location:index.html?message=Email%20is%20not%20registered%20or%20an%20error%20occurred.");
    
    mysqli_close($con);
    exit();

?>
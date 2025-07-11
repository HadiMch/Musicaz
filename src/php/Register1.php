<?php
$email=$_POST['email'];
$password=$_POST['password'];
$con= mysqli_connect("localhost","root","","authen");
$check_query = "SELECT COUNT(*) AS count FROM login WHERE email = '$email'";
$check_result = mysqli_query($con, $check_query);
$row = mysqli_fetch_assoc($check_result);

if ($row['count'] > 0) {
    header("Location: index.html?message=Email%20already%20exists.");
    mysqli_close($con);
    exit();
}
$sql = "INSERT INTO login (email, password, category) VALUES ('$email', '$password', 'N')";
$result = mysqli_query($con, $sql);

if ($result) 
    header("Location:index.html?message=You have registered successfly.");

else 
    header("Location:index.html?message=An Error Occurred Please try again.");
    
    mysqli_close($con);
    exit();
?>
    <?php

$con=mysqli_connect("localhost","root","","authen");

if (!$con) {
    die("Connection failed: " . $conn->connect_error);
}
if($con)
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];
    $sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";
    if ($con->query($sql) === TRUE) {
        header("Location:aboutus.html?message=Your Feedback is Sent Successfly Thank You.");
    } else {
        header("Location:aboutus.html?message=There was a mistake your feedback didn't make it please try again.");
    }
    $con->close();
}



?>


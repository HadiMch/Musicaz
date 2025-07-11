<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $password=$_POST['password'];


    $con=mysqli_connect("localhost","root","","authen");
    $q="select * from login where email='".$email."' and password='".$password."' ";

    $r=mysqli_query($con, $q);

    if(mysqli_num_rows($r)==1){
            $row=mysqli_fetch_array($r);
            if($row[2]=='A')
                header("Location: Admin.php");
            else
                header("Location: home.html");

    }
    else{ 
        header("Location:index.html?message=You have entered a wrong email or password.");    
    }
    


}

?>

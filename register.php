<?php 

include 'connect.php';

if(isset($_POST['submit'])){
    $Name=$_POST['fname'];
    $email=$_POST['email'];
    $c_pass=$_POST['c_pass'];
    $password=$_POST['pass'];

     $checkEmail="SELECT * From signin where email='$email'";
     
     if(mysqli_query($conn,$checkEmail)){
        echo "Connected";
     }
     
        $insertQuery="INSERT INTO signin(fname,pass,c_pass,email)
                       VALUES ('$Name','$password','$c_pass','$email')";
            if($conn->query($insertQuery)==TRUE){
                header("location: login.html");
            }
            else{
                echo "Error:".$conn->error;
            }
     
   

}

?>
<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['pass'];
    
    $sql="SELECT * FROM signin WHERE email='$email' and pass='$pass'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("Location: home.php");
     exit();
    }
    else{
     echo "Not Found, Incorrect Email or Password";
    }
 
 }
 


?>
<?php

$host="localhost";
$user="root";
$pass="";
$db="thor";
$conn=new mysqli($host,$user,$pass,$db);
if(!$conn){
    echo "Failed to connect DB".$conn->connect_error;
}
else{
    echo "Connected";
}
?>`
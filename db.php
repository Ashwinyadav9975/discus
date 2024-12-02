<?php 
$localhost="localhost";
$username="root";
$password="";
$db="test";
$conn=new mysqli($localhost,$username,$password,$db);
if($conn->connect_error){
    echo"not connected";
}
echo"connected";


?>
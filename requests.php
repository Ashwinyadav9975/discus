<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $getstudent = $conn->prepare("insert into user
    (id,username,email,password,address) values('null','$username','$email','$password','$address')");
    $result = $getstudent->execute();
    if ($result) {
        //  echo"new user is inserted";
        $_SESSION['user'] = ["username" => $username, "email" => $email];
        header("location:/discuse");
    } else {
        echo "new user not inserted";
    }
}
else if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username="";
    $query="select * from user where email='$email' and password='$password'";
$result=$conn->query($query);
if($result->num_rows==1){
    foreach($result as $row){
        $username=$row['username'];
    }
    $_SESSION['users']=["username"=>$username,"email"=>$email];
    header("location:/discuse");
}else{
    echo"new user not reg";
}
}elseif (isset($_GET['logout'])) {
    session_unset();
    header("location: /discuse");
}

?>
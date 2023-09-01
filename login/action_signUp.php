<?php
include "connection.php";
session_start();
if (isset($_POST["submit"]) && !empty($_POST["submit"])) {
    
    $email=$_POST["email"];
    $password=$_POST["password"];


    $sql="SELECT * FROM mylogin WHERE email= '{$email}'";

    $result=$conn->query($sql);

    if ($result->num_rows > 0) {
       
    echo "This credential existed";
    
    
    }
    else{

        $password=password_hash($password,PASSWORD_DEFAULT);

        $sql="INSERT INTO `mylogin`(`email`, `password`) VALUES ('{$email}','{$password}' )";
    $result=$conn->query($sql);

        $_SESSION["emAil"]=$email;

    if ($result) {
        
        echo "Data Has been inserted";
        header("Refresh:1,url=dashboard.php");
    }


    }


}

?>
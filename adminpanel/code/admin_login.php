<?php

include('db.php');
if(isset($_POST['btn'])){
    $email = $_POST['username'];
    $password = $_POST['password'];
    // echo $email;
    // echo $password;
    
    $select_data = "SELECT * FROM `admintbl` WHERE `username` = '$email' AND `password` = '$password'";
    $result = mysqli_query($conn, $select_data);
    if(mysqli_num_rows($result) > 0){
        session_start();
        $_SESSION['admin']=$email;
        header("location:../dashboard.php");

    }else{
        echo "<script>alert('Login failed');window.location.href='../index.php'; </script>";
    }
}
else{
    echo "<script>alert('Login failed anand');window.location.href='../index.php'; </script>";
    // header("location:../index.php");
}
?>
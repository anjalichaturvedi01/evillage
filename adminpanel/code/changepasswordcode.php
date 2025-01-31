<?php
include('db.php');
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$confirmpassword = $_POST['confirmpassword'];   

$query = "SELECT * FROM admintbl WHERE password = '$oldpassword'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 1){
    $query = "UPDATE admintbl SET password = '$newpassword' WHERE password = '$oldpassword'";
    mysqli_query($conn, $query);
    echo "<script>alert('Password changed successfully') ; window.location.href='../dashboard.php';</script>";
}
else{
    echo "<script>alert('Old Password is incorrect'); window.location.href='../changepassword.php';</script>";
}
?>
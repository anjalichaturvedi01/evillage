<?php

$a=$_POST['email'];
$b=$_POST['pass'];
$conn=mysqli_connect("localhost","root","","evillage");
$ins="insert into login(email,pass) values('$a','$b')";
if(mysqli_query($conn,$ins))
{
    header("dashboard.php");
   echo "Data Insert";

}
else
{
    echo "Data Not Insert";
}
?>
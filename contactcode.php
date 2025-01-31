<?php

$a=$_POST['name'];
$b=$_POST['mobile'];
$c=$_POST['email'];
$d=$_POST['msg'];

$conn=mysqli_connect("localhost","root","","evillage");
$ins="INSERT INTO `contact`(`name`, `mobile`, `email`, `msg`) VALUES ('$a','$b','$c','$d')";
if(mysqli_query($conn,$ins))
{
    // header("form1.php");
   echo "Data Insert";

}
else
{
    echo "Data Not Insert";
}
?>
<?php

$a=$_POST['name'];
$b=$_POST['mob'];
$conn=mysqli_connect("localhost","root","","evillage");
$ins="insert into feedback(name,mob) values('$a','$b')";
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
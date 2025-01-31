

<?php
$a = $_POST['name'];
$b = $_POST['fathername'];
$c = $_POST['gender'];
$d = $_POST['quali'];
$e = $_POST['mob'];
$f = $_POST['add'];
$g = $_POST['email'];
$h = $_POST['city'];
$conn=mysqli_connect("localhost","root","","evillage");
$ins="INSERT INTO `reg`( `name`, `fathername`, `gender`, `quali`, `mod`, `add`, `email`, `city`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";
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






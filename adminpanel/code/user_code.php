<?php
include("db.php");

if (isset($_POST['btn'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $city = $_POST['city'];

    // Insert query
    $sql = "INSERT INTO user (name, mobile, password, city) VALUES ('$name', '$mobile', '$password', '$city')";

    if (mysqli_query($conn, $sql)) {
        // Display alert and redirect
        echo "<script>
                alert('User added successfully!');
                window.location.href = '../manage_all_user.php';
              </script>";
    } else {
        // Display error message
        echo "<script>
                alert('Error: Could not add user.');
                window.history.back();
              </script>";
    }
}
?>

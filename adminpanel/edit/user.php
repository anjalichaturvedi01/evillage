<?php
include("../code/db.php");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Delete the user record from the database
    $deleteQuery = "DELETE FROM user WHERE id = '$id'";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>
                alert('User deleted successfully!');
                window.location.href = '../show_all_user.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Could not delete user.');
                window.history.back();
              </script>";
    }
}
?>

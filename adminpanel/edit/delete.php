<?php
include("../code/db.php");

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Step 1: Retrieve the media file path associated with the notification
    $query = "SELECT media FROM notifications WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    // Check if the record exists
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Step 2: Delete the media file from the server (if it exists)
        if (file_exists($row['media']) && !empty($row['media'])) {
            unlink($row['media']); // Delete the file from the server
        }

        // Step 3: Delete the notification record from the database
        $deleteQuery = "DELETE FROM notifications WHERE id = '$id'";
        if (mysqli_query($conn, $deleteQuery)) {
            // Step 4: Redirect and show success message
            echo "<script>
                    alert('Notification deleted successfully!');
                    window.location.href = '../manage_notification.php';
                  </script>";
        } else {
            // Show error message if database deletion fails
            echo "<script>
                    alert('Error: Could not delete notification.');
                    window.history.back();
                  </script>";
        }
    } else {
        // Handle case if the notification does not exist
        echo "<script>
                alert('Notification not found.');
                window.history.back();
              </script>";
    }
}
?>

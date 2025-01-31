<?php
include("db.php");

if (isset($_POST['btn'])) {
    // Retrieve form data
    $title = $_POST['notificationTitle'];
    $text = $_POST['notificationText'];

    // Handle file upload
    $targetDir = "images/"; // Directory to save uploaded files
    $fileName = basename($_FILES["notificationMedia"]["name"]); // Get file name without path
    $targetFilePath = $targetDir . $fileName; // Full path for the upload

    // Allowed file types
    $allowedFileTypes = array('mp3', 'wav', 'png', 'jpg', 'jpeg', 'gif');

    // Get file extension
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (in_array($fileType, $allowedFileTypes)) {
        // Upload the file
        if (move_uploaded_file($_FILES["notificationMedia"]["tmp_name"], $targetFilePath)) {
            // Insert only the file name (without folder path) into the database
            $sql = "INSERT INTO notifications (title, media, text) VALUES ('$title', '$fileName', '$text')";

            if (mysqli_query($conn, $sql)) {
                // Display success alert and redirect
                echo "<script>
                        alert('Notification added successfully!');
                        window.location.href = '../manage_notification.php';
                      </script>";
            } else {
                // Display error alert
                echo "<script>
                        alert('Error: Could not add notification.');
                        window.history.back();
                      </script>";
            }
        } else {
            // Display upload error
            echo "<script>
                    alert('Error: Failed to upload media file.');
                    window.history.back();
                  </script>";
        }
    } else {
        // Invalid file type
        echo "<script>
                alert('Error: Invalid file type. Allowed types: mp3, wav, png, jpg, jpeg, gif.');
                window.history.back();
              </script>";
    }
}
?>

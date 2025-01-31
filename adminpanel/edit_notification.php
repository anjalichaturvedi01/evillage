<?php
include("../adminpanel/code/db.php");

// Get the notification ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the notification details from the database
    $query = "SELECT * FROM notifications WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $notification = mysqli_fetch_assoc($result);

    // Check if the notification exists
    if (!$notification) {
        echo "<script>
                alert('Notification not found!');
                window.location.href = 'manage_notifications.php';
              </script>";
    }
}

// Handle form submission to update notification
if (isset($_POST['update'])) {
    // Retrieve updated data from the form
    $title = $_POST['notificationTitle'];
    $text = $_POST['notificationText'];

    // Handle file upload
    $fileName = $_FILES["notificationMedia"]["name"];
    if ($fileName) {
        $targetDir = "code/images/";
        $targetFilePath = $targetDir . basename($fileName);
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
        $allowedFileTypes = ['mp3', 'wav', 'png', 'jpg', 'jpeg', 'gif'];

        if (in_array($fileType, $allowedFileTypes)) {
            move_uploaded_file($_FILES["notificationMedia"]["tmp_name"], $targetFilePath);
        } else {
            echo "<script>
                    alert('Invalid file type.');
                    window.history.back();
                  </script>";
        }
    } else {
        // If no new file is uploaded, keep the old one
        $fileName = $notification['media'];
    }

    // Update the notification in the database
    $updateQuery = "UPDATE notifications SET title = '$title', media = '$fileName', text = '$text' WHERE id = '$id'";

    if (mysqli_query($conn, $updateQuery)) {
        echo "<script>
                alert('Notification updated successfully!');
                window.location.href = 'show_notification.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Could not update notification.');
                window.history.back();
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
 /* Basic Reset */


h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color: #34495e;
}

/* Container for form */
/* .container-fluid {
    max-width: 800px;
    margin: 50px auto;
    padding: 40px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
} */

/* Form Container */
.form-container {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

/* Form Group */
.form-group {
    display: flex;
    flex-direction: column;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
    font-size: 16px;
    color: #2c3e50;
}

/* Input fields */
.input-field {
    padding: 12px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 8px;
    background-color: #f9f9f9;
    margin-bottom: 15px;
    transition: all 0.3s ease;
}

.input-field:focus {
    border-color: #3498db;
    outline: none;
    background-color: #fff;
}

textarea.input-field {
    resize: vertical;
    min-height: 150px;
}

/* File Input */
#notificationMedia {
    padding: 10px;
    border-radius: 8px;
    border: 1px solid #ccc;
    background-color: #f9f9f9;
    font-size: 16px;
    cursor: pointer;
}

#notificationMedia:focus {
    outline: none;
    border-color: #3498db;
}

/* Submit Button */
.submit {
    padding: 14px 22px;
    font-size: 16px;
    background-color: #3498db;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
    width: 100%;
}

.submit:hover {
    background-color: #2980b9;
}

.submit:focus {
    outline: none;
}

/* Media display */
form img {
    margin-top: 10px;
    max-width: 100px;
    max-height: 100px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

/* Paragraph text (for media info) */
p {
    font-size: 14px;
    color: #888;
    margin-top: 10px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .container-fluid {
        padding: 20px;
    }

    .form-container {
        gap: 15px;
    }

    .input-field {
        font-size: 14px;
    }

    .submit-btn {
        padding: 12px 18px;
    }
}

    </style>
    <title>Edit Notification</title>
    <?php include("dcsslink.php"); ?>
</head>
<body data-sidebar="dark" data-layout-mode="light">
    <?php include("header.php"); ?>
    <?php include("sidebar.php"); ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <h2>Edit Notification</h2>

                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="notificationTitle">Title</label>
                        <input type="text" name="notificationTitle" id="notificationTitle" value="<?php echo $notification['title']; ?>" required />
                    </div>

                    <div class="form-group">
                        <label for="notificationText">Text</label>
                        <textarea name="notificationText" id="notificationText" rows="4" required><?php echo $notification['text']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="notificationMedia">Media (Upload a new file if needed)</label>
                        <input type="file" name="notificationMedia" id="notificationMedia" />
                        <p>Current Media: <img src="code/images/<?php echo $notification['media']; ?>" alt="Current Media" style="max-width: 100px; max-height: 100px;"></p>
                    </div>

                    <button type="submit" name="update" class="submit">Update Notification</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <?php include("djslink.php"); ?>
</body>
</html>

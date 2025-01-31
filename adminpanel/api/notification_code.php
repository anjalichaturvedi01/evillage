<?php
// Start the session to protect the admin panel
// session_start();
// if (!isset($_SESSION['admin'])) {
//     echo json_encode(["status" => "error", "message" => "Unauthorized access"]);
//     exit();
// }

// Include database connection
include("../code/db.php");

$response = ["status" => "error", "message" => "Invalid Request"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch data from the form
    $title = isset($_POST['notificationTitle']) ? trim($_POST['notificationTitle']) : '';
    $text = isset($_POST['notificationText']) ? trim($_POST['notificationText']) : '';
    $media = isset($_FILES['notificationMedia']) ? $_FILES['notificationMedia'] : null;

    // Validation
    if (empty($title) || empty($text)) {
        $response["message"] = "Title and text are required.";
        echo json_encode($response);
        exit();
    }

    // Validate media
    $allowedMediaTypes = ['audio/mp3', 'audio/wav', 'image/png', 'image/jpeg', 'image/gif'];
    if ($media && !in_array($media['type'], $allowedMediaTypes)) {
        $response["message"] = "Invalid media type. Supported formats: .mp3, .wav, .png, .jpg, .jpeg, .gif.";
        echo json_encode($response);
        exit();
    }

    // Save media file
    $mediaFileName = null;
    if ($media && $media['error'] === 0) {
        $uploadDir = "../uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        // Generate a unique file name and save the file
        $mediaFileName = uniqid() . "-" . basename($media['name']);
        $mediaPath = $uploadDir . $mediaFileName;
        if (!move_uploaded_file($media['tmp_name'], $mediaPath)) {
            $response["message"] = "Failed to upload media.";
            echo json_encode($response);
            exit();
        }
    }

    // Insert data into the database (only the file name)
    $stmt = $conn->prepare("INSERT INTO notifications (title, text, media) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $text, $mediaFileName);

    if ($stmt->execute()) {
        $response = ["status" => "success", "message" => "Notification created successfully"];
    } else {
        $response["message"] = "Failed to create notification. Please try again.";
    }

    $stmt->close();
} else {
    $response["message"] = "Only POST requests are allowed.";
}

echo json_encode($response);
?>



<!-- keys of this API -->
<!-- ======================================================== -->
 <!-- =======================================================
  =========================================================== -->
<!-- notificationTitle -->
 <!-- notificationText -->
 <!-- notificationMedia -->

 <!-- ======================================================== -->
 <!-- =======================================================
  =========================================================== -->
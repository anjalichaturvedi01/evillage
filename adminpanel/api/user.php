<?php
// Include database connection
include("../code/db.php");

// Initialize response array
$response = ["status" => "error", "message" => "Invalid Request"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize input data
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $mobile = isset($_POST['mobile']) ? trim($_POST['mobile']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;
    $city = isset($_POST['city']) ? trim($_POST['city']) : null;

    // Validate input data
    if (empty($name) || empty($mobile) || empty($password) || empty($city)) {
        $response["message"] = "All fields are required.";
        echo json_encode($response);
        exit();
    }

    // Prepare an SQL statement to insert the user data
    $stmt = $conn->prepare("INSERT INTO user (name, mobile, password, city) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $mobile, $password, $city);

    if ($stmt->execute()) {
        $response["status"] = "success";
        $response["message"] = "User added successfully!";
    } else {
        $response["message"] = "Error: Could not add user.";
    }

    $stmt->close();
} else {
    $response["message"] = "Only POST requests are allowed.";
}

// Return the response as JSON
echo json_encode($response);
?>

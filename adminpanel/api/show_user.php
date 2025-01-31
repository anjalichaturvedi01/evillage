<?php
// Include database connection
include("../code/db.php");

// Initialize response array
$response = ["status" => "error", "message" => "No data found"];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Fetch users from the database
    $sql = "SELECT id, name, mobile, city FROM user";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $users = [];

        // Fetch all users as an associative array
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }

        // Prepare success response
        $response = [
            "status" => "success",
            "message" => "Users retrieved successfully",
            "data" => $users
        ];
    }
} else {
    $response["message"] = "Only GET requests are allowed.";
}

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);
?>

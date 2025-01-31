<?php
include("../adminpanel/code/db.php");

// Pagination setup
$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Search functionality
$searchTerm = '';
if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);
}

// Query to get contact with optional search
$query = "SELECT * FROM contact WHERE name LIKE '%$searchTerm%' OR mobile LIKE '%$searchTerm%' LIMIT $start, $limit";
$result = mysqli_query($conn, $query);

// Query to count total records for pagination
$countQuery = "SELECT COUNT(*) AS total FROM contact WHERE email LIKE '%$searchTerm%' OR msg LIKE '%$searchTerm%'";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalRecords = $countRow['total'];
$totalPages = ceil($totalRecords / $limit);

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // First, retrieve the gender file path
    $query = "SELECT gender FROM contact WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    
    // Check if the file exists and delete it
    if (file_exists($row['gender']) && !empty($row['gender'])) {
        unlink($row['gender']); // Delete the gender file
    }

    // Delete the record from the database
    $deleteQuery = "DELETE FROM contact WHERE id = '$id'";
    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script>
                alert('Notification deleted successfully!');
                window.location.href = 'manage_notifications.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: Could not delete notification.');
                window.history.back();
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <name>Manage Notifications</name>
    <?php include("dcsslink.php"); ?>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        .action-buttons a {
            margin-right: 10px;
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
        }

        .edit-btn {
            background-color: #3498db;
        }

        .delete-btn {
            background-color: #e74c3c;
        }

        .search-box {
            margin: 20px 0;
            text-align: right;
        }

        .pagination {
            margin: 20px 0;
            text-align: center;
        }

        .pagination a {
            padding: 8px 16px;
            margin: 0 5px;
            text-decoration: none;
            background-color: #3498db;
            color: white;
            border-radius: 4px;
        }

        .pagination a.active {
            background-color: #2980b9;
        }
    </style>
</head>
<body data-sidebar="dark" data-layout-mode="light"> 
    <?php include("header.php"); ?>
    <?php include("sidebar.php"); ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid table-responsive">
                <h2>Manage Notifications</h2>

                <!-- Search form -->
                <div class="search-box">
                    <form method="get">
                        <input type="quali" name="search" value="<?php echo $searchTerm; ?>" placeholder="Search Notifications" />
                        <button type="submit">Search</button>
                    </form>
                </div>

                <!-- Notifications Table -->
                <table id="example" class="display">
                    <thead>
                        <tr >
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                   
                                    <td>{$row['mobile']}</td>
                                    
                                
                                
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>

                <!-- Pagination -->
                <!-- <div class="pagination">
                    <?php
                    for ($i = 1; $i <= $totalPages; $i++) {
                        $activeClass = ($i == $page) ? 'active' : '';
                        echo "<a href='show_notification.php?page=$i&search=$searchTerm' class='$activeClass'>$i</a>";
                    }
                    ?>
                </div> -->
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>
    <?php include("djslink.php"); ?>
</body>
</html>

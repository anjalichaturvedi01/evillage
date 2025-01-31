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

// Query to get user with optional search
$query = "SELECT * FROM user WHERE `name` LIKE '%$searchTerm%' OR city LIKE '%$searchTerm%' LIMIT $start, $limit";
$result = mysqli_query($conn, $query);

// Query to count total records for pagination
$countQuery = "SELECT COUNT(*) AS total FROM user WHERE name LIKE '%$searchTerm%' OR city LIKE '%$searchTerm%'";
$countResult = mysqli_query($conn, $countQuery);
$countRow = mysqli_fetch_assoc($countResult);
$totalRecords = $countRow['total'];
$totalPages = ceil($totalRecords / $limit);

// Pagination code (below is unchanged)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <name>Manage user</name>
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
                <h2>Manage user</h2>

                <!-- Search form -->
                <!-- <div class="search-box">
                    <form method="get">
                        <input type="text" name="search" value="<?php echo $searchTerm; ?>" placeholder="Search user" />
                        <button type="submit">Search</button>
                    </form>
                </div> -->

                <!-- user Table -->
                <table id="example" class="display ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>City</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['mobile']}</td>
                                    <td>{$row['password']}</td>
                                    <td>{$row['city']}</td>
                                    <td class='action-buttons'>
                                    <a href='edit/user.php?delete={$row['id']}' class='delete-btn' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>
                                    </td>
                                    </tr>";
                                }
                        ?>
                    </tbody>
                </table>

                <!-- Pagination -->
                
            </div>
        </div>
    </div>
    
    <?php include("footer.php"); ?>
    <?php include("djslink.php"); ?>
</body>
</html>

<!-- <a href='edit_notification.php?id={$row['id']}' class='edit-btn'>Edit</a> -->
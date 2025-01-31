<!-- ========================protect adminpanel================================= -->
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location:index.php");
}
?>
<!-- dashboard css link ====================================================-->
<?php
include("dcsslink.php");
?>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <!--================================= header start================================================ -->

        <?php
        include("header.php");
        ?>
        <!-- ======================================end header =-============================================= -->
        <!-- ========== Left Sidebar Start ========== -->

        <?php
        include("sidebar.php");

        ?>

        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-md-4">
                                   <a href="show_notification.php"> <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <?php
                                                    include("code/db.php");
                                                    // Create connection
                                                    // $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Step 2: Function to count the rows
                                                    function countRows($table, $column)
                                                    {
                                                        global $conn;

                                                        // Prepare the SQL query to count rows
                                                        $sql = "SELECT COUNT($column) AS total_count FROM $table";

                                                        // Execute the query
                                                        $result = $conn->query($sql);

                                                        // Check if the query was successful
                                                        if ($result->num_rows > 0) {
                                                            // Output the count
                                                            $row = $result->fetch_assoc();
                                                            return $row['total_count'];
                                                        } else {
                                                            return 0;
                                                        }
                                                    }

                                                    // Step 3: Use the function
                                                    $tableName = "notifications";  // Replace with your table name
                                                    $columnName = "id";  // Replace with the column you want to count

                                                    // Get the row count
                                                    $rowCount = countRows($tableName, $columnName);

                                                    // Display the count
                                                    // echo "Total number of rows in '$tableName': $rowCount";

                                                    // Close the connection
                                                    $conn->close();
                                                    ?>

                                                    <h1 class="text-muted fw-medium"><?php echo "Notifications"; ?></h1>
                                                    <h4 class="mb-0"><?php echo $rowCount ?></h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                   <a href="show_all_user.php"> <div class="card mini-stats-wid">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="flex-grow-1">
                                                    <?php
                                                    include("code/db.php");
                                                    // Create connection
                                                    // $conn = new mysqli($servername, $username, $password, $dbname);

                                                    // Check connection
                                                    if ($conn->connect_error) {
                                                        die("Connection failed: " . $conn->connect_error);
                                                    }

                                                    // Step 2: Function to count the rows
                                                    function countRows2($table, $column)
                                                    {
                                                        global $conn;

                                                        // Prepare the SQL query to count rows
                                                        $sql = "SELECT COUNT($column) AS total_count FROM $table";

                                                        // Execute the query
                                                        $result = $conn->query($sql);

                                                        // Check if the query was successful
                                                        if ($result->num_rows > 0) {
                                                            // Output the count
                                                            $row = $result->fetch_assoc();
                                                            return $row['total_count'];
                                                        } else {
                                                            return 0;
                                                        }
                                                    }

                                                    // Step 3: Use the function
                                                    $tableName = "user";  // Replace with your table name
                                                    $columnName = "id";  // Replace with the column you want to count

                                                    // Get the row count
                                                    $rowCount = countRows($tableName, $columnName);

                                                    // Display the count
                                                    // echo "Total number of rows in '$tableName': $rowCount";

                                                    // Close the connection
                                                    $conn->close();
                                                    ?>

                                                    <h1 class="text-muted fw-medium"><?php echo "All User" ?></h1>
                                                    <h4 class="mb-0"><?php echo $rowCount ?></h4>
                                                </div>

                                                <div class="flex-shrink-0 align-self-center">
                                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                        <span class="avatar-title">
                                                            <i class="bx bx-copy-alt font-size-24"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div></div></div>
                    <!-- end row -->


                    <!-- End Page-content -->

                    <!-- Transaction Modal -->

                    <!-- end modal -->



                    <!--============================ footer start ========================= -->

                    <?php

                    include("footer.php");
                    ?>

                    <!-- ========================= footer end ============================= -->
                    <!-- end main content-->

                </div>
                <!-- END layout-wrapper -->


                <!-- ===========================right sidebar============================================ -->

                <!--  -->
                <!-- ===================================end right sidebar======================================= -->
                <!-- js link start=============================================== -->
                <?php
                include("djslink.php");
                ?>
</body>

</html>
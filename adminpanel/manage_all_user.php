<!-- ========================protect admin panel================================= -->
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
<style>
    /* Styling the form to look cleaner and modern */
    .form-container1 {
        background-color: #f4f7fc;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 40px;
    }

    .form-container1 h2 {
        font-size: 28px;
        color: #34495e;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        font-size: 14px;
        font-weight: 600;
        color: #2c3e50;
        display: block;
        margin-bottom: 8px;
    }

    input[type="text"], input[type="tel"], input[type="password"], select {
        width: 100%;
        padding: 12px 15px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 14px;
        margin-bottom: 15px;
        transition: all 0.3s ease;
    }

    input[type="text"]:focus, input[type="tel"]:focus, input[type="password"]:focus, select:focus {
        border-color: #3498db;
        outline: none;
    }

    button[type="submit"] {
        padding: 12px 25px;
        background: linear-gradient(45deg, #3498db, #2980b9);
        color: white;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        letter-spacing: 1px;
    }

    button[type="submit"]:hover {
        background: linear-gradient(45deg, #2980b9, #3498db);
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    }

    button[type="submit"]:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(52, 152, 219, 0.6);
    }

    .small {
        font-size: 12px;
        color: #7f8c8d;
    }

    .col-sm-5, .col-sm-6 {
        margin-bottom: 30px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .form-container1 {
            padding: 15px;
        }

        .col-sm-5, .col-sm-6 {
            width: 100%;
        }
    }
</style>
<link rel="stylesheet" href="assets/css/allformcss.css">

<body data-sidebar="dark" data-layout-mode="light">

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
            <div class="page-content1">
                <div class="container-fluid">
                    <!-- Notification Form -->
                    <div class="form-container1">
                        <div class="row" style="padding:40px;">
                            <h2 style="color: #2C3E50;">Manage Users</h2>

                            <div class="col-sm-12">
                                <form action="code/user_code.php" method="POST" enctype="multipart/form-data" class="form-grid">
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
                                    </div>

                                    <!-- Mobile -->
                                    <div class="form-group">
                                        <label for="mobile">Mobile</label>
                                        <input type="tel" name="mobile" placeholder="Enter your mobile number" class="form-control" pattern="[0-9]{10}" required>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
                                    </div>

                                    <!-- City -->
                                    <div class="form-group">
    <label for="city">City</label>
    <input type="text" name="city" placeholder="Enter your city" class="form-control" required>
</div>

                                    <!-- Submit Button -->
                                    <div class="form-group full-width">
                                        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Notification Form End -->
                </div>
            </div>
        </div>

        <!--============================ footer start ========================= -->
        <br><br><br><br><br>
        <?php
        include("footer.php");
        ?>
        <!-- ========================= footer end ============================= -->
    </div>
    <!-- END layout-wrapper -->
</div>

<!-- ===========================right sidebar============================================ -->
<?php
include("rightsidebar.php");
?>
<!-- ===================================end right sidebar======================================= -->

<!-- js link start=============================================== -->
<?php
include("djslink.php");
?>

</body>

</html>

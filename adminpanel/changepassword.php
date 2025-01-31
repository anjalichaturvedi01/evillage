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

input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
    font-size: 14px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
}

input[type="password"]:focus {
    border-color: #3498db;
    outline: none;
}

button[type="submit"] {
    padding: 12px 25px;
    background: linear-gradient(45deg, #3498db, #2980b9); /* Gradient background */
    color: white;
    border: none;
    border-radius: 50px; /* Rounded corners for a more elegant look */
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
    transition: all 0.3s ease; /* Smooth transition */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    letter-spacing: 1px; /* Spacing between letters for a sleek look */
}

button[type="submit"]:hover {
    background: linear-gradient(45deg, #2980b9, #3498db); /* Reversed gradient on hover */
    transform: translateY(-5px); /* Slightly lift the button */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Enhance shadow effect */
}

button[type="submit"]:focus {
    outline: none; /* Remove focus outline */
    box-shadow: 0 0 10px rgba(52, 152, 219, 0.6); /* Focus effect */
}

/* Responsive Design */
@media (max-width: 768px) {
    .form-container1 {
        padding: 15px;
    }

    .col-sm-12 {
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
            <div class="page-content1 ">
                <div class="container-fluid">
                    <!-- <br><br><br><br> -->
                    <!-- Change Password form -->
                    <div class="form-container1">
                        <div class="row" style="padding:40px;">
                            <h2 style="color: #2C3E50;">Change Password</h2>

                            <div class="col-sm-12">
                                <form action="code/changepasswordcode.php" method="POST" enctype="multipart/form-data" class="form-grid">
                                    <!-- Old Password -->
                                    <div class="form-group">
                                        <label for="oldPassword">Old Password</label>
                                        <input type="password" name="oldpassword" placeholder="Enter your old password" class="form-control" required>
                                    </div>

                                    <!-- New Password -->
                                    <div class="form-group">
                                        <label for="newPassword">New Password</label>
                                        <input type="password" name="newpassword" placeholder="Enter new password" class="form-control" required>
                                    </div>

                                    <!-- Confirm New Password -->
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm New Password</label>
                                        <input type="password" name="confirmpassword" placeholder="Confirm new password" class="form-control" required>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-group full-width">
                                        <button type="submit"  class="btn btn-primary">Change Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Change Password form end -->
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

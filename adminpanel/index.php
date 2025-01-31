<?php
include("csslink.php");
?>

<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <!-- <p>Sign in to continue to Sa.</p> -->
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.php" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <!-- <img src="assets/images/logo.jpg" alt="" class="rounded-circle"
                                                height="34"> -->
                                                <i class="fa-solid fa-user"></i>
                                        </span>
                                    </div>
                                </a>

                                <a href="index.php" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <!-- <img src="assets/images/logo.jpg" alt="" class="rounded-circle" height="100%"> -->

                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="code/admin_login.php" method="post">

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username" name="username">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Enter password"
                                                aria-label="Password" aria-describedby="password-addon" name="password">
                                            <button class="btn btn-light " type="button" id="password-addon"><i
                                                    class="mdi mdi-eye-outline" ></i></button>
                                        </div>
                                    </div>

                                    <!-- <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember-check">
                                        <label class="form-check-label" for="remember-check">
                                            Remember me
                                        </label>
                                    </div> -->

                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" name="btn" >Log
                                            In</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">
<!-- 
                        <div>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> -->
                    <!-- Safe Derive Cab <i class="mdi mdi-heart text-danger"></i> by Themesbrand -->
                    <!-- </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->


    <!-- js link -->

    <!-- ============================ -->
    <?php
    include("jslink.php");
    ?>
</body>

</html>
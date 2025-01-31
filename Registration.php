<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hovar.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/hover-min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function getCaptcha() {
            var strArr = "0123456789saeqwfvsdgdjdbnhdndbfdh";
            var code = "";
            for (var i = 0; i < 5; i++) {
                code = code + strArr[Math.floor(Math.random() * strArr.length)];
            }
            return code;
        }
        
        function demo() {
            var c = getCaptcha();
            document.getElementById("ct1").innerHTML = c;
            document.getElementById("hdn1").value = c;
        }
    </script>

    <!-- Code for disabling copy, cut, paste, and right-click -->
    <script>
        $(document).ready(function() {
            // Disable copy
            $("body").on("copy", function(e) {
                alert("Copy is not allowed");
                e.preventDefault();
            });
            // Disable cut
            $("body").on("cut", function(e) {
                alert("Cut is not allowed");
                e.preventDefault();
            });
            // Disable paste
            $("body").on("paste", function(e) {
                alert("Paste is not allowed");
                e.preventDefault();
            });
            // Disable right-click
            $("body").bind("contextmenu", function(e) {
                alert("Right-click is not allowed");
                return false;
            });
        });
    </script>
</head>
<body>
    <header id="header" class="top-fixed" style="background:#e87489;width:100%;height:70px;">
        <div class="container-fluid">
            <nav class="nav-menu d-none d-lg-block" style="min-height:40px;width:100%">
                <ul>
                    <li class="drop-down"><a href="index_1.php" style="color:white;font-size:12px;background:#e87489">HOME</a></li>
                    <li class="drop-down"><a href="About Village.php" style="color:white;font-size:12px;background:#e87489">ABOUT Village</a></li>
                    <li class="drop-down"><a href="Photo Gallery.php" style="color:white;font-size:12px;background:#e87489">Photo gallery</a></li>
                    <li class="drop-down"><a href="Registration.php" style="color:white;font-size:12px;background:#e87489">Registration on</a></li>
                    <li class="drop-down"><a href="https://rural.gov.in/en/scheme-websites" style="color:white;font-size:12px;background:#e87489">Schemes</a></li>
                    <li class="drop-down"><a href="Login.php" style="color:white;font-size:12px;background:#e87489">Login</a></li>
                    <li class="drop-down"><a href="contact.php" style="color:white;font-size:12px;background:#e87489">Contact us</a></li>
                    <li class="drop-down"><a href="Links.php" style="color:white;font-size:12px;background:#e87489">Links</a>
                        <ul>
                            <li><a href="https://upbhulekh.gov.in/" style="color:white;font-size:15px;background:#e87489">Bhulekh</a></li>
                            <li><a href="https://nrega.nic.in/MGNREGA_new/Nrega_home.aspx" style="color:white;font-size:15px;background:slateblue">Manrega</a></li>
                            <li><a href="https://indiafellow.org/?gad_source=1&gclid=EAIaIQobChMIw9DOo9KziAMVudE8Ah11hDsyEAAYASAAEgK1BPD_BwE" style="color:white;font-size:15px;background:#e87489">Scholarship</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="feedback.php" style="color:white;font-size:12px;background:#e87489">Feedback</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Registration Form -->
    <div class="row" style="margin-top:1.5%;background-size:100%;min-height:600px;background-image:url('img/swa2.jpg')">
        <div class="col-sm-2"></div>
        <div class="col-sm-8" style="margin-top:30px;">
            <div class="col-sm-12" style="color:white;height:55px;text-align:center;font-size:30px;line-height:50px;font-weight:bold;font-family:algerian">REGISTRATION HERE</div>
            <form action="registrationcode.php" method="post" enctype="multipart/form-data" style="color:white;background:rgba(0.5,1.5,0.5,0.34)">
                <div class="col-sm-6">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required="required"/><br>

                    <label for="Fathername">Father Name:</label>
                    <input type="text" name="Fathername" class="form-control" placeholder="Enter your Father's name" required="required"/><br>

                    <label>Gender:</label><br>
                    <input type="radio" name="gender" value="Male"/> Male
                    <input type="radio" name="gender" value="Female"/> Female<br><br>

                    <label for="quali">Qualification:</label>
                    <select name="quali" class="form-control">
                        <option>Select Qualification</option>
                        <option>M.Tech</option>
                        <option>MCA</option>
                        <option>BCA</option>
                        <option>B.TECH</option>
                        <option>DIPLOMA</option>
                    </select><br>

                    <label for="mob">Mobile Number:</label>
                    <input type="number" name="mob" class="form-control" placeholder="Enter Your Mobile Number"/><br>

                    <label for="add">Address:</label>
                    <input type="text" name="add" class="form-control" placeholder="Enter Your Address"/><br>
                </div>

                <div class="col-sm-6">
                    <label for="email">Email Id:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id"/><br>

                    

                    <label for="city">City:</label>
                    <select name="city" class="form-control">
                        <option>Select City</option>
                        <option>Lucknow</option>
                        <option>Gonda</option>
                        <option>Barabanki</option>
                        <option>Mau</option>
                    </select><br>

                    
                    <!-- <span style="color:red;font-size:27px;font-family:cursive;margin-left:31px;">
                        <strike id="ct1">dfs3a</strike>
                    </span> -->
                    <!-- <span class="fa fa-refresh" title="Click here to refresh captcha" style="font-size:30px;margin-left:1px;cursor:pointer" onclick="demo()"></span>
                    <input type="hidden" name="hdn1" id="hdn1"/><br> -->
<!-- 
                    <label for="cc1">Enter Your Captcha Code:</label>
                    <input type="text" class="form-control" name="cc1" placeholder="Enter Captcha code"/><br>
                </div> -->

                <input type="submit" class="btn btn-success" value="Register Now" style="margin-left:44%"/>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>

    <!-- Footer Section -->
    <div class="row" style="min-height:100px;background:blue;border:2px solid red">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <p style="color:white;margin-top:10px;font-size:20px;margin-top:20px">* Address: Village Mohammdipur, Tehsil Fatehpur, Barabanki, Uttar Pradesh</p>
        </div>
        <div class="col-sm-1"><p style="color:white;font-size:17px;margin-top:15px">Hits:</p></div>
        <div class="col-sm-2"><p style="background:white;font-size:17px;margin-top:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
    </div>

    <div class="row" style="background:black;min-height:50px">
        <div class="col-sm-2" style="background:black;min-height:50px"></div>
        <div class="col-sm-10" style="background:black;min-height:50px">
            <h4 style="background:black;text-align:center;color:white;min-height:50px;margin-top:10px">Feedback/Websites Policy/Contact Us/Help/Web Information</h4>
            <h5 style="background:black;text-align:center;color:white;min-height:50px;margin-top:10px">Content Owned by Ministry of Panchayati Raj</h5>
            <h5 style="background:black;text-align:center;color:white;min-height:50px;margin-top:10px">Developed and hosted by National Informatics Centre</h5>
            <h5 style="background:black;text-align:center;color:white;min-height:50px;margin-top:10px">Ministry of Electronics & Information Technology, Government of India</h5>
            <h5 style="background:black;text-align:center;color:white;min-height:50px;margin-top:10px">Last Updated: Sep 06, 2024</h5>
        </div>
    </div>

</body>
</html>

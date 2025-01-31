<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <!-- Removed duplicate Bootstrap CSS link -->
    <link href="css/hover-min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<header id="header" class="top-fixed" style="background:#e87489; data-aos:zoom-in; data-aos-delay:100;width: 100%;height:70px;">
    <div class="container-fluid">
        <nav class="nav-menu d-none d-lg-block" style="min-height:40px;width:100%">
            <ul>
                <li class="drop-down"><a href="index_1.php" style="color:white;font-size:12px;background:#e87489">HOME</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="About Village.php"style="color:white;font-size:12px;background:#e87489">ABOUT Village</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="Photo Gallery.php"style="color:white;font-size:12px;background:#e87489">Photo gallery</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="Registration.php"style="color:white;font-size:12px;background:#e87489">Registratration on</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="https://rural.gov.in/en/scheme-websites"style="color:white;font-size:12px;background:#e87489">Schemes</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="Login.php"style="color:white;font-size:12px;background:#e87489">Login</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li class="drop-down"><a href="contact.php" style="color:white;font-size:12px;background:#e87489">Contact us</a></li>
                <li class="drop-down"><a href="Links.php"style="color:white;font-size:12px;background:#e87489">Links</a>
                    <ul>
                        <li><a href="https://upbhulekh.gov.in/"style="color:white;font-size:15px;;background:#e87489">Bhulekh</a></li>
                        <li><a href="https://nrega.nic.in/MGNREGA_new/Nrega_home.aspx"style="color:white;font-size:15px;background:#e87489;background:slateblue">Manrega</a></li>
                        <li><a href="https://indiafellow.org/?gad_source=1&gclid=EAIaIQobChMIw9DOo9KziAMVudE8Ah11hDsyEAAYASAAEgK1BPD_BwE"style="color:white;font-size:15px;background:slateblue;background:#e87489">Scholarship</a></li>
                    </ul>
                </li>
                <li class="drop-down"><a href="feedback.php" style="color:white;font-size:12px;background:#e87489">Feedback</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </ul>
        </nav>
    </div>
</header>

<!---login code--->
<div class="row" style="background-size:100%;background: url('img/e16.jpg');min-height: 600px;margin-top: -1.5%;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="margin-top:12%;border: solid black 3px;border-radius: 15px;background: cyan;color:white;font-weight: bold">
        <span class="fa fa-user" style="font-size:90px;text-align:center;margin-left: 40%"></span>
        <div class="col-sm-12" style="height: 70px;color: white;font-size: 45px;font-family: algerian;text-align: center">Login Form</div>
        <form action="logincode.php" method="post">
            User id:
            <div class="input-group">
                <input type="text" name="email" placeholder="Enter user email id" class="form-control" required="required"/>
                <span class="input-group-addon glyphicon glyphicon-user"></span>
            </div><br><br>
            Password
            <div class="input-group">
                <input type="password" name="pass" placeholder="Enter your password" class="form-control" required="required"/>
                <span class="input-group-addon glyphicon glyphicon-eye-open"></span>
            </div>
            <input type="submit" value="LOGIN" class="btn btn-info" style="background: brown;color:red;text-align: center;font-weight: bold;margin-left: 170px"><br>
            <span class="input-group"></span>
        </form>
    </div>
    <div class="col-sm-4"></div>    
</div>

<!-- Footer Section -->
<div class="row" style="min-height:300px;background:blue" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-sm-1"></div>
    <div class="col-sm-2">
        <center><h3 style="color:white">About Village</h3></center>
        <p><a href="about_us.php" style="color:white">* About</a></p>
        <p><a href="#" style="color:white">* Panchayat charecter</a></p>
        <p><a href="#" style="color:white">* Mobile App</a></p>
        <p><a href="#" style="color:white">* Tourist Attration</a></p>
        <p><a href="#" style="color:white">* The Village Team</a></p>
        <p><a href="#" style="color:white">* Certification</a></p>
        <p><a href="contact_us.php" style="color:white">* Contact Us</a></p>
    </div>
    <div class="col-sm-3">
        <center><h4 style="color:white">Helpful Information</h4>
        <p><a href="#" style="color:white">* Fare Deatils</a></p>
        <p><a href="#" style="color:white">* Metro Route Map</a></p>
        <p><a href="#" style="color:white">* Lost and Found</a></p>
        <p><a href="#" style="color:white">* Tourist Attration</a></p>
        <p><a href="#" style="color:white">* Requriment</a></p>
        <p><a href="#" style="color:white">* Register for Room</a></p>
        <p><a href="#" style="color:white">* FAQS</a></p>
        <p><a href="#" style="color:white">* RTI</a></p></center>
    </div>
    <div class="col-sm-2">
        <center><h3 style="color:white">Policy</h3></center>
        <p><a href="#" style="color:white">* E village Green Policy</a></p>
        <p><a href="#" style="color:white">* Tourist Policy</a></p>
        <p><a href="#" style="color:white">* Terms of Use</a></p>
        <p><a href="#" style="color:white">* Privacy Policy</a></p>
        <p><a href="#" style="color:white">* Hyperlink Policy</a></p>
        <p><a href="#" style="color:white">* Disclaimer</a></p>
        <p><a href="#" style="color:white">* Sitemap</a></p>
    </div>
    <div class="col-sm-2">
        <center><h3 style="color:white">Other Govt. Sites</h3></center>
        <p><a href="#" style="color:white">* Govt. of Village</a></p>
        <p><a href="#" style="color:white">* Railway Service</a></p>
        <p><a href="#" style="color:white">* Govt. of UP</a></p>
        <p><a href="#" style="color:white">* Make in India</a></p>
        <p><a href="#" style="color:white">* Digital India</a></p>
        <p><a href="#" style="color:white">* Incredible India</a></p>
        <p><a href="#" style="color:white">* European Investment Bank</a></p>
    </div>
</div>

<!-- Footer Contact Section -->
<div class="row" style="min-height:100px;background:blue;border:2px solid red">
    <div class="col-sm-1"></div>
    <div class="col-sm-8" data-aos="zoom-in" data-aos-delay="100">
        <p style="color:white;margin-top:10px;font-size:20px;margin-top:20px">* Address::Dhindhui Patti Pratapgarh Uttar Pradesh</p>
    </div>
    <div class="col-sm-1">
        <p style="color:white;font-size:17px;margin-top:15px">Hits :</p>
    </div>
    <div class="col-sm-2">
        <p style="background:white;font-size:17px;margin-top:15px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    </div>
</div>

<!-- Footer Section for Policy & Details -->
<div class="row" style="background:black;min-height:50px" data-aos="zoom-in" data-aos-delay="100">
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

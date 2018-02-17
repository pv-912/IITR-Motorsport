<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="IIT Roorkee Motorsports is the Formula SAE team of IIT Roorkee dedicated towards designing and development of pure Electric Formula style race cars to participate in FSAE competitions globally.">
    <meta name="author" content="IIT RMS">
    <meta name="keywords" content="FSAE,IIT Roorkee Motorsports,Formula Student,Motorsports,Race Car,Engineering Competition">
    <link rel="shortcut icon" href="">
    <title>IIT Roorkee MotorSports | IIT RMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/flexslider.css">
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Contact Us</h1></div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .contact_us{
                font-size: 1.6em;
            }
            .contact_info{
                margin: 10%
            }
            .contact_email{
                font-size: 1.2em;
            }
            .contact_facebook{
                font-size: 1.8em;
                padding:10px 15px;
                margin-left: 8%;
                margin-top: 30px;
                background-color: #3b579d;
                color: #fff
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 address ">
                    <p class="contact_us">Contact Information</p>
                    <div class="contact_info">
                    <p class="contact_email"><span class="fa fa-home" style="padding: 10px"></span>Mechanical & Industrial Engineering Department</p>
                    <p class="contact_email"><span class="fa fa-map-marker" style="padding: 10px"></span> IIT Roorkee, Haridwar (247667)</p>
                    <p class="contact_email"><span class="fa fa-globe" style="padding: 10px"></span>Uttrakhand, India</p>
                    <p class="contact_email"><span class="fa fa-envelope" style="padding: 10px"></span>Email : iitrms.iitr@gmail.com</p>
                    <p class="contact_email"><span class="fa fa-phone" style="padding: 10px"></span>Phone : 8171360730</p>
                    <p class="contact_email"><span class="fa fa-phone" style="padding: 10px"></span>Phone : 7060334417</p>
                    <a href="https://www.facebook.com/iitrms.in/"><span class="fa fa-facebook contact_facebook" style="background-color: #3b579d;"></a>

                    <a href="https://plus.google.com/118206364906217576373/posts"><span class="fa fa-google-plus contact_facebook" style="background-color: #dd4f43;"></span></a>

                    <a href="https://in.linkedin.com/in/iitroorkeemotorsportsteam"><span class="fa fa-linkedin contact_facebook" style="background-color: #007bb6;"></span></a>
                    <a href="https://twitter.com/iitrms_iitr"><span class="fa fa-twitter contact_facebook" style="background-color: #1da1f2;"></span></a>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 address ">
                    <h4 style="text-transform: none">We would love to hear from you. Drop us a message if you wish to be our sponsor or if you have any query.</h4>
                    <div class="contact-form">
                        <form role="form" action="contact.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input name="name" type="text" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input name="email" type="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input name="subject" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="msg" rows="5" class="form-control input-lg"></textarea>
                            </div>
                            <center><button class="btn btn-info" type="submit">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <div id="map-canvas" style="width: 100%; height: 400px"></div>
        </div>
        <?php include 'includes/signup.php'; ?>
            <?php include 'includes/footer.php'; ?>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/hover-dropdown.js"></script>
                <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>
                <script src="js/common-scripts.js"></script>
                <script src="js/wow.min.js"></script>
                <script>
                    wow = new WOW({
                        boxClass: 'wow',
                        animateClass: 'animated',
                        offset: 0
                    }) wow.init();
                </script>
                <script>
                    function initialize() {
                        var myLatlng = new google.maps.LatLng(29.863813, 77.893452);
                        var mapOptions = {
                            zoom: 52,
                            center: myLatlng,
                            scrollwheel: false,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: 'Contact'
                        });
                    }
                    google.maps.event.addDomListener(window, 'load', initialize);
                </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="IIT Roorkee Motorsports is the Formula SAE team of IIT Roorkee dedicated towards designing and development of pure Electric Formula style race cars to participate in FSAE competitions globally.">
    <meta name="author" content="IIT RMS">
    <meta name="keywords" content="FSAE,IIT Roorkee Motorsports,Formula Student,Motorsports,Race Car,Engineering Competition">
    <link rel="shortcut icon" href="">
    <title>IIT Roorkee MotorSports | IIT RMS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <link href="assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>

<body>
    <?php include 'includes/header.php'; ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1>Car 2011</h1></div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li><a href="index.php" >Home</a></li>
                            <li><a href="projects.php" >Projects</a></li>
                            <li class="active" >Car-2011</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="pf-img"><img src="img/works/i1.jpg" alt="" width="750" height="500"></div>
                </div>
            </div>
        </div>
        <?php include("project.php");?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center"> </div>
                    <div class="col-lg-12 col-lg-offset-1 recent">
                        <div id="owl-demo" class="owl-carousel owl-theme wow fadeIn">
                            <div class="item view view-tenth"><img src="img/works/img1.jpg" alt="work Image">
                                <div class="mask">
                                    <a href="car2011.php" class="info" data-toggle="tooltip" data-placement="top" title="Details" target="blank"> <i class="fa fa-link"> </i> </a>
                                </div>
                            </div>
                            <div class="item view view-tenth"><img src="img/works/img2.jpg" alt="work Image">
                                <div class="mask">
                                    <a href="car2013.php" class="info" data-toggle="tooltip" data-placement="top" title="Details" target="blank"> <i class="fa fa-link"> </i> </a>
                                </div>
                            </div>
                            <div class="item view view-tenth"><img src="img/works/img6.jpg" alt="work Image">
                                <div class="mask">
                                    <a href="car2015.php" class="info" data-toggle="tooltip" data-placement="top" title="Details" target="blank"> <i class="fa fa-link"> </i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
                <script src="js/jquery.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/hover-dropdown.js"></script>
                <script defer src="js/jquery.flexslider.js"></script>
                <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
                <script src="assets/owlcarousel/owl.carousel.js"></script>
                <script src="js/jquery.easing.min.js"></script>
                <script src="js/link-hover.js"></script>
                <script src="js/common-scripts.js"></script>
                <script type="text/javascript" src="js/wow.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items: 4
                        });
                    });
                    new WOW().init();
                </script>
</body>

</html>
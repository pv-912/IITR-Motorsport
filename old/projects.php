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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/owlcarousel/owl.theme.css">
    <link href="css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/component.css">
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="js/parallax-slider/modernizr.custom.28468.js"></script>
</head>

<body>
    <?php include 'includes/header.php'; ?>
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                        <h1> Projects</h1></div>
                    <div class="col-lg-8 col-sm-8">
                        <ol class="breadcrumb pull-right">
                            <li> <a href="index.php"> Home </a></li>
                            <li class="active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <?php include("project.php");?>
        <?php include 'includes/footer.php'; ?>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/hover-dropdown.js"></script>
            <script src="assets/owlcarousel/owl.carousel.js"></script>
            <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>
            <script defer src="js/jquery.flexslider.js"></script>
            <script src="js/jquery.easing.min.js"></script>
            <script src="js/link-hover.js"></script>
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
                $(window).load(function() {
                    $('[data-zlname=reverse-effect]').mateHover({
                        position: 'y-reverse',
                        overlayStyle: 'rolling',
                        overlayBg: '#fff',
                        overlayOpacity: 0.7,
                        overlayEasing: 'easeOutCirc',
                        rollingPosition: 'top',
                        popupEasing: 'easeOutBack',
                        popup2Easing: 'easeOutBack'
                    });
                });
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
                $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                        items: 4,
                    });
                });
                $(window).scroll(function() {
                    $('#skillz').each(function() {
                        var imagePos = $(this).offset().top;
                        var viewportheight = window.innerHeight;
                        console.log(viewportheight);
                        var topOfWindow = $(window).scrollTop();
                        if (imagePos < topOfWindow + viewportheight) {
                            $('.skill_bar').fadeIn('slow');
                            $('.skill_one').animate({
                                width: '60%'
                            }, 2000);
                            $('.skill_two').animate({
                                width: '90%'
                            }, 2000);
                            $('.skill_three').animate({
                                width: '70%'
                            }, 1000);
                            $('.skill_four').animate({
                                width: '55%'
                            }, 1000);
                            $('.skill_bar_progress p').fadeIn('slow', function() {});
                        }
                    });
                });
            </script>
</body>

</html>
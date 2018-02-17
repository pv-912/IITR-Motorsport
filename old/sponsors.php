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
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400" rel="stylesheet">
	<link href="css/style2.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet" />
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> <script src="js/respond.min.js"></script> <![endif]-->
	
</head>

<body>
	<?php include 'includes/header.php'; ?>
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-4">
					<h1> Our Sponsors</h1>
				</div>
				<div class="col-lg-8 col-sm-8">
					<ol class="breadcrumb pull-right">
						<li> <a href="index.php"> Home </a>
						</li>
						<li class="active">Sponsors</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
<style>
	.new-tab{
        font-size: 1.1em;
        border:none;
        font-weight: 300;
        color:#fff;
        padding: 5px 25px;
        border-radius: 5px;
        background-color: #2c3e50;
    }
    .old-tab{
        font-size: 1.1em;
        border:none;
        font-weight: 300;
        color:#666;
        padding: 5px 25px;
        border-radius: 5px;
        background-color: #fff;
    }
    
    .new_old_sponsors{
        margin-left: 8%;
        list-style-type: none;
    }
    .new_old_sponsors li{
        padding-left: 2%;
        display: inline-block;
    }
</style>
	
<script>
	function focus1(){
		var a= document.getElementById("recent");
		var b= document.getElementById("former");
		a.style.backgroundColor="#fff";
		a.style.color="#666";
		b.style.backgroundColor="#2c3e50";
		b.style.color="#fff";
	}
	function focus2(){
		var b= document.getElementById("recent");
		var a= document.getElementById("former");
		a.style.backgroundColor="#fff";
		a.style.color="#666";
		b.style.backgroundColor="#2c3e50";
		b.style.color="#fff";
	}
</script>
	<div>

		<ul class=" new_old_sponsors" >
		    <li role="presentation" class="active"><button href="#new" id="recent" class="new-tab"  onmouseover="focus2();" onfocus="focus2();" aria-controls="home" role="tab" data-toggle="tab">Recent</button></li>
		    <li role="presentation"><button href="#old" onmouseover="focus1();" onfocus="focus1();" id="former" class="old-tab" aria-controls="profile" role="tab" data-toggle="tab" >Former</button></li>
		</ul>

	 
		<div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="new">	
			    <div class="container">
					<div class="row">
						<div class="recent">
							<div id="owl-demo2" class="owl-carousel owl-theme wow fadeIn">
								<div class="item">
									<a href="http://www.mrftyres.com/" target="_blank">
										<img src="img/sponsors/mrf.png" alt="" style="margin-top: 45%; padding-left: 10%;margin-bottom: 15%;height: 6em;width: 20em;">
									</a>
								</div>
					
								<div class="item">
									<a href="http://www.goodlucksteel.com/" target="_blank">
										<img src="img/sponsors/gdl.jpg" alt="" style="margin-top: 40%;margin-left:36%;margin-bottom: 15%;height: 10em;width: 20em;">
									</a>
								</div>
								
								<div class="item">
									<a href="http://www.solidworks.in/" target="_blank">
										<img src="img/sponsors/sw.png" alt="" style="margin-top: 34%;margin-left: 75%;margin-bottom: 15%;height: 10em;width: 20em;">
									</a>
								</div>
								
								<!-- <div class="item">
									<a href="http://www.centuryply.com/" target="_blank">
										<img src="img/sponsors/cen.gif" alt="" style="margin-top: 35%;margin-left: 25%;">
									</a>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane" id="old">	
			    <div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="recent-work"> GOLD SPONSORS</h1>
						</div>
						<div class="recent">

							<div id="owl-demo1" class="owl-carousel owl-theme wow fadeIn">
								
								
								<div class="item">
									<a href="http://www.mrftyres.com/" target="_blank">
										<img src="img/sponsors/mrf.png" alt="" style="margin-top: 45%; padding-left: 10%;margin-bottom: 15%;height: 6em;width: 20em;">
									</a>
								</div>
								<div class="item">
									<a href="http://en.winston-battery.com/" target="_blank">
										<img src="img/sponsors/wb.png" alt="" style="margin-top: 40%;margin-left:10%;margin-bottom: 15%;height: 8em;width: 20em;">
									</a>
								</div>
								
								
								<div class="item">
									<a href="	http://www.iotrek.in/" target="_blank">
										<img src="img/sponsors/iotrek.png" alt="" style="margin-left: 16%;margin-top: 34%;margin-bottom: 15%;height: 10em;width: 20em;">
									</a>
								</div>
								
								<div class="item">
									<a href="	http://navigus.in/" target="_blank">
										<img src="img/sponsors/navigus.png" alt="" style="margin-top: 36%;margin-bottom: 35% ;      margin-left:6%;height: 8em;width: 15em;">
									</a>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-lg-12 text-center">
							<h1 class="recent-work"> SILVER SPONSORS</h1>
						</div>
						<div class="col-lg-12 recent">
							<div id="owl-demo3" class="owl-carousel owl-theme wow fadeIn">
								
								
								<div class="item">
									<a href="https://www.motul.com/in/en" target="_blank">
										<img src="img/sponsors/motul.png" alt="" style="margin-top: 30%;margin-bottom: 35%;margin-left: 8%;margin-right: 25%;">
									</a>
								</div>
								<div class="item">
									<a href="http://www.goodlucksteel.com/" target="_blank">
										<img src="img/sponsors/gdl.jpg" alt="" style="margin-top: 20%;margin-left:2%;margin-bottom: 15%;height: 10em;width: 20em;">
									</a>
								</div>
								
							

								<div class="item">
									<a href="#" target="_blank">
										<img src="img/sponsors/blc.png" alt="" style="margin-left: 20%;margin-top: 15%;margin-bottom: 15%;">
									</a>
								</div>
								<div class="item">
									<a href="http://www.solidworks.in/" target="_blank">
										<img src="img/sponsors/sw.png" alt="" style="margin-top: 14%;margin-left: 10%;margin-bottom: 15%;height: 10em;width: 20em;">
									</a>
								</div>

								
							</div>
						</div>
					</div>


				
			
					<div class="row">
						<div class="col-lg-12 text-center">
								<h1 class="recent-work"> BRONZE SPONSORS</h1>
						</div>
						<div class="col-lg-12 recent">
							<div id="owl-demo5" class="owl-carousel owl-theme wow fadeIn">
								<div class="item">
									<a href="http://www.centuryply.com/" target="_blank">
										<img src="img/sponsors/cen.gif" alt="" style="margin-top: 10%;margin-left: 15%;">
									</a>
								</div>

								<div class="item">
									<a href="https://www.phoenixcontact.com/online/portal/pc?1dmy&urile=wcm:path:/pcen/web/home" target="_blank">
										<img src="img/sponsors/phe.png" alt="" style="margin-top: 30%;margin-left: 5%;">
									</a>
								</div>	

								<div class="item">
									<a href="http://www.tidcindia.in/" target="_blank">
										<img src="img/sponsors/tidc.png" alt="" style="margin-top: 25%;margin-left: 10%;">
									</a>
								</div>

								<div class="item">
									<a href="http://www.abrasivesedge.com/" target="_blank">
										<img src="img/sponsors/ae.jpg" alt="" style="margin-top: 15%;height: 15em;">
									</a>
								</div>
							</div>
								
							<div id="owl-demo4" class="owl-carousel owl-theme wow fadeIn">
								<div class="item">
								    <div class="col-md-offset-3">
										<a href="http://www.resistorsonline.com/" target="_blank">
											<img src="img/sponsors/enap.jpg" alt="" style="margin-top: 15%;height: 15em;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			


	   	
		    <!-- <div role="tabpanel" class="tab-pane active" id="new">
		    	<div class="container">
					<div class="row">
						<div class="col-lg-12 recent">
							<div id="owl-demo5" class="owl-carousel owl-theme wow fadeIn">
								<div class="item">
									<a href="http://www.centuryply.com/" target="_blank">
										<img src="img/sponsors/cen.gif" alt="" style="margin-top: 10%;margin-left: 15%;">
									</a>
								</div>

								<div class="item">
									<a href="https://www.phoenixcontact.com/online/portal/pc?1dmy&urile=wcm:path:/pcen/web/home" target="_blank">
										<img src="img/sponsors/phe.png" alt="" style="margin-top: 30%;margin-left: 5%;">
									</a>
								</div>	

								<div class="item">
									<a href="http://www.tidcindia.in/" target="_blank">
										<img src="img/sponsors/tidc.png" alt="" style="margin-top: 25%;margin-left: 10%;">
									</a>
								</div>

								<div class="item">
									<a href="http://www.abrasivesedge.com/" target="_blank">
										<img src="img/sponsors/ae.jpg" alt="" style="margin-top: 15%;height: 15em;">
									</a>
								</div>
							</div>
								
							<div id="owl-demo4" class="owl-carousel owl-theme wow fadeIn">
								<div class="item">
								    <div class="col-md-offset-3">
										<a href="http://www.resistorsonline.com/" target="_blank">
											<img src="img/sponsors/enap.jpg" alt="" style="margin-top: 15%;height: 15em;">
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div> -->
		</div>




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
		wow=new WOW({boxClass:'wow',animateClass:'animated',offset:0}) wow.init();
	</script>

	<script>
		$(window).load(function(){$('[data-zlname = reverse-effect]').mateHover({position:'y-reverse',overlayStyle:'rolling',overlayBg:'#fff',overlayOpacity:0.7,overlayEasing:'easeOutCirc',rollingPosition:'top',popupEasing:'easeOutBack',popup2Easing:'easeOutBack'});});$(document).ready(function(){$("#owl-demo").owlCarousel({items:4,});});$(document).ready(function(){$("#owl-demo1").owlCarousel({items:4,});});$(document).ready(function(){$("#owl-demo2").owlCarousel({items:4,});});$(document).ready(function(){$("#owl-demo3").owlCarousel({items:4,});});$(document).ready(function(){$("#owl-demo4").owlCarousel({items:4,});});$(document).ready(function(){$("#owl-demo5").owlCarousel({items:4,});});
	</script>	
  </body>

</html>
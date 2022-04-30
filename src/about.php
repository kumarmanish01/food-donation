<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Food Donation System| About Us</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<!--webfont-->
<!--js-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
<?php include_once("includes/header.php");?>
<!-- banner -->
<div class="banner page-head">	
</div>
<!-- //banner -->
<div class="about">
	<div class="container">
		
			
		<div class="about-info">
			
			<div class="about-gds">	
				<div class="col-md-5 about-info-left">
					<img src="images/666.jpg" alt=""/>
				</div>
				<div class="col-md-7 about-info-right">
					<h4>About Us</h4>
					<p>
					<div>
						<b style="font-size: 20px">Welcome to Food Donation System</b>
					</div>
					<div style="text-align: left;">
						<p class="bodytext" style="margin-bottom: 10px; color: rgb(33, 37, 41); line-height: 1.5; font-family:  sans-serif; font-size: 14px;">
						<span style="font-weight: 700;">Food waste&nbsp;</span>refers to the decrease in the quantity or quality of food resulting from decisions and actions by retailers, food service providers and consumers. &nbsp;Food is wasted in many ways:
						</p>
						<ul style="margin-bottom: 10px; padding-left: 1.5em; color: rgb(33, 37, 41); font-family:  open-sans, sans-serif; font-size: 14px;">
							<li style="margin-bottom: 6px; position: relative; padding-right: 15px; line-height: 1.5;">Fresh produce that deviates from what is considered optimal, for example in terms of shape, size and color, is often removed from the supply chain during sorting operations.
							</li>
							<li style="margin-bottom: 6px; position: relative; padding-right: 15px; line-height: 1.5;">Large quantities of wholesome edible food are often unused or left over and discarded from household kitchens and eating establishments.
							</li>
						</ul>
						<p class="bodytext" style="margin-bottom: 10px; color: rgb(33, 37, 41); line-height: 1.5; font-family: open sans,sans-serif; font-size: 14px;">
						Less food loss and waste would lead to more efficient land use and better water resource management with positive impacts on climate change and livelihoods.
						</p>
					</div>
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	
	</div>
</div>
<!-- //about-page -->
<?php include_once("includes/footer.php");?>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

</body>
</html>
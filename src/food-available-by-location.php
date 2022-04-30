<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Food Donation System|| Food Available</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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
<script>
function getCity(val) { 
  $.ajax({
type:"POST",
url:"get-city.php",
data:'sateid='+val,
success:function(data){
$("#city").html(data);
}});
}
 </script>
 

</head>
<body>
<?php include_once("includes/header.php");?>
<!-- banner -->
<div class="banner page-head">	
</div>
<!-- //banner -->
<!-- typo-page -->
<!--typography-->
<div class="typrography">
	 <div class="container">
	  
     <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            <div class="page-header" style="margin-top:-20px;">
                                <h1 style="text-align: center;">Available Food List</h1>
                            </div>
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class="form">
   
                                <form class="cmxform form-horizontal " method="post" name="bwdatesreportds" action="food-available.php">
                                   
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Choose State</label>
                                        <div class="col-lg-6">
                                            <select class="form-control m-bot15" name="state" id="state" onChange="getCity(this.value);">
                                                <option value="">Choose State</option>
                                                <?php $query=mysqli_query($con,"select * from tblstate");
                                                    while($row=mysqli_fetch_array($query))
                                                    {
                                                    ?>    
                                                    <option value="<?php echo $row['StateName'];?>"><?php echo $row['StateName'];?></option>
                                                <?php } ?> 
                                            </select>

                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label col-lg-3" for="inputSuccess">Choose City</label>
                                        <div class="col-lg-6">
                                            <select class="form-control m-bot15" name="city" id="city" required="true">
                                                
                                            </select>

                                        
                                        </div>
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6" style="margin-top:2%">
                                          <p style="text-align: center;"> <button class="btn btn-primary" type="submit" name="submit">View</button></p>
                                           
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </section>
                </div>
            </div>
	</div>
</div>
<!-- //typo-page -->
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
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" style="height: 100%;" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
  
	<link rel="shortcut icon" type="image/png" href="https://s215211.gridserver.com/.tools/api/filemanager/index.php?cmd=file&target=l1_ZG9tYWlucy9zMjE1MjExLmdyaWRzZXJ2ZXIuY29tL2h0bWwvQm93LUxvZ28uUE5H&download">
	<!--<link href="http://s215211.gridserver.com/bootstrap.js" rel="stylesheet" type="text/css">-->
  
	<title>Bow Robotics | ABB Robot Experts</title>
  
	<link rel="stylesheet" type="text/css" href="http://s215211.gridserver.com/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://s215211.gridserver.com/glyphicons-halfings-regular.eot">
	<link rel="stylesheet" type="text/css" href="http://s215211.gridserver.com/main.css">
	<!-- Custom styles for this template -->
    <link href="http://s215211.gridserver.com/carousel.css" rel="stylesheet">
  
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="http://s215211.gridserver.com/bootstrap.min.js" type="text/javascript"></script>
	
	<![endif]-->
    
	<style type="text/css">
		body {
			color: #1a1a1a;
			margin-top: 200px;
			height: 100%;
			}	
		@media (max-width: 480px) {
			#wrap {
				padding-right: 0;
				}
			}
		@media (min-width: 481px) and (max-width: 767px) {
			#wrap {
			padding-right: 0;
				}
			}
		@media (min-width: 768px) and (max-width: 979px)
			#wrap {
			padding-right: 0;
			}
			@media (min-width: 1200px) {
			#wrap
			}
	</style>
<!-- Blocker -->
<!-- Logo -->			
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<a href="#" class="navbar-brand"  class="pull-left logo" alt="Bow Robotics"><img class="logo-scaling" src="https://s215211.gridserver.com/Bow-Logo.PNG"></a>
			<img class="letterhead" src="http://s215211.gridserver.com/Capture.PNG">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					</div>
				
<!-- Nav Bar -->
					
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav nav-pills nav-justified">
	<!-- Home -->				
								<li><a href="http://s215211.gridserver.com/index.html" title="Home"><b>Home</b></a></li>
	<!-- Parts and Products -->				
								<li><a href="http://s215211.gridserver.com/robot_parts_and_products.php" title="Parts and Products"><b>Parts and Products</b></a></li>
	<!-- Part Repair -->				
								<li><a href="http://s215211.gridserver.com/robot_part_repair.html" title="Part Repair"><b>Part Repair</b></a></li>
	<!-- Field Service -->				
								<li><a href="http://s215211.gridserver.com/robot_service_and_repair.html" title="Field Service"><b>Field Service</b></a></li>
	<!-- Integration -->				
								<li><a href="http://s215211.gridserver.com/robot_integration.html" title="Integration"><b>Integration</b></a></li>
	<!-- Contact Us -->								
								<li><a href="http://s215211.gridserver.com/contact-us.html" title="Contact Us"><b>Contact Us</b></a></li>	
	<!-- FAQs -->								
								<li><a href="http://s215211.gridserver.com/faqs.html" title="FAQs"><b>FAQs</b></a></li>
					</ul>				
				</div>
				</div>
			</div>
</head>


<body>
<div class="container">

			<?php
// define variables and set to empty values
$abatement = $abovebuildingStandard = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $word = test_input($_POST["word"]);
   
  }
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<input type="text" class="form-control" id="word" name="word" list="terms" value="<?php echo $word;?>" placeholder="Please start typing a word" onkeyup="showHint(this.value)">
		<datalist id="terms">
		    <option value="417408002 DRIVE UNIT">
		<option value="Abatement">
		<option value="Above Building Standard">
		<option value="Absentee Landlord">
		<option value="Absolute Fee Simple Title">
		<option value="Absorption Analysis">
		<option value="Absorption Rate">
	
		</datalist>
		<br>
		<button type="submit" class="btn btn-default" name="submit">Submit</button>
		<br>
		<br>
		
	</form>	
	<hr class="featurette-divider"><br>
		
<!--Your Input-->
<?php
// Form
$word = ucwords($word);
echo "<h4><u>$word</u></h4>";
?>

<?php
if ($word == "Abatement") {	echo "Often referred to as free rent or early occupancy and may occur outside or in addition to the primary term of the lease.";
} elseif ($word == "Above Building Standard") { echo "Upgraded finishes and specialized designs necessary to accommodate a tenant's requirements.";
} elseif ($word == "Absentee Landlord") { echo "An owner of an interest in income producing property who does not reside on the premises and who may rely on a property manager to oversee operations.";

} 
?>
	</div>
 </div>
   
<!--Footer-->		
			<div id="footer">
				<hr/>
				<div class="container">
					<div class="row visible-phone hidden-tablet">
					</div>			
					<p class="copyright pull-left">&copy; 2014 <a href="http://s215211.gridserver.com/" title="Bow Robotics">Bow Robotics</a>. All rights reserved. Bow Automation LLC.</p>
					<p class="footer-links pull-right">
					<a href="http://s215211.gridserver.com/index.html" title="Home">Home</a> &middot;
					<a href="http://s215211.gridserver.com/privacy.html" title="Privacy Policy">Privacy</a> &middot;
					<a href="http://s215211.gridserver.com/terms.html" title="Terms of Use">Terms</a>
					</p>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://s215211.gridserver.com/bootstrap.min.js" type="text/javascript"></script>
		</div>
	</body>
</html>
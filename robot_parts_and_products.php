<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
  
	<link rel="shortcut icon" type="image/png" href="https://s215211.gridserver.com/.tools/api/filemanager/index.php?cmd=file&target=l1_ZG9tYWlucy9zMjE1MjExLmdyaWRzZXJ2ZXIuY29tL2h0bWwvQm93LUxvZ28uUE5H&download">
	<!--<link href="http://s215211.gridserver.com/bootstrap.js" rel="stylesheet" type="text/css">-->
  
	<title>Bow Automation | ABB Robot Experts</title>
  
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
		h1 {
			background: linear-gradient(135deg, #d3223a 30%, #ffffff 50%);
			color: black;
			padding-left: 3px;
			}
	</style>
<!-- Blocker -->
<!-- Logo -->			
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<a href="#" class="navbar-brand"  class="pull-left logo" alt="Bow Automation"><img src="https://s215211.gridserver.com/Bow-Logo.PNG" style="max-width: 40%;"></a>
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
								<li class="active"><a href="http://s215211.gridserver.com/robot_parts_and_products.php" title="Parts and Products"><font color="#ffffff"><b><u>Parts and Products</u></b></font></a></li>
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
	<h1>Robot Parts and Products</h1>
	<div class="lineSegment"></div>
	<h2>Complete robot systems, cables, wrists, motors, gearboxes, teach pendants, OEM and preventive maintenance parts and products</h2>
	<p>Bow Robotics operates in a 15,000 SF facility filled with just about any ABB IRB part or product that you could need.  Our large inventory of robot parts and products range from new to fully refurbished and generally come with a 1 year warranty.</p>
	<p>Our expertise and partner approach in working with our customers allows us to customize solutions providing the best option(s) for just about any situation.  Whether you are looking to replace or refurbish an entire service line of robots or need a specific part shipped NOW, Bow Robotics is the partner that you need.</p>
	<p>Want to know more about the parts and products that Bow Robotics can provide? We will be happy to answer all your questions!</p>
	<p class="text-center"><a class="btn btn-lg btn-primary" href="http://s215211.gridserver.com/contact-us.html" role="button">Contact Us</a></p>
	<div class="lineSegment"></div>
</div>
<div class="container">
    

			<h2>Product Guide</h2>
			
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
<option value="505966001 SERIAL MEASURE UNIT">
<option value="3HAA0001-ADX Push button unit">
<option value="3HAB2038-1 Battery">
<option value="3HAB2207-1 Servo Drive Unit">
<option value="3HAB2211-1 System Board DSQC 256A">
<option value="3HAB2213-1 SMB Board">
<option value="3HAB2214-1 Combi I/O DSQC 315">
<option value="3HAB2236 Memory Board 4MB">
<option value="3HAB2236-1 Extended memory 4Mb">
<option value="3HAB3124-1 Axis Motor">
<option value="3HAB3125-1 Axis Motor">
<option value="3HAB3309-1 Axis Motor">
<option value="3HAB3388-1 Wrist, Robotic 1400 M2000 M98">
<option value="3HAB3688-1 Axis Motor">
<option value="3HAB4039-1 Axis Motor">
<option value="3HAB5171-1 E-Stop Assembly">
<option value="3HAB5386-1 S4 Teach Pendant">
<option value="3HAB5845-1 Power supply DSQC 334">
<option value="3HAB5956-1 Memory Board 8MB DSQC 323">
<option value="3HAB7215-1 Module, Panel">
<option value="3HAB7229-1 Dig. 24 VDC I/O DSQC 328">
<option value="3HAB7230-1 A D Combi I/O">
<option value="3HAB7311-1 FAN, 24V M98 S4C CABINET">
<option value="3HAB7818-1 Motor ON Push Button Assembly">
<option value="3HAB8101-1 Rectifier DC0">
<option value="3HAB8101-10 Drive Unit">
<option value="3HAB8101-11 Drive Board">
<option value="3HAB8101-12 Rectifier DC2 and Drive unit C">
<option value="3HAB8101-13 Drive unit GU">
<option value="3HAB8101-14 Rectifier DC4">
<option value="3HAB8101-17 Modules Drive System">
<option value="3HAB8101-18 Drive Board">
<option value="3HAB8101-19 Modules Drive System">
<option value="3HAB8101-2 Module, DC Link">
<option value="3HAB8101-3 Rectifier DC2">
<option value="3HAB8101-4 RECTIFIER DC3">
<option value="3HAB8101-5 DRIVE UNIT AAD">
<option value="3HAB8101-6 Drive Board">
<option value="3HAB8101-7 DRIVE UNIT CCB">
<option value="3HAB8101-8 DRIVE UNIT GT">
<option value="3HAB8230-1 EMERGENCY STOP BLOCK">
<option value="3HAB8440-1 Axis Cable 1-3 1400 M97 M98">
<option value="3HAB8802-1 Drive unit DSQC 266T">
<option value="3HAC0017-1 Push button unit">
<option value="3HAC020208-001 Rotational AC Motor, M11">
<option value="3HAC020466-001 DSQC 627 Power Supply">
<option value="3HAC020655-001 Harness-DSQC604/Computer unit USB">
<option value="3HAC020849-001 Contactor Board">
<option value="3HAC020912-001 Harness-XT16/Power unit">
<option value="3HAC021030-001 Rot ac motor with pinion">
<option value="3HAC021030-004 Motor incl pinion">
<option value="3HAC021458-001 Motor unit axis">
<option value="3HAC021740-001 Axis Motor 4,5,6 M2000">
<option value="3HAC021975-001 Harness-DSQC604/Computer unit USB">
<option value="3HAC022089-001 WRIST 3HAC8114-8/3HAC16626-3">
<option value="3HAC022286-001 Serial measurement unit DSQC 633">
<option value="3HAC023195-001 GTPU 2, 10 M Cable">
<option value="3HAC023195-006 Touch screen">
<option value="3HAC023195-007 Display">
<option value="3HAC023195-008 Enclosure Lower Part">
<option value="3HAC023195-009 Joystick">
<option value="3HAC023447-001 DSQC 532B I/O Computer">
<option value="3HAC024320-001 Dresspack Upper arm SW (i)">
<option value="3HAC024322-001 Mains Line Filter">
<option value="3HAC024323-001 Harn-DSQC604/Comp/P.board">
<option value="3HAC024328-001 Harness EMP67, 10m">
<option value="3HAC024328-005 Harness EMP67, 15m">
<option value="3HAC024385-001 Cable Harness Axis 1-6 (USED Price From Us) ">
<option value="3HAC025097-001 Main computer DSQC639">
<option value="3HAC025338-006 Main Servo Drive ">
<option value="3HAC025527-004 Computer unit">
<option value="3HAC025724-002 Motor Axis 2">
<option value="3HAC025779-0 DeviceNet">
<option value="3HAC028357-001 Teach Pendant">
<option value="3HAC028861-001 Motor Axis 1">
<option value="3HAC030630-001 Motor unit">
<option value="3HAC031231-003 Cover & Gasket Painted">
<option value="3HAC031851-001 SMB-unit DSQC633A">
<option value="3HAC032444-001 Emergency Stop">
<option value="3HAC033163-001 6640 Motor">
<option value="3HAC0373-001 Main Computer Board">
<option value="3HAC0373-1 Main Computer DSQC 361">
<option value="3HAC037310-001 DSQC400 safety board spare">
<option value="3HAC037312-001 Shaft">
<option value="3HAC037313-001 Shaft">
<option value="3HAC037314-001 Bushing">
<option value="3HAC037317-001 Lock nut">
<option value="3HAC037319-001 Lock nut">
<option value="3HAC038871-001 Sealing + Steel adapter ring">
<option value="3HAC041443-003 Computer unit">
<option value="3HAC046277-001 Serial measurement unit">
<option value="3HAC046686-004 SMB Unit Replacement Kit">
<option value="3HAC049819-001 Assembly of SMB">
<option value="3HAC0759-1 Bleeder Internal Cable">
<option value="3HAC10466-1 Upper arm, Std/F">
<option value="3HAC10475-1 IRB 140 Wirst">
<option value="3HAC10479-1 Upper Arm without motors & wrist">
<option value="3HAC10543-1 Motor Axis 4-5 Type A">
<option value="3HAC10544-1 MOTOR AXIS 6 TYPE A">
<option value="3HAC10555-1 Axis Motor">
<option value="3HAC10556-1 Axis Motor">
<option value="3HAC10603-1 Motor incl. pinion">
<option value="3HAC10674-1 Axis Motor ">
<option value="3HAC10939-1 Computer System 64MB">
<option value="3HAC10939-2 Computer System 128MB">
<option value="3HAC10939-5 Computer unit S4Cplus">
<option value="3HAC10939-6 Computer unit S4Cplus">
<option value="3HAC10939-7 Computer unit S4Cplus, 64 Mb">
<option value="3HAC10939-8 Main Computer Unit, CPU">
<option value="3HAC12158-1 I/O Computer">
<option value="3HAC12732-6 Wrist , Insulated">
<option value="3HAC12817-1 DeviceNet">
<option value="3HAC12928-1 Power Supply">
<option value="3HAC12929-1 GTPU with 10m cable">
<option value="3HAC12929-11 TPU Hand strap">
<option value="3HAC12929-12 TPU Emergency stop button">
<option value="3HAC13149-1 SMB UNIT DSQC 527">
<option value="3HAC14140-1 Refurbished Cable Harness 5/6">
<option value="3HAC14265-1 Power Supply">
<option value="3HAC14279-1 Main Computer ">
<option value="3HAC14505-1 Serial measurement unit">
<option value="3HAC14757-1 Serial meas.un. w.battery">
<option value="3HAC14940-1 Cable Harness, Axis 1-4">
<option value="3HAC16014-1 Serial measurement unit">
<option value="3HAC16035-1 Brake Release Board">
<option value="3HAC16331-1 Cable harness, man. ax1-4">
<option value="3HAC16831-1 Battery">
<option value="3HAC17117-2 6600 Counter Balance Cylinder">
<option value="3HAC17396-1 Serial measurement unit">
<option value="3HAC17484-10 Axis Motor">
<option value="3HAC17484-6 Axis Motor">
<option value="3HAC17484-7 Rotational ac motor M7">
<option value="3HAC17484-8 Rotational ac motor M8">
<option value="3HAC17484-9 Rotational ac motor M9">
<option value="3HAC17542-1 Upper Arm (no wrist or motor)">
<option value="3HAC17866-5 Computer System 64 Mb">
<option value="3HAC17866-6 Computer System 256 Mb">
<option value="3HAC17970-1 DSQC 328A I/O Unit">
<option value="3HAC17971-1 A D Combi I/O DSQC 327A">
<option value="3HAC18159-1 DSQC 503B Axis computer">
<option value="3HAC2206-1 MOTOR AX. 2 TYPE A">
<option value="3HAC2848-1 Axis 6 Motor">
<option value="3HAC3100-1 6600 Axis 4-6 Cable Harness">
<option value="3HAC3403-1 Axis Motor">
<option value="3HAC3462-1 Power supply DSQC 374">
<option value="3HAC3606-1 IRB Motor Axis 4 6400">
<option value="3HAC3616-1 Main Computer Board">
<option value="3HAC3616-11 Fan for DSQC 500">
<option value="3HAC3616-12 FAN FOR DSQC 500">
<option value="3HAC3617 Backplane">
<option value="3HAC3617-1 DSQC 501 Backplane">
<option value="3HAC3618-1 DSQC 502 I/O computer">
<option value="3HAC3619-1 Axis computer">
<option value="3HAC3696-1 Motor unit axis 1 Type A">
<option value="3HAC3697-1 Servo Motor Axis 2 & 3">
<option value="3HAC4297-1 Power supply Proc DSQC506">
<option value="3HAC4789-1 Motor unit">
<option value="3HAC4790-1 Motor unit">
<option value="3HAC5105-1 Battery">
<option value="3HAC5393-2 Battery Back-up Unit">
<option value="3HAC5504-1 Computer System">
<option value="3HAC5687-1 Panel Unit">
<option value="3HAC5689-1 Base Conn Unit">
<option value="3HAC5883-1 Axis Motor">
<option value="3HAC5885-1 Motor Type A">
<option value="3HAC5889-1 Axis Motor">
<option value="3HAC5954-1 Motor incl. pinion">
<option value="3HAC6367-1 Cable jib Teach Pendant">
<option value="3HAC6655-1 Fan unit">
<option value="3HAC6658-1 Fan with receptacle 24V">
<option value="3HAC6765-1 Tubular shaft unit">
<option value="3HAC6769-1 Upper arm, material set">
<option value="3HAC7055-1 Micro Circuit Board">
<option value="3HAC7998-1 SMB Cable">
<option value="3HAC8114-8 Wrist Type 2 Insul. (Sp.p. 3HAC16626-3)">
<option value="3HAC8848-1 DSQC 522 I/O computer">
<option value="3HAC9522-1 SMB Board">
<option value="3HAC9534-1 Counter Balance Cylinder w/ Bearings">
<option value="3HNA009031-001 CABLE DSQC328.X3/4 - CCIB.X3/4">
<option value="3HNA016237-001 CABLE FFB.J30-DSQC540.J30">
<option value="3HNE 05169-1 CABLE DSQC503.X1-ACCB.X12">
<option value="3HNE00001-1 Ethernet Board">
<option value="3HNE00025-1 Remote I/O Unit">
<option value="3HNE00311-1 Teach Pendant S4">
<option value="3HNE00313-1 S4C+ Teach Pendant">
<option value="3HNE00727-1 ALLEN BRADLEY REMOTE I/O">
<option value="3HNE05167-1 CABLE GS2.X1-DSQC501.X1">
<option value="3HNE09527-1 CABLE FFB.J30-DSQC540.J30">
<option value="3HNE09528-1 CABLE DSQC540.J2-D1.X2">
<option value="3HNE09549-1 CABLE GS2.X1-DSQC541.X1">
<option value="4944026-4 Battery">
<option value="6369901-296 MEMORY EXPANSION BOARD">
<option value="6369901-305 MEMORY EXPANSION BOARD">
<option value="6369901-308 Memory expansion board">
<option value="6369901-328 MEMORY EXPANSION BOARD">
<option value="6369901-329 Extended memory 4Mb">
<option value="6369901-330 Memory Expansion DSQC 323">
<option value="6369901-357 Rectifier DC2">
<option value="6369901-358 Drive unit GT">
<option value="6369901-378 Dig. 24 VDC I/O DSQC 328">
<option value="6369901-394 Servo power unit">
<option value="6369901-395 Power supply DSQC 334">
<option value="6369901-418 Panel unit DSQC 331">
<option value="6369901-419 RECTIFIER DC0">
<option value="6369901-421 DRIVE UNIT CCB">
<option value="6369901-428 Drive unit AAD">
<option value="6369901-452 Drive unit BAD">
<option value="6369901-453 Main Computer DSQC 361">
<option value="6369901-455 A D Combi I/O DSQC 327">
<option value="6369901-462 RECTIFIER DC1">
<option value="6369901-463 RECTIFIER DC3">
<option value="6369901-464 DRIVE UNIT ECB">
<option value="6369901-467 Power supply DSQC 374">
<option value="6369901-477 Power supply DSQC 374">
<option value="6369901-481 Memory expansion 8mb">
<option value="6369901-490 Drive unit GU">
<option value="6369901-491 Rectifier DC4">
<option value="6369901-504 Main computer">
<option value="6369901-506 DSQC 503 Axis computer">
<option value="6369901-507 DSQC 522 I/O computer">
<option value="6369901-526 Panel unit">
<option value="6369901-527 POWER SUPPLY PROC">
<option value="6369901-534 Rectifier DC570">
<option value="6369901-535 Drive unit AC570">
<option value="6369901-574 DSQC 539 Process Power S">
<option value="6369901-608 DSQC 503A Axis computer">
<option value="6369901-610 Main computer">
<option value="6369901-619 Dig. 24 VDC I/O DSQC 328A">
<option value="6369901-620 A D Combi I/O DSQC 327A">
<option value="6369901-625 DSQC 604 Control Power S">
<option value="AF26Z-30-00-21 AF26Z-30-00-21 24-60V50/60HZ 20-60VDC Contactor">
<option value="BC25 Contactor – 3 Phase">
<option value="CA5-10 Auxiliary Contacts on Contactor">
<option value="DSQC223 I/O Board">
<option value="DSQC224 Analog I/O Board">
<option value="DSQC236D Servo drive unit">
<option value="DSQC236T Servo Power Unit">
<option value="DSQC256A System Board DSQC 256A">
<option value="DSQC313 MEASURE CARD UNIT">
<option value="DSQC315 Combi I/O DSQC 315">
<option value="DSQC317 DSQC 317 6Mb 25MHz">
<option value="DSQC321 Extended memory 4Mb">
<option value="DSQC323 Memory Expansion DSQC 323">
<option value="DSQC327 A D Combi I/O DSQC 327A">
<option value="DSQC328 CABLE DSQC328.X3/4 - CCIB.X3/4">
<option value="DSQC331 Panel unit DSQC 331">
<option value="DSQC334 Power supply DSQC 334">
<option value="DSQC345A RECTIFIER DC0">
<option value="DSQC345B RECTIFIER DC1">
<option value="DSQC345C Rectifier DC2">
<option value="DSQC346A Drive unit AAD">
<option value="DSQC346B Drive unit BAD">
<option value="DSQC346C DRIVE UNIT CCB">
<option value="DSQC346E DRIVE UNIT ECB">
<option value="DSQC346U Drive unit GU">
<option value="DSQC350A ALLEN BRADLEY REMOTE I/O">
<option value="DSQC358E Rectifier DC2 and Drive unit C">
<option value="DSQC361 Main Computer DSQC 361">
<option value="DSQC374 Power supply DSQC 374">
<option value="DSQC501 DSQC 501 Backplane">
<option value="DSQC503 DSQC 503A Axis computer">
<option value="DSQC504 Base Conn Unit">
<option value="DSQC509 Panel unit">
<option value="DSQC522 DSQC 522 I/O computer">
<option value="DSQC539 DSQC 539 Process Power S">
<option value="DSQC540 CABLE DSQC540">
<option value="DSQC545A Modules Drive System">
<option value="DSQC546A Drive unit AC570">
<option value="DSQC562 Serial measurement unit">
<option value="DSQC603 DSQC 603 DeviceNet M/S">
<option value="DSQC604 Harness-DSQC604/Computer unit USB">
<option value="DSQC633 Serial measurement unit DSQC 633">
<option value="DSQC633A SMB-unit DSQC633A">
<option value="E3HAB2220-1 Memory expansion board DSQC 317 6Mb 25MHz">
<option value="E3HAB5845-1 Power supply DSQC 334">
<option value="E3HAB5956-1 Memory Expansion DSQC 323">
<option value="E3HAB7215-1 Panel unit DSQC 331">
<option value="E3HAB8101-1 RECTIFIER DC0">
<option value="E3HAB8101-13 Drive unit GU">
<option value="E3HAB8101-18 Drive unit AC570">
<option value="E3HAB8101-4 RECTIFIER DC3">
<option value="E3HAB8101-5 Drive unit AAD">
<option value="E3HAB8101-6 Drive unit BAD">
<option value="E3HAB8101-7 DRIVE UNIT CCB">
<option value="E3HAB8101-8 Drive unit GT">
<option value="E3HAB8802-1 Drive unit DSQC 266T">
<option value="E3HAC021458-001 MOTOR INCL.PINION">
<option value="E3HAC022286-001 Serial measurement unit DSQC 633">
<option value="E3HAC023195-001 GTPU 2, 10 M Cable">
<option value="E3HAC023447-001 DSQC 532B I/O Computer">
<option value="E3HAC025527-004 Computer unit">
<option value="E3HAC028357-001 Teach Pendant">
<option value="E3HAC031851-001 SMB-unit DSQC633A">
<option value="E3HAC0373-1 Main Computer DSQC 361">
<option value="E3HAC10604-1 MOTOR UNIT">
<option value="E3HAC10939-8 Computer unit S4Cplus, 256 Mb">
<option value="E3HAC12928-1 DSQC 604 Power Supply">
<option value="E3HAC14265-1 DSQC 539 Process Power S">
<option value="E3HAC14757-1 Serial meas.un. w.battery">
<option value="E3HAC16014-1 Serial measurement unit">
<option value="E3HAC16626-3 Wrist 225kg, Insulated">
<option value="E3HAC17484-7 MOTOR">
<option value="E3HAC17970-1 DSQC 328A I/O Unit">
<option value="E3HAC17971-1 A D Combi I/O DSQC 327A">
<option value="E3HAC18159-1 DSQC 503A Axis computer">
<option value="E3HAC3180-1 Robot computer DSQC 373">
<option value="E3HAC3462-1 Power supply DSQC 374">
<option value="E3HAC3616-1 Main computer">
<option value="E3HAC4790-1 MOTOR INCL.PINION">
<option value="E3HAC5393-2 Battery unit S4C plus">
<option value="E3HAC5687-1 Panel unit">
<option value="E3HAC5952-1 MOTOR INCL.PINION">
<option value="E3HAC8848-1 DSQC 522 I/O computer">
<option value="EYB560103-BD PC Board dig.I/O DSQC 223">
<option value="EYB560103-CE Servo power unit">
<option value="IRB140Arm Sealing & Steel Adapter Ring">
<option value="PM-Fanuc PM - Fanuc">
<option value="PM-FanucM710iB PM-Fanuc M710iB">
<option value="PM-FanucR2000i PM - Fanuc R2000i">
<option value="PM-IRB140 PM - IRB 1400">
<option value="PM-IRB1400 PM - IRB 1400">
<option value="PM-IRB2400 PM - IRB 2400">
<option value="PM-IRB4400 PM - IRB 4400">
<option value="PM-IRB6400 PM - IRB 6400">
<option value="PM-IRB6600 PM - IRB 6600">
<option value="Q3HAC028357-001 SXTPU3 COMPLETE, REPAIRED">
<option value="Q3HAC10479-1 UPPER ARM 140">
<option value="Q3HAC2206-1 Motor">
<option value="Q3HAC3403-1 MOTOR AX. 1 AND 3 TYPE A">
<option value="Q3HAC3606-1 MOTOR">
<option value="Q3HAC5885-1 MOTOR TYPE A">
<option value="RetnexGrease Retnex Grease Upgrade Per Each IRB 6600">
<option value="S4C+USBFloppyDrive S4C+ USB Floppy Drive">
<option value="YB560103-BD PC Board dig.I/O DSQC 223">
<option value="YB560103-CE M98 Drive Unit Card">


	
		</datalist>
		<br>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		<br>
		<br>
		
	</form>	
	<div class="lineSegment"></div>
	<br>
		
<!--Your Input-->
<?php
// Form
$word = ucwords($word);
echo "<h4><u>$word</u></h4>";
?>

<?php
if ($word == "417408002 DRIVE UNIT") {	
echo "<div class='row featurette'> 
	<div class='col-lg-4 col-md-push-5'>
          <h4>Product ID:&nbsp&nbsp$word</h4>
          <h4>ABB Type Designation:&nbsp&nbsp-</h4>
		  <h4>Test:&nbsp&nbspNo Way Jose</h4>
		  <p class='lead'></p>
        </div>
        <div class='col-md-5 col-md-pull-7'>
          <img class='featurette-image img-responsive center-block' img src='http://s215211.gridserver.com/abbbot.png' alt='ABB Robot Parts and Products'>
        </div>
      </div>
";

} 
elseif ($word == "Above Building Standard") { echo "Upgraded finishes and specialized designs necessary to accommodate a tenant's requirements.";
} 
elseif ($word == "Absentee Landlord") { echo "An owner of an interest in income producing property who does not reside on the premises and who may rely on a property manager to oversee operations.";

} 
?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	
</div>
   
<!--Footer-->		
			<div id="footer">
				<hr/>
				<div class="container">
					<div class="row visible-phone hidden-tablet">
					</div>			
					<p class="copyright pull-left">&copy; 2014 <a href="http://s215211.gridserver.com/" title="Bow Automation">Bow Automation</a>. All rights reserved. Bow Automation LLC.</p>
					<p class="footer-links pull-right">
					<a href="http://s215211.gridserver.com/index.html" title="Home">Home</a> &middot;
					<a href="http://s215211.gridserver.com/privacy.html" title="Privacy Policy">Privacy</a> &middot;
					<a href="http://s215211.gridserver.com/terms.html" title="Terms of Use">Terms</a>
					</p>
				</div>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="http://s215211.gridserver.com/bootstrap.min.js" type="text/javascript"></script>
			<script type="text/javascript" async="async" defer="defer" data-cfasync="false" src="https://mylivechat.com/chatinline.aspx?hccid=46094762"></script>
		</div>
	</body>
</html>
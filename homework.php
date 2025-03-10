<!DOCTYPE html>
<html>
	<head>
		<title>Angel's Play Paradise/HomeWork</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="header.css">
		<link rel="stylesheet" href="fonts.css">
		<link  rel="stylesheet" href="sidenav.css">
		<link  rel="stylesheet" href="footer.css">
	</head>
	<style>
	</style>
	<body >
		<div class="jumbotron text-center heading" style="padding-top:5px;padding-bottom:5px;margin-bottom:0px;">
			<div class="contaiiner-fluid">
				<div class="row">
					<div class="col-10 ani" style="margin:0px;padding:0px;" id="main-head">
						<font class="head-main" >
							<i>Angel's Play Paradise School.</i>
						</font>
						<br>
						<font class="head-main-1">
							<i>(Feel like home Playway.)</i>
						</font>
					</div>
					<div class="col-2 logo-container">
						<img src="images/logo.png" class="logo float-right" alt="logo">
					</div>
				</div>
			</div>
		</div>
		<div id="main" >
			<ul class="nav" id="navbar">	
				<li class="navli"><a href="index.php"> <img class="img-home" src="images/home.png" alt="home" >&nbsp Home</a></li>
				<li class="dropdown navli"  >
					<a href="javascript:void(0)" class="dropbtn">Admissions &nbsp <i class="arrow down"></i></a>
					<div class="dropdown-content">
					  <a href="admission.php">Admission Process</a>
					  <a href="admission.php">F.A.Q</a>
					  <a href="admission.php">Rules &amp Regulation</a>
					</div>
				</li>
				<li class="dropdown navli"  >
					<a href="javascript:void(0)" class="dropbtn">Events &nbsp <i class="arrow down"></i></a>
					<div class="dropdown-content">
					  <a href="events.php">Lohri.</a>
					  <a href="events.php">Christmas.</a>
					  <a href="events.php">Many More</a>
					</div>
				</li>
				<li class="dropdown navli" >
					<a href="javascript:void(0)" class="dropbtn">Activities &nbsp <i class="arrow down"></i></a>
					<div class="dropdown-content">
					  <a href="activities.php">Tumb Painting</a>
					  <a href="activities.php">Clay Modelling</a>
					  <a href="activities.php">Mike Activity</a>
					  <a href="activities.php">Many More</a>
					</div>
				</li>
				<li class="dropdown navli">
					<a href="javascript:void(0)" class="dropbtn">Home Work &nbsp <i class="arrow down"></i></a>
					<div class="dropdown-content">
					  <a href="homework.php">Pre-Nursery</a>
					  <a href="homework.php">Nursery</a>
					  <a href="homework.php">L.K.G</a>
					</div> 
				</li>
				<li class="navli" ><a href="javascript:void(0)" data-toggle="popover"  data-content="Summer: 9:00 a.m to 12:00 noon &nbsp &nbsp  Winter: 10:00a.m to 1:00p.m"  data-placement="bottom" data-trigger="hover" >Timings</a></li>
				<li class="navli"  ><a href="contactus.php">Contact us</a></li>
				<li class="navli"  ><a href="aboutus.php">About us</a></li>
				<div class="collapse-menu-container">
					<div class="colapsable"  OnMouseOver="menu()" OnMouseOut="menureverse()" onClick="openNav()">
						<div class="colapsable-menu">
							<div class="menuicon" id="menu" ></div>
							<div class="menuicon" id="menu" ></div>
							<div class="menuicon" id="menu" ></div>
						</div>
					</div>
				</div>
			</ul>
		</div>
		<ul class="sidenav" id="sidenav">
			<li class="closebutton" ><a href="javascript:void(0)" onClick="closeNav()">&times;</a></li>
			<li class="sidenavli"><a href="index.php"> <img class="img-home" src="images/home.png" alt="home">Home</a></li>
			<li class="sidenavli"><a href="admission.php"> Admissions</a></li>
			<li class="sidenavli" >
				<a href="events.php" >Events</a>
			</li>
			<li class="sidenavli" >
				<a href="activities.php" >Activities</a>
			</li>
			<li class="sidenavli">
				<a href="homework.php">Home Work</a>
			</li>
			<li class="sidenavli"  ><a href="contactus.php">Contact us</a></li>
			<li  class="sidenavli"><a href="aboutus.php">About us</a></li>
			<li  class="sidenavli"><a href="javascript:void(0)"  data-toggle="tooltip"  title="Summer:9:00a.m to 12:00noon Winter:10:00a.m to 1:00p.m" data-trigger="click" >Timings</a></li>
		</ul>
		<div class="container">
			<div class="row" style="text-align:center;padding:0px;">
				<div class="col-12" style="font-family:PTSerif;background-image:linear-gradient(pink,white);font-size:5vw;">
					Homework
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="font-family:Rokkitt;background-color:whitesmoke;font-size:2.5vw;text-align:center;">
					We wish you health, comfort, and prosperity this holiday season.
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align:center;background-color:#ffff47;font-size:3.5vw;">
					<a href="homework.pdf" download="pre_nursery" target="_blank" style="text-decoration:none;color:black;"><i class="fa fa-download"></i>Pre-Nursery</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align:center;background-color:#00ff00;font-size:3.5vw;">
					<a href="homework.pdf" download="nursery" target="_blank" style="text-decoration:none;color:black;"><i class="fa fa-download"></i>Nursery</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align:center;background-color:#00acffd1;font-size:3.5vw;">
					<a href="homework.pdf" download="nursery" target="_blank" style="text-decoration:none;color:black;"><i class="fa fa-download"></i>L.K.G</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="padding:0px;">
					<img src="images/holidays.png" alt="homework" height="100%" width="100%">
				</div>
			</div>
		</div>
		<div class="container-fuild foot">
			<div class="container">
				<div class="row">
					<div  class="col-3" style="padding-left:2vw;line-height:200%;">
						Follow Us On:<br>
						&nbsp <a href="https://www.facebook.com/Jass5628/" class="fa fa-facebook" style="color:white;text-decoration:none;"></a> &nbsp 
						 <a href="#" class="fa fa-whatsapp" style="color:white;text-decoration:none;"></a>
						<br>	
						&nbsp <a href="#" class="fa fa-instagram" style="color:white;text-decoration:none;"></a>
					</div>
					<div class="col-3" style="padding-left:4vw;">
						Address:<br>
						Satjot Nagar<br>
						Block:C<br>
						Dhandra Road<br>
						Ludhiana,Punjab
					</div>
					<div class="col-6" style="word-wrap:break-word;padding-left:5.5vw;">
						Contact Us On:<br>
						<i class="fa fa-phone"></i>
						9501181459<br>
						Write Us On:<br>
						<a href="mailto:angelplayparadise@gmail.com" style="text-decoration: none;color:white;">
							<i style="font-size:1.8vw" class="fa">&#xf003;</i>AngelPlayParadise@gmail.com
						</a>
					</div>
				</div>
				<div class="row">
						<div class="col-12" style="text-align:center;font-size:1.7vw;">						
							<hr type="solid" width="100%" color="white" style="height:2px;">
									© Angel's Play Paradise.
						</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="nav.js"> </script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			  $('[data-toggle="popover"]').popover();   
			});
			window.onresize=function(){
				resize();
			}
			var headingsize;
			resize();
			function resize()
			{	
				const a=document.getElementById("main-head");
				if (window.innerWidth<900)
				{
						a.className="col-12 ani";
						document.getElementsByClassName("head-main")[0].style.padding="0px";
				}
				else
				{
					a.className="col-10 ani";
					document.getElementsByClassName("head-main")[0].style.paddingLeft="20px";
				}
			}
			window.onscroll = function() {scrollFunction()};
			function scrollFunction()
			{
					headingsize=document.getElementsByClassName("jumbotron text-center heading")[0].clientHeight;
					if (document.body.scrollTop >headingsize || document.documentElement.scrollTop >headingsize) 
					{
						document.getElementById("navbar").style.position= "fixed";
						document.getElementById("navbar").style.top="0px";
						document.getElementById("main").style.marginTop="40px";
						document.getElementById("sidenav").style.top="30px";
					}
					else 
					{
						document.getElementById("navbar").style.position= "static";
						document.getElementById("main").style.marginTop="0px";
						document.getElementById("sidenav").style.top="unset";
					}
			}
			</script>
	</body>
</html>
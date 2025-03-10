<!DOCTYPE html>
<html>
	<head>
		<title>Angel's Play Paradise/Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="header.css">
		<link  rel="stylesheet" href="footer.css">
		<link  rel="stylesheet" href="sidenav.css">
		<link rel="stylesheet" href="fonts.css">
		<link rel="stylesheet" href="gallery.css">
		<style>
			input[type=text],input[type=email],input[type=tel]
			{
			  margin: 8px 0;
			  border-radius:4px;
			  font-size:1.8vw;
			  height:3vw;
			  resize: vertical;
			  padding: 12px;
			  border-width:1px;
			  width:100%;
			}
			#query{
				margin: 8px 0;
				border-radius:4px;
				font-size:1.8vw;
				resize: vertical;
				padding: 12px;
				width:100%;
				height:10vw;
				overflow-y:auto;
			}
			.showbtn{
				background: -webkit-linear-gradient(#f7ff00,#25ff00);
				background: linear-gradient(#f7ff00,#25ff00);
				text-align:center;
				margin:auto;
				color:black;
				font-size:2.2vw;
				font-family:Areial;
				cursor: pointer;
				padding:6px 15px;
				border-radius:4px;
				-webkit-transition-duration: 0.4s; 
				transition-duration: 0.4s;
				-moz-transition-duration: 0.4s;
				-o-transition-duration: 0.4s;
			}
			.showbtn:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.4),0 17px 50px 0 rgba(0,0,0,0.4);
			}
		</style>
	</head>
	<body>
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
		<div class="container"style="background-image:linear-gradient(pink,rgba(255,255,255,1))";>
			<div class="row">
				<div class="col-12" style="text-align:center;font-size:1.8vw;">
					<div style="margin:0;background:-webkit-linear-gradient(#f7ff00,aqua);-webkit-background-clip:text;-webkit-text-fill-color:transparent;font-size:4.5vw;font-family:Algerian;text-shadow:2px 2px black;">
						Contact Us
					</div>
					Please complete the form below for any kind of enquiry related to our School ...
				</div>
			</div>
			<div class="row" style="padding:2% 0 0 20%;font-size:2.2vw;;color:black;">
				<div class="col-4" >
					<div style="margin:4% auto 3.5% 0;"  > 
						Name: 
					</div>
					<div style="margin:4% auto 3.5% 0;">
						Phone Number: 
					</div>
					<div style="margin:4% auto 3.5% 0;">
						Email: 
					</div>
					<div style="margin:4% auto 3.5% 0;">
						Write Query or Suggestion:
					</div>
				</div>
				<div class="col-6">
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div style="margin:1%;"> 
							<input type="text" placeholder="Enter Name..." id="fullname" name="fullname" onchange="colorback('fullname')" maxlength="50" required>
						</div>
						<div style="margin:1%;">
							<input type="tel" placeholder="Enter Number Number.."  id="phone" name="phone" onchange="colorback('phone')" maxlength="14" pattern="[0-9]{10}" required>
						</div>
						<div style="margin:1%;">
							<input type="email" placeholder="Enter email.." id="email" name="email" onchange="colorback('email')" maxlength="50" required>
						</div>
						<div style="margin:1%;">
							<textarea placeholder="Enter the text here..." id="query" name="query" onchange="colorback('query')" required ></textarea>
						</div>
						<div style="margin-bottom:5%;text-align:center;">
							<input type="submit" value="Submit" class="showbtn" id="submit" name="submit">
						</div>
					</form>
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
						<a href="tel:+91 9501181459" style="text-decoration: none;color:white;">
							<i class="fa fa-phone"></i>
							9501181459<br>
						</a>
						Write Us On:<br>
						<a href="mailto:angelplayparadise@gmail.com" style="text-decoration: none;color:white;">
							<i style="font-size:1.8vw" class="fa" >&#xf003;</i>&nbsp AngelPlayParadise@gmail.com
						</a>
					</div>
				</div>
				<div class="row">
						<div class="col-12" style="text-align:center;font-size:1.7vw;">						
							<hr type="solid" width="100%" color="white" style="height:1px;margin:1px;">
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
			function colorback(id)
			{
				var input=document.getElementById(id);
				s=input.value;
				var flag=0;
				for(var i=0 ;i<s.length;i++)
				{
					if(s[i]!=" ")
					{
						flag=1;
						break;
					}
				}
				if (flag==1)
				{
					input.style.backgroundColor="#d7fcf7";
				}
				else
				{
					input.style.backgroundColor="white";
				}
			}
		</script>
	</body>
</html>
<?php
	$name=$phone=$sug=$message="";
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit']))
	  {
	    $name=$_POST["fullname"];
		$email="From ".$_POST["email"];
		$phone="Ph No: ".$_POST["phone"];
		$sug="About your school";
		$message=$email.$phone.$_POST["query"];
		echo "<script type='text/javascript'>alert('Your Query/Suggestion has being sent.We will reply back as soon as possible')</script>";
		mail("2019UCP1350@mnit.ac.in",$sug,$message);
	  }
?>
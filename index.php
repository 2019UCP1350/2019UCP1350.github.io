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
			.carousel-inner img {
				width: 100%;
				height: 100%;
			}
			.bo{
				border-color: rgba(255, 255, 0, 0.8) rgba(255,0, 0,1) rgba(0,255,255, 0.8) rgba(0,255,0,0.8);
				border-style:groove;
				border-width:1.3vw;
				padding:0;
			}
			.facilities{
				height:28vw;
				width:100%;
				background-image: url("images/facilities_background.jpeg");
				background-size:contain;
				background-attachment:scroll;
				perspective: 1000px;
				box-shadow: 8px 8px 8px 8px rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.3);
			}
			.facilities-head{
				font-family:Algerian;
				font-size:3vw;
				border-radius:0% 0% 100% 100%;
				text-align:center;
				font-family: Algerian;
				width: 27%;
				height:5vw;
				color: rgb(1, 255, 255);
				background-image: linear-gradient(to bottom,rgb(0, 0, 0),rgba(65, 37, 93, 0.8));
				background-position: center;
			}
			.fac{
				background-image: linear-gradient(to bottom,rgb(0, 0, 0),rgba(65, 37, 93, 0.8));
				width:20%;
				float:left;
				margin-left:4%; 
				margin-top:2%;
				height:70%;
				border-radius:20%;
			}
			.fac-inner{
				height:100%;
				width:100%;
				border-radius:20%;
				position:relative;
				transition: transform 0.6s;
				transform-style: preserve-3d;
				box-shadow: 3px 3px 3px 3px rgba(0, 0, 0, 0.4), 0 6px 20px 0 rgba(0, 0, 0, 0.5);
				cursor: pointer;
			}
			.fac:hover .fac-inner{
				transform:rotateY(180deg);
			}
			.fac-inner-front{
				width:100%;
				height:100%;
				border-radius:20%;
				position:absolute;
				background-repeat:no-repeat;
				background-position:center;
				backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
			}
			.fac-inner-back{
				width:100%;
				height:100%;
				text-align:center;
				backface-visibility: hidden;
				-webkit-backface-visibility: hidden;
				transform: rotateY(180deg);
				font-size:2vw;
				font-family:Sofia;
				color: rgb(1, 255, 255);
				user-select: none;
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
			<li class="sidenavli" ><a href="contactus.php">Contact us</a></li>
			<li  class="sidenavli"><a href="aboutus.php">About us</a></li>
			<li  class="sidenavli"><a href="javascript:void(0)"  data-toggle="tooltip"  title="Summer:9:00a.m to 12:00noon Winter:10:00a.m to 1:00p.m" data-trigger="click" >Timings</a></li>
		</ul>
		<div class="container mt-3 bo">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators" >
				<li data-target="#myCarousel" data-slide-to="0" class="active" style="border-radius:100%;height:10px;width:10px;"></li>
				<li data-target="#myCarousel" data-slide-to="1" style="border-radius:100%;height:10px;width:10px;"></li>
				<li data-target="#myCarousel" data-slide-to="2" style="border-radius:100%;height:10px;width:10px;" ></li>
				<li data-target="#myCarousel" data-slide-to="3" style="border-radius:100%;height:10px;width:10px;" ></li>
				<li data-target="#myCarousel" data-slide-to="4" style="border-radius:100%;height:10px;width:10px;" ></li>
			  </ul>
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/christmas/main3.png" alt="Lohri" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="images/main1.png" alt="Fun" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="images/christmas/main.png" alt="Chritmas" width="1100" height="500">
				  
				</div>
				<div class="carousel-item">
					<img src="images/childrenday/main2.png" alt="Children Day" width="1100" height="500">
				</div>
				<div class="carousel-item">
					<img src="images/Lohri/main4.png" alt="Lohri" width="1100" height="500">
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<span class="carousel-control-prev-icon" ></span>
			  </a>
			  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<span class="carousel-control-next-icon" ></span>
			  </a>
			</div>
		</div>
		<br>
		<div class="facilities">
			<center>
			<div class="facilities-head">
				<u>Facilities:</u>
			</div>
			</center>
			<div class="fac" >
				<div style="background-color:transparent;" class="fac-inner" >
					<div style="background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3) ),url('images/bus.jpg');background-size:100%;" class="fac-inner-front">
					</div>
					<div class="fac-inner-back" style="padding-top:35%;">
						<b>Van Service</b>
					</div>
				</div>
			</div>
			<div class="fac" >
				<div style="background-color:transparent;" class="fac-inner" >
					<div style="background-image:url('images/air-conditioner.jpg');background-size:cover;" class="fac-inner-front">
					</div>
					<div class="fac-inner-back" style="padding-top:28%;">
						<b>Our School is <br>fully <br> Air-Conditioned</b>
					</div>
				</div>
			</div>
			<div class="fac">
				<div style="background-color:transparent;" class="fac-inner" >
					<div style="background-image:url('images/water.jpg');background-size:cover;" class="fac-inner-front">
					</div>
					<div class="fac-inner-back" style="padding-top:25%;">
						<b>Filtered <br>R.O<br> Water</b>
					</div>
				</div>
			</div>
			<div class="fac">
				<div style="background-color:transparent;" class="fac-inner" >
					<div style="background-image:url('images/2.jpg');background-size:cover;" class="fac-inner-front">
					</div>
					<div class="fac-inner-back" style="padding-top:28%;">
						<b>Modular Classroom <br>& <br>Toys.</b>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div style="background-color:transparent;width:100%;padding:2% 5% 2% 5%;box-sizing: border-box">
			<div style="dispaly:table;outline: 5px solid purple;">
				<div style="display:table-cell;background-color:yellow;width:50%;font-family:Sofia;font-size:1.8vw;">
					<div style="background-color:white;">
					<div style="font-family:Algerian;font-size:2.5vw;width:100%;text-align:center;margin-top:3%;text-decoration:underline;background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3) )">
						Programes
					</div>
					</div>
					<br>
					<div style="padding:0% 10% 0% 10%;text-align:justify;">
						Our kindergarten programs oblige the age gathering of child from 2-5 years with an 
						educational program focussing on the comprehensive improvement of the your tiny tots:
						<ul  style="line-height:200%;">
							<li>Pre-Nursery&nbsp(1.75-2.5 years old)</li>
							<li>Nursery&nbsp(2.5-3.5 years old)</li>
							<li>L&nbsp.&nbspK&nbsp.&nbspG&nbsp(3.5-4.5 years old)</li>
						</ul>
					</div>
				</div>
				<div style="display:table-cell;">
				</div>
				<div style="display:table-cell;background-color:aqua;width:50%;font-family:Sofia;font-size:1.8vw;">
					<div style="background-color:white;">
					<div style="font-family:Algerian;font-size:2.5vw;width:100%;text-align:center;margin-top:3%;text-decoration:underline;background-image:linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3) )">
						Activities
					</div>
					</div>
					<br>
					<div style="padding:0% 10% 0% 10%;text-align:justify;">
						Our kindergarten organises number of 
						co-curricular exercises, Guarantees that the babies appreciate coming to class and learning new ideas.
						A few of them are:
						<ul  style="line-height:200%;">
							<li>Story-Telling.</li>
							<li>Hand-Painting</li>
							<li>Clay-Modelling</li>
							<li>Sports-Acitivity</li>
						</ul>
					</div>
				</div> 
			</div>
		</div>
		<br>
		<div class="gallery">
			<div style="background-color:white;width:24vw;">
				<div class="gallery-heading">
					Image Gallery:
				</div>
			</div>
			<div class="gallery-container">
				<div id="gallery-pre">
					&#10094;
				</div>
				<div style="overflow:hidden;width:92%" >
					<div class="gallery-slide" >
							<img src="images/Lohri/(1).jpg" class="gallery-image" id="lastclone">
							<img src="images/childrenday/(6).jpg" class="gallery-image" >
							<img src="images/childrenday/(8).jpg" class="gallery-image">
							<img src="images/childrenday/(10).jpg" class="gallery-image">
							<img src="images/gurpurav/10.jpg" class="gallery-image">
							<img src="images/Holi/1.jpg" class="gallery-image">
							<img src="images/christmas/(5).jpg" class="gallery-image">
							<img src="images/christmas/(8).jpg" class="gallery-image">
							<img src="images/christmas/(15).jpg" class="gallery-image">
							<img src="images/birthday/12.jpg" class="gallery-image">
							<img src="images/independenceday/4.jpg" class="gallery-image">
							<img src="images/Rangoli/2.jpg" class="gallery-image">
							<img src="images/janamashtmi/2.jpg" class="gallery-image">
							<img src="images/janamashtmi/3.jpg" class="gallery-image">
							<img src="images/janamashtmi/7.jpg" class="gallery-image">
							<img src="images/Teej/6.jpg" class="gallery-image">
							<img src="images/Teej/5.jpg" class="gallery-image">
							<img src="images/Teej/3.jpg" class="gallery-image">
							<img src="images/playing/5.jpg" class="gallery-image">
							<img src="images/playing/11.jpg" class="gallery-image">
							<img src="images/playing/18.jpg" class="gallery-image">
							<img src="images/Lohri/(9).jpg" class="gallery-image">
							<img src="images/Lohri/(4).jpg" class="gallery-image">
							<img src="images/Lohri/(1).jpg" class="gallery-image">
							<img src="images/childrenday/(6).jpg" class="gallery-image" id="firstclone">
							<img src="images/childrenday/(8).jpg" class="gallery-image">
							<img src="images/childrenday/(10).jpg" class="gallery-image">
							<img src="images/gurpurav/10.jpg" class="gallery-image">
							<img src="images/Holi/1.jpg" class="gallery-image">
					</div>
				</div>
				<div id="gallery-next" >
					&#10095;
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
		<script type="text/javascript" src="gallery.js"> </script>
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
		</script>
	</body>
</html>
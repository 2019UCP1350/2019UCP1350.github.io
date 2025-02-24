<!DOCTYPE html>
<html>
	<head>
		<title>Angel's Play Paradise/Activities</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="header.css">
		<link  rel="stylesheet" href="footer.css">
		<link  rel="stylesheet" href="sidenav.css">
		<link rel="stylesheet" href="fonts.css">
		<style>
			.activityimg{
				border: 1px solid #777;
				height:23vw;
				width:100%;
				cursor:pointer;
				transition:0.5s;
			}
			.activityimg:hover{
				opacity:0.7;
				border: 3px solid black;
			}
			.divmodal{
				display:none;
				position:fixed;
				z-index:105;
				left:0;
				top:0;
				width:100%;
				height:100%;
				overflow:auto;
				background-color:rgba(0,0,0,0.9);
				margin:auto;
			}
			.modal-content{
				margin:10% auto 0 auto;
				display:block;
				width:80%;
				height:80%;
				max-width:700px;
			}
			#caption{
				text-align:center;
				color:white;
				padding:10px 0;
			}
			.modal-content,#caption{
				-webkit-animation:imgzoom 0.5s ease 0s 1 normal none running;
			    animation:imgzoom 0.5s ease 0s 1 normal none running;
				-moz-animation:imgzoom 0.5s ease 0s 1 normal none running;
				-o-animation:imgzoom 0.5s ease 0s 1 normal none running;
			}
			@-webkit-keyframes imgzoom {
			  from {-webkit-transform:scale(0);} 
			  to {-webkit-transform:scale(1);}
			}
			@keyframes imgzoom {
			  from {transform:scale(0);} 
			  to {transform:scale(1);}
			}
			@-moz-keyframes imgzoom {
			  from {transform:scale(0)} 
			  to {transform:scale(1)}
			}
			@-o-keyframes imgzoom {
			  from {transform:scale(0)} 
			  to {transform:scale(1)}
			}
			.close {
				position:fixed;
				top: 15px;
				right: 35px;
				color: #bbb;
				font-size: 40px;
				transition: 0.5s;
			}
			.close:hover{
			  color:white;
			  text-decoration: none;
			  cursor: pointer;
			}
			.showbtn{
				background: -webkit-linear-gradient(#f7ff00,#25ff00);
				background: linear-gradient(#f7ff00,#25ff00);
				text-align:center;
				margin:auto;
				color:black;
				font-size:30px;
				font-family:Areial;
				cursor: pointer;
				padding:10px 15px;
				-webkit-transition-duration: 0.4s; 
				transition-duration: 0.4s;
				-moz-transition-duration: 0.4s;
				-o-transition-duration: 0.4s;
			}
			.showbtn:hover{
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.4),0 17px 50px 0 rgba(0,0,0,0.4);
			}
			@media only screen and (max-width: 700px){
			  .imgmodal{
				width: 100%;
			  }
			}
		</style>
	</head>
	<body >
		<div class="jumbotron text-center heading" style="padding-top:5px;padding-bottom:5px;margin-bottom:0px;">
			<div class="contaiiner-fluid">
				<div class="row">
					<div class="col-10 ani" style="margin:0;padding:0px;" id="main-head">
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
		<div class="container" style="margin:0 auto;font-family:Algerian;">
			<div class="row">
				<div class="col-12" style="font-family:PTSerif;background-image:linear-gradient(pink,white);font-size:5vw;color:white;text-align:center;">
					<u>Activities:</u>
					<br>
					<span style="font-family:sofia;font-size:2.5vw;line-height:150%;text-align:left;">
						<p style="padding:0 7%;color:red;">
							Our school organises a bunch of different activities to may sure that there is overall development of your little tot.
							Also,these activites help to bring forward the hidden talent of your child.
						</p>
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
					Drawing Activity
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing5.png" onclick="display('images/drawing/drawing5.png','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing1.jpg" onclick="display('images/drawing/drawing1.jpg','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing2.jpg" onclick="display('images/drawing/drawing2.jpg','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing4.jpg" onclick="display('images/drawing/drawing4.jpg','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);">
				<div class="col-3" style="padding:2px;margin:0 0 0 25%;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing6.jpg" onclick="display('images/drawing/drawing6.jpg','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/drawing/drawing7.jpg" onclick="display('images/drawing/drawing7.jpg','Drawing Activity')" alt="Drawing Activity">	
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:3px;">
				<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
					Modern Learning
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);" >
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/playing/23.jpg" onclick="display('images/playing/23.jpg','Making Learning Fun')" alt="Making Learning Fun">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/playing/14.jpg" onclick="display('images/playing/14.jpg','Making Learning Fun')" alt="Making Learning Fun">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/playing/24.jpg" onclick="display('images/playing/24.jpg','Making Learning Fun')" alt="Making Learning Fun">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/playing/26.jpg" onclick="display('images/playing/26.jpg','Making Learning Fun')" alt="Making Learning Fun">	
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:3px;">
				<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
					Clay Modelling
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Clay/1.jpg" onclick="display('images/Clay/1.jpg','Clay Modelling')" alt="Clay Modelling">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Clay/2.jpg" onclick="display('images/Clay/2.jpg','Clay Modelling')" alt="Clay Modelling">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Clay/3.jpg" onclick="display('images/Clay/3.jpg','Clay Modelling')" alt="Clay Modelling">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Clay/4.jpg" onclick="display('images/Clay/4.jpg','Clay Modelling')" alt="Clay Modelling">	
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:3px;">
				<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
					Mike Activity
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);" >
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Mikeactivity/5.jpg" onclick="display('images/Mikeactivity/5.jpg','Mike Activity')" alt="Mike Activity">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Mikeactivity/2.jpg" onclick="display('images/Mikeactivity/2.jpg','Mike Activity')" alt="Mike Activity">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Mikeactivity/6.jpg" onclick="display('images/Mikeactivity/6.jpg','Mike Activity')" alt="Mike Activity">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/Mikeactivity/1.jpg" onclick="display('images/Mikeactivity/1.jpg','Mike Activity')" alt="Mike Activity">	
					</div>
				</div>
			</div>
			<div class="row" style="margin-top:3px;">
				<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
					Mango&ampPool Party
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/mangoparty1.jpg" onclick="display('images/poolparty/mangoparty1.jpg','Mango Party')" alt="Mango&Pool Party">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/mangoparty2.jpg" onclick="display('images/poolparty/mangoparty2.jpg','Mango Party')" alt="Mango&Pool Party">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/poolparty1.jpg" onclick="display('images/poolparty/poolparty1.jpg','Pool Party')" alt="Mango&Pool Party">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/poolparty2.jpg" onclick="display('images/poolparty/poolparty2.jpg','Pool Party')" alt="Mango&Pool Party">
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/1.jpg" onclick="display('images/poolparty/1.jpg','Mango&Pool Party')" alt="Pool Party">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/2.jpg" onclick="display('images/poolparty/2.jpg','Mango&Pool Party')" alt="Pool Party">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/3.jpg" onclick="display('images/poolparty/3.jpg','Mango&Pool Party')" alt="Pool Party">
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/4.jpg" onclick="display('images/poolparty/4.jpg','Mango&Pool Party')" alt="Pool Party">
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white);">
				<div class="col-3" style="padding:2px;margin:0 0 0 12.5%;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/mangoparty3.jpg" onclick="display('images/poolparty/mangoparty3.jpg','Mango Party')" alt="Mango&Pool Party">	
						</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;">
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/poolparty3.jpg" onclick="display('images/poolparty/poolparty3.jpg','Pool Party')" alt="Mango&Pool Party">	
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<img class="activityimg" src="images/poolparty/mangoparty4.jpg" onclick="display('images/poolparty/mangoparty4.jpg','Mango Party')" alt="Mango&Pool Party">
						</div>
				</div>
			</div>
			<div style="display:none" id="show12">
				<div class="row" style="margin-top:3px;">
					<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
						Kite Flying
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white);" >
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/kiteflying/1.jpg" onclick="display('images/kiteflying/1.jpg','Mike Activity')" alt="Mike Activity">	
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;">
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/kiteflying/2.jpg" onclick="display('images/kiteflying/2.jpg','Mike Activity')" alt="Mike Activity">
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/kiteflying/3.jpg" onclick="display('images/kiteflying/3.jpg','Mike Activity')" alt="Mike Activity">
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/kiteflying/4.jpg" onclick="display('images/kiteflying/4.jpg','Mike Activity')" alt="Mike Activity">	
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:3px;">
					<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
						Thumb Painting
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white);">
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/thumbpainting/thumbpainting5.jpg" onclick="display('images/thumbpainting/thumbpainting5.jpg','Thumb Painting')" alt="Thumb Painting">	
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;">
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/thumbpainting/thumbpainting3.jpg" onclick="display('images/thumbpainting/thumbpainting3.jpg','Thumb Painting')" alt="Thumb Painting">	
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/thumbpainting/thumbpainting7.jpg" onclick="display('images/thumbpainting/thumbpainting7.jpg','Thumb Painting')" alt="Thumb Painting">
							</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/thumbpainting/thumbpainting6.jpg" onclick="display('images/thumbpainting/thumbpainting6.jpg','Thumb Painting')" alt="Thumb Painting">	
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:3px;">
					<div class="col-12 text-center" style="font-size:4vw;background: -webkit-linear-gradient(#f7ff00,#25ff00);color:black;">
						Fun at School
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white);" >
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/1.jpg" onclick="display('images/playing/1.jpg','Masti Time')" alt="Masti Time">	
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;">
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/2.jpg" onclick="display('images/playing/2.jpg','Masti Time')" alt="Masti Time">
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/10.jpg" onclick="display('images/playing/10.jpg','Masti Time')" alt="Masti Time">
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/3.jpg" onclick="display('images/playing/3.jpg','Masti Time')" alt="Masti Time">	
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white);" >
					<div class="col-3" style="padding:2px;margin:0 0 0 25%;" >
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/22.jpg" onclick="display('images/playing/22.jpg','Masti Time')" alt="Masti Time">	
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;">
						<div style="background-color:rgb(0,0,0,1);">
						<img class="activityimg" src="images/playing/25.jpg" onclick="display('images/playing/25.jpg','Masti Time')" alt="Masti Time">
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-12" style="margin:auto;padding:3% 40%">
						<button class="showbtn" Onclick="hideimg()">Collapse</button>
					</div>
				</div>
			</div>
			<div id="moreimage">
				<div class="row" style="background-image:linear-gradient(pink,white)" >
					<div class="col-12" style="margin:auto;padding:3% 40%">
						<button class="showbtn" Onclick="showimg()">More Images</button>
					</div>
				</div>
			</div>
		</div>
		<div class="divmodal">
			<span class="close">&times;</span>
			<img class="modal-content" id="modalimg">
			<div id="caption"></div>
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
					document.getElementById("main").style.marginTop="60px";
					document.getElementById("sidenav").style.top="30px";
				}
				else 
				{
					document.getElementById("navbar").style.position= "static";
					document.getElementById("main").style.marginTop="0px";
					document.getElementById("sidenav").style.top="unset";
				}
			}
			function display(source,text)
			{	
				const modalcontainer=document.querySelector(".divmodal");
				const modalImg=document.querySelector("#modalimg");
				const captiontext=document.querySelector("#caption");
				modalcontainer.style.display="block";
				modalImg.src=source;
				captiontext.innerHTML=text;
				const closeimg=document.getElementsByClassName("close")[0];
				closeimg.onclick=function(){
				modalcontainer.style.display="none";
				}
			}
			const showimage=document.getElementById("show12");
			function showimg()
			{
				showimage.style.display="unset";
				document.getElementById("moreimage").style.display="none";
			}
			function hideimg()
			{
				showimage.style.display="none";
				document.getElementById("moreimage").style.display="unset";
			}
		</script>
	</body>
</html>
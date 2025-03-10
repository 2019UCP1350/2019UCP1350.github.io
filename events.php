<!DOCTYPE html>
<html>
	<head>
		<title>Angel's Play Paradise/Events</title>
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
				z-index:2000;
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
				max-width:700px;
			}
			#caption{
				text-align:center;
				color:white;
				padding:10px 0;
				font-size:20px;
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
				width:auto;
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
				<div class="col-12" style="font-family:Algerian;background-image:linear-gradient(pink,white);font-size:5vw;color:black;text-align:center;padding:0;">
					<div style="background: -webkit-linear-gradient(#f7ff00,#25ff00);width:100%;">
						<u>Events:</u>
					</div>
					<span style="font-family:sofia;font-size:2.5vw;line-height:150%;text-align:left;">
						<p style="padding:0 7%;color:red;margin-top:10px;">
							Our school celebrate various cultural events and festival inorder to inculcate about tradition and culture in little tots. 
						</p>
					</span>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Children Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/childrenday/(1).jpg" onclick="display('images/childrenday/(1).jpg','Children Day')" alt="Children Day"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Children Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/childrenday/(5).jpg" onclick="display('images/childrenday/(5).jpg','Children Day')" alt="Children Day"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Children Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/childrenday/(3).jpg" onclick="display('images/childrenday/(3).jpg','Children Day')" alt="Children Day"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Fancy Dress"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/childrenday/(4).jpg" onclick="display('images/childrenday/(4).jpg','Fancy Dress')" alt="Fancy Dress"></a>
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Fancy Dress"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/fancydress/(3).jpg" onclick="display('images/fancydress/(3).jpg','Fancy Dress')" alt="Fancy Dress"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Fancy Dress"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/fancydress/(4).jpg" onclick="display('images/fancydress/(4).jpg','Fancy Dress')" alt="Fancy Dress"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Fancy Dress"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/fancydress/(5).jpg" onclick="display('images/fancydress/(5).jpg','Fancy Dress')" alt="Fancy Dress"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Baisakhi"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/baisakhi/1.jpg" onclick="display('images/baisakhi/1.jpg','Baisakhi')" alt="Baisakhi"></a>
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(1).jpg" onclick="display('images/christmas/(1).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(2).jpg" onclick="display('images/christmas/(2).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(3).jpg" onclick="display('images/christmas/(3).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(4).jpg" onclick="display('images/christmas/(4).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(7).jpg" onclick="display('images/christmas/(7).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(9).jpg" onclick="display('images/christmas/(9).jpg','Christmas')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(18).jpg" onclick="display('images/christmas/(18).jpg','Christmas Party')" alt="Christmas"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Christmas Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/christmas/(19).jpg" onclick="display('images/christmas/(19).jpg','Christmas Party')" alt="Christmas"></a>
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Gurpurav"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/gurpurav/5.jpg" onclick="display('images/gurpurav/5.jpg','Gurpurav')" alt="Gurpurav"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Gurpurav"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/gurpurav/11.jpg" onclick="display('images/gurpurav/11.jpg','Gurpurav')" alt="Gurpurav"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Gurpurav"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/gurpurav/1.jpg" onclick="display('images/gurpurav/1.jpg','Gurpurav')" alt="Gurpurav"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Gurpurav"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/gurpurav/7.jpg" onclick="display('images/gurpurav/7.jpg','Gurpurav')" alt="Gurpurav"></a>
					</div>
				</div>
			</div>
			<div class="row" style="background-image:linear-gradient(pink,white)">
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Birthday Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/birthday/1.jpg" onclick="display('images/birthday/1.jpg','Birthday Celebration')" alt="Birthday Celebration"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Birthday Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/birthday/4.jpg" onclick="display('images/birthday/4.jpg','Birthday Celebration')" alt="Birthday Celebration"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Birthday Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/birthday/10.jpg" onclick="display('images/birthday/10.jpg','Birthday Celebration')" alt="Birthday Celebration"></a>
					</div>
				</div>
				<div class="col-3" style="padding:2px;margin:0px;" >
					<div style="background-color:rgb(0,0,0,1);">
					<a href="#" data-toggle="popover"  data-content="Birthday Party"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/birthday/11.jpg" onclick="display('images/birthday/11.jpg','Birthday Celebration')" alt="Birthday Celebration"></a>
					</div>
				</div>
			</div>
			<div style="display:none;" id="show12">
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Teej"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Teej/1.jpg" onclick="display('images/Teej/1.jpg','Teej Celebration')" alt="Teej"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Teej"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Teej/2.jpg" onclick="display('images/Teej/2.jpg','Teej Celebration')" alt="Teej"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Teej"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Teej/4.jpg" onclick="display('images/Teej/4.jpg','Teej Celebration')" alt="Teej"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Teej"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Teej/8.jpg" onclick="display('images/Teej/8.jpg','Teej Celebration')" alt="Teej"></a>
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Independence Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Independenceday/5.jpg" onclick="display('images/Independenceday/5.jpg','Independence Day')" alt="Independence Day"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Independence Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Independenceday/4.jpg" onclick="display('images/Independenceday/4.jpg','Independence Day')" alt="Independence Day"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Independence Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Independenceday/8.gif" onclick="display('images/Independenceday/8.gif','Independence Day')" alt="Independence Day"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Independence Day"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Independenceday/9.jpg" onclick="display('images/Independenceday/9.jpg','Independence Day')" alt="Independence Day"></a>
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Janam Ashtmi"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/janamashtmi/1.jpg" onclick="display('images/janamashtmi/1.jpg','Janam Ashtmi')" alt="Janam Ashtmi"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Janam Ashtmi"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/janamashtmi/4.jpg" onclick="display('images/janamashtmi/4.jpg','Janam Ashtmi')" alt="Janam Ashtmi"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Janam Ashtmi"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/janamashtmi/5.jpg" onclick="display('images/janamashtmi/5.jpg','Janam Ashtmi')" alt="Janam Ashtmi"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
						<a href="#" data-toggle="popover"  data-content="Janam Ashtmi"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/janamashtmi/9.jpg" onclick="display('images/janamashtmi/9.jpg','Janam Ashtmi')" alt="Janam Ashtmi"></a>
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Lohri"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Lohri/(8).jpg" onclick="display('images/Lohri/(8).jpg','Lohri Celebration')" alt="Lohri"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Lohri"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Lohri/(10).jpg" onclick="display('images/Lohri/(10).jpg','Lohri Celebration')" alt="Lohri"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Lohri"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Lohri/(3).jpg" onclick="display('images/Lohri/(3).jpg','Lohri Celebration')" alt="Lohri"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Lohri"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/Lohri/(2).jpg" onclick="display('images/Lohri/(2).jpg','Lohri Celebration')" alt="Lohri"></a>
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-3" style="padding:2px;margin:0 0 0 12.5%;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Farewell"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/farewell/1.jpg" onclick="display('images/farewell/1.jpg','Farewell')" alt="Farewell"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Farewell"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/farewell/2.jpg" onclick="display('images/farewell/2.jpg','Farewell')" alt="Farewell"></a>
						</div>
					</div>
					<div class="col-3" style="padding:2px;margin:0px;" >
						<div style="background-color:rgb(0,0,0,1);">
							<a href="#" data-toggle="popover"  data-content="Farewell"  data-placement="right" data-trigger="hover"  ><img class="activityimg" src="images/farewell/3.jpg" onclick="display('images/farewell/3.jpg','Farewell')" alt="Farewell"></a>
						</div>
					</div>
				</div>
				<div class="row" style="background-image:linear-gradient(pink,white)">
					<div class="col-12" style="margin:2% auto;text-align:center;">
						<button class="showbtn" Onclick="hideimg()">Collapse</button>
					</div>
				</div>
			</div>
			<div id="moreimage">
				<div class="row" style="background-image:linear-gradient(pink,white)" >
					<div class="col-12" style="margin:2% auto;text-align:center;">
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
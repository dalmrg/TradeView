<?php 
  $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
  $validURL = str_replace("&", "&amp", $url);
?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/favicon.ico">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>TradeView</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			<link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
		</head>
		<body>	
			  <header id="header" id="home">
			    <div class="row container main-menu col-md-12">
			    	<div class="col-lg-9 align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="./index.php"><h5 style="color: white; margin-left: -35px">LOGO</h5></a>
				      </div>		    				    		
			    	</div>
			    	<div id="none" class="col-lg-3 align-items-center justify-content-between d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="<?php if(strpos($validURL, 'link1') !== false) echo "menu-active"; ?>"><a href="/link1.php">link 1</a></li>
				          <li class="<?php if(strpos($validURL, 'link2') !== false) echo "menu-active"; ?>"><a href="/link2.php">link 2</a></li>
				          <li class="<?php if(strpos($validURL, 'link3') !== false) echo "menu-active"; ?>"><a href="/link3.php">link 3</a></li>         
				          <li class="<?php if(strpos($validURL, 'link4') !== false) echo "menu-active"; ?>"><a href="/link4.php">link 4</a></li>
				          <li class="<?php if(strpos($validURL, 'link5') !== false) echo "menu-active"; ?>"><a href="/link5.php">link 5</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header>
			<!-- #header -->
			
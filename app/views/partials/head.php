<!DOCTYPE html>
<html>
<head>
	<title>InfinityBikes</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<div id="header">
		<div id="headerTop">
			<div class="wrapper">
				<div id="headerTopLeft">
					<a href="#" target="_blank"><i class="fab fa-facebook-f fa-lg"></i></i></a>
                	<a href="#" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
                	<a href="#" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
				</div>
				<div id="headerTopRight">
					<a href="cart">cart<i class="fas fa-shopping-cart fa-lg"></i></a>
					<a href="<?php echo isset($_SESSION['user_id'])?'logout': 'login'; ?>"><?php echo isset($_SESSION['user_id'])?'log out': 'login'; ?><i class="fas fa-user fa-lg"></i></a>
				</div>
			</div>
		</div>
		<div class="headerBot">
			<div class="wrapper">		
				<div id="logo">
					<a href="index.php">
	                    <img src="public/images/logo2.png" alt="logo">
	                 </a>
				</div>
				<nav id="nav">
                	<ul>
                    	<li><a href="/">home</a></li>
                    	<li><a href="about">about us</a></li>
                    	<li><a href="contact">contact</a></li>
                    </ul>
                </nav>
			</div>
		</div>	
	</div><!--end of header -->
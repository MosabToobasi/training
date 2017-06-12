<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/nunjucks/browser/nunjucks.min.js"></script>
    <script src="bower_components/slick-carousel/slick/slick.min.js"></script>
    <link rel="stylesheet" href="bower_components/slick-carousel/slick/slick.css" />

    <script type="text/javascript" src="scripts/main.js"></script>
    <script type="text/javascript" src="scripts/cart.js"></script>
    <script type="text/javascript" src="scripts/signin.js"></script>
    <script type="text/javascript" src="scripts/ajax.js"></script>

    <link rel="stylesheet" href="styles/style.css" >
    <link rel="stylesheet" href="styles/header.css" >
    <link rel="stylesheet" href="styles/main-slider.css" >
    <link rel="stylesheet" href="styles/search-results.css" >
    <link rel="stylesheet" href="styles/best-sellers.css" >
    <link rel="stylesheet" href="styles/customers.css" >
    <link rel="stylesheet" href="styles/footer.css" >
    <title></title>
</head>
<body>
    <header>
        <div class="menu-wrapper content-wrapper">
            <div class="content">
                <nav>
                    <div class="sub-header">
                        <div class="drop-list-btn pull-left"
                             onclick="$('.menu-mobile').toggle()">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </div>
                        <div class="logo pull-left">
                            <a href="./">&nbsp;</a>
                        </div>
                    </div>
                    <div class="menu pull-left">
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li><a href="#">Devices</a></li>
                            <li><a href="#">Delivery & Payment</a></li>
                            <li><a href="#">Guarantee</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <div class="menu-mobile">
                        <ul class="pull-left">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Devices</a></li>
                            <li><a href="#">Delivery & Payment</a></li>
                            <li><a href="#">Guarantee</a></li>
                            <li><a href="#">About Us</a></li>
                        </ul>
                        <ul class="pull-left">
                            <li><a class="sub-menu-item" href="#">Top Sales</a></li>
                            <li><a class="sub-menu-item" href="#">Brand Focus</a></li>
                            <li><a class="sub-menu-item selected" href="#">HI-Tech</a></li>
                            <li><a class="sub-menu-item" href="#">Best Sellers</a></li>
                            <li><a class="sub-menu-item" href="#">Projects</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="user-actions pull-right">
                        <a class="cart user-action pull-left"
                           href="./shopping_cart.html">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="text">Cart</span>
                            <span id="cart-count" class="count">0</span>
                        </a>
                        <div class="user-action pull-left">
                            
							<?php
							if(check_user_login()){
								?>
								<a class="button" href="post.php?action=sign-out" type="button">Sign Out</a>
								<?php
							}else{
								?>
								<button class="button" onclick="showSignInModal()" type="button">Sign In</button>
								<a class="button" href="register.php" type="button">Register</a>
								<?php
							}
							?>
							
							
							
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </nav>
            </div>
        </div>
    </header>
	<div class="main-slider content-wrapper">
        <div class="content">
            <div class="sub-menu">
                <ul class="pull-left">
                    <li><a class="sub-menu-item" href="#">Top Sales</a></li>
                    <li><a class="sub-menu-item" href="#">Brand Focus</a></li>
                    <li><a class="sub-menu-item selected" href="#">HI-Tech</a></li>
                    <li><a class="sub-menu-item" href="#">Best Sellers</a></li>
                    <li><a class="sub-menu-item" href="#">Projects</a></li>
                </ul>

                <form class="search-wrapper pull-right">
                    <i class="fa fa-search"></i>
                    <input type="search" required="" 
					onkeyup="showHint(this.value)" 
					placeholder="I'm looking for...">
 					<p>Suggestions: <span id="txtHint"></span></p>
					
                </form>
				<div id="spinner" style="display:none">
						<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
				</div>
				
				
                <a class="sub-menu-item hidden-sm pull-right" href="#">Support</a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
	
	<div class="error-handling">
	<?php
	if(isset($_GET['error']))
	{
	?>
	<div class="alert alert-danger">
		 <strong>Danger!</strong> <?php echo $_GET['error'];?>
	</div>
	<?php
	}
	?>
	<?php
	if(isset($_GET['success']))
	{
	?>
	<div class="alert alert-success">
		 <strong>Success!</strong> <?php echo $_GET['success'];?>
	</div>
	<?php
	}
	?>	
	</div>
	
	
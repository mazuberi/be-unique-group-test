<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name') ?></title>

	<?php wp_head(); ?>
</head>

<body>
	<!-- Navbar Starts -->
	<nav class="menu-container navbar navbar-expand-md navbar-light text-uppercase">
	    <div class="navbar-collapse collapse w-100 order-1 order-md-0" id="navbarTogglerDemo02">
	        <ul class="navbar-nav me-auto">
	            <li class="nav-item active">
	                <a class="nav-link" href="javascript:void(0)">Shop</a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)">Our Story</a>
	            </li>
	            
	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)">Expertise</a>
	            </li>
	        </ul>
	    </div>

	    <div class="mx-auto order-0">
	        <a class="navbar-brand mx-auto" href="#">
	        	<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="Logo" height="145" class="py-3 d-none d-md-block">

	        	<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.svg" alt="Logo" height="100" class="py-3 d-md-none">
	        </a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	        </button>
	    </div>
	    
	    <div class="navbar-collapse collapse w-100 order-3" id="navbarTogglerDemo02">
	        <ul class="navbar-nav ms-auto">
	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)">Contact</a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass fa-xl"></i></a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)"><i class="fa-solid fa-user fa-xl"></i></a>
	            </li>

	            <li class="nav-item">
	                <a class="nav-link" href="javascript:void(0)"><i class="fa-solid fa-shopping-cart fa-xl"></i></a>
	            </li>
	        </ul>
	    </div>
	</nav>
	<!-- Navbar Ends -->
<?php get_header() ?>
	<!-- Banner Starts -->
	<div class="bnr-image d-flex justify-content-center" style="background-image: url('<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $banner_data[0]['banner_image'] ?>');">
	  	<h1 class="text-center d-flex bnr-heading">
			<?php
				echo nl2br($banner_data[0]['banner_title']);
			?>
	  	</h1>
	</div>
	<!-- Banner Ends -->

	<p class="text-uppercase bnr-bottom-text d-flex justify-content-center">
  		Explore
  	</p>

  	<div class="vertical-border d-flex justify-content-center bnr-bottom-vertical-border"></div>

  	<section class="container products-section">
  		<div class="row">
  			<div class="col-md-10 offset-md-1">
  				<h3 class="text-center">
		  			<?php
		  				echo $about_data[0]['about_text'];
		  			?>
		  		</h3>
  			</div>
  		</div>

  		<div class="row g-0 products-no-gutter">
  			<?php
  				foreach ($products_cats as $key => $value) {
  					?>
  						<div class="col-md-6">
			  				<div class="carousel-item d-block">
							  	<img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $value['product_cat_image'] ?>" alt="<?php echo $value['product_cat_name'] ?>">
							  	<div class="carousel-caption">
							    	<a class="btn btn-light btn-sm" href="">
							    		<p>Shop <?php echo $value['product_cat_name'] ?></p>
							    	</a>
							  	</div>
							</div>
			  			</div>
  					<?php
  				}
  			?>
  		</div>
  	</section>

  	<section class="container pb-5">
  		<div class="row pb-5">
  			<div class="col-md-10 offset-md-1">
  				<h3 class="text-center">
					Best Sellers
		  		</h3>
  			</div>
  		</div>

  		<div class="row pt-4">
  			<?php
  				foreach ($products as $key => $value) {
  					?>
  						<div class="col-md-4">
			  				<figure class="figure">
								<img src="<?php echo get_template_directory_uri() ?>/assets/images/<?php echo $value['product_image'] ?>" class="figure-img img-fluid" alt="<?php echo $value['product_name'] ?>">

								<h4 class="pt-4 pb-3">
									<?php echo $value['product_name'] ?>
								</h4>

								<h5>
									<?php echo $value['product_currency'] ?> <?php echo $value['product_price'] ?>
								</h5>

								<figcaption class="figure-caption pt-4 color-primary" style="opacity: 0.5;"><span class="color-secondary" style="opacity: 1;"><?php echo $value['additional_label'] ?></span> <?php echo $value['additional_text'] ?></figcaption>
							</figure>
			  			</div>
  					<?php
  				}
  			?>
  		</div>
  	</section>

  	<section class="bg-jumbo mt-5 pt-5 mb-5 pb-5">
  		<div class="container pb-5">
  			<div class="row pt-5">
	  			<div class="col-md-10 offset-md-1">
	  				<h3 class="text-center">
						Your Comfort Is Our #1 Priority
			  		</h3>
	  			</div>
	  		</div>

	  		<div class="row mt-5">
	  			<div class="col-md-3 text-center">
	  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/quality-products-icon-01.jpg">

	  				<h4 class="pt-5 pb-4">
						Product Name
					</h4>

					<p class="color-secondary">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
					</p>
	  			</div>

	  			<div class="col-md-3 text-center">
	  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/lifetime-warranty-icon-01.jpg">

	  				<h4 class="pt-5 pb-4">
						Lifetime Warranty
					</h4>

					<p class="color-secondary">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
					</p>
	  			</div>

	  			<div class="col-md-3 text-center">
	  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/stress-free-shopping-icon-01.jpg">

	  				<h4 class="pt-5 pb-4">
						Stress-free Shopping
					</h4>

					<p class="color-secondary">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
					</p>
	  			</div>

	  			<div class="col-md-3 text-center">
	  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/fair-prices-icon-01.jpg">

	  				<h4 class="pt-5 pb-4">
						Fair Prices
					</h4>

					<p class="color-secondary">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
					</p>
	  			</div>
	  		</div>
  		</div>
  	</section>

  	<section class="mt-5 pt-5 pb-4">
  		<div class="container">
  			<div class="row">
  				<div class="col-me-12 text-center color-primary mb-5">
  					<i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i><i class="fa-solid fa-star fa-lg"></i>
  				</div>
  			</div>

  			<div class="row pb-5">
	  			<div class="col-md-6 offset-md-3">
	  				<h3 class="text-center">
						"This is the best towel set I've ever had; it's cool, comfortable and aesthetically perfect."
			  		</h3>

			  		<br><br>

			  		<div class="text-center">
			  			<a class="btn btn-transparent text-uppercase color-primary underline-text" href="javascript:void(0)">Read Testimonials</a>
			  		</div>
	  			</div>
	  		</div>

	  		<div class="row mt-5 text-uppercase">
	  			<div class="col-md-6 offset-md-3 text-center">
	  				<a class="btn btn-transparent text-uppercase color-primary" href="javascript:void(0)">Follow us on <i class="fa-brands fa-instagram fa-lg ps-2"></i></a>
	  			</div>
	  		</div>
  		</div>
  	</section>

  	<section class="pb-5">
  		<div class="row g-0 text-center">
  			<div class="col-md-3 text-center">
  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-product-image-01.jpg" width="100%">
  			</div>

  			<div class="col-md-3 text-center">
  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-product-image-02.jpg" width="100%">
  			</div>

  			<div class="col-md-3 text-center">
  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-product-image-03.jpg" width="100%">
  			</div>

  			<div class="col-md-3 text-center">
  				<img src="<?php echo get_template_directory_uri() ?>/assets/images/footer-product-image-04.jpg" width="100%">
  			</div>
  		</div>
  	</section>

  <?php get_footer() ?>
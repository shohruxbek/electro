<?php

include_once("db.php");


$categories_sql = "SELECT * FROM `category` WHERE status='1' ";
$res_category = mysqli_query($connect, $categories_sql);

$category = [];
while ($row = mysqli_fetch_assoc($res_category)) {
	array_push($category, $row);
}


$product_sql = "SELECT * FROM `product` WHERE status='1' ";
$res_product = mysqli_query($connect, $product_sql);

$product = [];
while ($row = mysqli_fetch_assoc($res_product)) {
	array_push($product, $row);
}

include_once("top.php");
include_once("header.php");


?>

<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Hot Deals</a></li>
				<li><a href="#">Categories</a></li>
				<?php
				foreach ($category as $key) {
					echo '<li><a href="#">'.$key['name_uz'].'</a></li>';
				}
				?>

			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop03.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Accessories<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img src="./img/shop02.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Cameras<br>Collection</h3>
						<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">

							<?php
							foreach ($category as $key) {
								echo '<li class="active"><a data-toggle="tab" href="#tab1">'.$key['name_uz'].'</a></li>';
							}
							?>

							
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								
								<?php
								foreach ($product as $key) {
									echo '<div class="product">
									<div class="product-img">
									<img src="'.$key['image'].'" alt="">
									<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NEW</span>
									</div>
									</div>
									<div class="product-body">
									<p class="product-category">'.$key['category_id'].'</p>
									<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
									<h4 class="product-price">$'.$key['price'].'<del class="product-old-price">$'.$key['price']*1.2.'</del></h4>
									<div class="product-rating">';

									for($i=0; $i<$key['mark']; $i++) {
										echo '<i class="fa fa-star"></i>';
									}
									
									echo '</div>
									
									</div>
									<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
									</div>';
								}

								?>
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php
							foreach ($category as $key) {
								echo '<li class="active"><a data-toggle="tab" href="#tab2">'.$key['name_uz'].'</a></li>';
							}
							?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								
								<?php
								foreach ($product as $key) {
									echo '<div class="product">
									<div class="product-img">
									<img src="'.$key['image'].'" alt="">
									<div class="product-label">
									<span class="sale">-30%</span>
									<span class="new">NEW</span>
									</div>
									</div>
									<div class="product-body">
									<p class="product-category">'.$key['category_id'].'</p>
									<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
									<h4 class="product-price">$'.$key['price'].'<del class="product-old-price">$'.$key['price']*1.2.'</del></h4>
									<div class="product-rating">';

									for($i=0; $i<$key['mark']; $i++) {
										echo '<i class="fa fa-star"></i>';
									}
									
									echo '</div>
									
									</div>
									<div class="add-to-cart">
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
									</div>';
								}

								?>


							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>

					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>

					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>

					<div>
						<?php 
						foreach($product as $key){
							echo '<div class="product-widget">
							<div class="product-img">
							<img src="'.$key['image'].'" alt="">
							</div>
							<div class="product-body">
							<p class="product-category">'.$key['category_id'].'</p>
							<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
							<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">'.$key['price']*1.2.'</del></h4>
							</div>
							</div>';
						}
						?>
					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->



<!-- FOOTER -->
<footer id="footer">
	<!-- top footer -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">About Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
						<ul class="footer-links">
							<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
							<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Categories</h3>
						<ul class="footer-links">
							<li><a href="#">Hot deals</a></li>

							<?php
							foreach ($category as $key) {
								echo '<li><a href="#">'.$key['name_uz'].'</a></li>';
							}
							?>
						</ul>
					</div>
				</div>

				<div class="clearfix visible-xs"></div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Information</h3>
						<ul class="footer-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Orders and Returns</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Service</h3>
						<ul class="footer-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /top footer -->

	<!-- bottom footer -->
	<div id="bottom-footer" class="section">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="newsletter">
						
						<ul class="newsletter-follow">
							<li>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
					
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

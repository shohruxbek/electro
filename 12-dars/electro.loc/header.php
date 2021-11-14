<?php
	?>


		<!-- HEADER -->
		<header>
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="search.php" method="get">
									<select name="cat" class="input-select">
										<option value="0">All Categories</option>
										<?php
										
foreach ($category as $key) {
	$selectd = "";
	if($key['id']==$cat_id){
		$selectd = 'selected="true"';
	}
	echo '<option value="'.$key['id'].'" '.$selectd.'>'.$key['name_uz'].'</option>';
}
										?>
										
									</select>
									<input class="input" name="search" value="<?php echo $search;?>" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="qty"><?php echo count($arr_card);?></div>
									</a>
									<div class="cart-dropdown">
										<div class="cart-list">
											<?php 
$sum = 0;
										$item = 0;
	
foreach($arr_card as $key){
	$item++;
	$sum += $key['count']*$key['price'];
	echo '<div class="product-widget">
												<div class="product-img">
													<img src="'.$key['image'].'" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">'.$key['name'].'</a></h3>
													<h4 class="product-price"><span class="qty">'.$key['count'].'x</span>$'.$key['price'].'</h4>
												</div>

												<form action="" method="post">
<input name="del_id" value="'.$key['id'].'" type="hidden"> 
									<button class="delete"><i class="fa fa-close"></i></button>
</form>
											</div>';
}
											?>
											

										</div>
										<div class="cart-summary">
											<small><?php echo $item;?> Item(s) selected</small>
											<h5>SUBTOTAL: $<?php echo $sum;?></h5>
										</div>
										<div class="cart-btns">
											<a href="#">View Cart</a>
											<a href="#">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
										</div>
									</div>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

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
					echo '<li><a href="store.php?c='.$key['id'].'">'.$key['name_uz'].'</a></li>';
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
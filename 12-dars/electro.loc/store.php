<?php 
session_start();
include_once("db.php");

$c = 0;
if($_GET['c']){
	$c = $_GET['c'];
}

$p = 0;
if($_GET['page']){
	$p= $_GET['page'];
}
$limit = 5;
//get collection

$collection_sql = "SELECT category.id, category.name_uz,category.name_ru,category.name_en, collection.image, collection.status FROM `collection` INNER JOIN `category` ON collection.category_id=category.id WHERE collection.status='1' ";
$res_collection = mysqli_query($connect, $collection_sql);

$collection = [];
while ($row = mysqli_fetch_assoc($res_collection)) {
	array_push($collection, $row);
}


//get category
$categories_sql = "SELECT * FROM `category` WHERE status='1' ";
$res_category = mysqli_query($connect, $categories_sql);

$category = [];
while ($row = mysqli_fetch_assoc($res_category)) {
	array_push($category, $row);
}

//get card 
$arr_card = [];

if($_SESSION['card']){
	$arr_card = $_SESSION['card'];
}

if($_POST['product_id']){
	$add_product_id = $_POST['product_id'];
}

if($_POST['del_id']){
	$del_product_id = $_POST['del_id'];
	for($i=0; $i<count($arr_card);$i++){
			if($arr_card[$i]['id']==$del_product_id){
				array_splice($arr_card, $i, 1);
			}
		}
}



//get product
$product_sum_sql = "SELECT COUNT(id) FROM `product` WHERE status='1' and category_id='$c'";
$res_product_sum = mysqli_fetch_assoc(mysqli_query($connect, $product_sum_sql));



$product_sql = "SELECT * FROM `product` WHERE status='1' and category_id='$c' LIMIT ".$p.",".$limit;
$res_product = mysqli_query($connect, $product_sql);

$product = [];
while ($row = mysqli_fetch_assoc($res_product)) {

	if($add_product_id == $row['id']){
$status_add = 0;
		for($i=0; $i<count($arr_card);$i++){
			if($arr_card[$i]['id']==$add_product_id){
				$arr_card[$i]['count'] += 1;
				$status_add++;
			}
		}
		if(!$status_add){
			$arr_card[] = ["id"=>$add_product_id, "count"=>1, "name"=>"".$row['name_uz']."", "image"=>$row['image'],"price"=>$row['price'] ];
		}
		
	}
	

		array_push($product, $row);
	
	
}

$_SESSION['card'] = $arr_card;

//aksiya
$aksiya_sql = "SELECT * FROM `aksiya` WHERE status='1' ";
$res_aksiya = mysqli_query($connect, $aksiya_sql);

$aksiya = [];
while ($row = mysqli_fetch_assoc($res_aksiya)) {
	array_push($aksiya, $row);
}

include_once("top.php");
include_once("header.php");
?>


	

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- ASIDE -->
					
					<!-- /ASIDE -->

					<!-- STORE -->
					<div id="store" class="col-md-12">
						<!-- store top filter -->
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Sort By:
									<select class="input-select">
										<option value="0">Popular</option>
										<option value="1">Position</option>
									</select>
								</label>

								<label>
									Show:
									<select class="input-select">
										<option value="0"><?php echo $limit; ?></option>
										<option value="1">50</option>
									</select>
								</label>
							</div>
							
						</div>
						<!-- /store top filter -->

						<!-- store products -->
						<div class="row">
							<!-- product -->

							<?php 

foreach ($product as $key) {
	
		echo '<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="'.$key['image'].'" alt="">
										<div class="product-label">
											<span class="sale">-30%</span>
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#">'.$key['name_uz'].'</a></h3>
										<h4 class="product-price">$'.$key['price'].' <del class="product-old-price">$'.$key['price']*1.2.'</del></h4>
										<div class="product-rating">';


									for($i=0; $i<$key['mark']; $i++) {
										echo '<i class="fa fa-star"></i>';
									}
										echo '</div>
										
									</div>
									<div class="add-to-cart">
										<form action="" method="post">
<input name="product_id" value="'.$key['id'].'" type="hidden"> 
									<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
</form>
									</div>
								</div>
							</div>';
	
	
}
							?>
							
							<!-- /product -->

							<!-- /product -->
						</div>
						<!-- /store products -->

						<!-- store bottom filter -->
						<div class="store-filter clearfix">
							<span class="store-qty">Showing <?php echo count($product)."-".$res_product_sum['COUNT(id)'];?> products</span>
							<ul class="store-pagination">
								<?php
								for($i=1; $i<$res_product_sum['COUNT(id)']/$limit; $i++){
if($p==$i){
echo '<li class="active">'.$i.'</li>';
}else{
echo '<li><a href="?c='.$c.'&page='.$i.'">'.$i.'</a></li>';
}
									
								}
								?>
								<li><a href="<?php  echo '?c='.$c.'&page='.floor($res_product_sum['COUNT(id)']/$limit);?>"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
						<!-- /store bottom filter -->
					</div>
					<!-- /STORE -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

	
		<!-- /NEWSLETTER -->

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
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
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
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
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

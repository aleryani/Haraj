<!DOCTYPE html>
<html lang="en">

<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');
    $product = new Product();
	$category = $product->get_categories(); 
//	if(isset($category['categories'])) {
		$categories = $category;
		$catSearch="<option value='0'>اختر الصنف</option>";
		$cat = "";
		foreach($categories as $cats){
			$cat.="<li class='category-item'>";
			$cat.="<a href='category.php?id={$cats['category_id']}'>";
			$cat.="<div class='category-icon'><img src='images/icon/{$cats['category_img']}' alt='images' class='img-responsive'></div>";
			$cat.="<span class='category-title'>{$cats['category_name']}</span>";
			// $cat.="<span class='category-quantity'>(1298)</span>";
			$cat.="</a>";
			$cat.="</li>";
			$catSearch.="<option value='{$cats['category_id']}'>{$cats['category_name']}</option>";
		}
//	}
    $result = $product->get_products_with_images();    
     if(isset($result['product'])) {
         $products = $result['product'];
		 $pro_id="";
         $output = "";
         foreach($products as $product){
			if($pro_id==$product['product_id'])
				$pro_id=$product['product_id'];
				else
				{
			$output.="<div class='ad-item row'>";
			$output.="<div class='item-image-box col-sm-3'>";
			$output.="<div class='item-image'>";
			$output.="<a href='details.php?id={$product['product_id']}'><img src='{$product['picture_path']}' alt='Image' class='img-responsive'></a>";
			$output.="</div>";
			$output.="</div>";
			$output.="<div class='item-info col-sm-9'>";
			$output.="<div class='ad-info'>";
			$output.="<h3 class='item-price'>{$product['product_price']}<span>({$product['product_condition']})</span></h3>";
			$output.="<h4 class='item-title'><a href='#'>{$product['product_name']}</a></h4>";
			$output.="<div class='item-cat'>";
			$output.="<span><a href='#'>{$product['category_name']}</a></span>";

			$output.="</div>";										
			$output.="</div>";
			$output.="<div class='ad-meta'>";
			$output.="<div class='meta-content'>";
			$output.="<span class='dated'><a href='#'>{$product['publish_date']}</a></span>";
			$output.="</div>";									
			$output.="<div class='user-option pull-left'>";
			$output.="<a href='#' data-toggle='tooltip' data-placement='top' title='{$product['saler_city']}'><i class='fa fa-map-marker'></i> </a>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
			$pro_id=$product['product_id'];
				}
         }//end foreach    
     }//end if    
	 
	 
?>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>Trade | World's Largest Classifieds Portal</title>

   <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/bootstrap-rtl.min.css" >
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/owl.carousel.css">  
    <link rel="stylesheet" href="css/slidr.css">     
    <link rel="stylesheet" href="css/main.css">  
	<link id="preset" rel="stylesheet" href="css/presets/preset1.css">	
    <link rel="stylesheet" href="css/responsive.css">
	
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- icons -->
	<link rel="icon" href="images/ico/favicon.ico">	
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/ico/apple-touch-icon-57-precomposed.png">
    <!-- icons -->
	<style>


#floating-button{
  width: 55px;
  height: 55px;
  border-radius: 50%;
  background: #db4437;
  position: fixed;
  bottom: 30px;
  right: 30px;
  cursor: pointer;
  box-shadow: 0px 2px 5px #666;
}

.plus{
  color: white;
  position: absolute;
  top: 0;
  display: block;
  bottom: 0;
  left: 0;
  right: 0;
  text-align: center;
  padding: 0;
  margin: 0;
  line-height: 55px;
  font-size: 24px;
  font-family: 'Roboto';
  font-weight: 300;
  animation: plus-out 0.3s;
  transition: all 0.3s;
}

#container-floating{
  position: fixed;
  width: 70px;
  height: 70px;
  bottom: 30px;
  right: 30px;
  z-index: 50px;
}

	</style>
  </head>
  <body>
	<!-- header -->
	<header id="header" class="clearfix">
		<!-- navbar -->
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- navbar-header -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><img class="img-responsive" src="images/logo.png" alt="Logo"></a>
				</div>
				<!-- /navbar-header -->
				
				<div style='margin-right: 20px;' class="navbar-right">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="categories.html">الرئيسية</a></li>
							<li><a href="details.html">جميع الاعلانات</a></li>
							<li><a href="faq.html">اتصل بنا</a></li> 
						
						</ul>
					</div>
				</div>
				

				<div style="text-align:left" class="nav-right">
					

					<a style="color" href="new-ad.php" class="btn">انشر اعلانك الان </a>
				</div>
			</div>
		</nav>
</header>
	<section id="home-one-info" class="clearfix home-one">
		<!-- world -->
		<div id="banner-two" class="parallax-section">
			<div class="row text-center">
				<!-- banner -->
				<div class="col-sm-12 ">
					<div class="banner">
						<h1 class="title">أكبر تجمع إعلاني في اليمن</h1>
						<h3>قم بنشر اعلانك مجانا ومن دون الحاجة للتسجيل</h3>
						<!-- banner-form -->
						<div class="banner-form">
							<form action="#">
						
								<div style=" float: right;text-align: right;" class="dropdown category-dropdown">						
									<select id="ddlsearch" style="width: 187px;border: none;margin-right: -19px;" class="form-control">
										<?php echo $catSearch; ?>
									</select>								
								</div>
							
								<input id="txtsearch" type="text" class="form-control" placeholder="اكتب ما تبحث عنه">
								<button onclick="searchProduct(event)"  type="submit" class="form-control" value="Search">بحث</button>
							</form>
						</div>
						<ul class="banner-socail">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="section category-ad text-center">
				<ul class="category-list">	
				<?php echo $cat; ?> 
							
				</ul>				
			</div>
	
			<div class="section trending-ads">
				<div class="section-title tab-manu">
					<h4 style="float:right">أحدث الاعلانات</h4>
				
				</div>

				<div class="tab-content">
				
					<div role="tabpanel" class="tab-pane fade in active" id="recent-ads">
					
				<?php echo $output; ?>  
						
					</div>
					
				</div>
			</div>
			<div class="cta text-center">
				<div class="row">
				
					<div class="col-sm-4">
						<div class="single-cta">
						
							<div class="cta-icon icon-secure">
								<img src="images/icon/13.png" alt="Icon" class="img-responsive">
							</div>

							<h4>Secure Trading</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-cta">
						
							<div class="cta-icon icon-support">
								<img src="images/icon/14.png" alt="Icon" class="img-responsive">
							</div>

							<h4>24/7 Support</h4>
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="single-cta">
			
							<div class="cta-icon icon-trading">
								<img src="images/icon/15.png" alt="Icon" class="img-responsive">
							</div>

							<h4>Easy Trading</h4>
							<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
						</div>
					</div>
				</div>
			</div>									
		</div>
	</section>
	
	<!-- download -->
	<section id="download" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Download on App Store</h2>
				</div>
			</div><!-- row -->

			<!-- row -->
			<div class="row">
				<!-- download-app -->
				<div class="col-sm-12">
					<a href="#" class="download-app">
						<img src="images/icon/16.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>متوفر على</span>
							<strong>متجر جوجل</strong>
						</span>
					</a>
				</div>

			</div>
		</div>
	</section>
	<footer id="footer" class="clearfix">

		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
	
					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>Quik Links</h3>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">All Cities</a></li>
								<li><a href="#">Help & Support</a></li>
								<li><a href="#">Advertise With Us</a></li>
								<li><a href="#">Blog</a></li>
							</ul>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="footer-widget">
							<h3>How to sell fast</h3>
							<ul>
								<li><a href="#">How to sell fast</a></li>
								<li><a href="#">Membership</a></li>
								<li><a href="#">Banner Advertising</a></li>
								<li><a href="#">Promote your ad</a></li>
								<li><a href="#">Trade Delivers</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget social-widget">
							<h3>Follow us on</h3>
							<ul>
								<li><a href="#"><i class="fa fa-facebook-official"></i>Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i>Twitter</a></li>
								<li><a href="#"><i class="fa fa-google-plus-square"></i>Google+</a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i>youtube</a></li>
							</ul>
						</div>
					</div><!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Trade is Worldest leading classifieds platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form><!-- form -->			
						</div>
					</div><!-- footer-widget -->
				</div><!-- row -->
			</div><!-- container -->
		</section><!-- footer-top -->

		
		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div><!-- footer-bottom -->
	</footer><!-- footer -->
	<div id="container-floating">



  <div id="floating-button" data-toggle="tooltip" data-placement="left" data-original-title="Create" onclick="newmail()">
    <p class="plus"><i class="fa fa-camera"></i></p>
  </div>

</div>
	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <!--<script src="js/scrollup.min.js"></script>-->
    <script src="js/price-range.js"></script>  
    <script src="js/jquery.countdown.js"></script>  
    <script src="js/custom.js"></script>
	<script src="js/switcher.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>
	<script>
		function searchProduct(e)
		{
			e.preventDefault()
			window.location.href = "listings.php?category="+$("#ddlsearch").val()+"&search="+$("#txtsearch").val()+"";
		
			
		}
	</script>
  </body>

</html>
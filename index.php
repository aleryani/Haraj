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
         $output = "";
         foreach($products as $product){
			$output.="<div class='ad-item row'>";
			$output.="<div class='item-image-box col-sm-3'>";
			$output.="<div class='item-image'>";
			$output.="<a href='details.php?id={$product['product_id']}'><img src='images/trending/2.jpg' alt='Image' class='img-responsive'></a>";
			$output.="</div>";
			$output.="</div>";
			$output.="<div class='item-info col-sm-9'>";
			$output.="<div class='ad-info'>";
			$output.="<h3 class='item-price'>$250.00 <span>({$product['product_condition']})</span></h3>";
			$output.="<h4 class='item-title'><a href='#'>{$product['product_name']}</a></h4>";
			$output.="<div class='item-cat'>";
			$output.="<span><a href='#'>Home Appliances</a></span>";
			$output.="<span><a href='#'>Sofa</a></span>";
			$output.="</div>";										
			$output.="</div>";
			$output.="<div class='ad-meta'>";
			$output.="<div class='meta-content'>";
			$output.="<span class='dated'><a href='#'>7 Jan, 16  10:10 pm </a></span>";
			$output.="<a href='#' class='tag'><i class='fa fa-tags'></i> Used</a>";
			$output.="</div>";									
			$output.="<div class='user-option pull-left'>";
			$output.="<a href='#' data-toggle='tooltip' data-placement='top' title='Los Angeles, USA'><i class='fa fa-map-marker'></i> </a>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
			$output.="</div>";
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
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home Default </a></li>
									<li class="active"><a href="index-one.html">Home Version-1</a></li>
									<li><a href="index-two.html">Home Version-2</a></li>
									<li><a href="index-three.html">Home Version-3</a></li>
									<li><a href="index-car.html">Home Car-1<span class="badge">New</span></a></li>
									<li><a href="index-car-two.html">Home Car-2<span class="badge">New</span></a></li>
									<li><a href="directory.html">Home Directory<span class="badge">Latest</span></a></li>
								</ul>
							</li>
							<li><a href="categories.html">Category</a></li>
							<li><a href="details.html">all ads</a></li>
							<li><a href="faq.html">Help/Support</a></li> 
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="about-us.html">ABout Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="ad-post.html">Ad post</a></li>
									<li><a href="ad-post-details.html">Ad post Details</a></li>
									<li><a href="categories-main.html">Category Ads</a></li>
									<li><a href="details.html">Ad Details</a></li>
									<li><a href="my-ads.html">My Ads</a></li>
									<li><a href="my-profile.html">My Profile</a></li>
									<li><a href="favourite-ads.html">Favourite Ads</a></li>
									<li><a href="archived-ads.html">Archived Ads</a></li>
									<li><a href="pending-ads.html">Pending Ads</a></li>
									<li><a href="delete-account.html">Close Account</a></li>
									<li><a href="published.html">Ad Publised</a></li>
									<li><a href="signup.html">Sign Up</a></li>
									<li><a href="signin.html">Sign In</a></li>
									<li><a href="faq.html">FAQ</a></li>	
									<li><a href="coming-soon.html">Coming Soon <span class="badge">New</span></a></li>
									<li><a href="pricing.html">Pricing<span class="badge">New</span></a></li>
									<li><a href="500-page.html">500 Opsss<span class="badge">New</span></a></li>
									<li><a href="404-page.html">404 Error<span class="badge">New</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				
				<!-- nav-right -->
				<div class="nav-right">
					<!-- language-dropdown -->
					<div class="dropdown language-dropdown">
						<i class="fa fa-globe"></i> 						
						<a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">United Kingdom</a></li>
							<li><a href="#">United States</a></li>
							<li><a href="#">China</a></li>
							<li><a href="#">Russia</a></li>
						</ul>								
					</div><!-- language-dropdown -->

					<!-- sign-in -->					
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="signin.html"> Sign In </a></li>
						<li><a href="signup.html">Register</a></li>
					</ul><!-- sign-in -->					

					<a href="ad-post.html" class="btn">Post Your Ad</a>
				</div>
				<!-- nav-right -->
			</div><!-- container -->
		</nav><!-- navbar -->
	</header><!-- header -->

	<!-- home-one-info -->
	<section id="home-one-info" class="clearfix home-one">
		<!-- world -->
		<div id="banner-two" class="parallax-section">
			<div class="row text-center">
				<!-- banner -->
				<div class="col-sm-12 ">
					<div class="banner">
						<h1 class="title">World’s Largest Classifieds Portal  </h1>
						<h3>Search from over 15,00,000 classifieds & Post unlimited classifieds free!</h3>
						<!-- banner-form -->
						<div class="banner-form">
							<form action="#">
								<!-- category-change -->
								<div style=" float: right;text-align: right;" class="dropdown category-dropdown">						
									<!--<a data-toggle="dropdown" href="#"><span class="change-text">Select Category</span> <i class="fa fa-angle-down"></i></a>-->
									<select id="ddlsearch" style="width: 187px;border: none;margin-right: -19px;" class="form-control">
										<?php echo $catSearch; ?>
									</select>								
								</div><!-- category-change -->
							
								<input id="txtsearch" type="text" class="form-control" placeholder="اكتب ما تبحث عنه">
								<button onclick="searchProduct(event)"  type="submit" class="form-control" value="Search">بحث</button>
							</form>
						</div><!-- banner-form -->
						
						<!-- banner-socail -->
						<ul class="banner-socail">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul><!-- banner-socail -->
					</div>
				</div><!-- banner -->
			</div><!-- row -->
		</div><!-- world -->

		<div class="container">
			<div class="section category-ad text-center">
				<ul class="category-list">	
				<?php echo $cat; ?> 
							
				</ul>				
			</div>
				
			<!-- trending-ads -->
			<div class="section trending-ads">
				<div class="section-title tab-manu">
					<h4>Trending Ads</h4>
					 <!-- Nav tabs -->      
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#recent-ads"  data-toggle="tab">Recent Ads</a></li>
					</ul>
				</div>

				<!-- Tab panes -->
				<div class="tab-content">
					<!-- tab-pane -->
					<div role="tabpanel" class="tab-pane fade in active" id="recent-ads">
					
				<?php echo $output; ?>  
						
					</div>
					
				</div>
			</div><!-- trending-ads -->			

			<!-- cta -->
			<div class="cta text-center">
				<div class="row">
					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-secure">
								<img src="images/icon/13.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>Secure Trading</h4>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-support">
								<img src="images/icon/14.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>24/7 Support</h4>
							<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
						</div>
					</div><!-- single-cta -->

					<!-- single-cta -->
					<div class="col-sm-4">
						<div class="single-cta">
							<!-- cta-icon -->
							<div class="cta-icon icon-trading">
								<img src="images/icon/15.png" alt="Icon" class="img-responsive">
							</div><!-- cta-icon -->

							<h4>Easy Trading</h4>
							<p>Mirum est notare quam littera gothica, quam nunc putamus parum claram</p>
						</div>
					</div><!-- single-cta -->
				</div><!-- row -->
			</div><!-- cta -->											
		</div><!-- container -->
	</section><!-- home-one-info -->
	
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
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/16.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Google Play</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/17.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>App Store</strong>
						</span>
					</a>
				</div><!-- download-app -->

				<!-- download-app -->
				<div class="col-sm-4">
					<a href="#" class="download-app">
						<img src="images/icon/18.png" alt="Image" class="img-responsive">
						<span class="pull-left">
							<span>available on</span>
							<strong>Windows Store</strong>
						</span>
					</a>
				</div><!-- download-app -->
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- download -->

	<!-- footer -->
	<footer id="footer" class="clearfix">
		<!-- footer-top -->
		<section class="footer-top clearfix">
			<div class="container">
				<div class="row">
					<!-- footer-widget -->
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
					</div><!-- footer-widget -->

					<!-- footer-widget -->
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
	
	<!--/Preset Style Chooser--> 
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1"><a href="#" data-color="preset1"></a></li>
				<li class="preset2" data-preset="2"><a href="#" data-color="preset2"></a></li>
				<li class="preset3" data-preset="3"><a href="#" data-color="preset3"></a></li>        
				<li class="preset4" data-preset="4"><a href="#" data-color="preset4"></a></li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->
	
     <!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>
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
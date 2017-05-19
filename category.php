<!DOCTYPE html>
<html lang="en">
  
<?php 
if(isset($_GET['id']) && $_GET['id'] != "" &&  is_numeric($_GET['id'])){
    $catID = isset($_GET['id']) ? $_GET['id'] : "";
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');
    $product = new Product();

    $result = $product->get_products_by_category($catID);    
     if(isset($result['product'])) {
         $products = $result['product'];
         $output = "";
		 $cat_name=$products[0]['category_name'];
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
         }//end foreach    
     }//end if   
	 } else {
    header("Location: /haraj/");
}//end if
 
	 
	 
?><head>
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
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

	<!-- main -->
	<section id="main" class="clearfix category-page main-categories">
		<div class="container">
			
			
	
			<div class="category-info">	
				<div class="row">
					<!-- accordion-->
					<div class="col-md-3 col-sm-4">
						<div class="accordion">
							<!-- panel-group -->
							<div class="panel-group" id="accordion">
							 	
								<!-- panel -->
								<div class="panel-default panel-faq">
									<!-- panel-heading -->
									<div class="panel-heading">
										<a data-toggle="collapse" data-parent="#accordion" href="#accordion-one">
											<h4 class="panel-title">All Categories<span class="pull-right"><i class="fa fa-minus"></i></span></h4>
										</a>
									</div><!-- panel-heading -->

									<div id="accordion-one" class="panel-collapse collapse in">
										<!-- panel-body -->
										<div class="panel-body">
											<ul>
												<li><a href="categories.html"><i class="icofont icofont-laptop-alt"></i>Electronics & Gedget<span>(1029)</span></a></li>
												<li><a href="#"><i class="icofont icofont-police-car-alt-2"></i>Cars & Vehicles<span>(1228)</span></a></li>
												<li><a href="#"><i class="icofont icofont-building-alt"></i>Property<span>(178)</span></a></li>
												<li><a href="#"><i class="icofont icofont-ui-home"></i>Home & Garden<span>(7163)</span></a></li>
												<li><a href="#"><i class="icofont icofont-animal-dog"></i>Pets & Animals<span>(8709)</span></a></li>
												<li><a href="#"><i class="icofont icofont-nurse"></i>Health & Beauty<span>(3129)</span></a></li>
												<li><a href="#"><i class="icofont icofont-hockey"></i>Hobby, Sport & Kids<span>(2019)</span></a></li>
												<li><a href="#"><i class="icofont icofont-burger"></i>Food & Agriculture<span>(323)</span></a></li>
												<li><a href="#"><i class="icofont icofont-girl-alt"></i>Women & Children<span>(425)</span></a></li>
												<li><a href="#"><i class="icofont icofont-gift"></i>Gift & Presentation<span>(3223)</span></a></li>
												<li><a href="#"><i class="icofont icofont-architecture-alt"></i>Office Product<span>(3283)</span></a></li>
												<li><a href="#"><i class="icofont icofont-animal-cat-alt-1"></i>Arts, Crafts & Sewing<span>(3221)</span></a></li>
												<li><a href="#"><i class="icofont icofont-abc"></i>Others<span>(3129)</span></a></li>
											</ul>
										</div><!-- panel-body -->
									</div>
								</div><!-- panel -->

							 </div><!-- panel-group -->
						</div>
					</div><!-- accordion-->

					<!-- recommended-ads -->
					<div class="col-sm-8 col-md-7">				
						<div class="section recommended-ads">
							<!-- featured-top -->
							<div class="featured-top">
								<h4><?php echo $cat_name ?></h4>							
							</div><!-- featured-top -->	

							<?php echo $output; ?>  

							<!-- pagination  -->
							<div class="text-center">
								<ul class="pagination ">
									<li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a>...</a></li>
									<li><a href="#">10</a></li>
									<li><a href="#">20</a></li>
									<li><a href="#">30</a></li>
									<li><a href="#"><i class="fa fa-chevron-right"></i></a></li>			
								</ul>
							</div><!-- pagination  -->					
						</div>
					</div><!-- recommended-ads -->

					<div class="col-md-2 hidden-xs hidden-sm">
						<div class="advertisement text-center">
							<a href="#"><img src="images/ads/2.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
				</div>	
			</div>
		</div><!-- container -->
	</section><!-- main -->
	
	
	<section id="something-sell" class="clearfix parallax-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2 class="title">Do you have something-sell?</h2>
					<h4>Post your ad for free on Trade.com</h4>
					<a href="ad-post.html" class="btn btn-primary">Post Your Ad</a>
				</div>
			</div><!-- row -->
		</div><!-- contaioner -->
	</section><!-- something-sell -->
	
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
  </body>

<!-- Mirrored from demo.themeregion.com/trade/categories-main.html by HTTrack Website Copier/3.x [XR&CO'2005], Thu, 27 Apr 2017 20:23:11 GMT -->
</html>
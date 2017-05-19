<!DOCTYPE html>
<html lang="en">
  
<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');
    $product = new Product();
    $result = $product->get_pending_products_with_images();    
     if(isset($result['product'])) {
         $products = $result['product'];
         $output = "";
         foreach($products as $product){
			

			$output.="<div class='ad-item row'>";
				
					$output.="<div class='item-image-box col-sm-4'>";
					$output.="<div class='item-image'>";
					$output.="<a href='#'><img src='images/listing/1.jpg' alt='Image' class='img-responsive'></a>";
					$output.="</div>";
					$output.="</div>	";
					$output.="<div class='item-info col-sm-8'>";
					$output.="<div class='ad-info'>";
					$output.="<h3 class='item-price'>{$product['product_price']}</h3>";
					$output.="<h4 class='item-title'><a href='#'>{$product['product_name']}</a></h4>";
					$output.="<div class='item-cat'>";
					$output.="<span><a href='#'>{$product['category_name']}</a></span>";
					$output.="</div>";								
					$output.="</div>";
					$output.="<div class='ad-meta'>";
					$output.="<div class='meta-content'>";
					$output.="<span class='dated'>Uploaded On: <a href='#'>{$product['publish_date']}</a></span>";
					$output.="<span class='pending'>Pending</span>";
					$output.="</div>	";									
					$output.="<div class='user-option pull-right'>";
					$output.="<a onclick=approveProduct(this,event,'{$product['product_id']}',1) class='edit-item' href='#' data-toggle='tooltip' data-placement='top' title='Approve'><i class='fa fa-thumbs-up'></i></a>";
					$output.="<a onclick=approveProduct(this,event,'{$product['product_id']}',2) class='delete-item' href='#' data-toggle='tooltip' data-placement='top' title='Delete this ad'><i class='fa fa-times'></i></a>";
					$output.="</div>";
					$output.="</div>";
					$output.="</div>";
					$output.="</div>";
         }//end foreach    
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
				
				<div class="navbar-left">
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Home <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home Default </a></li>
									<li><a href="index-one.html">Home Version-1</a></li>
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
							<li class="active dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
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
									<li class="active"><a href="pending-ads.html">Pending Ads</a></li>
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

	<!-- myads-page -->
	<section id="main" class="clearfix myads-page">
		<div class="container">

			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Ad Post</li>
				</ol><!-- breadcrumb -->						
				<h2 class="title">My Ads</h2>
			</div><!-- banner -->

			<div class="ad-profile section">	
					<div class="user-profile">
						<div class="user-images">
							<img src="images/user.jpg" alt="User Images" class="img-responsive">
						</div>
						<div class="user">
							<h2>Hello, <a href="#">Admin</a></h2>
						</div>

						<div class="favorites-user">
							<div class="my-ads">
								<a href="my-ads.html">23<small>Total ADS</small></a>
							</div>
							<!--<div class="favorites">
								<a href="#">18<small>Favorites</small></a>
							</div>-->
						</div>								
					</div><!-- user-profile -->
							
					<ul class="user-menu">
						<li><a href="my-profile.html">Profile</a></li>
						<li><a href="my-ads.html">My ads</a></li>
						<li><a href="favourite-ads.html">Favourite ads</a></li>
						<li><a href="archived-ads.html">Archived ads </a></li>
						<li class="active"><a href="pending-ads.html">Pending approval</a></li>
						<li><a href="delete-account.html">Close account</a></li>
					</ul>
			
			</div><!-- ad-profile -->			
			
			<div class="ads-info">
				<div class="row">
					<div class="col-sm-8">
						<div class="my-ads section">
							<h2>Pending ads</h2>
<?php echo $output; ?>  
							

						</div>
					</div><!-- my-ads -->

					<!-- recommended-cta-->
					<div class="col-sm-4 text-center">
						<!-- recommended-cta -->
						<div class="recommended-cta">					
							<div class="cta">
								<!-- single-cta -->						
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-secure">
										<img src="images/icon/13.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Secure Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
								

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-support">
										<img src="images/icon/14.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>24/7 Support</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->
							

								<!-- single-cta -->
								<div class="single-cta">
									<!-- cta-icon -->
									<div class="cta-icon icon-trading">
										<img src="images/icon/15.png" alt="Icon" class="img-responsive">
									</div><!-- cta-icon -->

									<h4>Easy Trading</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
								</div><!-- single-cta -->

								<!-- single-cta -->
								<div class="single-cta">
									<h5>Need Help?</h5>
									<p><span>Give a call on</span><a href="tellto:08048100000"> 08048100000</a></p>
								</div><!-- single-cta -->
							</div>
						</div><!-- cta -->
					</div><!-- recommended-cta-->				
					
				</div><!-- row -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- myads-page -->
	
	
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

    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/gmaps.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/price-range.js"></script> 
    <script src="js/jquery.countdown.js"></script>   
    <script src="js/custom.js"></script>
	<script src="js/switcher.js"></script>
	<script>
		function approveProduct(obj,e,id,stat)
		{
			e.preventDefault()
			
			var params = "id=" + id;
			params += "&stat=" + stat;
            
				console.log(params)
                $.ajax({
                    type:'POST' ,
                    url: "api/php/product.approve.inc.php",
                    data: params,
                    success: function(response) {  
					//	$(obj).parent().parent().parent().parent().parent().hide()                      
                        console.log(response);
                        var data = JSON.parse(response);     
						console.log(data); 
					               
                        if(data.error == false) {
							$(obj).parent().parent().parent().parent().hide()  
                      
                        } else {
                            
                        }
               
                    }                  
                });
		}
	</script>
  </body>

<!-- Mirrored from demo.themeregion.com/trade/pending-ads.html by HTTrack Website Copier/3.x [XR&CO'2005], Thu, 27 Apr 2017 20:23:29 GMT -->
</html>
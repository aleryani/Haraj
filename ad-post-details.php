<!DOCTYPE html>
<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'] . '/haraj/class/product.inc.php');
    $category = new Product();
    $result = $category->get_categories();    
    //if(isset($result['categories'])) {
        $categories = $result;
        $output = "";
        foreach($categories as $category){
            $output .= "<option value={$category['category_id']}>{$category['category_name']}</option>";
        }//end foreach  
		  
 //   }//end if    
?>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/trade/ad-post-details.html by HTTrack Website Copier/3.x [XR&CO'2005], Thu, 27 Apr 2017 20:23:10 GMT -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Theme Region">
	<meta name="description" content="">

	<title>Trade | World's Largest Classifieds Portal</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-rtl.min.css">
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
									<li class="active"><a href="ad-post-details.html">Ad post Details</a></li>
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
					</div>
					<!-- language-dropdown -->

					<!-- sign-in -->
					<ul class="sign-in">
						<li><i class="fa fa-user"></i></li>
						<li><a href="signin.html"> Sign In </a></li>
						<li><a href="signup.html">Register</a></li>
					</ul>
					<!-- sign-in -->

					<a href="ad-post.html" class="btn">Post Your Ad</a>
				</div>
				<!-- nav-right -->
			</div>
			<!-- container -->
		</nav>
		<!-- navbar -->
	</header>
	<!-- header -->

	<!-- main -->
	<section id="main" class="clearfix ad-details-page">
		<div class="container">

			<div class="breadcrumb-section">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li><a href="index.html">Home</a></li>
					<li>Ad Post</li>
				</ol>
				<!-- breadcrumb -->
				<h2 class="title">Mobile Phones</h2>
			</div>
			<!-- banner -->

			<div class="adpost-details">
				<div class="row">
					<div class="col-md-8">
						<form action="#">
							<fieldset>
								<div class="section postdetails">
									<h4>Sell an item or service <span class="pull-left">* حقول إجباريه</span></h4>
									
											<div class="row form-group add-title">
												<label class="col-sm-3 label-title">صنف الاعلان<span class="required">*</span></label>
												<div class="col-sm-9">
													<select id="ddlcat" class="form-control">
												<option value="0">اختر الصنف</option>
												<?php echo $output; ?>  
												</select>
												</div>
											</div>
											<div class="row form-group add-title">
												<label class="col-sm-3 label-title">عنوان اعلانك<span class="required">*</span></label>
												<div class="col-sm-9">
													<input id="pro_name" type="text" class="form-control" id="text" placeholder="على سبيل المثال, تلفون ايفون عرطه للبيع">
												</div>
											</div>
											<div class="row form-group add-image">
												<label class="col-sm-3 label-title">صور للاعلان</span> </label>
												<div class="col-sm-9">
													 <form action="api/php/product.image.inc.php?" method="post" enctype="multipart/form-data">
													<input type="file" id="upload_file" name="upload_file[]" onchange="preview_image();" multiple/>
													<div class="col-md-12"><div id="image_preview"></div></div>
													<br>
													<input style='visibility:hidden' id="btnupimg" type="submit" name='submit_image' value="Upload Image"/>
													</form>
													<br>
													<h5><i class="fa fa-upload" aria-hidden="true"></i>يمكنك إضافة أكثر من صورة</span></h5>
													<!--<div class="upload-section">
														<label class="upload-image" for="upload-image-one">
													<input type="file" id="upload-image-one">
												</label>

														<label class="upload-image" for="upload-image-two">
													<input type="file" id="upload-image-two">
												</label>
														<label class="upload-image" for="upload-image-three">
													<input type="file" id="upload-image-three">
												</label>

														<label class="upload-image" for="upload-imagefour">
													<input type="file" id="upload-imagefour">
												</label>
													</div>-->
												</div>
											</div>
											<div class="row form-group select-condition">
												<label class="col-sm-3">الحالة<span class="required">*</span></label>
												<div class="col-sm-9">
													<select id="ddlcond" class="form-control">
													<option value="1">مستحدم</option><option value="2">جديد</option>  
													</select>
												</div>
											</div>
											<div class="row form-group select-price">
												<label class="col-sm-3 label-title">السعر<span class="required">*</span></label>
												<div class="col-sm-9">
													<input type="text" class="form-control" id="pro_price">
													
												</div>
											</div>

											<div class="row form-group item-description">
												<label class="col-sm-3 label-title">وصف<span class="required">*</span></label>
												<div class="col-sm-9">
													<textarea class="form-control" id="pro_desc" placeholder="أكتب وصفا عن اعلانك" rows="8"></textarea>
												</div>
											</div>

										</div>
										<!-- section -->

										<div class="section seller-info">
											<h4>بيانات المعلن</h4>
											<div class="row form-group">
												<label class="col-sm-3 label-title">اسمك<span class="required">*</span></label>
												<div class="col-sm-9">
													<input type="text" name="name" id="seller_name" class="form-control" placeholder="">
												</div>
											</div>
											<div class="row form-group">
												<label class="col-sm-3 label-title">رقم الجوال<span class="required">*</span></label>
												<div class="col-sm-9">
													<input type="text" name="mobile" id="seller_mob" class="form-control" placeholder="">
												</div>
											</div>
											<div class="row form-group">
												<label class="col-sm-3 label-title">المدينة<span class="required">*</span></label>
												<div class="col-sm-9">
													<input type="text" name="city" id="seller_city" class="form-control" placeholder="">
												</div>
											</div>
											<div class="row form-group">
												<label class="col-sm-3 label-title">العنوان</label>
												<div class="col-sm-9">
													<input type="text" name="address" id="seller_address" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<!-- section -->

									
										<!-- section -->

										<div class="checkbox section agreement">
											<label for="send">
										<input type="checkbox" name="send" id="send">
										Send me Trade Email/SMS Alerts for people looking to buy mobile handsets in www By clicking "Post", you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a> and acknowledge that you are the rightful owner of this item and using Trade to find a genuine buyer.
									</label>
											<input type="button" value="نشر الاعلان" onclick="SaveProduct()" class="btn btn-primary">
										</div>
										<!-- section -->

							</fieldset>
						</form>
						<!-- form -->
						</div>


						<!-- quick-rules -->
						<div class="col-md-4">
							<div class="section quick-rules">
								<h4>Quick rules</h4>
								<p class="lead">Posting an ad on <a href="#">Trade.com</a> is free! However, all ads must follow our rules:</p>

								<ul>
									<li>Make sure you post in the correct category.</li>
									<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
									<li>Do not upload pictures with watermarks.</li>
									<li>Do not post ads containing multiple items unless it's a package deal.</li>
									<li>Do not put your email or phone numbers in the title or description.</li>
									<li>Make sure you post in the correct category.</li>
									<li>Do not post the same ad more than once or repost an ad within 48 hours.</li>
									<li>Do not upload pictures with watermarks.</li>
									<li>Do not post ads containing multiple items unless it's a package deal.</li>
								</ul>
							</div>
						</div>
						<!-- quick-rules -->
						</div>
						<!-- photos-ad -->
					</div>
				</div>
				<!-- container -->
	</section>
	<!-- main -->

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
					</div>
					<!-- footer-widget -->

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
					</div>
					<!-- footer-widget -->

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
					</div>
					<!-- footer-widget -->

					<!-- footer-widget -->
					<div class="col-sm-3">
						<div class="footer-widget news-letter">
							<h3>Newsletter</h3>
							<p>Trade is Worldest leading classifieds platform that brings!</p>
							<!-- form -->
							<form action="#">
								<input type="email" class="form-control" placeholder="Your email id">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</form>
							<!-- form -->
						</div>
					</div>
					<!-- footer-widget -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</section>
		<!-- footer-top -->


		<div class="footer-bottom clearfix text-center">
			<div class="container">
				<p>Copyright &copy; 2016. Developed by <a href="http://themeregion.com/">ThemeRegion</a></p>
			</div>
		</div>
		<!-- footer-bottom -->
	</footer>
	<!-- footer -->

	<!--/Preset Style Chooser-->
	<div class="style-chooser">
		<div class="style-chooser-inner">
			<a href="#" class="toggler"><i class="fa fa-life-ring fa-spin"></i></a>
			<h4>Presets</h4>
			<ul class="preset-list clearfix">
				<li class="preset1 active" data-preset="1">
					<a href="#" data-color="preset1"></a>
				</li>
				<li class="preset2" data-preset="2">
					<a href="#" data-color="preset2"></a>
				</li>
				<li class="preset3" data-preset="3">
					<a href="#" data-color="preset3"></a>
				</li>
				<li class="preset4" data-preset="4">
					<a href="#" data-color="preset4"></a>
				</li>
			</ul>
		</div>
	</div>
	<!--/End:Preset Style Chooser-->

	<!-- JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.form.js"></script>
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
		(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date(); a = s.createElement(o),
			m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-73239902-1', 'auto');
		ga('send', 'pageview');

	</script>
	<script>
            function SaveProduct(){
                var params = "ddlcat=" + $("#ddlcat").val();
                params += "&pro_name=" + $("#pro_name").val().trim();
                params += "&pro_price=" + $("#pro_price").val().trim();
                params += "&pro_desc=" + $("#pro_desc").val().trim();
				params += "&pro_cond=" + $("#pro_cond").text().trim();
                params += "&seller_name=" + $("#seller_name").val().trim();
                params += "&seller_mob=" + $("#seller_mob").val().trim();                
                params += "&seller_city=" + $("#seller_city").val().trim();
				params += "&seller_address=" + $("#seller_address").val().trim();
				console.log(params)
                $.ajax({
                    type:'POST' ,
                    url: "api/php/product.add.inc.php",
                    data: params,
                    success: function(response) {                        
                        console.log(response);
                        var data = JSON.parse(response);     
						console.log(data); 
						//alert(data.product.product_id)                 
                        if(data.error == false) {
							setCookie("proid",data.product.product_id,1)
							$("#btnupimg").click();
                         
                        } else {
                  
                        }//end if
         
                    }                  
                });              
            }

			function preview_image() 
			{
				var total_file=document.getElementById("upload_file").files.length;
				for(var i=0;i<total_file;i++)
				{
					$('#image_preview').append("<img style='float: right;width: 100px;display: inline;' src='"+URL.createObjectURL(event.target.files[i])+"'>");
				}
			}

			function setCookie(cname, cvalue, exdays) {
			var d = new Date();
			d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
			var expires = "expires="+d.toUTCString();
			document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}
			</script>
			
			
</body>

<!-- Mirrored from demo.themeregion.com/trade/ad-post-details.html by HTTrack Website Copier/3.x [XR&CO'2005], Thu, 27 Apr 2017 20:23:10 GMT -->

</html>
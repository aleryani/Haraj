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
	<link rel="stylesheet" href="css/dropzone.css">

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
					

					<a href="new-ad.php" class="btn">انشر اعلانك الان </a>
				</div>
			</div>
		</nav>
</header>

	<!-- main -->
	<section id="main" class="clearfix ad-details-page">
		<div class="container">

			<div class="adpost-details">
				<div class="row">
					<div class="col-md-8">
						
							<fieldset>
								<div class="section postdetails">
									<h4><span class="pull-left">* حقول إجباريه</span></h4>
<div class="image_upload_div">
	<div class="dropzone" id="dropzonewidget">
 <div class="dz-message" data-dz-message><span>اختر صور لرفعها</span></div>
   </div> 
   <button style="display:none" type="button"  id="btnupload">UPPLOAD</button>
</div> 
<br>
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
											
											<div class="row form-group select-condition">
												<label class="col-sm-3">الحالة<span class="required">*</span></label>
												<div class="col-sm-9">
													<select id="ddlcond" class="form-control">
													<option value="0">اختر حالة الاعلان</option><option value="1">مستحدم</option><option value="2">جديد</option>  
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
										
											<input id="btnSave" type="button" value="نشر الاعلان" onclick="SaveProduct()" class="btn btn-primary">
										</div>
										<!-- section -->

							</fieldset>
						<!--</form>-->
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
	<script src="js/dropzone.js"></script>
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
	var product_id="";
	Dropzone.autoDiscover = false;
jQuery(document).ready(function() {
//	$("#btnSave").click(function(){
    
  //  return false;
//});
	$("#btnupload").trigger("click");
  var myDropzone = new Dropzone("#dropzonewidget", { 
    url: 'upload.php',
    autoProcessQueue:false,
	addRemoveLinks: true,
	maxFilesize: 4,
  });

  $('#btnupload').on('click',function(e){
    e.preventDefault();
    myDropzone.processQueue();  
  });   
});
            function SaveProduct(){
				if($("#ddlcat").val()=="0")
				{
					$("#ddlcat").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#ddlcat").offset().top - 200
                }, 500);
				}
					
				else if(!$("#pro_name").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#pro_name").offset().top - 200
                }, 500);
				}
				else if($("#ddlcond").val()=="0")
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#ddlcond").offset().top - 200
                }, 500);
				}
				else if(!$("#pro_price").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#pro_price").offset().top - 200
                }, 500);
				}
				else if(!$("#pro_desc").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","1px solid #e3e3e3")
					$("#pro_desc").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#pro_desc").offset().top - 200
                }, 500);
				}
				else if(!$("#seller_name").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","1px solid #e3e3e3")
					$("#pro_desc").css("border","1px solid #e3e3e3")
					$("#seller_name").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#seller_name").offset().top - 200
                }, 500);
				}
				else if(!$("#seller_mob").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","1px solid #e3e3e3")
					$("#pro_desc").css("border","1px solid #e3e3e3")
					$("#seller_name").css("border","1px solid #e3e3e3")
					$("#seller_mob").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#seller_mob").offset().top - 200
                }, 500);
				}
				else if(!$("#seller_city").val())
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","1px solid #e3e3e3")
					$("#pro_desc").css("border","1px solid #e3e3e3")
					$("#seller_name").css("border","1px solid #e3e3e3")
					$("#seller_mob").css("border","1px solid #e3e3e3")
					$("#seller_city").css("border","2px solid red")
					$('html, body').animate({
                    scrollTop: $("#seller_city").offset().top - 200
                }, 500);
				}
				else
				{
					$("#ddlcat").css("border","1px solid #e3e3e3")
					$("#pro_name").css("border","1px solid #e3e3e3")
					$("#ddlcond").css("border","1px solid #e3e3e3")
					$("#pro_price").css("border","1px solid #e3e3e3")
					$("#pro_desc").css("border","1px solid #e3e3e3")
					$("#seller_name").css("border","1px solid #e3e3e3")
					$("#seller_mob").css("border","1px solid #e3e3e3")
					$("#seller_city").css("border","1px solid #e3e3e3")
                var params = "ddlcat=" + $("#ddlcat").val();
                params += "&pro_name=" + $("#pro_name").val().trim();
                params += "&pro_price=" + $("#pro_price").val().trim();
                params += "&pro_desc=" + $("#pro_desc").val().trim();
				params += "&ddlcond=" + $("#ddlcond").text().trim();
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
						product_id=data.product.product_id
						//alert(data.product.product_id)                 
                        if(data.error == false) {
							product_id=data.product.product_id
							setCookie("proid",data.product.product_id,1)
							$("#btnupload").click();
                         window.location.href = "published.php";
                        } else {
                  
                        }//end if
         
                    }                  
                });              
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


</html>
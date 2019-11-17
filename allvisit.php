
<?php
require_once('db/db.php');
?>


<!DOCTYPE html>

<html dir="ltr" lang="">


<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link href="images/fevicon.png" rel="shortcut icon">

	<title>صفحه جستجو محصول</title>

	<!-- Bootstrap stylesheet -->

	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- owl-carousel stylesheet -->

	<link href="jquery/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!--Bootstrap select stylesheet-->

	<link rel="stylesheet" href="js/dist/css/bootstrap-select.css">

	<!-- stylesheet -->

	<link href="css/style1.css" title="style1" rel="stylesheet" />

	<link href="css/style1_orange.css" title="style1_orange" rel="alternate stylesheet" />

	<link href="css/style1_seagreen.css"   title="style1_seagreen"   rel="alternate stylesheet" />

	<link href="css/style1_blue.css"  title="style1_blue"   rel="alternate stylesheet" />

	<link href="css/style1_pink.css"  title="style1_pink"  rel="alternate stylesheet" />

	<link href="css/style1_green.css"   title="style1_green"   rel="alternate stylesheet" />

	<link href="css/style1_manz.css"   title="style1_manz"   rel="alternate stylesheet" />

	<!--magnific popup css-->

	<link href="jquery/magnific/magnific-popup.css" rel="stylesheet" media="screen">

	<!-- font-awesome -->

	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- google fonts -->

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,300,700" rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"> 

	<?php
	session_start();
	if(isset($_GET['text'])&&isset($_SESSION["id"])) {
		$id_p=$_GET['id'];
		$id_u=$_SESSION['id'];
		
		$query1="insert into love (id,id_user,id_product) values ('','$id_u','$id_p')";
		
		$query1Run=$db->query($query1);

		if($query1Run){ ?>
		<script type="text/javascript">
			alert('like');
		</script>
		<?php 
	}else{?>
		<script type="text/javascript">
			alert('ابتدا ثبت نام کنید');
		</script>
	<?php 
}}
		?>

</head>

<body class="common-home">

	<!-- #top start here -->

	
			<nav id="top">

		<!-- #top container start here -->

		<div class="container">

			<!-- #top-links container start here -->

			<div id="top-links" class="nav">

				<ul class="list-inline  pull-left">

					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> <span class="hidden-xs">info@khayyam.com</span></a></li>

					<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> <span class="hidden-xs ">0513-123-456</span></a></li>

				</ul>
				<?php if(!isset($_SESSION['id'])){
					echo "				<ul class='list-inline  pull-right'>

					<li class='dropdown'><a href='#'' title='My Account' class='dropdown-toggle' data-toggle='dropdown'><span class='visible-xs'><i class='fa fa-user'></i>  <i class='fa fa-angle-down' aria-hidden='true'></i></span> <span class='hidden-xs'>پروفایل من  <i class='fa fa-angle-down' aria-hidden='true'></i></span> </a>

						<ul class='dropdown-menu dropdown-menu-right'>

							<li><a href='login.php'>ثبت نام</a></li>

							<li><a href='login.php'>ورود</a></li>

						</ul>

					</li>";}?>

					

					

				</ul>

			</div>

			<!-- #top-links container end here -->

		</div>

		<!-- #top container end here -->

	</nav>

	<!-- #top end here -->



	<!-- header start here -->

	<header>

		<!-- header container start here -->

		<div class="container">

			<div class="row">

				<div class="col-sm-3 col-xs-12">

					<div id="logo">

						<a href="index.php"><img src="images/logo.png" title="Menda" alt="Menda" class="img-responsive logochange"></a>

					</div>

				</div>

				<div class="col-sm-7 col-xs-12">

					<!-- #menu start here -->

					<nav id="menu" class="navbar pull-left">

						<div class="navbar-header"><span id="category" class="visible-xs">منو</span>

							<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>

						</div>

						<div class="collapse navbar-collapse navbar-ex1-collapse">



							<ul class="nav navbar-nav hidden-xs">

								<li class="dropdown"><a href="index.php">صفحه اصلی </a>


								</li>


								<li class="dropdown">
									<a href="about.php" class="text-right">درباره ما 
									</a>

								</li>
								<li class="dropdown">
									<a href="contact.php" class="text-right">تماس با ما
									</a>

								</li>
								<li class="dropdown">
									<a href="gallery.php"  class="text-right">گالری

									</a>

								</li><?php

								if(isset($_SESSION["id"])){echo(" <li class='dropdown'>
									<a href='logout.php'  class='text-right'>خروج

									</a>

								</li> ");



							}else {echo (
								"<li class='dropdown'>
								<a href='login.php'  class='text-right'>ورود / ثبت نام

								</a>

							</li>");

					}
					?>




				</ul>

				<!-- mobile menu starts -->


				<ul class="nav navbar-nav visible-xs">

					<li class="dropdown"><a href="index.php">صفحه اصلی </a>


					</li>


					<li class="dropdown">
						<a href="about.php" class="text-right">درباره ما 
						</a>

					</li>
					<li class="dropdown">
						<a href="contact.php" class="text-right">تماس با ما
						</a>

					</li>
					<li class="dropdown">
						<a href="gallery.php"  class="text-right">گالری

						</a>

					</li>



				</ul>


				<!-- mobile menu ends -->

			</div>

		</nav>

		<!-- #menu end here -->





	</div>

	<div class="col-sm-2 col-xs-12">

		<!-- menu-right start here -->

		<div class="menu-right pull-right">

			<ul class="list-inline">
			<?php if(isset($_SESSION['id'])){
					echo "
				<li>

					<div id='cart' class='btn-group'>

						<a href='user.php' type='button' data-toggle='tooltip' title='مشاهده پنل کاربری''   class='btn btn-inverse btn-lg' ><i class='fa fa-user fa-2x' style='padding: 5px' aria-hidden='true'></i></a>

						
					</div>

				</li>
				";}?>
				<li>

					<div id="search" class="input-group">
					<form method="get" action="search.php">
						<input name="search" placeholder="جستجو کنید" class="form-control input-lg" type="text">

						<span class="input-group-btn">

							<button  type="submit" name="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>

						</span>
					</form>
					</div>						

				</li>



			</ul>

		</div>

		<!-- menu-right end here -->

	</div>

</div>

</div>

<!-- header container end here -->

</header>

	<!-- header end here -->




	<!--breadcrumb start here-->

	<div class="bread">

		<div class="container">

			<ul class="breadcrumb">

				<li><a href="index.php">صفحه اصلی</a></li>

				<li><a href="#">جستجو</a></li>

			</ul>

		</div>

	</div>

	<!--breadcrumb end here-->

	

	

	<!--Catgeory page code start-->

	<div class="container">

		<div class="row">

			<div id="content" class="col-sm-9">

				<div class="row sortby">

					<div class="col-md-6">

						<div class="btn-group hidden-xs">

							<button type="button" id="grid-view" class="btn btn-default btngrid" data-toggle="tooltip" title="Grid"><i class="fa fa-th-large" aria-hidden="true"></i></button>

							<button type="button" id="list-view" class="btn btn-default btngrid" data-toggle="tooltip" title="List"><i class="fa fa-list-ul" aria-hidden="true"></i></button>

						</div>

					</div>

					<div class="col-md-2 text-right">

						<select id="input-limit" class="form-control selectpicker">

							<option value="" selected="selected">1</option>

							<option value="">2</option>

						</select>

					</div>
					<div class="col-md-1 text-right padd0">

						<label class="control-label" for="input-limit">نمایش:</label>

					</div>

					

					<div class="col-md-2 text-right">

						<select id="input-sort" class="form-control selectpicker">

							<option value="" selected="selected">دسته 1</option>

							<option value="">دسته 2</option>

							<option value="">دسته 3</option>
						</select>	

					</div>
					<div class="col-md-1 text-right padd0">

						<label class="control-label" for="input-sort">مرتب کردن:</label>

					</div>
				</div>



			<div class="row rightbar">
				<?php
				
				
				
				$query="select * from product  order by visit DESC " ;
				


				$queryRun=$db->query($query);
				
				$a = '';
				while($fetch=$queryRun->fetch_assoc()){
				


				?>
			

					<div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">

						<div class="product-thumb transition">

							<div class="image">

								<a href="product-detial.php?id=<?php echo $fetch['id']; ?>"><img src=
								<?php 



									$a=$fetch['id'];
									$query="select pic from pic where id_p=$a order by id desc limit 0,1";
									$query1 =  $db->query($query);
									$fetch1=$query1->fetch_assoc();

									echo "upload/";
									echo $fetch1['pic'];


									?> 
									alt="product image" title="محصول شماره <?php echo $fetch['id']; ?>" class="img-responsive" /></a>
									<div class="button-group grrid">

										<a href="checkout.php?id=<?php echo $fetch['id']; ?>"  type="button" data-toggle="tooltip" title="اظافه به سبد"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

								<a href="product-detial.php?id=<?php echo $fetch['id']; ?>" type="button" data-toggle="tooltip" title="مشاهده جزییات "><i class="fa fa-eye"></i></a>

								<a href="allvisit.php?id=<?php echo $fetch['id']; ?>&text=love" type="button" data-toggle="tooltip" title="اظافه به مورد علاقه"><i class="fa fa-heart"></i></a>

									</div>

								</div>




								<div class="caption">

									<h4><a href="product1.php"><?php echo $fetch['name']; ?></a></h4>

									<p class="price">

										<span class="price-new"><?php echo $fetch['price']; ?></span>

									</p>

									<div class="rating">

										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

										<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

									</div>

									<p class="des">

										این وبسایت با هدف ترویج و رونق مشاغل خانگی ایحاد شده . سعی ما براین است تا این امکان را برای کسانی که مشاغل خانگی مانند کیف دوزی ، جعبه کادو سازی ، طراحی ، و ... را انجام میدهند و قصد دارند که بهتر دیده شوند را در بستر وب و با استفاده از مباحث آی تی فراهم سازیم . این و

									</p>

									<div class="button-group">

										

									</div>

								</div>

							</div>

						
							</div>
	<?php
			}
		
				?>

					</div>

					<!--pagination code-->

					<div class="row">

						<div class="col-sm-12 text-center">

							<ul class="pagination">
								<li><a href="#">&gt;</a></li>
								<li class="active"><span>1</span></li>

								<li><a href="#">2</a></li>



								<li><a href="#">&gt;</a></li>

							</ul>

						</div>

					</div>

					<!--pagination code-->

				</div>

				<div class="col-sm-3 hidden-xs" id="column-right">

					<div class="list-group">

						<h2 class="module-heading"><span>دسته بندی</span></h2>

						<hr>



						<ul>

							<li><a class="list-group-item active" href="#">پوشاک</a></li>

							<li><a class="list-group-item" href="#">خوراک</a></li>

							<li><a class="list-group-item" href="#">کادویی </a></li>

							<li><a class="list-group-item" href="#">دسته بندی 1</a></li>

							<li><a class="list-group-item" href="#">دسته بندی 2</a></li>

							<li><a class="list-group-item" href="#">دسته بندی 3</a></li>

						</ul>

					</div>




				</div>

				<div class="banners">
					<h4 class="tb-margin-10 text-center">تبلیغات</h4>
					<div class="item">

						<a href="#"><img class="img-responsive offerbanner" alt="HP Banner" src="images/catebanner1.png"></a>

					</div>

					<div class="item">

						<a href="#"><img class="img-responsive sidebanner" alt="HP Banner" src="images/bannercate2.png"></a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!--Catgeory page code end-->

	

	

	<!--footer code start here-->

	<div id="newsletter">

		<div class="container">

			<div class="row">

				<div class="col-sm-6">

					<form class="form-horizontal" name="subscribe" id="subscribe">

						<div class="newsbox">

							<div class="news-heading">دریافت خبرنامه ما</div>

							<input class="form-control" type="text" value="" name="subscribe_email" id="subscribe_email" placeholder="ایمیل خود را وارد کنید">

							<span class="btnnews"><button type="submit" name="newsbutton"> <i class="fa fa-paper-plane" aria-hidden="true"></i></button></span>

						</div>

					</form>

				</div>

				<div class="col-sm-6">

					<div class="col-sm-6 help">		

						<div class="news-heading">برای راهنمایی بیشتر </div>

						<div class="ctext">با ما تماس بگیرید

							<a href="#">1800-123-456</a>

						</div>

					</div>

					<!--social icons code start-->

					<div class="col-sm-6">		

						<div class="news-heading">ما را دنبال کنید</div>

						<ul class="list-inline newssocial">

							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>

							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>

							<li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>

							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

						</ul>

					</div>

					<!--social icons code end-->

				</div>

			</div>		

		</div>		

	</div> 

	<footer>

		<div class="container"> 

			<div class="row infopart">

				<div class="col-sm-4">

					<h5>اطلاعات بیشتر</h5>

					<ul class="list-unstyled">

						<li><a href="about.php">درباره ما</a></li>

						<li><a href="about.php">نحوه خرید</a></li>

						<li><a href="about.php">نحوه گزاشتن محصول</a></li>

						<li><a href="about.php">قوانین</a></li>

					</ul>

				</div>

				<div class="col-sm-4">

					<h5>خدمات مشتری</h5>

					<ul class="list-unstyled">

						<li><a href="contact.php">تماس با ما</a></li>

						<li><a href="#">نقشه سایت</a></li>

						<li><a href="#">سوالات متداول</a></li>


					</ul>

				</div>



				<div class="col-sm-4">

					<h5>تماس با ما</h5>

					<ul class="list-unstyled contacts">

						<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">مشهد <br/>خیابان 12345 </a></li>

						<li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">800-1234-6789</a></li>

						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">support@khayyam.com</a></li>


					</ul>

				</div>

			</div>

			<!--bottom to top code start-->

			<a href="#" class="bottom-top"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>

			<!--bottom to top icons code end-->

		</div>

	</footer>

	<div class="powered">

		<div class="container">

			<div class="col-md-9 col-sm-8 padd0">

				<p><span>تمامی حقوق محفوظ می باشد</span></p>

			</div>

			<div class="col-md-3 col-sm-4 padd0">

				<!--payment icon code start-->

				<ul class="list-inline paymenticon">

					<li><a href="#" class="paypal"></a></li>

					<li><a href="#" class="visa"></a></li>

					<li><a href="#" class="america"></a></li>

					<li><a href="#" class="master"></a></li>

				</ul>

				<!--payment icon code -->

			</div>

		</div>

	</div>

	<!--footer code end here-->

	

	<!-- jquery -->

	<script src="jquery/jquery-2.1.1.min.js" type="text/javascript"></script>

	<!-- bootstrap js -->

	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

	<!-- owl-carousel js -->

	<script src="jquery/owl-carousel/owl.carousel.js" type="text/javascript"></script>

	<!--bootstrap select js-->

	<script src="js/dist/js/bootstrap-select.js"></script>

	<!--photo gallery js-->

	<script src="js/photo-gallery.js" type="text/javascript"></script>

	<!--magnific popup js-->

	<script src="jquery/magnific/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<!--All internal js code file-->

	<script src="js/slideshow.js" type="text/javascript"></script>

	<!--Color Switcher js-->

	<script src="js/switcher.js" type="text/javascript"></script>

</body>


<!-- Mirrored from wptheme.co.in/menda-html/category_rightsidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2017 16:06:05 GMT -->
</html>

<?php

session_start();

	?> <?php
	require_once('db/db.php');
	?>
<!DOCTYPE html>

<html dir="ltr" lang="">


<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="images/fevicon.png" rel="shortcut icon">

<title>صفحه جزییات محصول</title>

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

				<li><a href="index-2.php">صفحه اصلی</a></li>

				<li><a href="#">خرید</a></li>

				<li><a href="product.php">محصول</a></li>

			</ul>

		</div>

	</div>

	<!--breadcrumb end here-->

	

	<!--Product page code start-->

	<div class="container">

		<div class="row productpage">

			<div id="content" class="col-sm-12">

				<div class="row">


				    <!--Product detail code start-->
				    <?php
					$id=$_GET["id"];
					$query="select * from product where id=$id order by id desc  ";
					$queryRun=$db->query($query);
					while($fetch=$queryRun->fetch_assoc()){
							?>
					<div class="col-sm-6">

						<h1>اسم محصول اسم محصول</h1>

						<div class="prorating">

							<p>

								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>

								<span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>

								<a href="#">5 امتیاز </a>

							</p>

						</div>

						<div class="col-sm-12 price-stock">

							<div class="pull-left">

								<span class="price-new">$<?php echo $fetch['price'];?></span>

							</div>

							<div class="pull-right">

								<span class="stock"><?php if($fetch['active']==1){echo 'موجود';}else{echo 'ناموجود';}?></span>

							</div>

						</div>

						<p class="shortdes">

							
						<?php echo $fetch['text'];?>



						</p>

						<div class="clearfix">

							<div class="btns col-sm-7">
							

								<a href="product-detial.php?id=<?php echo $fetch['id']; ?>&text=love" type="button" data-toggle="tooltip" class="btn btn-default btn-lg" title="اظافه به علاقه مندی ها"><i class="fa fa-heart"></i> اظافه به علاقه مندی ها</a>

							</div>

							<ul class="list-unstyled col-sm-5 padd0">

								<li>نوع محصول : <a href="#"><?php echo $fetch['type'];?></a></li>

								
								<li>ساخت توسط :	 <a href="#"><?php 
								$a=$fetch['id_user'];
								$query="select companyname from user where id='$a'  ";
								$query1 =  $db->query($query);
								$fetch1=$query1->fetch_assoc();
							    echo $fetch1['companyname'];
								?></a></li>



								<li>تعداد فروخته شده :<a href="#"><?php echo $fetch['sell'];?></a></li>

							</ul>

						</div>

						<div>

							<p class="qtypara">

								<label class="control-label" for="input-quantity">تعداد:</label>

								<span id="minus2" class="minus"><i class="fa fa-minus"></i></span>

								<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control qty" />

								<span id="add2" class="add"><i class="fa fa-plus"></i></span>

								

							</p>

							<a href="checkout.php?id=<?php echo $fetch['id']; ?>" type="button" id="button-cart" data-toggle="tooltip" title="Add to Cart" class="btn btn-primary btn-lg"><i aria-hidden="true" class="fa fa-shopping-basket"></i> نهایی کردن خرید</a>

						</div>

					</div>

				<!--Product detail code end-->
				<!--thumb image code start-->

					<div class="col-sm-6">

						<div class="col-sm-3 padd0 hidden-xs">


<?php
					$id=$fetch["id"];
					$query3="select * from pic where id_p=$id order by id desc  ";
					$query3Run=$db->query($query3);
					while($fetch3=$query3Run->fetch_assoc()){
							?>
							<div class="image-additional"><a class="thumbnail" href="#"><img src="upload/<?php echo $fetch3['pic']; ?>" title="additional images" alt="additional images" class="img-responsive" /></a></div>
<?php
}
?>

						</div>

						<div class="col-sm-9">
<?php
					$id=$fetch["id"];
					$query3="select * from pic where id_p=$id order by id desc limit 0,1  ";
					$query3Run=$db->query($query3);
					while($fetch3=$query3Run->fetch_assoc()){
							?>
							<a class="thumbnail" href="#"><img src="upload/<?php echo $fetch3['pic']; ?>" title="thumb image" alt="thumb image" class="img-responsive" /></a>
<?php
}
?>
						</div>

						<div class="col-sm-3 padd0 visible-xs">

							<ul class="list-inline image-additional">

								<li><a class="thumbnail" href="#"><img src="images/thumb_1.png" title="additional images" alt="additional images" class="img-responsive" /></a></li>

								<li><a class="thumbnail" href="#"><img src="images/thumb_2.png" title="additional images" alt="additional images" class="img-responsive" /></a></li>

								<li><a class="thumbnail" href="#"><img src="images/thumb_3.png" title="additional images" alt="additional images" class="img-responsive" /></a></li>

								<li><a class="thumbnail" href="#"><img src="images/thumb_4.png" title="additional images" alt="additional images" class="img-responsive" /></a></li>

							</ul>

						</div>

					</div>

				<!--thumb image code end-->

				
<?php } ?>
				

					<div class="col-sm-12">

						<ul class="nav nav-tabs">

							<li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>


							<li><a href="#tab-review" data-toggle="tab">نظرات (0)</a></li>


						</ul>

						<div class="tab-content">

							<div class="tab-pane active" id="tab-description">
								این وبسایت با هدف ترویج و رونق مشاغل خانگی ایحاد شده . سعی ما براین است تا این امکان را برای کسانی که مشاغل خانگی مانند کیف دوزی ، جعبه کادو سازی ، طراحی ، و ... را انجام میدهند و قصد دارند که بهتر دیده شوند را در بستر وب و با استفاده از مباحث آی تی فراهم سازیم . این وبسایت با هدف ترویج و رونق مشاغل خانگی ایحاد شده . سعی ما براین است تا این امکان را برای کسانی که مشاغل خانگی

							</div>

							

							<div class="tab-pane" id="tab-review">

							  <form class="form-horizontal" id="form-review">

								<div id="review"></div>

								<h2>نظر خود را وارد کنید</h2>

								<div class="form-group required">

									<div class="col-sm-12">

										<label class="control-label" for="input-name">نام</label>

										<input type="text" name="name" value="" id="input-name" class="form-control" placeholder="نام خود را وارد کنید" />

									</div>

								</div>

								<div class="form-group required">

									<div class="col-sm-12">

										<label class="control-label" for="input-review">متن نظر</label>

										<textarea name="text" rows="5" id="input-review" class="form-control" placeholder="متن نظر خود را وارد کنید"></textarea>

									</div>

								</div>

								<div class="form-group required">

								  <div class="col-sm-12">

									<label class="control-label">امتیاز:</label>

									&nbsp;&nbsp;&nbsp; بد&nbsp;

									<input type="radio" name="rating" value="1" />

									&nbsp;

									<input type="radio" name="rating" value="2" />

									&nbsp;

									<input type="radio" name="rating" value="3" />

									&nbsp;

									<input type="radio" name="rating" value="4" />

									&nbsp;

									<input type="radio" name="rating" value="5" />

									&nbsp;خوب</div>

								</div>

								<div class="buttons clearfix">

								  <div class="pull-right">

									<button type="button" id="button-review" class="btn btn-primary">ارسال</button>

								  </div>

								</div>

							  </form>

							</div>

							

						</div>

					</div>

				</div>

				<!--Related Products code start here-->
	

				

			</div>

		</div>

	</div>


	
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


<!-- Mirrored from wptheme.co.in/menda-html/product1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2017 16:06:04 GMT -->
</html>

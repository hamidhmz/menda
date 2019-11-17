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

	<title>فروشگاه تخصص مشاغل خانگی</title>

	<!-- Bootstrap stylesheet -->
	<?php
	session_start();
	?>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

	<!-- owl-carousel -->

	<link href="jquery/owl-carousel/owl.carousel.css" rel="stylesheet">

	<!--select-->

	<link rel="stylesheet" href="js/dist/css/bootstrap-select.css">

	<!-- stylesheet -->

	<link href="css/style1.css" rel="stylesheet"/>



	<link href="css/style1_orange.css" title="style1_orange" rel="alternate stylesheet" />

	<link href="css/style1_seagreen.css"   title="style1_seagreen"   rel="alternate stylesheet" />

	<link href="css/style1_blue.css"  title="style1_blue"   rel="alternate stylesheet" />

	<link href="css/style1_pink.css"  title="style1_pink"  rel="alternate stylesheet" />

	<link href="css/style1_green.css"   title="style1_green"   rel="alternate stylesheet" />

	<link href="css/style1_manz.css"   title="style1_manz"   rel="alternate stylesheet" />
	<link href="css/style1.css" title="style1" rel="alternate stylesheet" />

	<!--magnific popup css-->

	<link href="jquery/magnific/magnific-popup.css" rel="stylesheet" media="screen">

	<!-- font-awesome -->

	<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">

	<!-- google fonts -->


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



<!--slider code start-->

<div class="slidertop">

	<div style="position: relative;" >

		<div class="item">

			<img src="images/img/slider.png" alt="slider" class="img-responsive bannerchange" />

		</div>
		<div class="slider-matn">
			<h1>به سایت تخصصی مشاغل خانگی خوش آمدید.</h1>
			<h3>سعی ما براین است تا بستری را فراهم کنیم تا افرادی که در خانه محصولی را تولی میکنند را با هزاران نفر از سراسر کشور به اشتراک بگذاریم</h3>
			<strong>همین حالا در سایت تخصصی مشاغل خانگی عضو شوید و محصول خود را در پربازدیدترین فروشگاه مشاغل خانگی به فروش بگذارید </strong>

			<a href="" class="btn btn-success">شروع به کار</a>

		</div>

	</div>


</div>

<!--slider code end-->



<!--home page content code start-->

<div class="container">

	<div class="row">

		<div id="content" class="col-sm-12">

			<div class="whowe">

				<h2>ویژگی کار ما</h2>

				<p>
					این وبسایت با هدف ترویج و رونق مشاغل خانگی ایحاد شده . سعی ما براین است تا این امکان را برای کسانی که مشاغل خانگی مانند کیف دوزی ، جعبه کادو سازی ، طراحی ، و ... را انجام میدهند و قصد دارند که بهتر دیده شوند را در بستر وب و با استفاده از مباحث آی تی فراهم سازیم . 
				</p>

				<a href="about.php">مطالعه بیشتر >></a>

			</div>				

		</div>

	</div>

</div>



<!--featured products code start-->

<div class="featured">

	<div class="container">

		<h3>آخرین محصولات اظافه شده</h3>

		<div class="row">


			<br>
			




			<?php
			$query="select * from product where active=1 order by id desc limit 0,8";
			$queryRun=$db->query($query);
			while($fetch=$queryRun->fetch_assoc()){
				?>

				<div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">

					<div class="product-thumb transition">

						<div class="image">

							<a href="product-detial.php?id=<?php echo $fetch['id']; ?>"><img src=<?php 



								$a=$fetch['id'];
								$query="select pic from pic where id_p='$a' order by id desc limit 0,1";
								$query1 =  $db->query($query);
								$fetch1=$query1->fetch_assoc();

								echo "upload/";
								echo $fetch1['pic'];


								?> alt="product image" title="محصول شماره <?php echo $fetch['id']; ?>" class="img-responsive" /></a>

							<div class="button-group">

								<a href="checkout.php?id=<?php echo $fetch['id']; ?>"  type="button" data-toggle="tooltip" title="اظافه به سبد"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

								<a href="product-detial.php?id=<?php echo $fetch['id']; ?>" type="button" data-toggle="tooltip" title="مشاهده جزییات "><i class="fa fa-eye"></i></a>

								<a href="index.php?id=<?php echo $fetch['id']; ?>&text=love" type="button" data-toggle="tooltip" title="اظافه به مورد علاقه"><i class="fa fa-heart"></i></a>

							</div>

						</div>

						<div class="caption">

							<h4><a href="product-detial.php"><?php echo $fetch['name']; ?></a></h4>

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

						</div>

					</div>

				</div>



				<?php
			}
			?>



			
			

		</div>
		<a href="search.php" class="btn btn-success font-lg pull-left">مشاهده بیشتر</a>
	</div>


</div>

<!--featured products code start-->



<div class="container-fluid">

	<!--sale banner--><?php
	$query="select * from banner order by id desc limit 0,1";
	$queryRun=$db->query($query);
	while($fetch=$queryRun->fetch_assoc()){
		?>

		<div class="banners">

			<a href="#"><img src="banner/<?php echo $fetch['pic']; ?>" alt="banner" class="img-responsive salechange" /></a>

		</div>
		<?php
	}
	?>

	<!--sale banner-->
</div>

<div class="featured">	
	<div class="container">

		<h3>پربازدیدترین محصولات</h3>

		<div class="row">

			<?php
			$query="select * from product where active=1 order by visit desc limit 0,8";
			$queryRun=$db->query($query);
			while($fetch=$queryRun->fetch_assoc()){
				?>

				<div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">

					<div class="product-thumb transition">

						<div class="image">

							<a href="product-detial.php?id=<?php  echo $fetch['id']; ?>">


								<img src=
								<?php 



								$a=$fetch['id'];
								$query="select pic from pic where id_p=$a order by id desc limit 0,1";
								$query1 =  $db->query($query);
								$fetch1=$query1->fetch_assoc();

								echo "upload/";
								echo $fetch1['pic'];


								?>


								  alt="product image" title="محصول شماره <?php echo $fetch['id']; ?>" class="img-responsive" /></a>

								<div class="button-group">

									<a href="checkout.php?id=<?php echo $fetch['id']; ?>"  type="button" data-toggle="tooltip" title="اظافه به سبد"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>

								<a href="product-detial.php?id=<?php echo $fetch['id']; ?>" type="button" data-toggle="tooltip" title="مشاهده جزییات "><i class="fa fa-eye"></i></a>

								<a href="index.php?id=<?php echo $fetch['id']; ?>&text=love" type="button" data-toggle="tooltip" title="اظافه به مورد علاقه"><i class="fa fa-heart"></i></a>

								</div>

							</div>

							<div class="caption">

								<h4><a href="product-detial.php"><?php echo $fetch['name']; ?></a></h4>

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

							</div>

						</div>

					</div>



					<?php
				}
				?>

			</div>
			<a href="search.php" class="btn btn-success font-lg pull-left">مشاهده بیشتر</a>
		</div>
	</div>


	<!--testimonail code start here-->

	<div class="testimonial">

		<div class="container">
			<h3 class="text-center font-white">برخی از نظرات کاربران و فروشنده ها</h3>
			<div class="user-view owl-carousel">

				<div class="col-sm-12">

					<div class="profile">

						<img src="images/pic.png" alt="profile" title="profile pic" class="img-responsive"/>

					</div>

					<div class="comment">

						<p>
							با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم 

						</p>

					</div>

				</div>

				<div class="col-sm-12">

					<div class="profile">

						<img src="images/pic2.png" alt="profile" title="profile pic" class="img-responsive"/>

					</div>

					<div class="comment">

						<p>
							با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم 

						</p>

					</div>

				</div>

				<div class="col-sm-12">

					<div class="profile">

						<img src="images/pic3.png" alt="profile" title="profile pic" class="img-responsive"/>

					</div>

					<div class="comment">

						<p>
							با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم 

						</p>

					</div>

				</div>

			</div>

		</div>

	</div>

	<!--testimonail code end here-->



	<!--latestblog code start here-->

	<div class="latestblog">

		<div class="container">

			<div class="row">

				<h2>آخرین پست های وبلاگ</h2>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">

					<div class="blogs">

						<div class="image">

							<img src="images/b1.jpg" alt="blog image" title="blog image" class="img-responsive"/>

						</div>

						<div class="blogcaption">

							<h4><a href="blogdetail.php">تیتر یا موضوع پست </a></h4>

							<p>
								با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون 

							</p>

							<ul class="list-inline">

								<li><i class="fa fa-comment" aria-hidden="true"></i> 2 نظر</li>

								<li><i class="fa fa-eye" aria-hidden="true"></i> 205 دیده شده</li>

								<li>ارسال توسط ادمین</li>

							</ul>

						</div>

					</div>

				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">

					<div class="blogs">

						<div class="image">

							<img src="images/b3.jpg" alt="blog image" title="blog image" class="img-responsive"/>

						</div>

						<div class="blogcaption">

							<h4><a href="index.php">تیتر یا موضوع پست </a></h4>

							<p>
								با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون 


							</p>

							<ul class="list-inline">

								<li><i class="fa fa-comment" aria-hidden="true"></i> 2 نظر</li>

								<li><i class="fa fa-eye" aria-hidden="true"></i> 205 دیده شده</li>

								<li>ارسال توسط ادمین</li>

							</ul>

						</div>

					</div>

				</div>

				<div class="col-sm-4 col-md-4 col-lg-4 col-xs-12">

					<div class="blogs">

						<div class="image">

							<img src="images/b2.jpg" alt="blog image" title="blog image" class="img-responsive"/>

						</div>

						<div class="blogcaption">

							<h4><a href="gallary.php">تیتر یا موضوع پست </a></h4>

							<p>
								با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون رو به افراد بیشتری بفروشیم با سلام میخواستم تشکر کنم از عوامل سایت تخصصی مشاغل خانگی که باعث شدن من و همه اونایی که توی خونه مشغول کاریم بنونیم تولیداتمون 


							</p>

							<ul class="list-inline">

								<li><i class="fa fa-comment" aria-hidden="true"></i> 2 نظر</li>

								<li><i class="fa fa-eye" aria-hidden="true"></i> 205 دیده شده</li>

								<li>ارسال توسط ادمین</li>

							</ul>

						</div>

					</div>

				</div>				

			</div>

		</div>

	</div>

	<!--latestblog code end here-->



	<!--Gallery code start here-->

	<div class="featured" style="padding: 10px 0;">
		<h3 class="text-center font-darck">گالری تصاویر ما</h3>
		<ul class="list-inline gallery owl-carousel">


			<?php
			$query="select * from pic order by id desc limit 0,10";
			$queryRun=$db->query($query);
			while($fetch=$queryRun->fetch_assoc()){
				?>


				<li class="item" style="width: 200px !important; height: 175px !important;">

					<div class="image" style="width: 100% !important; height: 100% !important;">

						<img alt="" class="img-responsive" style="width: 100% !important; height: 100% !important;" src="upload/<?php echo $fetch['pic']; ?>"/>

						<i class="fa fa-search-plus" aria-hidden="true"></i>

					</div>

				</li>


				<?php
			}
			?>



			
		</ul>

		<div class="modal fade gallry" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">

			<div class="modal-dialog">

				<div class="modal-content"> 

					<button type="button" class="close" data-dismiss="modal">&times;</button>	

					<div class="modal-body">                

					</div>

				</div>

			</div>

		</div>

		<a href="gallery.php" class="btn btn-success font-lg center-box">مشاهده بیشتر</a>
	</div>

	<!--Gallery code end here-->



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


</html>
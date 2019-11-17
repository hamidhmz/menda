<?php
require_once('db/db.php');
session_start();
if(isset($_SESSION["id"]))
{
?><!DOCTYPE html>

<html dir="ltr" lang="">


<!-- Mirrored from wptheme.co.in/menda-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2017 16:06:05 GMT -->
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<link href="images/fevicon.png" rel="shortcut icon">

<title>نهایی کردن خرید</title>

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

	if(isset($_GET['text'])) {
		$id_p=$_GET['id'];
		$id_u=$_SESSION['id'];
		$action=1;
		
		$query1="insert into buye (id,id_user,id_product,action) values ('','$id_u','$id_p','$action')";
		
		$query1Run=$db->query($query1);
echo $query1;
			$query1="select * from product where id=$id_p";

$query1Run=$db->query($query1);
$fetch=$query1Run->fetch_assoc();
$sell=$fetch['sell'];
$sell++;



		$query1="update product set sell=$sell where id=$id_p";
		$query1Run=$db->query($query1);
		if($query1Run){ ?>
		<script type="text/javascript">
			alert('پرداخت انجام شد');

		</script>
		
		<?php 
		header("Location:user.php");
	}else{?>
		<script type="text/javascript">
			alert('انجام نشد');

		</script>
	<?php 
}
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

				<li><a href="index.php">Home</a></li>

				<li><a href="checkout.php">checkout</a></li>  

			</ul>

		</div>

	</div>

	<!--breadcrumb end here-->

	

	<!--checkout page code start-->

	<div class="container">

		<div class="row">

			<div id="content" class="col-sm-12 checkout">

				<ul class="list-unstyled code-login">

					<li><h4>شما با اکانت خود وارد نشده اید برای ورود <a href="login.php">کلیک کنید</a></h4></li>

					<li></li>

				</ul>

				

					<div class=" center-box" style="width: 70%">

					  <?php
					$id=$_GET["id"];
					$query="select * from product where id=$id order by id desc  ";
					$queryRun=$db->query($query);
					while($fetch=$queryRun->fetch_assoc()){
							?>

						<h2><span>سفارش شما </span></h2>

						<hr>

						<div class="table-responsive">

							<table class="table table-bordered">

								<thead>

								  <tr>

									<td class="text-center">محصول</td>

									<td class="text-center">توضیحات</td>

								  </tr>

								</thead>

								<tbody>

									<tr>

										<td class="text-center">نام محصول</td>

										<td class="text-center"><?php echo $fetch['name']?></td>

									</tr>
									

									<tr>

										<td class="text-center"><b>قیمت</b></td>

										<td class="text-center">$<?php echo $fetch['price']?></td>

									</tr>
									<tr>

										<td class="text-center"><b>هزینه پستی</b></td>

										<td class="text-center">$3.00</td>

									</tr>

									<tr>

										<td class="text-center"><b>قیمت کل</b></td>

										<td class="text-center">$<?php  $nahae=$fetch['price']+3;echo $nahae;?></td>

									</tr>

								</tbody>

							</table>

						</div>	

						

						<div class="paymentbox">
                                <h5>یکی از درگاه های پرداخت را انتخاب کنید.</h5>
							<label>
							</label>

							<label>

								<input type="radio" name="option" value="" />&nbsp;بانک ملت

								<img src="images/pay.png" class="img-responsive" alt="paypal" title="paypal"/>

							

							</label>

							<div class="pull-right">

								<a href="checkout.php?id=<?php echo $fetch['id'];?>&text=done" type="submit" class="btn btnchkout">پرداخت و دریافت محصول</a>

							</div>

						</div>

						</div>
<?php}?>
				

			</div>

		</div>

	</div>

	<!--Checkout page code end-->	



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


<!-- Mirrored from wptheme.co.in/menda-html/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jan 2017 16:06:07 GMT -->
</html>
<?php
}
?>
<!DOCTYPE html>


<?php

session_start();
if(isset($_SESSION["id"]))
{
	?> <?php
	require_once('db/db.php');
	?>
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
		if(isset($_POST['submitpar'])){

			$userid=$_SESSION["id"];
            $shomare=$_POST['shomare'];
			$mablagh=$_POST['mablagh'];

			$query2="SELECT sellp FROM user WHERE  id =$userid";
			$query2Run=$db->query($query2);
			$fetch=$query2Run->fetch_assoc();
			$sellp=$fetch['sellp'];
			$sellpb=$sellp-$mablagh;

			if($sellpb>=0){




			$shomare=$_POST['shomare'];
			$mablagh=$_POST['mablagh'];
			$active=1;
			$userid=$_SESSION["id"];
			$sellpb=$sellp-$mablagh;
			$query3="update user set sellpb=$sellpb where id=$userid";
			
			$query3Run=$db->query($query3);

			$query1="insert into darkhast (id,id_user,mablagh,active,shomare) values ('',$userid,$mablagh,$active,'$shomare')";
			$queryRun=$db->query($query1);
			if($queryRun){ ?>
		<script type="text/javascript">
			alert('درخواست با موفقیت ثبت شد');
		</script>
		<?php
		

		}}elseif($sellpb<0){
			?>
		<script type="text/javascript">
			alert('درخواست با موفقیت ثبت نشد');
		</script>
		<?php
	}







		}

		if(isset($_POST['submitm'])) {
			$name=$_POST['name'];
			$price=$_POST['price'];

			$userid=$_SESSION["id"];
			$text=$_POST['text'];
			$gender=$_POST['gender'];
			include_once('jdf/jdf.php');
			$date=jdate('o-m-j');



			if (isset($gender)&&$gender=="کادویی") { $type=1; }elseif (isset($gender)&&$gender=="خوراک") { $type = 2; }
			elseif(isset($gender)&&$gender=="پوشاک"){ $type = 3; }


			$query1="insert into product (id,name,id_user,text,price,visit,type,sell,active) values ('','$name','$userid','$text','$price',0,'$type',0,1)";
			
			$query1Run=$db->query($query1);

			$query="SELECT id FROM product WHERE  name = '$name' and id_user = '$userid' and price = '$price' order by id desc limit 0,1"; 
			$queryRun=$db->query($query);

			$fetch=$queryRun->fetch_assoc();
			$idd=$fetch['id'];

			date_default_timezone_set("Iran");
			$_FILES["picture1"]["name"]=date('Y-m-d-H-i-s')."1.jpg";
			move_uploaded_file($_FILES["picture1"]["tmp_name"],
				"upload/" . $_FILES["picture1"]["name"]);
			$picture=$_FILES["picture1"]["name"];

			$query2="insert into pic (id,pic,id_p,action) values ('','$picture','$idd',1)";
			
			$query2Run=$db->query($query2);




			date_default_timezone_set("Iran");
			$_FILES["picture2"]["name"]=date('Y-m-d-H-i-s')."2.jpg";
			move_uploaded_file($_FILES["picture2"]["tmp_name"],
				"upload/" . $_FILES["picture2"]["name"]);
			$picture=$_FILES["picture2"]["name"];


			$query2="insert into pic (id,pic,id_p,action) values ('','$picture','$idd',1)";
			
			$query2Run=$db->query($query2);
			date_default_timezone_set("Iran");




			$_FILES["picture3"]["name"]=date('Y-m-d-H-i-s')."3.jpg";
			move_uploaded_file($_FILES["picture3"]["tmp_name"],
				"upload/" . $_FILES["picture3"]["name"]);
			$picture=$_FILES["picture3"]["name"];

			$query2="insert into pic (id,pic,id_p,action) values ('','$picture','$idd',1)";
			
			$query2Run=$db->query($query2);
			date_default_timezone_set("Iran");



			$_FILES["picture4"]["name"]=date('Y-m-d-H-i-s')."4.jpg";
			move_uploaded_file($_FILES["picture4"]["tmp_name"],
				"upload/" . $_FILES["picture4"]["name"]);
			$picture=$_FILES["picture4"]["name"];

			$query2="insert into pic (id,pic,id_p,action) values ('','$picture','$idd',1)";
			
			$query2Run=$db->query($query2);

		}

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

					<li><a href="index.php">صفحه اصلی </a></li>

					<li><a href="user.php">پروفایل من</a></li>  

				</ul>

			</div>

		</div>

		<!--breadcrumb end here-->



		<!--checkout page code start-->

		<div class="container">

			<div class="row">

				<div id="content" class="col-sm-12 checkout">

					<ul class="list-unstyled code-login">

						<li><h4>کاربر گرامی شما میتوانید در اینجا لیست خرید ها و علاقه مندی های خود و همچنین کیف پول خود را مشاهده کنید.</h4></li>

						<li><h4>برای ایجاد فروشگاه و به فروش گذاشتن محصولات خود به بخش محصولات من بروید</h4></li>

					</ul>



					<div class="row center-box" style="width: 90%">



						<h2><span>پنل کاربری شما</span></h2>

						<hr>
						<div class="" style="">

							<div class="col-sm-8">
								<div id="myTabContent" class="tab-content contact-form">
									<div class="tab-pane fade in active" id="detail">
										<!-- PERSONAL INFO TAB -->
										<div class="tab-pane active form">
											<div class="margin-top-20 margin-bottom-20">
												<table class="table ">
													<thead>
														<th class="text-right">نام محصول</th>
														<th class="text-right">نوع کالا</th>
														<th class="text-right">تولید کننده</th>
														<th class="text-right">قیمت</th>
													</thead>
													<?php
													$iddd=$_SESSION["id"];
													$query="select * from buye where id_user=$iddd order by id desc  ";
													$queryRun=$db->query($query);
													while($fetch=$queryRun->fetch_assoc()){
														?>
														<tbody>



															<td>
																<?php 
																$a=$fetch['id_product'];
																$query="select name from product where id='$a'  ";
																$query1 =  $db->query($query);
																$fetch1=$query1->fetch_assoc();
																echo $fetch1['name'];
																?>
															</td>


															<td><?php 
																$a=$fetch['id_product'];
																$queryy="select type from product where id='$a'  ";
																$query2 =  $db->query($queryy);
																$fetch2=$query2->fetch_assoc();
																if($fetch2['type']=='1'){echo 'کادویی';}elseif($fetch2['type']==2){echo 'خوراک';}else{echo 'پوشاک';}
																?></td>



																<td><?php 
																	$a=$fetch['id_product'];
																	$queryyy="select id_user from product where id='$a'  ";
																	$query3 =  $db->query($queryyy);
																	$fetch3=$query3->fetch_assoc();
																	$R=$fetch3['id_user'];
																	$queryyy="select companyname from user where id='$R'  ";
																	$query3 =  $db->query($queryyy);
																	$fetch3=$query3->fetch_assoc();
																	echo $fetch3['companyname'];
																	?></td>



																	<td><?php 
																		$a=$fetch['id_product'];
																		$queryy="select price from product where id='$a'  ";
																		$query2 =  $db->query($queryy);
																		$fetch2=$query2->fetch_assoc();
																		echo $fetch2['price'];
																		?>
																	</td>





																</tbody><?php
															}
															?>

														</table>
													</div>
												</div>  
											</div>


											<!-- PERSONAL INFO TAB -->
											<div class="tab-pane fade" id="comments">
												<div class="tab-pane" id="tab_1_2">
													<div class="margin-top-20 margin-bottom-20">
														<table class="table ">
															<thead>
																<th class="text-right">نام محصول</th>
																<th class="text-right">نوع کالا</th>
																<th class="text-right">تولید کننده</th>
																<th class="text-right">قیمت</th>
																<th class="text-right">عملیات</th>
															</thead>
															<?php
															$iddd=$_SESSION["id"];
															$query="select * from love where id_user=$iddd order by id desc ";
															$queryRun=$db->query($query);
															while($fetch=$queryRun->fetch_assoc()){
																?>
																<tbody>


																	<td><?php 
																		$a=$fetch['id_product'];
																		$query="select name from product where id='$a'  ";
																		$query1 =  $db->query($query);
																		$fetch1=$query1->fetch_assoc();
																		echo $fetch1['name'];
																		?></td>



																		<td><?php 
																			$a=$fetch['id_product'];
																			$query="select type from product where id='$a'  ";
																			$query1 =  $db->query($query);
																			$fetch1=$query1->fetch_assoc();
																			echo $fetch1['type'];
																			?></td>


																			<td><?php 
																				$a=$fetch['id_product'];
																				$queryyy="select id_user from product where id='$a'  ";
																				$query3 =  $db->query($queryyy);
																				$fetch3=$query3->fetch_assoc();
																				$R=$fetch3['id_user'];
																				$queryyy="select companyname from user where id='$R'  ";
																				$query3 =  $db->query($queryyy);
																				$fetch3=$query3->fetch_assoc();
																				echo $fetch3['companyname'];
																				?></td>


																				<td><?php 
																					$a=$fetch['id_product'];
																					$queryy="select price from product where id='$a'  ";
																					$query2 =  $db->query($queryy);
																					$fetch2=$query2->fetch_assoc();
																					echo $fetch2['price'];
																					?></td>


																					<td>
																						<a href="product-detial.php?id=<?php echo $fetch['id_product'];?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
																						<a href="delete.php?id=<?php echo $fetch['id'];?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>

																					</td>


																				</tbody>
																				<?php 
																			}

																			?>
																		</table>
																	</div>
																</div>
															</div>

															<!-- PERSONAL INFO TAB -->
															<div class="tab-pane fade" id="products">
																<div class="tab-pane margin-bottom-20" id="tab_1_2">
																	<div class="margin-top-20 margin-bottom-20">
																		<table class="table ">

																			<thead>
																				<th class="text-right">نام محصول</th>
																				<th class="text-right">نوع کالا</th>
																				<th class="text-right">تعداد سفارش</th>
																				<th class="text-right">قیمت</th>
																				<th class="text-right">وضعیت</th>
																			</thead>
																			<?php
																			$iddd=$_SESSION["id"];
																			$query="select * from product where id_user=$iddd order by id desc ";
																			$queryRun=$db->query($query);
																			while($fetch=$queryRun->fetch_assoc()){
																				?>
																				<tbody>

																					<td><?php 

																						echo $fetch['name'];
																						?></td>

																						<td> <?php 

																							echo $fetch['type'];
																							?></td>

																							<td><?php 

																								echo $fetch['sell'];
																								?></td>

																								<td><?php 

																									echo $fetch['price'];
																									?></td>

																									<td><?php

																										if($fetch['active']==0){
																											echo "<a href='showNotify.php?id=".$fetch['id']."' class='btn btn-success btn-xs' ><i class='fa fa-check'></i></a>";
																										}

																										if($fetch['active']==1){
																											echo "<a href='hideNotify.php?id=".$fetch['id']."' class='btn btn-danger btn-xs' ><i class='fa fa-close'></i></a>";
																										}?></td>

																									</tbody>
																									<?php
																								}
																								?>
																							</table>
																						</div>
																					</div>
																					<div class="margin-top-40 margin-bottom-20 " style="border-top: 4px solid #36c6d3; margin: 40px 0 20px">

																						<h3 style="color: #36c6d3">ثبت محصول جدید برای فروش</h3>
																						<form method="post" role="form" enctype="multipart/form-data" action="#">
																							<div class="form-group">
																								<label class="control-label">نام</label>
																								<input type="text" name="name" placeholder="نام محصول را وارد کنید" class="form-control" />
																							</div>
																							<div class="form-group">
																								<label class="control-label">قیمت</label>
																								<input type="text" name="price" placeholder="قیمت محصول را وارد کنید" class="form-control" /> 
																							</div>
																							<div class="form-group">
																								<div class="row">
																									<label class="control-label ">نوع کالا</label>
																								</div>
																								<div class="noe-pro col-sm-1">
																									<span>پوشاک</span><input type="radio" name="gender"  class="checkbox" value="پوشاک" >
																								</div>
																								<div class="noe-pro col-sm-1">
																									<span>خوراک</span><input type="radio" name="gender"  class="checkbox" value="خوراک" >
																								</div>
																								<div class="noe-pro col-sm-1">
																									<span>کادویی</span><input type="radio" name="gender"  class="checkbox" value="کادویی" >
																								</div>
																							</div>
																							<div class="form-grop">
																								<label class="control-label">توضیحات کامل محصول</label>
																								<textarea type="text" cols="8" rows="6" name="text" placeholder="توضیحات کامل محصول را وارد کنید" class="form-control" ></textarea>
																							</div>
																							<div class="form-group">
																								<label class="control-label">عکس محصول</label>
																								<div class="form-group">
																									<div class="fileinput fileinput-new" data-provides="fileinput">

																										<div>
																											<div class="btn default btn-file">
																												<span class="fileinput-new"> انتخاب تصویر </span>
																												<span class="fileinput-exists"> تغییر </span>
																												<input type="file" name="picture1"> 
																												<input type="file" name="picture2">
																												<input type="file" name="picture3">
																												<input type="file" name="picture4">
																											</div>

																										</div>
																									</div>

																								</div>
																							</div>
																							<div class="margiv-top-10">
																								<input type="submit" name="submitm" class="btn btn-success" >

																								<button type="reset" class="btn btn-default"  >پاک کردن</button>  
																							</div>
																						</form>

																					</div>
																				</div>

																				<!-- END PERSONAL INFO TAB -->

																				<div class="tab-pane fade" id="money">
																					<div class="" >
																						<div class="" id="">
																							<div class="tab-pane margin-bottom-20" id="">
																								<div class="margin-top-20 margin-bottom-20">
																									<table class="table ">
																										<thead>
																											<th class="text-right">تعداد فروش من</th>
																											<th class="text-right">کل درآمد من</th>
																											<th class="text-right">مالیات</th>
																											<th class="text-right">وجه قابل دریافت</th>

																										</thead>
																										<tbody >

																											<?php
																											$sell = $sellp = 0;


																											$iddd=$_SESSION["id"];
																											$query="select * from product where id_user=$iddd order by id desc ";

																											$queryRun=$db->query($query);
																											while($fetch=$queryRun->fetch_assoc()){
																												$sell += ((int) $fetch['sell']);
																												$sellp += (((int) $fetch['sell']) * ((int) $fetch['price']));


																											}
																											?>
																											<td><?php echo $sell; ?></td>
																											<td> <?php echo $sellp;
																											$iddd=$_SESSION["id"];
																												$query1="update user set sellp=$sellp where id=$iddd";
																										$query1Run=$db->query($query1);
																											 ?></td>
																											<td>3%</td>
																											<td><?php $query="SELECT sellpb FROM user WHERE  id = $iddd  "; 
																									$queryRun=$db->query($query);
																									while($fetch1=$queryRun->fetch_assoc()){
																									 echo $fetch1['sellpb'];}?></td>


																											


																										</tbody>
																									</table>
																								</div>
																							</div>
																							<div class="margin-top-40 margin-bottom-20 " style="border-top: 4px solid #36c6d3; margin: 40px 0 20px">

																								<h3 style="color: #36c6d3">برای دریافت وجه این فیلد ها را پر کنید</h3>
																								<form role="form" method="post" action="#">
																									<div class="form-group">
																										<label class="control-label">مبلغ دریافتی</label>
																										<input type="text" placeholder="مبلغ دریافتی را وارد کنید" name="mablagh" class="form-control" />
																									</div>
																									<div class="form-group">
																										<label class="control-label">شماره حساب</label>
																										<input type="text" name="shomare" placeholder="شماره حساب را وارد کنید" class="form-control" /> 
																									</div>


																									<div class="margiv-top-10">
																										<input type="submit" name="submitpar" class="btn btn-success" value="دریافت">
																										
																										<button type="reset" class="btn btn-default"  >پاک کردن</button>  
																									</div>
																								</form>

																							</div>
																						</div>

																					</div>
																				</div>

																			</div>
																		</div>

																		<div class="col-sm-4">
																			<div class="center-box" style="" >
																				<img src="images/pic3.png" class="img-responsive img-circle">
																			</div>
																			<h4 class="text-center margin-top-40">نام کاربر</h4>

																			<div class="col-sm-12 margin-top-30">
																				<div class="portlet-title tabbable-line">
																					<ul class="nav nav-tabs">
																						<li class="active " style="float: none;">
																							<a href="#detail" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">خرید های من</a>
																						</li>
																						<li class=" " style="float: none;">
																							<a href="#comments" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">علاقه مندی ها</a>
																						</li>
																						<li class=" " style="float: none;">
																							<a href="#products" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">محصولات من</a>
																						</li>
																						<li class=" " style="float: none;">
																							<a href="#money" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">کیف پول من</a>
																						</li>
																						<li class=" " style="float: none;">
																							<a href="logout.php" style="display: block; font-size: 17px" >خروج از حساب</a>
																						</li>


																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</form>
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
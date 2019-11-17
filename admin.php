<?php
    require_once('db/db.php');
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>پنل مدیریت </title>


<!-- Bootstrap stylesheet -->

<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- owl-carousel -->

<link href="jquery/owl-carousel/owl.carousel.css" rel="stylesheet">

<!--select-->
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" href="js/dist/css/bootstrap-select.css">

<!-- stylesheet -->

<link href="css/style1.css" rel="stylesheet"/>

<style type="text/css">
	
	li.active{
		background-color: #32bdef;
	}
	li.active a{
		background-color: rgba(42, 181, 237, 0.1) !important;
	}

	.user-box{
		margin: 20px;
	}
	.user-box .box{
		width: 30%;
		padding: 20px;
		border-radius: 4px;
		float: right;
		margin: 10px;
	}
	.user-box .box i{
		font-size: 35px;
		margin: auto;
		display: table;
		color: #32bdef
	}
	.user-box .box span{
		margin: auto;
		display: table;
		text-align: center;
		font-size: 17px;
	}
	.red{
		background-color: rgba(255,0,0,.3);
	}
	.gerin{
		background-color: rgba(12, 254, 15,.4);
	}
	.orang{
		background-color: rgb(252, 153, 15);
	}
	.info{
		background-color: rgba(32, 39, 245,0.4)
	}

	.img-box{
		width: 90px;
		height: 90px;
		position: relative;
		float: right;
   		 margin: 5px;
	}
	.img-box img{
		width: 100%;
		height: 100%;
		border-radius: 50%;
	}
	.img-box .img-action{
		position: absolute;
		top: 1px;
		left: 1px;
	}
	.bgadmin-col4{
		background-color: rgba(0,0,0,.1);
	}
</style>
</head>
<body style="background-image: url(images/img/bgadmin.jpg);">

<div class="container">
	  <div class="row" style="margin-top: 150px; background-color: #ffffff;border-radius: 5px; padding: 20px">
          

        <div class="col-sm-4 bgadmin-col4" style="float: right;">
    		
    		<h3 class="text-center margin-top-40">پنل مدیریت</h3>
    		
    		<div class="col-sm-12 margin-top-30" style="margin: 50px 0">
            	<div class="portlet-title tabbable-line">
                    <ul class="nav nav-tabs">
                        <li class="active " style="float: none;">
                            <a href="#admin" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">داشبورد</a>
                        </li>
                         <li class=" " style="float: none;">
                            <a href="#pool" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">درخواست های پول</a>
                        </li>
                        <li class=" " style="float: none;">
                            <a href="#detail" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">کاربران</a>
                        </li>
                        <li class=" " style="float: none;">
                            <a href="#comments" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">محصولات</a>
                        </li>
                        <li class=" " style="float: none;">
                            <a href="#products" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">تماس ها</a>
                        </li>
                        <li class=" " style="float: none;">
                            <a href="#gallery" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">گالری</a>
                        </li>
                        
                    </ul>
               </div>
            </div>
    	</div>

    	<div class="col-sm-8" style="float: right;">
    		<div id="myTabContent" class="tab-content contact-form">
    			<div class="tab-pane fade in active" id="admin">
               		 <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active form">
                    	<div class="user-box row">
                    		<div class="box red">
                    			<i class="fa fa-user"></i>
                    			<span>تعداد کاربران</span><br>
                    			<span><?php $query2="SELECT COUNT(id) as count FROM user";
            $query2Run=$db->query($query2);$fetch=$query2Run->fetch_assoc();
            echo $fetch['count'];?></span>
                    		</div>
                    
                    
                    		<div class="box gerin">
                    			<i class="fa fa-shopping-bag"></i>
                    			<span>تعداد محصولات</span><br>
                    			<span><?php $query2="SELECT COUNT(id) as count FROM product";
            $query2Run=$db->query($query2);$fetch=$query2Run->fetch_assoc();
            echo $fetch['count'];?></span>
                    		</div>
                   
                    
                    		<div class="box info">
                    			<i class="fa fa-shopping-cart"></i>
                    			<span>تعداد فروش</span><br>
                    			<span><?php $query2="SELECT COUNT(id) as count FROM buye";
            $query2Run=$db->query($query2);$fetch=$query2Run->fetch_assoc();
            echo $fetch['count'];?></span>
                    		</div>
                   
                       
                    		<div class="box orang">
                    			<i class="fa fa-money"></i>
                    			<span>کل درآمد</span><br>
                    			<span><?php $sellp = 0;

                                                                                                            $query="select * from user  ";

                                                                                                            $queryRun=$db->query($query);
                                                                                                            while($fetch=$queryRun->fetch_assoc()){
                                                                                                                $sellp += ((int) $fetch['sellp']);
                                                                                                              


                                                                                                            }
                                                                                                            echo $sellp;
                                                                                                            ?></span>
                    		</div>
                    
                      </div>  
                 </div>
             </div>

               <div class="tab-pane fade " id="detail">
               		 <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active form">
                    	<div class="user-box row">
                    		<div class="box red">
                    			<i class="fa fa-user"></i>
                    			<span>تعداد کاربران</span>
                    			<span><?php $query2="SELECT COUNT(id) as count FROM user";
            $query2Run=$db->query($query2);$fetch=$query2Run->fetch_assoc();
            echo $fetch['count'];?></span>
                    		</div>
                    	</div>
                         <div class="" style="margin-top: 50px; clear: both;">
                         	<table class="table ">
                         		<thead>
                         			<th class="text-right">نام کاربر</th>
                         			<th class="text-right">نوع کاربر</th>
                         			<th class="text-right">تعداد خرید</th>
                         			<th class="text-right">وضعیت</th>
                         		</thead>
                         		<tbody>
                         			<td>sv</td>
                         			<td> sfs</td>
                         			<td>sg</td>
                         			<td>
                         				<a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                         				<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                         			</td>
                         		</tbody>
                         	</table>
                         </div>
                      </div>  
                 </div>

                 <div class="tab-pane fade " id="pool">
               		 <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane active form">
                    	<div class="user-box row">
                    		<div class="box orang">
                    			<i class="fa fa-money"></i>
                    			<span>کل درآمد</span>
                    			<span>125</span>
                    		</div>
                    	</div>
                         <div class="" style="margin-top: 50px; clear: both;">
                         	<table class="table ">
                         		<thead>
                         			<th class="text-right">نام کاربر</th>
                         			<th class="text-right">مبلغ درخواستی</th>
                         			<th class="text-right">تاریخ درخواست</th>
                         			<th class="text-right">شماره حساب کاربر</th>
                         			<th class="text-right">وضعیت</th>
                         		</thead>
                         		<tbody>
                         			<td>sv</td>
                         			<td>sfs</td>
                         			<td>sg</td>
                         			<td>sg</td>
                         			<td>
                         				<a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                         				<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                         			</td>
                         		</tbody>
                         	</table>
                         </div>
                      </div>  
                 </div>

                   
               		 <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane fade" id="comments">
                       <div class="tab-pane" id="tab_1_2">
                            <div class="user-box row">
	                    		<div class="box gerin">
	                    			<i class="fa fa-user"></i>
	                    			<span>تعداد محصولات</span>
	                    			<span>125</span>
	                    		</div>
                    	    </div>
                            <div class="s" style="margin-top: 50px; clear: both;">
                         	<table class="table ">
                         		<thead>
                         			<th class="text-right">نام محصول</th>
                         			<th class="text-right">نوع کالا</th>
                         			<th class="text-right">تولید کننده</th>
                         			<th class="text-right">قیمت</th>
                         			<th class="text-right">وضعیت</th>
                         		</thead>
                         		<tbody>
                         			<td>sv</td>
                         			<td> sfs</td>
                         			<td>sg</td>
                         			<td>gr</td>
                         			<td>
                         				<a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                         				<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                         			</td>
                         		</tbody>
                         	</table>
                         </div>
                        </div>
                   </div>
                     
                     <!-- PERSONAL INFO TAB -->
                    <div class="tab-pane fade" id="products">
                       <div class="tab-pane margin-bottom-20" id="tab_1_2">
                            <div class="d" style="margin-top: 50px; clear: both;">
                         	<table class="table ">
                         		<thead>
                         			<th class="text-right">نام فرستنده</th>
                         			<th class="text-right">متن پیام</th>
                         			<th class="text-right">ایمیل فرستنده</th>
                         			<th class="text-right">وضعیت</th>
                         		</thead>
                         		<tbody>
                         			<td>sv</td>
                         			<td style="width: 25%"> sfs</td>
                         			<td>10</td>
                         			<td>
                         				<a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                         				<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                         			</td>
                         		</tbody>
                         	</table>
                         </div>
                        </div>
                       
                   </div>

                    <!-- END PERSONAL INFO TAB -->

                     <div class="tab-pane fade" id="gallery">
                       <div class="tab-pane margin-bottom-20" id="tab_1_2">
                       		<div class="user-box row">
	                    		<div class="box gerin">
	                    			<i class="fa fa-photo"></i>
	                    			<span>تعداد تصاویر</span>
	                    			<span>125</span>
	                    		</div>
                    	    </div>
                            <div class="d" style="margin-top: 50px; clear: both;">
                            	<div class="portlet-title tabbable-line">
				                    <ul class="nav nav-tabs">
				                        <li class="active " style="float: right;">
				                            <a href="#gallery-in" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">عکس های موجود در گالری</a>
				                        </li>
				                        <li class=" " style="float: right;">
				                            <a href="#gallery-out" style="display: block; font-size: 17px" data-toggle="tab" aria-expanded="false">اظافه کردن عکس جدید</a>
				                        </li>

				                    </ul>
				               </div>
                            	<div id="myTabContent" class="tab-content contact-form">
    								<div class="tab-pane fade in " id="gallery-in">
    									<div class="tab-pane active fade in" id="tab_1_2" style="margin-top: 30px">
			                         	    <div class="img-box">
			                         	    	<img src="images/b2.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	    <div class="img-box">
			                         	    	<img src="images/b2.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	    <div class="img-box">
			                         	    	<img src="images/b2.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	    <div class="img-box">
			                         	    	<img src="images/b2.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	    <div class="img-box">
			                         	    	<img src="images/b2.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	</div>
		                         	</div>
		                         	<div class="tab-pane fade " id="gallery-out">
		                         		<div class="tab-pane " id="tab_1_2" style="margin-top: 30px">
			                         	    <div class="img-box">
			                         	    	<img src="images/b3.jpg" />
			                         	    	<div class="img-action">
			                         	    		<a href="" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
			                         	    	</div>
			                         	    </div>
			                         	</div>
		                         	</div>
		                        </div>
                            </div>
                        </div>
                       
                   </div>



                </div>
            </div>
    	</div>
    	
    	
    </div>
</div>


<script src="jquery/jquery-2.1.1.min.js" type="text/javascript"></script>

<!-- bootstrap js -->

<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


</body>
</html>
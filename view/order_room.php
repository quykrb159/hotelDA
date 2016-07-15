<?php
	$room_id = ($_GET['room_id']);
require_once('../admin/include/config.php');
	require_once('../admin/include/room_db.php');
	require_once('../admin/include/get_list.php');
	require_once('../admin/link.php');
	$rooms=get_room($room_id);
	$cities=get_city();
?>
<!DOCTYPE html>
<html>
<head>
<title>Blue River Hotel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nhà nghỉ giá rẽ, Motel giá rẻ, Cheap motel, Blue river, Blueriverdn, Nhà khách giá rẻ tại đà nẵng, Nhà nghỉ đà nẵng, Nhà khách đà nẵng, Nhà nghỉ giá rẻ đà nẵng," />
<meta name="description" content="Nhà nghỉ giá rẽ tại đà nẵng, tiện nghi sang trọng, thoáng mát sạch sẽ, vị trí đắc địa" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link href="<?php echo $plink;?>admin/img/favicon.ico" rel="shortcut icon">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<link href="admin/css/system.css" rel="stylesheet">
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="images/icon1.png" type="image/x-icon" rel="shortcut icon">
<link href="admin/css/datepicker.css" rel="stylesheet" />
<script src="admin/js/jquery-1.12.4.min.js"></script>
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<script src="admin/js/bootstrap-datepicker.js"></script>

<link href="admin/css/styles.css" rel="stylesheet">
 <!-- script-for-menu -->
<script>
	$( "span.menu" ).click(function() {
	$( "ul.cl-effect-1" ).slideToggle( 300, function() {
	// Animation complete.
	});
	});
</script>
<!-- script-for-menu -->	
<script>
		$(document).ready(function() {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
</script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="admin/js/typed.js" type="text/javascript"></script>
    <script>
    $(function(){

        $("#typed").typed({
            // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
            stringsElement: $('#typed-strings'),
            typeSpeed: 30,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
            callback: function(){ foo(); },
            resetCallback: function() { newTyped(); }
        });

        $(".reset").click(function(){
            $("#typed").typed('reset');
        });

    });

    function newTyped(){ /* A new typed object */ }

    function foo(){ console.log("Callback"); }

    </script>
<style type="text/css">

	.btn-book{
	color: #0098da !important; 
	background-color: #fff !important; 
	border:1px #0098da solid;
	transition: all 0.5s;	
	}
	.btn-book:hover{
	background: #0098da !important;
	color: #fff !important;
	border: 1px #fff solid !important;
	transition: all 0.5s;
}

	.room_detail{
	padding: 10px;
	border: 1px solid #0098da;
	border-radius: 	10px;
}

	.room_content h3, .room_content .room_description, .room_content .room_button{
	margin-top:20px;
	}	


	.list_room_title{
		color: #0098da;
		font-weight:600;
		text-shadow: #ccc 0 1px 0, #c9c9c9 0 2px 0, #bbb 0 3px 0, #b9b9b9 0 4px 0, #aaa 0 5px 0,rgba(0,0,0,.1) 0 6px 1px, rgba(0,0,0,.1) 0 0 5px, rgba(0,0,0,.3) 0 1px 3px, rgba(0,0,0,.15) 0 3px 5px, rgba(0,0,0,.2) 0 5px 10px, rgba(0,0,0,.2) 0 10px 10px, rgba(0,0,0,.1) 0 20px 20px;
	}

	        /* code for animated blinking cursor */
        .typed-cursor{
            opacity: 1;
            font-weight: 100;
            -webkit-animation: blink 0.7s infinite;
            -moz-animation: blink 0.7s infinite;
            -ms-animation: blink 0.7s infinite;
            -o-animation: blink 0.7s infinite;
            animation: blink 0.7s infinite;
        }
        @-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-webkit-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-moz-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-ms-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
        @-o-keyframes blink{
            0% { opacity:1; }
            50% { opacity:0; }
            100% { opacity:1; }
        }
</style>

</head>
<body>
<?php
	include('../include/menu.php');
?>
	<div class="container" style="background: #fff; padding: 0; padding-top : 50px;  padding-bottom : 80px; width:100%;">
		<div class="row" style="width:90%; margin:auto;">
			<div class="col col-md-7 col-xs-12 room">
				<article class="" style="min-height: 403px;">
					<div class="item-image">
						<img style="width: 100%;" itemprop="thumbnailUrl" alt="" src="images/room/phong101.jpg">
					</div>

					<div class="room_content">
						<h3>
							<div class="room_title pull-left">
								<p><?php $type=get_room_type_id($rooms['room_type_id']);echo $type['name']; ?></p>
							</div>
							<div class="room_price pull-left">
								<p > <?php echo $rooms['price'];?><sup>đ</sup></p>
							</div>
						</h3>
						<div class="clearfix"></div>
						<div class="room_description">
							<p><?php echo $rooms['description'];?></p>
						</div>
						<div class="clearfix"></div>
					</div>
				</article>
			</div>

			<div class="col col-md-5 col-xs-12">
				<form method="POST" action ="<?php echo $plink;?>/model/add_room_order.php?id=<?php echo $_GET['id']?>" id="form">
					<div class="row col-md-12" style="padding: 0px; margin:0px;">
						<section class="panel">
						      <header class="panel-heading" style="text-align:center">
						         THÔNG TIN ĐẶT PHÒNG
						      </header>
						      <div class="col-md-12" style="padding: 0px; margin:0px;">
						            <div class="col-md-6 form-group">
										<label for="1">Tên</label>
										<input type="text" class="form-control" id="1" name="name" required>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="">Giới tính</label>
										<select class="form-control" id="4" name="gender" required="">
											<option value="">Giới tính</option>
											<option value="Nam">Nam</option>
											<option value="Nữ">Nữ</option>
										</select>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="5">Ngày sinh</label>
										<input type="date" class="form-control" id="5" name="birth_day" required>
						            </div>
						            <div class="col-md-6 form-group">
										<label for="6">Số chứng minh</label>
										<input type="text" class="form-control" id="6" required pattern="[0-9]{9}" name="passport">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="7">Điện thoại</label>
										<input type="tel" class="form-control" id="7" required name="phone">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="8">Email</label>
										<input type="email" class="form-control" id="8" required name="email">
						            </div>
						            <div class="col-md-6 form-group">
										<label for="9">Địa chỉ</label>
										<input type="text" class="form-control" name="adress" id="9" required>
						            </div>
					                <div class="col-md-6 form-group">
									<label for="10">Thành phố</label>
									<select class="form-control" id="10" name="city" required>
										<option value="">Thành phố</option>
										<?php foreach ($cities  as $city ):;?>
										<option value="<?php echo $city['id'];?>"><?php echo $city['name'];?></option>
										<?php endforeach;?>
									</select>
					              	</div>
					              	<div class="col-md-5">
									</div>			              
									<button onclick="return confirm('Bạn có muốn đặt phòng?')?true:false;" type="submit" class="btn btn-primary">Đặt phòng
									</button>

									<div class="col-md-5">
									</div>
								</div>
							</section>					
					</div>
				</form>

			</div>								
		</div>
	</div>
	<?php include('../include/footer.php'); ?>
</body>
</html>
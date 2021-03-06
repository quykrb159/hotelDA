<?php
	require_once('admin/include/config.php');
	require_once('admin/include/get_list.php');
	require_once('admin/include/customer_db.php');
	require_once('admin/include/room_db.php');
	require_once('admin/link.php');
	session_start();
	if (isset($_SESSION['email'])==NULL || isset($_POST['type_room'])==NULL) {
		header ("Location: ");
	}
	$rooms=get_list_room();
?>  
<!DOCTYPE html>
<html>
<?php include('include/head.php'); ?>
<body>
<?php
	include('include/menu.php');
?>
<div class="container wrapper-body" style=" width : 100% ; margin: auto;" >
	<div class="row" style="width:90%; margin: auto;">
	<h2 class="list_room_title" style="text-align:center; margin:20px 0px;">DANH SÁCH PHÒNG</h2>
	<?php foreach ($rooms as $room):;?>
		<div class="col col-sm-4 room" style="padding: 15px;">
			<article class="room_detail">
				<div class="item-image" >
					<img style="width:100%;" itemprop="thumbnailUrl" alt="" src="/hotelDA/admin/images/room/<?php echo $room['img'];?>">
				</div>

				<div class="room_content">
					<h3>
						<div class="room_title pull-left">
							<p><?php $type=get_room_type_id($room['room_type_id']);echo $type['name']; ?></p>
						</div>
						<div class="room_price pull-right">
							<p ><?php echo $room['price'];?><sup>đ</sup></p>
						</div>
					</h3>
					<div class="clearfix"></div>
					<div class="room_description">
						<p><?php echo substr($room['description'],0,150)." ... ";?></p>
					</div>
					<div class="clearfix"></div>
					<div class="room_button" >
						<a class="btn-book btn btn-info" href="detail.php?room_id=<?php echo $room['id'];?>"><span>Chi tiết</span></a>
					</div>
				</div>
			</article>
		</div>
	<?php endforeach;?>										
	</div>
</div>
	<?php include('include/footer.php'); ?>
</body>
</html>




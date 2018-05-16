<?php require_once('template/header.php'); ?>
<?php require_once('template/main-left.php'); ?>
<div class="main-right">
		<?php 
				if(isset($_SESSION["email"])){
					$email=$_SESSION["email"];
				}
				$sql="SELECT id,email,hoten FROM taikhoan WHERE email='{$_SESSION["email"]}'";
				$query=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
				$nguoidung=$row["id"];
			 ?>
	<h1> Xin chào quản trị viên: <?php
		$hoten=$row["hoten"];
		$h1=explode(" ",$hoten);
		$h2=end($h1);
		echo $h2;

	 ?></h1>

	<p style="width:18%;height:40px;line-height:40px;font-size:18px;background:#00CC66;color:white;border-top-right-radius:0.5em;border-top-left-radius:0.5em;text-align:center;"> Thông tin phiên bản</p>
	<ul class="info-menu">
		<li><i class="fa fa-yelp"></i> Nhóm thiết kế: Tuyển Giảng, Quang Hiếu, Thế Anh</li>
		<li><i class="fa fa-yelp"></i> Trang web: Bán oto Honda</li>
		<li><i class="fa fa-yelp"></i> Phiên bản: Version :2.0</li>
	</ul>

	 <div class="menu-tab">
		<a href="../"><i class="fa fa-home"></i> Xem Website</a>
	</div><!--menu-tab-->
</div><!--main-right-->
<?php require_once('template/bottom.php'); ?>
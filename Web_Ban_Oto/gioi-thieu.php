<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
	<p style="width:100%;height:50px;line-height:50px;color:#333;font-size:30px;text-align:center;margin:10px 0 10px 0;"> Giới thiệu </p>
	<div class="main"  style="background:#f7f7f7;padding:0.5em;">
		<p> Công ty TNHH HAN NAM được Honda Việt Nam chính thức chọn làm đối tác chiến lược và được phép mở Đại lý ủy nhiệm của Honda Ô tô 5S tại Bắc Ninh được gọi là Honda Ôtô Bắc Ninh, các dòng xe được bán tại Honda gồm:
		</p>
		<ul style="margin:20px 0 20px 50px;">
			<?php 
				$sql="SELECT * FROM danhmuc";
				$query=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
				<li><a href="list-category.php?id=<?php echo $row['madanhmuc']; ?>"><i class="fa fa-angle-right"></i> <?php echo $row["tendanhmuc"]; ?></a></li>
			<?php endwhile; ?>
		</ul>

	Quy mô Đại lý Honda Ôtô đạt tiêu chuẩn 5S.<br><br>

	Với diện tích xây dựng lớn nhất trong khối ô tô khu vực Đông bắc Hà nội, Honda Ôtô Bắc Ninh bao gồm 5 tầng với tổng diện tích gần 20.000m2. Hiện tại Honda ô tô Bắc Ninh là Đại lý đầu tiên đạt tiêu chuẩn 5S trong khu vực, dự kiến được chính thức khai trương vào tháng 3 năm 2017. Honda Ôtô Bắc Ninh được đánh giá là Showroom tốt nhất, quy mô lớn, trang thiết bị tiên tiến và hiện đại Nhất tại Bắc Ninh.<br><br>

	<h2 style="color:#ff5c00;">Dịch vụ sửa chữa bão dưỡng tại Honda Ôtô</h2>

	Xưởng dịch vụ Honda Ôtô  được thiết kế thành 2 khu riêng biệt, tầng 1 với với diện tích mặt bằng trên 2500m2 cho khu vực tiếp nhận, sửa chữa chung và tầng 2 gần hơn 3000m2 cho khu vực sửa chữa thân vỏ, sơn gò. Ngoài ra xưởng được đầu tư công phu về thiết bị kỹ thuật với máy móc được nhập khẩu từ Nhật Bản và các nước tiên tiến trên thế giới.<br><br>

	Về con người, các kỹ sư và thợ sửa chữa được tuyển dụng theo tiêu chuẩn của Honda Việt Nam và được đào tạo theo tiêu chuẩn Honda TOÀN CẦU với trình độ cao công nghệ kỹ thuật tiên tiến hứa hẹn sẽ đem lại cho Quý khách hàng những trải nghiệm DỊCH VỤ và CHẤT LƯỢNG tốt nhất.
	<br><br>
	<h2 style="color:#ff5c00;">Tại sao nên mua xe Ô tô Honda tại Bắc Ninh</h2>

	Honda Ôtô  là Đại lý đầu tiên được Honda Việt Nam áp dụng tiêu chuẩn mới của Honda TOÀN CẦU tại khu vực Đông bắc Hà nội. Showroom trưng bày xe với Quy mô lớn được bài trí sang trọng, lịch lãm hội tụ mọi tiêu chuẩn của một Showroom Ô tô hàng đầu. <br><br>

	Đội ngũ Nhân viên Kinh doanh nhanh nhẹn, lịch thiệp được đào tạo bài bản theo tiêu chuẩn của Honda sẽ đáp ứng kịp thời mọi nhu cầu của Quý khách hàng. <br><br>

	Ngoài kiến thức chuyên môn về Sản phẩm, đội ngũ nhân viên bán hàng của Honda Ôtôcòn được trau dồi đầy đủ kiến thức về Bảo hiểm, Ngân hàng nhằm kịp thời hỗ trợ khách hàng trong mọi tình huống.<br><br>
	<hr style="width:30%;border:1px dashed gray;">
	<h2 style="color:#ff5c00;">Mọi chi tiết xin vui lòng liên hệ</h2>

	<h4>Honda Ôtô</h4>
	- Địa chỉ: Ngõ 218 - Lĩnh Nam - Hoàng Mai - Hà nÔị<br>

	- Tel: 0222 83 6666 <br> - Fax: 0222 85 8484<br>

	* Hotline:<br>

	- Phòng Kinh Doanh: 0913 57 5555<br>

	- Phòng Dịch Vụ: 0931 52 4004<br>

	- Phòng CSKH: 08 8897 1313<br>

	- Cứu hộ: 08 88 08 1313<br>
	<br><br>

	<p>=<i class="fa fa-angle-right"></i> Mọi đóng góp quý khách có thể gửi cho ban quản trị để công ty <a href="lien-he.php">Liên hệ</a></p>

</div><!--mian-->
	
<?php require_once("template/bottom.php"); ?>
<?php $title="Thông tin tài khoản"; ?>
<?php require_once('template/header.php'); ?>
<?php require_once('template/main-left.php'); ?>
<div class="main-right">
	<?php 
	if(isset($_POST["update"])){
		$name=$_FILES["hinhanh"]["name"];
		$tmp=$_FILES["hinhanh"]["tmp_name"];
		$type=$_FILES["hinhanh"]["type"];
		$size=$_FILES["hinhanh"]["size"];
		$explode=explode(".",$name);
		$ext=end($explode);
		$path="/var/www/html/Web_Ban_Oto/images/images-user/";
		$path=$path.basename($explode[0].time().".".$ext);
		$anh=basename($explode[0].time().".".$ext);
		$thongbao=array();
		$type_g=array('jpg','png');
		$size_g=4000000;
		if(empty($tmp)){
			$thongbao["hinhanh"]="Mời chọn hình ảnh !!!";
		}else{
			if(in_array($ext,$type_g)===false){
				$thongbao["hinhanh"]="Hình ảnh phải đúng định dạng (jpg,png).";
			}
			if($size>$size_g){
				$thongbao["hinhanh"]="Hình ảnh quá lớn !!! Mời chọn ảnh khác !!!";

			}
		}
		if(empty($thongbao)){
			if(move_uploaded_file($tmp,$path)){
				$sql="UPDATE taikhoan SET hinhanh='{$anh}' WHERE id='{$nguoidung}'";
				$query=mysqli_query($conn,$sql);
				if($query){
					$thongbao["xacthuc"]="Cập nhật ảnh thành công !!!";
				}else{
					$thongbao["xacthuc"]="Cập nhật không thành công !!!".mysqli_error($conn);
				}
			}else{
				$thongbao["xacthuc"]="Uploads ảnh không thành công !!!";
			}
		}

	}
	
 ?>
	<h1>Thông tin tài khoản của bạn</h1>

	<p style="width:18%;height:40px;line-height:40px;font-size:18px;background:#00CC66;color:white;border-top-right-radius:0.5em;border-top-left-radius:0.5em;text-align:center;"> Thông tin</p>
	<ul class="info-menu">
		<?php 
			$sql="SELECT * FROM taikhoan WHERE id='{$nguoidung}'";
			$query=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($query,MYSQLI_ASSOC);

		 ?>
		<li><i class="fa fa-yelp"></i> Họ tên: <?php echo $row["hoten"]; ?></li>
		<li><i class="fa fa-yelp"></i> Gmail: <?php echo $row["email"]; ?></li>
		<li><i class="fa fa-yelp"></i> Giới tính: 

				<?php 
					if($row["gioitinh"]=="1") 
						echo "Nam";
					else
						 echo "Nữ";
				 ?>
		</li>
		<li><i class="fa fa-yelp"></i> Số điện thoại: 0<?php echo $row["sodienthoai"]; ?></li>
		<li><i class="fa fa-yelp"></i> Ngày sinh: <?php echo $row["ngaysinh"]; ?></li>
	</ul>


	<p style="width:18%;height:40px;line-height:40px;font-size:18px;background:#00CC66;color:white;border-top-right-radius:0.5em;border-top-left-radius:0.5em;text-align:center;margin-top:10px;">Cập nhật ảnh đại diện</p>
	<ul class="info-menu" style="height:120px;">
		<?php 
			if(!empty($thongbao["hinhanh"])){
				echo "<p>".$thongbao["hinhanh"]."</p>";
			}
			if(!empty($thongbao["xacthuc"])){
				echo "<div class='mess'>".$thongbao["xacthuc"]."</div>";
			}

		 ?>
		<li>
			<form method="post" enctype="multipart/form-data">
				<input style="width:30%;margin-top:10px;" type="file" name="hinhanh" required="">
		</li>
		<li>
				<button style="width:15%;margin-top:10px;" name="update" type="submit">Cập nhật</button>
			</form>	
		
		</li>
		
	</ul>
</div><!--main-right-->
<?php require_once('template/bottom.php'); ?>
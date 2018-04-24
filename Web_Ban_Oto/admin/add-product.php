<?php $title="Thêm sản phẩm mới" ?>
<?php require_once("template/header.php"); ?>
	
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:18%;"><a href="add-product.php"><i class="fa fa-plus"></i> Thêm sản phẩm mới</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
	if(isset($_POST["add-product"])){
		$masp=$_POST["masp"];
		$tensp=$_POST["tensp"];
		$noidung=mysqli_real_escape_string($conn,$_POST["noidung"]);
		$giaban=$_POST["gia"];
		$tomtat=mysqli_real_escape_string($conn,$_POST["tomtat"]);
		$danhmuc=$_POST["madanhmuc"];
		$hinhanh=$_FILES["hinhanh"]["name"];


		
		/**hinh anh**/
		$images=$_FILES["hinhanh"]["name"];
		$images_tmp=$_FILES["hinhanh"]["tmp_name"];
		$images_size=$_FILES["hinhanh"]["size"];	
		$images_type=$_FILES["hinhanh"]["type"];
		$explode=explode(".",$images);
		$ext=end($explode);
		$path="/var/www/html/Web_Ban_Oto/images/sanpham/";
		$path=$path.basename($explode[0].time().".".$ext);
		$thongbao=array();
		$anh=basename($explode[0].time().".".$ext);
		/**them san pham nen csdl**/
		if(empty($images_tmp)){
			 	$thongbao["hinhanh"]="Mời chọn file ảnh !!!";
		}else{
			$check_images=array("jpg","png","jpeg","gif");
			$max_size=4000000;
			if(in_array($ext,$check_images)===false){
				 $thongbao["hinhanh"]="Files ảnh không đúng định dạng jpg,png,jpeg,gif";
			
			}
			if($images_size>$max_size){
				$thongbao["hinhanh"]="Files ảnh kích thước quá lớn <4MB";
			}
		}
		if(mysqli_num_rows(mysqli_query($conn,"SELECT masp FROM product WHERE masp='{$masp}"))>0){
			$thongbao["error"]="Mã sản phẩm đã có !!! Mời nhập mã sản phẩm khác.";
		}
		if(empty($thongbao)){
			if(move_uploaded_file($images_tmp,$path)){
				$sql="INSERT INTO product (masp,tensp,giaban,tomtat,noidung,hinhanh,nguoidang,madanhmuc)
					VALUES('{$masp}','{$tensp}','{$giaban}','{$tomtat}','{$noidung}','{$anh}','{$nguoidung}','{$danhmuc}')
				";
				$query=mysqli_query($conn,$sql);
				if($query){
					$thongbao["xacthuc"]="Thêm sản phẩm thành công !!!";
				}else{
					$thongbao["xacthuc"]="Thêm sản phẩm thất bại !!!" .mysqli_error($conn);
					
				}
			}
		}
		
	}
		
 ?>


	<?php 
			if(!empty($thongbao)){
				echo " <div class='mess'><i class='fa fa-check'></i> ".$thongbao["xacthuc"]."</div>";
			}
		 ?>
	<form method="post" enctype="multipart/form-data">
		<div class="main-right-left">
			<label>
				<h4>Mã sản phẩm</h4>
				<?php 
					if(!empty($thongbao["error"])){
						echo "<p>".$thongbao["error"]."</p>";
					}
				 ?>
				<input type="text" name="masp" placeholder="Nhập mã sản phầm" required="">
			</label>
			<label>
				<h4>Tên sản phẩm</h4>
				<input type="text" name="tensp" placeholder="Nhập tên sản phầm" required="">
			</label>
			<label>
				<h4>Gía bán</h4>
				<input type="number" name="gia" placeholder="Gía bán" required="">
			</label>
			<label>
				<h4>Thông tin chi tiết</h4>
				<textarea class="textarea_full" name="noidung" ></textarea>
			</label>
			<label>
				<h4>Thông tin miêu tả</h4>
				<textarea class="textarea_full" name="tomtat"></textarea>
			</label>
			
		</div><!--main-right-left-->
		<div class="main-right-right">
			<label>
				<h4> Danh mục</h4>
				<select name="madanhmuc">
					<option>--- Danh mục sản phẩm ---</option>
					<?php 
						$sql="SELECT * FROM danhmuc";
						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):

					 ?>
						<option value="<?php echo $row['madanhmuc']; ?>"><?php echo $row["tendanhmuc"]; ?></option>
					<?php endwhile; ?>

				</select>
			</label>
			<label>
				<h4> Ảnh dại diện</h4>
				<input type="file" name="hinhanh" placeholder="Nhập gía khuyến mại">
				<?php 
					if(!empty($thongbao["hinhanh"])){
						echo "<p>" .$thongbao["hinhanh"]. "</p>";
					}
				 ?>
				
			</label>
			<br>
			<label>
				<button type="submit" name="add-product">Thêm sản phẩm</button>
			</label>
		</div><!--main-right-right-->
	</form>

</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

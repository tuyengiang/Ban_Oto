<?php $title="Sửa sản phẩm" ?>
<?php $id=$_GET['id']; ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">

<?php  
	$sql="SELECT * FROM product WHERE id='{$id}'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);

	if(empty($row)){
		echo "<script> alert(Sản phẩm không tồn tại hoặc đã bị xóa !!!); </script>";
	}else{
		if(isset($_POST["add-product"])){
			$masp=$_POST["masp"];
			$tensp=$_POST["tensp"];
			$noidung=mysqli_real_escape_string($conn,$_POST["noidung"]);
			$giaban=$_POST["gia"];
			$tomtat=mysqli_real_escape_string($conn,$_POST["tomtat"]);
			$danhmuc=$_POST["madanhmuc"];

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
			if(empty($thongbao)){
				if(move_uploaded_file($images_tmp,$path)){
					$sql="UPDATE product SET masp='{$masp}',tensp='{$tensp}',giaban='{$giaban}',tomtat='{$tomtat}',noidung='{$noidung}',hinhanh='{$anh}',nguoidang='{$nguoidung}',madanhmuc='{$danhmuc}' WHERE id='{$id}'";
					$query=mysqli_query($conn,$sql);
					if($query){
						$thongbao["xacthuc"]="Sửa sản phẩm thành công !!!";
					}else{
						$thongbao["xacthuc"]="Sửa sản phẩm thất bại !!!".mysqli_error($conn);

						
					}
				}else{
					echo "Loi upload";
				}
			}
			
		}
	}
		
 ?>

	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:70%;"><a style="text-align:left" href="edit-product.php?id={$id}"><i class="fa fa-edit"></i> Sửa bài: <?php echo $row["tensp"]; ?></a></li>
		</ul>
	</div><!--top-title-->
	<?php 
			if(!empty($thongbao["xacthuc"])){
				echo " <div class='mess'><i class='fa fa-check'></i> ".$_SESSION["xacthuc"]."</div>";
			}
			else{

			}

	?>
	<form method="post" enctype="multipart/form-data">
		<div class="main-right-left">
			<label>
				<h4>Mã sản phẩm</h4>
				<input type="text" name="masp" value="<?php echo $row['masp']; ?>" required="">
			</label>
			<label>
				<h4>Tên sản phẩm</h4>
				<input type="text" name="tensp" value="<?php echo $row['tensp']; ?>" required="">
			</label>
			<label>
				<h4>Gía bán</h4>
				<input type="number" name="gia" value="<?php echo $row['giaban']; ?>" required="">
			</label>
			<label>
				<h4>Thông tin chi tiết</h4>
				<textarea class="textarea_full" name="noidung" ><?php echo $row['noidung'];?></textarea>
			</label>
			<label>
				<h4>Thông tin miêu tả</h4>
				<textarea class="textarea_full" name="tomtat"><?php echo $row['tomtat'] ?></textarea>
			</label>
			
		</div><!--main-right-left-->
		<div class="main-right-right">
			<label>
				<h4> Danh mục</h4>
				<select name="madanhmuc">
					<option>--- Danh mục sản phẩm ---</option>
					<?php 
						$sql1="SELECT * FROM danhmuc";
						$query1=mysqli_query($conn,$sql1);
						while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC)):

					 ?>
						<option <?php if($row["madanhmuc"]==$row1["madanhmuc"]){echo "selected" ;} ?>  value="<?php echo $row1['madanhmuc']; ?>"><?php echo $row1["tendanhmuc"]; ?></option>
					<?php endwhile; ?>

				</select>
			</label>
			<label>
				<h4> Ảnh dại diện</h4>
				<input type="file" name="hinhanh">
				<?php 
					if(!empty($thongbao["hinhanh"])){
						echo "<p>" .$thongbao["hinhanh"]. "</p>";
					}
				 ?>
				
			</label>
			<br>
			<label>
				<button type="submit" name="add-product">Sửa sản phẩm</button>
			</label>
		</div><!--main-right-right-->
	</form>

</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

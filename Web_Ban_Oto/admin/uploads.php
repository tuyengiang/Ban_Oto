<?php $title="Uploads ảnh mới" ?>
<?php require_once("template/header.php"); ?>
<?php $id_sp=$_GET["id"]; ?>
	
<?php require_once("template/main-left.php"); ?>
<div class="main-right">

	<?php 
		$sql="SELECT * FROM product WHERE masp='{$id_sp}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	 ?>

	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:30%;"><a href="uploads.php"><i class="fa fa-plus"></i> Uploads Images :  <?php echo $row["tensp"]; ?></a></li>
		</ul>
	</div><!--top-title-->

	<?php 
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		
		foreach($_FILES["hinhanh"]["name"] as $id=>$name){
			$name=$_FILES["hinhanh"]["name"][$id];
			$images_tmp=$_FILES["hinhanh"]["tmp_name"][$id];
			$images_size=$_FILES["hinhanh"]["size"][$id];	
			$images_type=$_FILES["hinhanh"]["type"][$id];
			$explode=explode(".",$name);
			$ext=end($explode);
			$path="/var/www/html/Web_Ban_Oto/images/anhsanpham/";
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
					 $thongbao["hinhanh"]="Files ảnh không đúng định dạng jpg,png,jpeg,gif !!!";
				
				}
				if($images_size>$max_size){
					$thongbao["hinhanh"]="Files ảnh kích thước quá lớn <4MB !!!";
				}
			}
			if(empty($thongbao)){
				if(move_uploaded_file($images_tmp,$path)){
					$sql="INSERT INTO hinhanh (id_sanpham,hinhanh)
						VALUES('{$id_sp}','{$anh}');
					";
					$query=mysqli_query($conn,$sql);
					if($query){
						$mess="Upload thành công !!!";
					}else{
						$mess="Upload không thành công !!!".mysqli_error($conn);
					}
				}else{
					$thongbao["hinhanh"]="Lỗi uploads ảnh !!1";
				}

			}
		}
		
	}
		
 ?>

	<?php 
			if(!empty($mess)){
				echo " <font color='#26aa67'><i class='fa fa-check'></i> </font> ".$mess;
			}
	?>
	<form method="post" enctype="multipart/form-data">
		<div class="main-right-left">
			<label>
				<h4> Chọn file ảnh cần upload</h4>
				<?php 
					if(!empty($thongbao)){
						echo " <font color='red'>".$thongbao["hinhanh"]."</font>";
					}else{
					
				?>
					<p><font color="red">Chú ý: có thể upload 1 hoặc nhiều ảnh</font></p>
				<?php } ?>
				<input style="margin-top:10px; width:50%;" type="file" name="hinhanh[]" multiple="">
				<button type="submit">Uploads</button>
			</label>
		</div>
	</form>

</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

<?php $title="Thêm chuyên mục sản phẩm" ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li><a href="add-category.php"><i class="fa fa-plus"></i> Thêm danh mục</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$madanhmuc=$_POST["madanhmuc"];
			$tendanhmuc=$_POST["tendanhmuc"];
			$thongbao=array();
			$ma="SELECT madanhmuc FROM danhmuc WHERE madanhmuc='{$madanhmuc}'";
			$check=mysqli_num_rows(mysqli_query($conn,$ma));
			if($check>0){
				$thongbao["madanhmuc"]="Mã danh mục đã tồn tại !!!";
			}
			if(empty($thongbao)){
				$sql="INSERT INTO danhmuc (madanhmuc,tendanhmuc)
					VALUES('{$madanhmuc}','{$tendanhmuc}')
				";
				$query=mysqli_query($conn,$sql);
				if($query){
					$mess="Thêm chuyên mục thành công";
				}else{
					$mess="Thêm chuyên mục thất bại";
				}
			}

		}
	 ?>
	
		<?php 
			if(!empty($mess)){
				echo "<div class='mess'><i class='fa fa-check'></i> ".$mess."</div>";
			}
		 ?>
	
	<form method="post">
		<div class="main-right-left">
			<label>
				<h4> Mã chuyên mục</h4>
				<?php 
					if(!empty($thongbao)){
						echo "<p>".$thongbao['madanhmuc']."</p>";
						}
				 ?>
				<input style="width:50%;" type="text" name="madanhmuc" placeholder="Nhập tên danh muc" required="">
			</label>
			<label>
				<h4> Tên chuyên mục</h4>
				<input style="width:50%;" type="text" name="tendanhmuc" placeholder="Nhập tên danh muc" required="">
			</label><br>
			<label>
				<button style="width:20%;" type="submit">Thêm chuyên mục</button>
			</label>

		</div><!--main-right-right-->
	</form>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

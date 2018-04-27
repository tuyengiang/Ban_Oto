<?php $title="Danh sách chuyên mục" ?>

<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM danhmuc WHERE madanhmuc='{$id}'";
		$query=mysqli_query($conn,$sql);
		if($query){
			$mess="Xóa thành công !!!";
		}else{
			$mess="Xóa thất bại !!!";
		}
	}
 ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:18%;"><a href="danh-sach-cm.php"><i class="fa fa-bars"></i> Danh sách danh mục</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
		if(!empty($mess)){
			echo "<div class='mess'>".$mess."</div>";
		}
	 ?>
	 <div class="menu-tab">
		<a href="add-category.php"><i class="fa fa-plus"></i> Thêm danh mục</a>
	</div><!--menu-tab-->
	
	 <table>
		<thead>
			<th>Mã danh mục</th>
			<th>Tên danh mục</th>
			<th>Chức năng</th>
		</thead>
		<tbody>
			<?php 
				$sql="SELECT * FROM danhmuc";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
			<tr>
				<td style="text-align:center;"><?php echo $row["madanhmuc"]; ?></td>
				<td><?php echo $row["tendanhmuc"]; ?></td>
				
				
					<td>
					
						<a title="sửa chuyên mục" href="edit-category.php?id=<?php echo $row['madanhmuc'];?>"><i class="fa fa-edit"></i></a>
						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['madanhmuc']; ?>">
							<button style="margin-left:5px;" type="submit" class="trash" onclick="return confirm('Bạn muốn xóa đanh mục không ?');"><i class="fa fa-trash"></i>
						</form>
				</td>
				

			</tr>

		<?php endwhile; ?>
		</tbody>
	 </table>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

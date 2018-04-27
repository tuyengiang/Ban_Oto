<?php $title="Danh sách sản phẩm" ?>

<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM product WHERE masp='{$id}'";
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
			<li style="width:18%;"><a href="danh-sach-pro.php"><i class="fa fa-bars"></i> Danh sách sản phẩm</a></li>
		</ul>
	</div><!--top-title-->
	
	<?php 
		if(!empty($mess)){
			echo "<div class='mess'>".$mess."</div>";
		}
	 ?>
	<div class="menu-tab">
		<a href="add-product.php"><i class="fa fa-plus"></i> Thêm sản phẩm</a>
	</div><!--menu-tab-->

	<table>
		<thead>
			
				<th>Mã sản phẩm</th>
				<th>Tên sàn phẩm</th>
				<th>Hình ảnh</th>
				<th>Danh mục</th>
				<th>Tùy chọn</th>
			
		</thead>
		<tbody>
			<?php 
				$page=empty($_GET["page"]) ? 1: ($_GET["page"]);
				$totalproduct=get_page_admin_product();
				$startform=($page-1)*$post_page;
				$totalpage=round($totalproduct/$post_page);

				$sql="SELECT product.*,danhmuc.madanhmuc,danhmuc.tendanhmuc FROM product,danhmuc WHERE product.madanhmuc=danhmuc.madanhmuc ORDER BY product.masp DESC LIMIT $startform,$post_page";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
			<tr>
				<td class="msp"><?php echo $row["masp"] ?></td>
				<td><p><a style="width:100%; text-align:left;" href="../single.php?id=<?php echo $row['masp'];?>"><?php echo $row["tensp"] ?></a></p></td>
				<td class="td-img"><img src="../images/sanpham/<?php echo $row['hinhanh'] ?>"></td>
				<td><?php echo $row["tendanhmuc"] ?></td>
				<td>
					<a title="upload ảnh" href="uploads.php?id=<?php echo $row['masp'];?>"><i class="fa fa-upload"></i></a>
					<a title="sửa bài viết" href="edit-product.php?id=<?php echo $row['masp'];?>"><i class="fa fa-edit"></i></a>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['masp']; ?>">
						<button style="margin-left:5px;" type="submit" class="trash" onclick="return confirm('Bạn muốn xóa sản phẩm không ?');"><i class="fa fa-trash"></i>
					</form>
				</td>
			</tr>
			<?php endwhile ?>
		</tbody>

	</table>

	<div class="next">
		<ul>
			<li><i class="fa fa-angle-double-right"></i></li>
			<?php 
				for($i=0;$i<$totalpage;$i++):
			 ?>

			 <li ><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" href="danh-sach-pro.php?page=<?php echo($i+1); ?>"><?php echo ($i+1) ?></a></li>

			<?php endfor; ?>
		</ul>
	</div><!--next-->
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

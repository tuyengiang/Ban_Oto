<?php $title="Hòm thư liên hệ" ?>

<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM lienhe WHERE id='{$id}'";
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
			<li style="width:18%;"><a href="hom-thu.php"><i class="fa fa-envelope"></i> Hòm thư góp ý</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
		if(!empty($mess)){
			echo "<div class='mess'>".$mess."</div>";
		}
	 ?>
	 <table>
		<thead>
			<th>Họ tên khách hàng</th>
			<th>Email</th>
			<th>Nội dung đóng góp</th>
			<th>Chức năng</th>
		</thead>
		<tbody>
			<?php 
				$sql="SELECT * FROM lienhe ORDER BY id DESC";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
			<tr>
				<td><?php echo $row["hoten"]; ?></td>
				<td><?php echo $row["email"]; ?></td>
				<td><?php echo $row["noidung"]; ?></td>
				<td>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
						<center><button type="submit" class="trash" onclick="return confirm('Bạn muốn xóa đóng góp không ?');"><i class="fa fa-trash"></i></button></center>
					</form>
				</td>

			</tr>

		<?php endwhile; ?>
		</tbody>
	 </table>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

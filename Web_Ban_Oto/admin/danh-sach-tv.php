<?php $title="Danh sách thành viên" ?>

<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM taikhoan WHERE id='{$id}'";
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
			<li style="width:18%;"><a href="danh-sach-tv.php"><i class="fa fa-bars"></i> Danh sách thành viên</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
		if(!empty($mess)){
			echo "<div class='mess'>".$mess."</div>";
		}
	 ?>
	 <div style="clear:left"></div>
	 <div class="tab-wrapper">
	 	<ul class="tab">
	 		<li style="margin-left:0;"><a href="#tab-1">Quản trị viên</a></li>
	 		<li><a href="#tab-2">Khách hàng</a></li>
	 	</ul>
	

	<div class="tab-content">
	 <div id="tab-1" class="tab-item">
		 <table>
			<thead>
				<th>Email</th>
				<th>Họ tên</th>
				<th>Mật khẩu</th>
				<th>Chức vụ</th>
				<th>Ngày sinh</th>
				<th>Giới tính</th>
				<th>Số điện thoại</th>
				<th>Chức năng</th>
			</thead>
			<tbody>
				<?php 
					$sql="SELECT * FROM taikhoan WHERE trangthai='1'";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<tr>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["hoten"]; ?></td>
					<td><?php echo $row["matkhau"]; ?></td>
					<td>
						<?php 
							if($row["trangthai"]=="1"){
								echo "Quản trị viên";
							}else{
								echo "Khách hàng";
							} 
						?>
					</td>
					<td><?php echo $row["ngaysinh"]; ?></td>
					<td><?php 
						if($row["gioitinh"]=="1"){
							echo "Nam";
						}else{
							echo "Nữ";
						}
					 ?></td>
					<td><?php echo $row["sodienthoai"]; ?></td>
					
					<td>
						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
							<button type="submit" class="trash" onclick="return confirm('Bạn muốn xóa tài khoản không?');"><i class="fa fa-trash"></i></button>
						</form>
					</td>

				</tr>

			<?php endwhile; ?>
			</tbody>
		 </table>
	</div><!--tap-1-->

	 <div id="tab-2" class="tab-item">
		 <table>
			<thead>
				<th>Email</th>
				<th>Họ tên</th>
				<th>Mật khẩu</th>
				<th>Chức vụ</th>
				<th>Ngày sinh</th>
				<th>Giới tính</th>
				<th>Số điện thoại</th>
				<th>Chức năng</th>
			</thead>
			<tbody>
				<?php 
					$sql="SELECT * FROM taikhoan WHERE trangthai='2'";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<tr>
					<td><?php echo $row["email"]; ?></td>
					<td><?php echo $row["hoten"]; ?></td>
					<td><?php echo $row["matkhau"]; ?></td>
					<td>
						<?php 
							if($row["trangthai"]=="1"){
								echo "Quản trị viên";
							}else{
								echo "Khách hàng";
							} 
						?>
					</td>
					<td><?php echo $row["ngaysinh"]; ?></td>
					<td><?php 
						if($row["gioitinh"]=="1"){
							echo "Nam";
						}else{
							echo "Nữ";
						}
					 ?></td>
					<td><?php echo $row["sodienthoai"]; ?></td>
					
					<td>
						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
							<button type="submit" class="trash" onclick="return confirm('Bạn muốn xóa tài khoản không ?');"><i class="fa fa-trash"></i></button>
						</form>
					</td>

				</tr>

			<?php endwhile; ?>
			</tbody>
		 </table>
</div>
</div>
</div><!--main-right-->
<script language="javascript">
            
            $(document).ready(function()
            {
                // Hàm active tab nào đó
                function activeTab(obj)
                {
                    // Xóa class active tất cả các tab
                    $('.tab-wrapper ul li').removeClass('active');

                    // Thêm class active vòa tab đang click
                    $(obj).addClass('active');

                    // Lấy href của tab để show content tương ứng
                    var id = $(obj).find('a').attr('href');

                    // Ẩn hết nội dung các tab đang hiển thị
                    $('.tab-item').hide();

                    // Hiển thị nội dung của tab hiện tại
                    $(id) .show();
                }

                // Sự kiện click đổi tab
                $('.tab li').click(function(){
                    activeTab(this);
                    return false;
                });

                // Active tab đầu tiên khi trang web được chạy
                activeTab($('.tab li:first-child'));
            });
        </script>
<?php require_once("template/bottom.php"); ?>

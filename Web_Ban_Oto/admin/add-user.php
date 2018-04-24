<?php $title="Thêm sản phẩm mới" ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">

	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:18%;"><a href="add-user.php"><i class="fa fa-plus"></i> Thêm tài khoản</a></li>
		</ul>
	</div><!--top-title-->
	<form method="post">
		<div class="main-right-left">
			<label>
				<h4> Email</h4>
				<input type="text" name="email" placeholder="Email">
			</label>
			<label>
				<h4> Họ tên</h4>
				<input type="text" name="hoten" placeholder="Họ tên">
			</label>
			<label>
				<h4>Mật khẩu</h4>
				<input type="password" name="password1" placeholder="Mật khẩu">
			</label>
			<label>
				<h4>Nhập lại mật khẩu</h4>
				<input type="password" name="password2" placeholder="Nhập lại mật khẩu">
			</label>
			<label>
				<h4>Ngày sinh</h4>
				<input type="date" name="ngaysinh">
			</label>
			<label>
				<h4>Số diện thoại</h4>
				<input type="number" name="dienthoai" placeholder="Số điện thoại">
			</label>
			<label>
				<h4>Chức vụ</h4>
				<select name="trangthai" style="width:97.5%;">
					<option value="1">Quản trị viên</option>
					<option value="2">Khách hàng</option>
	
				</select>
			</label>
			<label>
				<h4>Giới tính</h4>
				<input type="radio" name="gioitinh" value="1" checked="">Nam
				<input type="radio" name="gioitinh" value="1">Nữ
			</label>

			
		
			<br>
			<label>
				<button type="submit">Thêm tài khoản</button>
			</label>
		</div><!--main-right-right-->
	</form>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

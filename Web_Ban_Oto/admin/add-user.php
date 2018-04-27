<?php $title="Thêm tài khoản mới" ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<?php 
	if(isset($_POST["add"])){
		$email=$_POST["email"];
		$hoten=$_POST["hoten"];
		$passnew=$_POST["password1"];
		$pass_new=$_POST["password2"];
		$ngaysinh=$_POST["ngaysinh"];
		$dienthoai=$_POST["dienthoai"];
		$gioitinh=$_POST["gioitinh"];
		$trangthai=$_POST["trangthai"];
		$error_array=array();

	
		if(mysqli_num_rows(mysqli_query($conn,"SELECT email FROM taikhoan WHERE email='{$email}'"))>0){
			$error_array["email"]="Email đã đưọc đăng ký !!! Mời nhập email khác.";
		}
		if(validate_email($email)){
			$error_array["email"]="Email phải đúng định dạng !!!";
		}
		if(validate_hoten_exits($hoten)){
			$error_array["hoten"]="Họ tên bạn nhập không đưọc có nhiều khoảng cách giữa các chữ !!!";
		}
		if($passnew!=$pass_new || !validate_password($passnew) || validate_strlen($passnew)){
			$error_array["matkhau"]="Mật khẩu phải thỏa mãn: Mật khẩu nhập phải khớp nhau hoặc lớn hơn 8 và nhỏ hơn 16 ký tự !!!";
		}
		if(validate_phone($dienthoai)){
			$error_array["phone"]="Số điện phải đúng định dạng [0-9]";
		}
		if(strlen($dienthoai)<9 || strlen($dienthoai)>11){
			$error_array["phone"]="Số điện thoại phải lớn hơn 9 và nhỏ hơn 12 ký tự !!!";
		}
		if(empty($error_array)){
			$email=mysqli_escape_string($conn,$email);
			$hoten=mysqli_escape_string($conn,$hoten);
			$pass=mysqli_escape_string($conn,md5($passnew));
			$sql="INSERT INTO taikhoan (email,hoten,matkhau,sodienthoai,ngaysinh,gioitinh,trangthai)
				VALUES('{$email}','{$hoten}','{$pass}','{$dienthoai}','{$ngaysinh}','{$gioitinh}','{$trangthai}')
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				$mess="Thêm tài khoản thành công !!!";
			}else{
				$mess="Thêm tài khoản thất bại !!!" .mysqli_error($conn);
			}
		}
	}
	
 ?>
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:18%;"><a href="add-user.php"><i class="fa fa-plus"></i> Thêm tài khoản</a></li>
		</ul>
	</div><!--top-title-->
	<?php 
		if(!empty($mess)){
			echo "<div class='mess'>".$mess."</div>";
		}

	 ?>
	<form method="post">
		<div class="main-right-left">
			<label>
				<h4> Email</h4>
				<?php 
					if(!empty($error_array["email"])){
						echo "<p>".$error_array["email"]."</p>";
					}
				 ?>
				<input type="text" name="email" placeholder="Email" required="">
			</label>
			<label>
				<h4> Họ tên</h4>
				<?php 
					if(!empty($error_array["hoten"])){
						echo "<p>".$error_array["hoten"]."</p>";
					}
				 ?>
				<input type="text" name="hoten" placeholder="Họ tên" required="">
			</label>
			<label>
				<h4>Mật khẩu</h4>
				<?php 
					if(!empty($error_array["matkhau"])){
						echo "<p>".$error_array["matkhau"]."</p>";
					}
				 ?>
				<input type="password" name="password1" placeholder="Mật khẩu" required="">
			</label>
			<label>
				<h4>Nhập lại mật khẩu</h4>
				<?php 
					if(!empty($error_array["matkhau"])){
						echo "<p>".$error_array["matkhau"]."</p>";
					}
				 ?>
				<input type="password" name="password2" placeholder="Nhập lại mật khẩu" required="">
			</label>
			<label>
				<h4>Ngày sinh</h4>
				<input type="date" name="ngaysinh" required="">
			</label>
			<label>
				<h4>Số diện thoại</h4>
				<?php 
					if(!empty($error_array["phone"])){
						echo "<p>".$error_array["phone"]."</p>";
					}
				 ?>
				<input type="number" name="dienthoai" placeholder="Số điện thoại" required="">
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
				<button type="submit" name="add">Thêm tài khoản</button>
			</label>
		</div><!--main-right-right-->
	</form>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

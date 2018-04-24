<?php $title="Đăng ký thành viên |  Shop bán hành online"; ?>
<?php require_once("inc/ketnoi.php"); ?>
<?php 
	if(isset($_POST["dang-ky"])){
		$email=$_POST["email"];
		$hoten=$_POST["hoten"];
		$password1=$_POST["matkhau"];
		$password2=$_POST["matkhau1"];
		$phone=$_POST["dienthoai"];
		$ngaysinh=$_POST["ngaysinh"];
		$sex=$_POST["gioitinh"];
		$error_array=array();
		if(validate_email($email)){
			$error_array["email"]="Email phải đúng định dạng !!!";
		}
		if(mysqli_num_rows(mysqli_query($conn,"SELECT email FROM taikhoan WHERE email='{$email}'"))>0){
			$error_array["email"]="Email đã được đăng ký !!! Mời bạn chọn email khác.";
		}
		if(validate_phone($phone)){
			$error_array["phone"]="Số điện phải đúng định dạng [0-9]";
		}
		if($password1!=$password2 || !validate_password($password1)){
			$error_array["matkhau"]="Mật khẩu phải thỏa mãn: Mật khẩu nhập phải khớp nhau hoặc hơn 6 ký tự";
		}
		if(empty($error_array)){
				$email=mysqli_escape_string($conn,$email);
				$hoten=mysqli_escape_string($conn,$hoten);
				$pass=mysqli_escape_string($conn,md5($password1));
				$phone=mysqli_escape_string($conn,$phone);
				$sql="INSERT INTO taikhoan(email,hoten,matkhau,gioitinh,sodienthoai,ngaysinh,trangthai)
					VALUES('{$email}','{$hoten}','{$pass}','{$sex}','{$phone}','{$ngaysinh}',2)
				";
				$query=mysqli_query($conn,$sql);
				if($query){
					echo "<script> alert('Đăng ký thành công !!!'); </script>";
				}else{
					echo "Dang ky that bai".mysqli_error($conn);
				}
			
			}
		
	}
	
 ?>
<?php require_once("template/header.php") ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
	
	<p style="width:100%;height:50px;line-height:50px;color:#333;font-size:30px;text-align:center;margin:10px 0 10px 0;">Đăng ký tài khoản</p>
	<div class="main" style="background:#f7f7f7;padding:0.5em;">
		<form method="post">
			<table>
				<tr>
					<td class="td"></td>
					<td>Bạn đã có tài khoản mời bạn <a href="dang-nhap.php">Đăng nhập</a></td>
				</tr>
				<tr>
					<td  class="td">Họ & Tên đệm *</td>
					<td>
						<input type="text" class="input-register" name="hoten" placeholder="Họ & tên đệm" required="">
					</td>
				</tr>
				<tr>
					<td class="td">Email *</td>
					<td>
						<input type="text" class="input-register" name="email" placeholder="Email" required="">
					</td>
				</tr>
				<?php 
					if(!empty($error_array["email"])){
								echo "<tr><td></td><td><p>".$error_array["email"]."</p></td></tr>";
					}
				?>
				
				<tr>
					<td class="td">Ngày sinh *</td>
					<td>
						<input type="date" class="input-register" name="ngaysinh" placeholder="Email" required="">
					</td>
				</tr>
				<tr>
					<td class="td">Điện thoại *</td>
					<td>
						<input type="number"  class="input-register" name="dienthoai" placeholder="Điện thoại" required="">
					</td>
				</tr>
				<?php 
					if(!empty($error_array["phone"])){
								echo "<tr><td></td><td><p>".$error_array["phone"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Mật khẩu *</td>
					<td>
						<input type="password"  class="input-register" name="matkhau" placeholder="Mật khẩu" required="">
					</td>
				</tr>
				<?php 
					if(!empty($error_array["matkhau"])){
								echo "<tr><td></td><td><p>".$error_array["matkhau"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Mật khẩu xác nhận *</td>
					<td>
						<input type="password"  class="input-register" name="matkhau1" placeholder="Mật khẩu xác nhận" required="">
					</td>
				</tr>
				</tr>
				<?php 
					if(!empty($error_array["matkhau"])){
								echo "<tr><td></td><td><p>".$error_array["matkhau"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Giới tính *</td>
					<td>
						<input type="radio" name="gioitinh" value="1" checked="">Nam
						<input type="radio" name="gioitinh" value="1">Nữ
					</td>
				</tr>
				<tr>
					<td class="td"></td>
					<td>
						<input type="checkbox" name="checkbox"> Bạn đồng ý với <a href="#">Điều khoản của chúng tôi</a>
					</td>
				</tr>
				<tr>
					<td class="td"></td>
					<td>
						<input type="hidden" name="dang-ky" value="dang-ky">
						<button type="submit" class="btn-dang-nhap" name="dang-ky">Đăng ký</button>
					</td>
				</tr>
	
			</table>
		</form>
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>
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
		$thangsinh=$_POST["thangsinh"];
		$namsinh=$_POST["namsinh"];
		$sex=$_POST["gioitinh"];
		$brithday=$namsinh."-".$thangsinh."-".$ngaysinh;
		$error_array=array();
		$dienthoai=substr($phone,0,1);
		if(validate_hoten_exits($hoten)){
			$error_array["hoten"]="Họ tên có quá nhiều khoảng cách giữa các chữ !!!";
		}
		if(is_numeric($hoten)){
			$error_array["hoten"]="Họ tên bạn nhập phải là ký tự !!!";
		}
		if(validate_email($email)){
			$error_array["email"]="Email phải đúng định dạng !!!";
		}
		if(mysqli_num_rows(mysqli_query($conn,"SELECT email FROM taikhoan WHERE email='{$email}'"))>0){
			$error_array["email"]="Email đã được đăng ký !!! Mời bạn chọn email khác.";
		}
		if(validate_phone($phone)){
			$error_array["phone"]="Số điện phải đúng định dạng [0-9]";
		}
		if(strlen($phone)<9 || strlen($phone)>11){
			$error_array["phone"]="Số điện thoại phải lớn hơn 9 và nhỏ hơn 12 ký tự !!!";
		}
		if($dienthoai!="0"){
			$error_array["phone"]="Số điện thoại bạn nhập phải bắt đầu là số 0 !!!";
		}
		if($password1!=$password2 || !validate_password($password1) || validate_strlen($password1)){
			$error_array["matkhau"]="Mật khẩu phải thỏa mãn: Mật khẩu nhập phải khớp nhau hoặc lớn hơn 8 và nhỏ hơn 16 ký tự !!!";
		}

		if(empty($error_array)){
				$email=mysqli_escape_string($conn,$email);
				$hoten=mysqli_escape_string($conn,$hoten);
				$pass=mysqli_escape_string($conn,md5($password1));
				$phone=mysqli_escape_string($conn,$phone);
				$sql="INSERT INTO taikhoan(email,hoten,matkhau,gioitinh,sodienthoai,ngaysinh,trangthai)
					VALUES('{$email}','{$hoten}','{$pass}','{$sex}','{$phone}','{$brithday}',2)
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
				<?php 
					if(!empty($error_array["hoten"])){
								echo "<tr><td></td><td><p>".$error_array["hoten"]."</p></td></tr>";
					}
				?>
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
						<select name="ngaysinh" style="width:8%;height:33px;border:1px solid #f7f7f7;background:white;border-radius:0.3em;">
							<?php 
								for($i=1;$i<31;$i++):
							 ?>

							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
			
						</select>
						/ 
						<select name="thangsinh" style="width:8%;height:33px;border:1px solid #f7f7f7;background:white;border-radius:0.3em;">
							<?php 
								for($i=1;$i<12;$i++):
							 ?>

							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
			
						</select>
						/
						<select name="namsinh" style="width:8%;height:33px;border:1px solid #f7f7f7;background:white;border-radius:0.3em;">
							<?php 
								for($i=1950;$i<DATE('Y');$i++):
							 ?>

							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
							<?php endfor; ?>
			
						</select>
					</td>
				</tr>
				<?php 
					if(!empty($error_array["ngaysinh"])){
								echo "<tr><td></td><td><p>".$error_array["ngaysinh"]."</p></td></tr>";
					}
					else if(!empty($error_array["thangsinh"])){
								echo "<tr><td></td><td><p>".$error_array["thangsinh"]."</p></td></tr>";
					}
				?>
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
						<input type="checkbox" name="checkbox" checked=""> Bạn đồng ý với <a href="#">Điều khoản của chúng tôi</a>
					</td>
				</tr>
				<tr>
					<td class="td"></td>
					<td>
						<input type="hidden" name="dang-ky" value="dang-ky">
						<button style="width:30%;" type="submit" class="btn-dang-nhap" name="dang-ky">Đăng ký</button>
					</td>
				</tr>
	
			</table>
		</form>
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>
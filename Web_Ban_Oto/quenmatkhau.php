<?php $title="Quên mật khẩu" ?>
<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["yeucau"])){
		$email=$_POST["email"];
		$password=$_POST["password"];
		$password1=$_POST["password1"];
		$thongbao=array();
		$sql="SELECT email FROM taikhoan WHERE email='{$email}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if(validate_email($email)){
			$thongbao["email"]="Email phải đúng định dạng !!!";
		}
		if($email!=$row["email"]){
			$thongbao["email"]="Email chưa được đăng ký !!!";
		}
		if($password!=$password1 || !validate_password($password) || validate_strlen($password)){
			$thongbao["matkhau"]="Mật khẩu phải thỏa mãn: Mật khẩu nhập phải khớp nhau hoặc lớn hơn 8 và nhỏ hơn 16 ký tự !!!";
		}
		if(empty($thongbao)){
			$pass=mysqli_escape_string($conn,md5($password));
			$e=mysqli_escape_string($conn,$email);
			$sql="UPDATE taikhoan SET matkhau='{$pass}' WHERE email='{$e}'";
			$query=mysqli_query($conn,$sql);
			if($query){
				$thongbao["mes"]="Cập nhật mật khẩu thành công !!! ". "<a href='dang-nhap.php'>Mời bạn đăng nhập</a>";
			}else{
				echo "error: ". mysqli_error($conn);
			}
		}
	}
	
 ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>

	<p style="width:100%;height:50px;line-height:50px;color:#333;font-size:30px;text-align:center;margin:10px 0 10px 0;">Quên mật khẩu</p>
	<div class="main" style="background:#f7f7f7;padding:0.5em;">
		<form method="post" style="width:70%;margin:auto">
			<table>
				<?php 
					if(!empty($thongbao["mes"])){
								echo "<tr><td></td><td><p>".$thongbao["mes"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Email *</td>
					<td>
						<input type="text" class="input-register" name="email" placeholder="Email" required="" value="<?php if(isset($_SESSION["email"])){ echo $_SESSION["email"];}else{echo "";}   ?>">
					</td>
				</tr>
				<?php 
					if(!empty($thongbao["email"])){
								echo "<tr><td></td><td><p>".$thongbao["email"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Mật khẩu mới</td>
					<td>
						<input type="password" name="password" placeholder="Nhập mật khẩu mới" required="">
					</td>
				</tr>
				<?php 
					if(!empty($thongbao["matkhau"])){
								echo "<tr><td></td><td><p>".$thongbao["matkhau"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td">Nhập lại mật khẩu</td>
					<td>
						<input type="password" name="password1" placeholder="Nhập lại mật khẩu" required="">
					</td>
				</tr>
				<?php 
					if(!empty($thongbao["matkhau"])){
								echo "<tr><td></td><td><p>".$thongbao["matkhau"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td"></td>
					<td>
					
						<button type="submit" class="btn-dang-nhap" name="yeucau" style="width:30%;">Gửi yêu cầu</button>
					</td>
				</tr>
				
	
			</table>
		</form>
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>
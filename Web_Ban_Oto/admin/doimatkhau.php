<?php $title="Đổi mật khẩu" ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<?php 
	if(isset($_POST["changle"])){
		$passcu=md5($_POST["passcu"]);
		$passnew=$_POST["password1"];
		$pass_new=$_POST["password2"];
		$error_array=array();

		$sql="SELECT email,matkhau FROM taikhoan WHERE email='{$_SESSION['email']}'";
	 	$query=mysqli_query($conn,$sql);
	 	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);

		if($passcu!=$row["matkhau"]){
			$error_array["matkhaucu"]="Mật khẩu không đúng !!! Mời nhập lại.";
		}
		if($passnew!=$pass_new || !validate_password($passnew) || validate_strlen($passnew)){
			$error_array["matkhau"]="Mật khẩu phải thỏa mãn: Mật khẩu nhập phải khớp nhau hoặc lớn hơn 8 và nhỏ hơn 16 ký tự !!!";
		}
		if(empty($error_array)){
			$pass=mysqli_escape_string($conn,md5($passnew));
			$sql="UPDATE taikhoan SET matkhau='{$pass}' WHERE email='{$_SESSION['email']}'
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				$mess="Đổi mật khẩu thành công!!!";
			}else{
				$mess="Đổi mật khẩu thất bại !!!" .mysqli_error($conn);
			}
		}
	}
	
 ?>
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:12%;"><a href="doimatkhau.php"><i class="fa fa-edit"></i> Đổi mật khẩu</a></li>
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
				<input type="text" name="email" placeholder="Email" required="" value="<?php echo $row["email"]; ?>" readonly style="background:lightgray;">
			</label>
			<label>
				<h4>Mật khẩu cũ</h4>
				<?php 
					if(!empty($error_array["matkhaucu"])){
						echo "<p>".$error_array["matkhaucu"]."</p>";
					}
				 ?>
				<input type="password" name="passcu" placeholder="Mật khẩu" required="">
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
			<br>
			<label>
				<button style="width:30%;" type="submit" name="changle">Đổi mật khẩu</button>
			</label>
		</div><!--main-right-right-->
	</form>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>

<?php $title="Đăng nhập  |  Shop bán hành online"; ?>
<?php require_once("inc/ketnoi.php"); ?>
<?php
	if(isset($_POST["dang-nhap"])){
		$email=$_POST["email"];
		$matkhau=md5($_POST["password"]);
		$error_array=array();
		if(validate_email($email)){
			$error_array["email"]="Email bạn nhập không đúng định dạng !!!";
		}
		else{

			$sql="SELECT email,matkhau,trangthai FROM taikhoan WHERE email='{$email}' AND matkhau='{$matkhau}'";
			$query=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
			if($row==0){
				$error_array["error"]="Tài khoản hoặc mật khẩu không đúng !!! Mời nhập lại.";
			}else{
				$status=$row['trangthai'];
				if($status=="1"){
					$_SESSION["email"]=$email;
					$_SESSION["status"]=$status;					
					header('location:admin/admin.php');
				}
				else{
					$_SESSION["email"]=$email;
					$_SESSION["status"]=$status;
					header('location:user/user.php');
				}
			}
		}
	}
	
 ?>
<?php require_once("template/header.php") ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
	
	<div class="top-title">
		<div class="top-title-center">
			<li style="width:3%;"><a href="index.php"><i class="fa fa-home"></i></a></li>
			<li style="width:3%;">/</li>
			<li ><a href="dang-nhap.php">Đăng nhập</a></li>


		</div>
	</div>
	<div class="main">
		<div class="main-right" style="width:45%;background:#f7f7f7;border-radius:0.3em;padding:1em;">
			<p style="font-size:25px;padding:30px 0 10px 0;color:#333;"> Đăng ký</p>
			<p style="word-wrap: break-word;">Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</p>
			<a href="dang-ky.php"><button class="btn-dang-nhap">Đăng ký</button></a>
		</div><!--main-left-->
		<div class="main-left"  style="margin-left:25px;width:45%;background:#f7f7f7;border-radius:0.3em;padding:1em;">
			<p style="font-size:25px;padding:30px 0 10px 0;color:#333;">Đăng nhập</p>
			<?php 
				if(!empty($error_array["error"])){
					echo "<font color='red'>".$error_array["error"]."</font>";
				}
			 ?>
			<form method="post" >
				<label>
					<h4>Email</h4>
					<?php 
						if(!empty($error_array["email"])){
							echo "<font color='red'>".$error_array["email"]."</font>";
						}
					 ?>
					<input type="text" name="email" placeholder="Email" required="" style="width:98%">
				</label>
				<label>
					<h4>Mật khẩu</h4>
					<input type="password" name="password" required="" placeholder="Mật khẩu" style="width:98%">
				</label>
				<br>
				<br>
				<label>
					<a href="quen-mat-khau.php" class="question">Quên mật khẩu ?</a>
				</label>
				<br>
				<input type="hidden" name="dang-nhap" value="dang-nhap">
				<button type="submit" class="btn-dang-nhap" name="dang-nhap">Đăng nhập</button>	
			</form>
		</div><!--mian-right-->
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>
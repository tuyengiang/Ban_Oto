<?php $title="Liên hẹ" ?>
<?php require_once("template/header.php"); ?>
<?php 
	if(isset($_POST["lien-he"])){
		$email=$_POST["email"];
		$hoten=$_POST["hoten"];
		$noidung=$_POST["noidung"];
		$error_array=array();

		if(validate_hoten_exits($hoten)){
			$error_array["hoten"]="Họ tên chứa quá nhiều khoảng cách giữa các chữ !!!";
		}
		if(validate_email($email)){
			$error_array["email"]="Email không hợp lê !!! Mời nhập lại.";
		}
		if(strlen($noidung)<50){
			$error_array["noidung"]="Nội dung đóng góp phải lớn hơn 50 ký tự !!!";
		}
		if(empty($error_array)){
			$sql="INSERT INTO lienhe (hoten,email,noidung)
				VALUES('{$hoten}','{$email}','{$noidung}')
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script> alert('Cảm ơn bạn đã đóng góp ý kiến !!!'); </script>";
			}else{
				echo mysqli_error($conn);
				// echo "<script> alert('Đóng góp ý kiến thất bại !!! Xin thử lại sau.'); </script>";
			}
		}
	}
	
 ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>

	<p style="width:100%;height:50px;line-height:50px;color:#333;font-size:30px;text-align:center;margin:10px 0 10px 0;">Liên hệ</p>
	<div class="main" style="background:#f7f7f7;padding:0.5em;">
		<form method="post">
			<table>
				<tr>
					<td class="td"></td>
					<td>Mọi thông tin đóng góp của quý khách sẽ được gửi đến hệ thống !!</td>
				</tr>
				<tr>
					<td  class="td">Họ Tên *</td>
					<td>
						<input type="text" class="input-register" name="hoten" placeholder="Họ tên" required="">
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
					<td class="td">Nội dung *</td>
					<td>
						<textarea name="noidung" placeholder="Nội dung đóng góp" required=""></textarea>
					</td>
				</tr>
				<?php 
					if(!empty($error_array["noidung"])){
								echo "<tr><td></td><td><p>".$error_array["noidung"]."</p></td></tr>";
					}
				?>
				<tr>
					<td class="td"></td>
					<td>
					
						<button type="submit" class="btn-dang-nhap" name="lien-he">Gửi liên hệ</button>
					</td>
				</tr>
				
	
			</table>
		</form>
	</div><!--main-->
<?php require_once('template/bottom.php'); ?>
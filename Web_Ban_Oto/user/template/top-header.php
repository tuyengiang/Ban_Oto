<div class="top">
		<div class="top-center">
			<div class="top-center-login">
				<ul>
					<?php 
						if(isset($_SESSION["email"]) && isset($_SESSION["status"])){
							$sql="SELECT email,hoten FROM taikhoan WHERE email='{$_SESSION["email"]}'";
							$query=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
							if($_SESSION["status"]=="1"){
								echo "<li style='width:100%;'><a style='padding-right:10px;' href='admin/admin.php'>Quản trị, ".$row["hoten"]."</a></li>";
							}
							else{
								echo"
									<li style='width:100%;'><a style='padding-right:10px;' href='user/user.php'>Khách, ".$row["hoten"]."</a>
										<ul class='sub-login'>
											<li><a href='user/don-hang.php'>Đơn hàng của bạn</li>
											<li><a href='user/info.php'>Thông tin của bạn</li>
											<li><a href='user/doimatkhau.php'>Đổi mật khẩu</li>
											<li><a href='../admin/logout.php'>Đăng xuất</li>
										</ul>
									</li>
	
								";
							}
						} else{
							echo '	<li style="padding-left:30px;"><a href="dang-nhap.php">Đăng nhập</a></li>
									<li style="display:block;width:3%;line-height:30px;margin-left:5px;">|</li>
									<li><a href="dang-ky.php">Đăng ký</a></li>
							';
						}
					?>
				</ul>
			</div><!--top-center-login-->
		</div><!--top-center-->

</div><!--top-->
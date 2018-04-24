<div class="top">
		<div class="top-center">
			<div class="top-center-login">
				<ul>
					<?php 
						if(isset($_SESSION["email"])){
							$sql="SELECT email,hoten FROM taikhoan WHERE email='{$_SESSION["email"]}'";
							$query=mysqli_query($conn,$sql);
							$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
							echo "<li style='width:100%;'><a style='padding-right:10px;' href='admin/admin.php'>Xin chào, ".$row["hoten"]."</a>";
						} else{
							echo '	<li><a href="dang-nhap.php">Đăng nhập</a></li>
									<li style="display:block;width:3%;line-height:30px;margin-left:5px;">|</li>
									<li><a href="dang-ky.php">Đăng ký</a></li>
							';
						}
					?>
				</ul>
			</div><!--top-center-login-->
		</div><!--top-center-->

</div><!--top-->
<div class="main-left">
			<div class="info-img">
				<?php 
					$sql="SELECT hinhanh FROM taikhoan WHERE id='{$nguoidung}'";
					$query=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
					if(empty($row["hinhanh"])){
						echo '<a href="info.php"><img src="../images/images-user/admin.jpg"></a>';
					}else{
						echo '<a href="info.php"><img src="../images/images-user/'.$row["hinhanh"].'"></a>';
					}
				 ?>
				
			
			</div>
			<ul>
				<li><i class="fa fa-comments"></i><a href="hom-thu.php">Hòm thư</a></li>
				<li><i class="fa fa-plus"></i><a href="add-product.php">Thêm <i style="float:right;padding-right:30px;" class="fa fa-angle-down"></i></a>
					<ul class="sub-menu">
						<li><i class="fa fa-plus"></i><a href="add-product.php">Thêm sản phẩm</a></li>
						<li><i class="fa fa-plus"></i><a href="add-category.php">Thêm chuyên mục</a></li>
					</ul>
				</li>
				<li><i class="fa fa-bars"></i><a href="danh-sach-pro.php">Danh sách <i style="float:right;padding-right:30px;" class="fa fa-angle-down"></i></a>
					<ul class="sub-menu">
						<li><i class="fa fa-bars"></i><a href="danh-sach-pro.php">Danh sách sản phẩm</a></li><li><i class="fa fa-bars"></i><a href="danh-sach-cm.php">Danh sách chuyên mục</a></li>
					</ul>
				</li>
				<li><i class="fa fa-money"></i><a href="doanh-thu.php">Doanh Thu</a></li>
				<li><i class="fa fa-user"></i><a href="danh-sach-tv.php">Thành viên <i style="float:right;padding-right:30px;" class="fa fa-angle-down"></i></a>
					<ul class="sub-menu">
						<li><i class="fa fa-plus"></i><a href="add-user.php">Thêm thành viên</a></li><li><i class="fa fa-bars"></i><a href="danh-sach-tv.php">Danh sách thành viên</a></li>
					</ul>
				</li>
				<li><i class="fa fa-sign-in"></i><a href="logout.php">Đăng xuất</a></li>

			</ul>
</div><!--main-left-->
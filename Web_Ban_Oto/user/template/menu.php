	<div style="clear:left;"></div>
	<div class="menu">
		<div class="menu-center">
				<ul>
					<li style="width:5%;"><a href="../index.php"><i class="fa fa-home"></i></a></li>
					<li><a href="../gioi-thieu.php">Giới thiệu</a></li>
					<li style="width:15%;"><a href="#">Sản phẩm  <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<?php 
								$sql="SELECT * FROM danhmuc";
								$query=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
							 ?>
							<li><a href="../list-category.php?id=<?php echo $row['madanhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></a></li>
							<?php endwhile; ?>
						</ul>
					</li>
					<li style="width:15%;"><a href="#">Mua xe <i class="fa fa-angle-down"></i></a>
						<ul class="sub-menu">
							<li><a href="#">Bảng gía xe</a></li>
							<li><a href="#">Mua xe trả góp</a></li>
							<li><a href="#">Đăng ký lái thử</a></li>

						</ul>
					</li>
					<li><a href="#">Khuyến mại</a></li>
					<li><a href="#">Tin tức</a></li>
					<li style="width:10%;"><a href="../lien-he.php">Liên hệ</a></li>
					<li style="width:5%;float:right;">
						<i class="fa fa-shopping-basket"></i>
						<ul class="sub-menu-1">
							<li></li>
						</ul>
					</li>
					<li style="width:5%;float:right;" id="click-search">
						<i class="fa fa-search"></i>
						
					</li>
				</ul>
			
		</div><!--menu-center-->
	</div><!--menu-->
	<div style="clear:left;"></div>
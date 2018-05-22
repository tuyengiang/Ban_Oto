<div class="category-right">
			
			<div id="apph1" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h1">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h1' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app1-->

			<div id="apph2" class="app" class="wow bounceIn">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h2">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h2' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app2-->

			<div id="apph3" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h3">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h3' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app3-->

			<div id="apph4" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h4">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h4' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app4-->

			<div id="apph5" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h5">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h5' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app5-->

			<div id="apph6" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="list-category.php?id=h6">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT * FROM product WHERE madanhmuc='h6' ORDER BY masp DESC LIMIT $startform,$post_page";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<a href="single.php?id=<?php echo $row['masp']; ?>"><img src="images/sanpham/<?php echo $row['hinhanh']; ?>"></a>
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
						</div><!--content-title-->
						<div class="content-cart">
								Gía bán: <?php 

									$s=$row["giaban"];
									$s1=substr($s,0,3);
									$s2=substr($s,4,3);
									$s3=substr($s,6,3);
									echo $s1. ".".$s2.".".$s3." vnđ";
								?>
									
						</div><!--content-cảt-->
						<div class="content-button">
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
							<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--app6-->
</div><!--category-right-->
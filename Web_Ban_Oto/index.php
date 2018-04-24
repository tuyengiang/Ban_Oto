<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
<?php require_once("template/slider.php"); ?>
<?php require_once('template/info.php'); ?>'
	<div class="main">
		<div class="category-left">
			<div class="category-left-bars">
				<div class="title"><i class="fa fa-bars"></i> Danh mục hãng xe</div>
				<ul>
					<?php 
						$sql="SELECT * FROM danhmuc";
						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
					 ?>
					<li><a href="list-category.php?id=<?php echo $row['id']; ?>"><i class="fa fa-angle-right"></i> <?php echo $row['tendanhmuc']; ?></a></li>
					<?php endwhile; ?>
					
				</ul>
			</div><!--main-left-category-->
			<div class="category-left-qc">

			</div><!--main-left-qc-->
		</div><!--main-left-->
		<div class="category-right">
			<div class="cate-new">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="#">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
				<?php 
					$sql="SELECT * FROM product";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				<div class="content">
					<div class="content-img">
						<img src="images/sanpham/<?php echo $row['hinhanh']; ?>">
					</div><!--content-img-->

					<div class="content-excerpt">
						<div class="content-title">
							<a href="single.php?id=<?php echo $row['id']; ?>"><?php echo $row['tensp']; ?></a>
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
							<button class="btn-mua"><i class="fa fa-cart-plus"></i> Mua ngay</button>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				<?php endwhile; ?>
			</div><!--cate-new-->
		</div><!--main-right-->
		
	
	</div><!--main-->
	<?php require_once('template/bottom.php'); ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
<?php 
	if(isset($_GET["tim-kiem"])){
		if(isset($_GET["search"])){
			$search=$_GET["search"];
		}
	}
 ?>

<div class="main">
	<?php require_once("template/main-left.php"); ?>
	<div class="category-right">
			
			
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Kết quả tìm kiếm:<font color="#ff5c00"> <?php echo $search ?></font></div>
				</div><!--title-->
				<?php
					
						$sql="SELECT * FROM product WHERE tensp LIKE '%$search%'";
						$query=mysqli_query($conn,$sql);
						$num=mysqli_num_rows($query);
						if($num>0 && !empty($search)){
							while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				 <div class="content">
					<div class="content-img">
						<img src="images/sanpham/<?php echo $row['hinhanh']; ?>">
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
							<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang"><i class="fa fa-car"></i> Đăng ký lái thử</button></a>
						</div><!--content-button-->
					</div><!--content-excerpt-->
				</div><!--content-->
				 <?php 
				 	endwhile; 
				 	}else{
				 		echo "Không tìm thấy sản phẩm bạn cần tìm !!! Mời bạn nhập lại sản phẩm bạn cần tìm !!!";
				 	}
				  ?>
	</div>

</div><!--main-->

<?php require_once("template/bottom.php"); ?>
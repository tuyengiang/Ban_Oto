<?php 
	$price=$_GET["price"];
 ?>
<?php $search="Tìm kiếm theo gía "; 
	if($price=="low"){
		$title=$search. "200tr -600tr";
	}
	else if($price=="average"){
		 $title=$search."600tr - 900tr";
	}
	else if($price=="hight"){
		 $title=$search."900tr - > tỷ";
	}

?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>

<div class="main">
	<?php require_once("template/main-left.php"); ?>
	<div class="category-right">
			
			
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Kết quả tìm kiếm:<font color="#ff5c00"> <?php 
							if($price=="low"){
								echo " 200tr -600tr";
							}
							else if($price=="average"){
								echo " 600tr - 900tr";
							}
							else if($price=="hight"){
								echo " 900tr - > tỷ";
							}

					 ?></font></div>
				</div><!--title-->
				<?php
					if($price=="low"){
						$sql="SELECT * FROM product WHERE giaban<600000000";
						$query=mysqli_query($conn,$sql);
						$num=mysqli_num_rows($query);
						if($num>0 && !empty($price)){
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
									<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
									<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
								</div><!--content-button-->
							</div><!--content-excerpt-->
						</div><!--content-->
				 <?php 
					 		endwhile; 
					 	}else{
					 		echo "Không tìm thấy sản phẩm bạn cần tìm !!! Mời bạn nhập lại sản phẩm bạn cần tìm !!!";
					 	}
					}
					else if($price=="average"){
						$sql="SELECT * FROM product WHERE giaban<900000000 AND giaban>600000000";
						$query=mysqli_query($conn,$sql);
						$num=mysqli_num_rows($query);
						if($num>0 && !empty($price)){
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
									<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
									<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
								</div><!--content-button-->
							</div><!--content-excerpt-->
						</div><!--content-->
				 <?php 
					 		endwhile; 
					 	}else{
					 		echo "Không tìm thấy sản phẩm bạn cần tìm !!! Mời bạn nhập lại sản phẩm bạn cần tìm !!!";
					 	}
					}
				 else if($price=="hight"){
						$sql="SELECT * FROM product WHERE giaban>900000000";
						$query=mysqli_query($conn,$sql);
						$num=mysqli_num_rows($query);
						if($num>0 && !empty($price)){
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
									<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang" style="width:50%;"><i class="fa fa-car"></i> Đặt xe</button></a>
									<button type="submit" class="btn-mua" style="width:25%;background:white;color:red;border:1px solid #ddd;"><i class="fa fa-heart"></i></button>
								</div><!--content-button-->
							</div><!--content-excerpt-->
						</div><!--content-->
				 <?php 
					 		endwhile; 
					 	}else{
					 		echo "Không tìm thấy sản phẩm bạn cần tìm !!! Mời bạn nhập lại sản phẩm bạn cần tìm !!!";
					 	}
					}
				 ?>
	</div>

</div><!--main-->

<?php require_once("template/bottom.php"); ?>
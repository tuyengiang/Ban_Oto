<?php 
	require_once('inc/ketnoi.php'); 
	 $id=$_GET["id"];
	 $sql="SELECT * FROM product WHERE masp='{$id}'";
	 $query=mysqli_query($conn,$sql);
	 $row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	 $title=$row["tensp"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(isset($title)){ echo $title." |  Mua bán oto hàng đầu việt nam"; }else{echo "Trang Chủ |  Mua bán oto hàng đầu việt nam";}?>

	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css"/>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	 <script src="js/main.js"></script>
</head>
<body>
<?php require_once("template/top-header.php"); ?>
<?php require_once('template/header-title.php'); ?>
<?php require_once("template/menu.php"); ?>
<?php 
	$sql="SELECT * FROM product WHERE masp='{$id}'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$title=$row["tensp"];
 ?>
<div class="top-title">
		<div class="top-title-center">
			<ul>
				<li><a href="index.php">Trang Chủ</a></li>
				<li style="width:3%;"><i class="fa fa-angle-right"></i></li>
				<li style="width:30%;text-align:left;"><a href="dnag-ky.php"><?php echo $row["tensp"]; ?></a></li>
			</ul>
		</div><!--top-center-->
</div><!--top-title-->
<div class="main" >
	<div class="main-left-info">

		<div class="main-left-cart">

			<div class="main-left-cart-img">
				<img src="images/sanpham/<?php echo $row["hinhanh"]; ?>">
			</div><!--main-left-car-img-->

			<div class="main-left-cart-shop">
				<div class="main-left-title">
					<?php echo $row["tensp"]; ?>
				</div><!--main-left-title-->
				<div class="money">
					<p>Giá dưới đây là giá niêm yết, chưa bao gồm chiết khấu và các chương trình khuyến mại khác.</p>
					<b>
						Gía bán:

						<?php 
							$s=$row["giaban"];
							$s1=substr($s,0,3);
							$s2=substr($s,4,3);
							$s3=substr($s,6,3);
							echo $s1. ".".$s2.".".$s3." vnđ";
						 ?>
					</b>
				</div>
				
				
				<a href="cart/index.php?id=<?php echo $row['masp'];?>"><button class="btn-mua" name="mua-hang"><i class="fa fa-car"></i> Đăng ký lái thử</button></a>
						
				
			</div><!--main-left-cart-shop-->
		</div><!--main-left-cart-->
		<div style="clear:left;"></div>
			
		<br>
		
		<div class="main-left-excerpt">
			<div class="tab-wrapper">
				<div class="tab">
					<ul>
						<li><a href="#tab-1">Nội dung mô tả</a></li>
						<li><a href="#tab-2">Hình ảnh sản phầm</a></li>
					</ul>
				</div><!--tab-->
				<div style="clear:left;"></div>
				<div class="tab-content">
					<div id="tab-1" class="tab-item">
						<p><?php echo $row["noidung"]; ?></p>
					</div><!--tab1-->
					<div id="tab-2" class="tab-item">
						
						<?php 
							$sql="SELECT * FROM hinhanh WHERE id_sanpham='{$id}'";
							$query=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)): 
						?>
							

								<img src="images/anhsanpham/<?php echo $row['hinhanh']; ?>">

						<?php endwhile; ?>
						
					</div><!--tab-2-->

					<div style="clear:left;"></div>

				</div><!--tab-content-->
			</div><!--tab-->
		</div><!--main-left-info-->

	</div><!--main-left-->

	
</div><!--main-->

<?php require_once("template/bottom.php"); ?>
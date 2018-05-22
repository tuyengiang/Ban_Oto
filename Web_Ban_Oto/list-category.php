<?php require_once('inc/ketnoi.php'); ?>
<?php $id=$_GET["id"];

	$sql="SELECT * FROM danhmuc WHERE madanhmuc='{$id}'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	$title=$row["tendanhmuc"];
	$ten=$row["tendanhmuc"];
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
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
	<div class="main">
		<?php require_once("template/main-left.php"); ?>
		<div class="category-right">
			<div class="cate-new">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> <?php echo $ten; ?></div>
				</div><!--title-->
				<?php 
					$page=empty($_GET["page"]) ? 1 : ($_GET["page"]);
					$totalpost=get_page_admin_product();
					$startform=($page-1)*$post_page;
					$totalpage=round($totalpost/$post_page);
					$sql="SELECT product.*,danhmuc.madanhmuc as madanhmuc FROM product,danhmuc WHERE product.madanhmuc=danhmuc.madanhmuc AND danhmuc.madanhmuc='{$id}' ORDER BY masp DESC LIMIT $startform,$post_page";
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
			</div><!--cate-new-->
		</div><!--main-right-->
		
	
	</div><!--main-->
	<?php require_once('template/bottom.php'); ?>
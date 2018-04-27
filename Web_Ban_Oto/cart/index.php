<?php $title="Giở hàng"; ?>
<?php require_once("../user/template/header.php"); ?>
<?php 
		if(isset($_GET["cart"])){
			$cart=array("product","cart");
			if(in_array($_GET["cart"],$cart)){
				$_cart=$_GET["cart"];
			}else{
				$_cart="product";
			}
		}else{
			$_cart="product";
		}
	 ?>
<?php require_once("../user/template/top-header.php"); ?>
<?php require_once("../user/template/header-title.php") ?>
<?php require_once("../user/template/menu.php"); ?>

<div class="main">
	<div class="title-list">
			<div class="ti-td"><i class="fa fa-shopping-basket"></i> Sản phẩm bạn mua </div>
			<div class="xem-them">
						<a href="#">Xem thêm <i class="fa fa-angle-double-right"></i></a>
			</div>
	</div><!--title-->

	<?php require_once($_page.".php"); ?>

	
	
</div><!--main-->

<?php require_once("../user/template/bottom.php"); ?>
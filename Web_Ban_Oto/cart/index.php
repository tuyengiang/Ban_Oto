<?php $title="Giở hàng"; ?>
<?php require_once("../user/template/header.php"); ?>
<?php 
	$id=$_GET["id"];
	$_SESSION["cart"]=$id;

	if(isset($_POST["mua"])){
		$soluong=$_POST["soluong"];
		$_SESSION["soluong"]=$soluong;
		if(isset($_SESSION["email"])){
			header("location:thanh-toan.php");
		}else{
			header('location:../dang-nhap.php');
		}
	}
 ?>
<?php require_once("../user/template/top-header.php"); ?>
<?php require_once("../user/template/header-title.php") ?>
<?php require_once("../user/template/menu.php"); ?>

<div class="main">
	<div class="title-list">
			<div class="ti-td"><i class="fa fa-shopping-basket"></i> Xe bạn đặt </div>
	</div><!--title-->
	
	 <?php 
	 	$sql="SELECT masp,hinhanh,tensp,giaban FROM product WHERE masp='{$id}'";
	 	$query=mysqli_query($conn,$sql);
	 	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);

	  ?>
	 <div class="hang-mua">
		<div class="hang-mua-img">
			<img src="../images/sanpham/<?php echo $row['hinhanh'];?>">

		</div><!--img-->

		<div class="hang-mua-title">
			 <a href="../single.php?id=<?php echo $row["masp"]; ?>"><?php echo $row["tensp"]; ?></a>
		</div><!--hang-mua-title-->
		<form method="post">
			<div class="hang-mua-soluong">
					<input type="number" name="soluong" style="width:100%;border:1px solid #ddd;height:35px;text-align:center;font-size:20px;" value="1">
			</div>
			<div class="hang-mua-tuy-chon">
				
					<button type="submit" name="mua" class="btn-mua">Tiến hành đặt xe</button>
				
			</div>
		</form>

	 </div><!--hang-maua-->
	<div style="clear:left;"></div>
	
</div><!--main-->


<?php require_once("../user/template/bottom.php"); ?>
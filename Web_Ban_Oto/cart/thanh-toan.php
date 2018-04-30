<?php $title="Giở hàng"; ?>
<?php require_once("../user/template/header.php"); ?>
<?php require_once("../user/template/top-header.php"); ?>
<?php require_once("../user/template/header-title.php") ?>
<?php require_once("../user/template/menu.php"); ?>

<div class="main">
	<div class="title-list">
			<div class="ti-td"><i class="fa fa-shopping-basket"></i> Tiến hàng mua hàng </div>
			
	</div><!--title-->
	
	<div class="info-cart">
		<?php 
			
			if(isset($_SESSION["cart"]) && isset($_SESSION["soluong"])){
				$id=$_SESSION["cart"]; $soluong=$_SESSION["soluong"];
				$sql="SELECT masp,hinhanh,tensp,giaban FROM product WHERE masp='{$id}'";
				$query=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
			}


		  	if(isset($_POST["mua"])){
		  		$gia=($soluong * $row["giaban"]);
		  		$sql="INSERT INTO cart (masp,tensp,giaban,soluong,hinhanh,email)
				VALUES('{$row["masp"]}','{$row["tensp"]}','{$gia}','{$soluong}','{$row['hinhanh']}','{$_SESSION['email']}')
		  			";
		  		$query=mysqli_query($conn,$sql);
		  		if($query){
		  				echo "<script> alert('Đặt hàng thành công !!'); </script>";
		  				unset($_SESSION["cart"]);
		  				unset($_SESSION["soluong"]);
		  				
		  		}else{
		  				echo "Dat hang that bai".mysqli_error($conn);
		  		}
		  	}

		   ?>
	   <!--thong tin mua hang -->
		<?php 
			if(isset($_SESSION["cart"]) && isset($_SESSION["soluong"])){
				require("info.php");
			}else{
				echo "Bạn muốn đến giỏ hàng ";
				echo "<a href='../user/user.php'>Tại đây</a>";
			}

		 ?>

	<div style="clear:left;"></div>
	
</div><!--main-->


<?php require_once("../user/template/bottom.php"); ?>
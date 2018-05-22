<?php $title="Trang quản lý của bạn"; ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
<?php 
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM cart WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		if($query){
			echo "<script>alert('Hủy thành công !!!');</script>";
		}else{
			echo "<script>alert('Hủy không thành công !!!');</script>";
		}
	}
 ?>
<div class="main">
	<div class="category-left">
			<div class="category-left-bars">
				<div class="title"><i class="fa fa-bars"></i> Chức năng</div>
				<ul>
					<ul>
						<li><a href="#apph1"><i class="fa fa-"></i> Đơn hàng của bạn</a></li>
						<li><a href="#apph2"><i class="fa fa-user"></i> Thông tin của bạn</a></li>
						<li><a href="../admin/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
					</ul>
					
				</ul>
		</div>
	</div><!--main-left-category-->

	<div class="category-right">
			
			<div id="apph1" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-bars"></i> Đơn hàng của bạn</div>
					
				</div><!--title-->


				 <?php 

				 	$page=empty($_GET["page"]) ? 1 :($_GET["page"]);
				 	$post=get_post_user();
				 	$startform=($page-1)*$post_page;
				 	$totalpage=round($post/$post_page);

				 	$sql="SELECT taikhoan.email as temail,cart.* FROM cart,taikhoan WHERE taikhoan.email=cart.email AND cart.email='{$_SESSION['email']}' ORDER BY id DESC LIMIT $startform,$post_page";
				 	$query=mysqli_query($conn,$sql);
				 	while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):

	  				?>
				 <div class="hang-mua">
					<div class="hang-mua-img">
						<img src="../images/sanpham/<?php echo $row['hinhanh'];?>">

					</div><!--img-->

					<div class="hang-mua-title">
						 <?php echo $row["tensp"]; ?>
					</div><!--hang-mua-title-->
					<div class="hang-mua-soluong" style="line-height:40px;margin-top:28px;">
						X <?php echo $row["soluong"]; ?>
					</div>
					<div class="hang-mua-tuy-chon" style="line-height:40px;margin-top:28px;">
							<?php 
								if($row["check_cart"]=="0"){
									echo "Đang xử lý";
								}else{
									echo "Đã xử lý";
								}
							 ?>		

							 <?php 
							 	if($row["check_cart"]=="1"){
							 		echo "";
							 	}else{



							  ?>	

							  <form method="post" style="display:inline;margin-left:10px;">
							 		<input type="hidden" name="delete" value="<?php echo $row['id'];?>">
									<button type="submit" onclick="return confirm('Bạn muốn hủy đơn hàng !!!');" style="width:40px;background:white;color:#26aa67;" class="btn-mua">Hủy</button>
							</form>	
							<?php } ?>	
	

					</div>
	
					

				 </div><!--hang-maua-->
				 <?php endwhile; ?>
				<div style="clear:left;"></div>
				<?php 
					if(isset($_GET["page"])){

				 ?>
					<div class="next">
						<ul>
							<li><i class="fa fa-angle-double-right"></i></li>
							<?php 
								for($i=0;$i<$totalpage;$i++):
							 ?>

							 <li ><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" href="user.php?page=<?php echo($i+1); ?>"><?php echo ($i+1) ?></a></li>

							<?php endfor; ?>
						</ul>
					</div><!--next-->
				 <?php 
					}


				 ?>
	
			</div>
			<div id="apph2" class="app">
				<div class="title-list">
					<div class="ti-td"><i class="fa fa-user-o"></i> Thông tin của bạn</div>
				</div><!--title-->
	
			</div>
	</div><!--catgory-right-->
	<div style="clear:left;"></div>
	
</div><!--main-->

<?php require_once("template/bottom.php"); ?>
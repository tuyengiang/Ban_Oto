<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
<?php require_once("template/slider.php"); ?>
<?php require_once('template/info.php'); ?>
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
					 
						<li><a href="#app<?php echo $row['madanhmuc']; ?>"><i class="fa fa-angle-right"></i> <?php echo $row['tendanhmuc']; ?></a></li>

					
					<?php endwhile; ?>
					
				</ul>
			</div><!--main-left-category-->
			<div class="category-left-qc">

			</div><!--main-left-qc-->
		</div><!--main-left-->
		<?php require_once("template/main.php"); ?>
	
	</div><!--main-->
	<?php require_once('template/bottom.php'); ?>
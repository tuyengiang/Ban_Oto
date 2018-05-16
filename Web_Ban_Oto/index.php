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
				<div class="title"><i class="fa fa-search"></i> Tìm theo gía xe</div>
				<div class="search-price">
					<form method="post" action="price.php">
						<label>
							<select name="price">
								<option>Tìm theo gía</option>
								<option value="low">Từ 200tr - 600tr</option>
								<option value="average">Từ 600tr - 900tr</option>
								<option value="hight">> 1tỷ</option>
							</select>	
						</label>
						<center><button style="width:60%;margin-bottom:10px;" type="submit" class="btn-mua"><i class="fa fa-search"></i> Tìm kiếm</button></center>
					</form>
				</div><!--search-price-->
			</div><!--main-left-qc-->
		</div><!--main-left-->
		<?php require_once("template/main.php"); ?>
	
	</div><!--main-->
	<?php require_once('template/bottom.php'); ?>
<?php $title="Trang quản lý của bạn"; ?>
<?php require_once("template/header.php"); ?>
<?php require_once("template/top-header.php"); ?>
<?php require_once("template/header-title.php") ?>
<?php require_once("template/menu.php"); ?>
<div class="main">
	<div class="category-left">
			<div class="category-left-bars">
				<div class="title"><i class="fa fa-bars"></i> Chức năng</div>
				<ul>
					<ul>
						<li><a href="don-hang.php"><i class="fa fa-"></i> Đơn hàng của bạn</a></li>
						<li><a href="info.php"><i class="fa fa-user"></i> Thông tin của bạn</a></li>
						<li><a href="../admin/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
					</ul>
					
				</ul>
		</div>
	</div><!--main-left-category-->

	<div class="category-right">
			<div class="title-list">
					<div class="ti-td"><i class="fa fa-car"></i> Khám phá các dòng xe</div>
					<div class="xem-them">
						<a href="#">Xem thêm <i class="fa fa-angle-double-right"></i></a>
					</div>
				</div><!--title-->
	</div><!--catgory-right-->
	
</div><!--main-->

<?php require_once("template/bottom.php"); ?>
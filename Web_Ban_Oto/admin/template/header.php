<?php require_once("../inc/ketnoi.php"); ?>
<?php check_login(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php if(isset($title)){ echo $title; }else{echo "Trang quản trị";}?>

	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/main.min.css"/>
	<link rel="stylesheet" type="text/css" href="../css/awesome/css/font-awesome.min.css"/>
	<script src="../js/jquery.js"></script>
	<script src="../js/tinymce1/tinymce/js/tinymce/tinymce.min.js"></script>
	 <script src="../js/main.js"></script>
	 <script>
		tinymce.init({
		  selector: 'textarea',
		  elements : "textarea_full",
		  height: 300,
		  theme: 'modern',
		  plugins: 'image code',
		  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat | image | code',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
	 	});
	</script>
	
</head>
<body>
	<div class="header-top">
		<div class="logo">
			<p><a href="admin.php" title="Trang quản trị"><i class="fa fa-code"></i> Xin chào Admin</a></p>
		</div><!--logo-->
		<div class="header-info">
			<?php 
				if(isset($_SESSION["email"])){
					$email=$_SESSION["email"];
				}
				$sql="SELECT id,email,hoten FROM taikhoan WHERE email='{$_SESSION["email"]}'";
				$query=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
				$nguoidung=$row["id"];
			 ?>

			 <ul>
			 	<li><a href="admin.php"><i class="fa fa-user"></i> <?php echo $row["hoten"]; ?></a>
					<ul class="sub-menu">
						<li><a href="../"><i class="fa fa-home"></i> Xem trang web</a></li>
						<li><a href="info.php"><i class="fa fa-user-o"></i> Thông tin tài khoản</a></li>
						<li><a href="doimatkhau.php"><i class="fa fa-lock"></i> Đổi mật khẩu</a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
					</ul>
			 	</li>
			 </ul>
		</div>
	</div><!--header-top-->
	<div class="main">
<?php $title="Doanh thu bán sản phẩm hàng tháng" ?>
<?php require_once("template/header.php"); ?>
	
<?php require_once("template/main-left.php"); ?>
<div class="main-right">
	<div class="top-title">
		<ul>
			<li style="width:12%;"><a href="admin.php"><i class="fa fa-user"></i> Quản trị viên</a></li>
			<li style="width:3%;">/</li>
			<li style="width:18%;"><a href="doanh-thu.php"><i class="fa fa-plus"></i> Doanh thu sản phẩm</a></li>
		</ul>
	</div><!--top-title-->
	<table>
		<thead>
			<th style="width:5%;">Mã sản phẩm</th>
			<th>Tên sản phẩm</th>
			<th>Hình ảnh</th>
			<th>Số lượng</th>
			<th>Gía bán</th>
			<th>Người mua</th>
		</thead>
		<tbody>
			<?php 
				$sql="SELECT * FROM cart";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):

			 ?>
			<tr>
				<td><?php echo $row["masp"]; ?></td>
				<td><a style="width:100%;" href="../single.php?id=<?php echo $row['masp']; ?>"><?php echo $row["tensp"]; ?></a>
				</td>	
				<td class="td-img">
					<img src="../images/sanpham/<?php echo $row['hinhanh']; ?>">
				</td>
				<td style="width:5%;text-align:center;"><?php echo $row["soluong"]; ?>
				</td>
				<td style="width:15%;color:red;font-weight:bold;">
					<?php 
						$gia=$row["soluong"]* $row["giaban"];
						if($row["soluong"]==1){


								$s=$row["giaban"];
								$s1=substr($s,0,3);
								$s2=substr($s,4,3);
								$s3=substr($s,6,3);
								echo $s1. ".".$s2.".".$s3." vnđ";
							
						}
						else{
							if(strlen($gia)>9){
								$s1=substr($gia,0,1);
								$s2=substr($gia,4,3);
								$s3=substr($gia,6,3);
								$s4=substr($gia,7,3);
								echo $s1. ".".$s2.".".$s3."."."$s4"." vnđ";
							}
				}
				 ?>
				</td>
				<td>
					<?php 
						$sql1="SELECT taikhoan.hoten,taikhoan.email,cart.email as cemail FROM taikhoan,cart WHERE taikhoan.email=cart.email";
						$query1=mysqli_query($conn,$sql1);
						$row1=mysqli_fetch_array($query1,MYSQLI_ASSOC);
						
							echo $row1["hoten"];
						
						
					 ?>				
	

				</td>
			</tr>

			<?php endwhile; ?>
		</tbody>
	
	</table>	
	

	</div>
</div><!--main-right-->
<?php require_once("template/bottom.php"); ?>?>"><?php echo $row["tensp"]; ?></
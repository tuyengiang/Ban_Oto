	
		<form method="post">
		 <h1>Thông tin sản phẩm bạn chọn</h1>
			<div class="info-muahang">
				<p> <b>Tên sản phẩm:</b> <?php echo $row["tensp"]; ?></p>
				<p> <b>Số lượng:</b> <?php echo $soluong; ?></p>
				<p> 
					<b>Gía bán:</b> <?php 

						$s=$row["giaban"];
						$s1=substr($s,0,3);
						$s2=substr($s,4,3);
						$s3=substr($s,6,3);
						echo $s1. ".".$s2.".".$s3." vnđ";
					?>


				</p>
				<p><b>Tổng tiền phải thanh toán:</b> 
					<?php 
						$gia=$soluong * $row["giaban"];
						if($soluong==1){


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
				 ?></p>
			</div>
			<div class="info-img">
				<img src="../images/sanpham/<?php echo $row['hinhanh']; ?>">
			</div>
			<div style="clear:left"></div>
		 <h1> Chọn hình thức mua hàng </h1>
		 <input type="checkbox" checked=""> Đặt hàng và đến cửa hàng thanh toán<br><br>
		 <input type="checkbox" >Dịch vụ lái xe tận nhà <br>
		  <br>
			 
				<button style="width:15%;" class="btn-mua" type="submit" name="mua">Đặt hàng</button>

			 
		
		</div>
	</form>
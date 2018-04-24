<div style="clear:left;"></div>
<div style="clear:left;"></div>

<div class="lien-he">
	<div class="lien-he-content">
		<div class="form-lienhe">

			<form method="post" class="form-lh">
				Đăng ký nhận tin
				<input type="email" name="email" placeholder="Email....">
				<button class="btn-lh" type="submit"><i class="fa fa-envelope"></i> Đăng ký</button>
			</form>
		</div><!--form-lienhe-->
		<div class="plugins" style="float:right;margin-right:10px">
			<ul>
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
				<li><a href=""><i class="fa fa-google-plus"></i></a></li>
				<li><a href=""><i class="fa fa-youtube"></i></a></li>

			</ul>
		</div><!--plugins-->
	</div>
</div><!--lien-he-->
<div class="bottom">
	<div class="bottom-center">
		<div class="bottom-content">
			<h4>MaxStore</h4>
			<p><i class="fa fa-map-marker"></i> 218-Lĩnh Nam - Hoàng Mai - Hà Nội</p>
			<p><i class="fa fa-phone"></i> 0965.565.742</p>
			<p><i class="fa fa-envelope"></i> nguyentuyengiangbn@gmail.com</p>


		</div><!--bottom-left-->
		<div class="bottom-content">
			<h4> Thông tin nhóm 5 - ĐHTIn9a5</h4>
			<ul>
				<li><a href="#"><i class="fa fa-angle-right"></i> Nguyễn Tuyển Giảng</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i> Phạm Quang Hiếu</a></li>
				<li><a href="#"><i class="fa fa-angle-right"></i> Nguyễn Thế Anh</a></li>

			</ul>
		</div><!--bottom-content-->
		<div class="bottom-content">

		</div><!--bottom-content-->
	</div>
</div><!--bottom-->
<script language="javascript">
            
            $(document).ready(function()
            {
                // Hàm active tab nào đó
                function activeTab(obj)
                {
                    // Xóa class active tất cả các tab
                    $('.tab-wrapper ul li').removeClass('active');

                    // Thêm class active vòa tab đang click
                    $(obj).addClass('active');

                    // Lấy href của tab để show content tương ứng
                    var id = $(obj).find('a').attr('href');

                    // Ẩn hết nội dung các tab đang hiển thị
                    $('.tab-item').hide();

                    // Hiển thị nội dung của tab hiện tại
                    $(id) .show();
                }

                // Sự kiện click đổi tab
                $('.tab li').click(function(){
                    activeTab(this);
                    return false;
                });

                // Active tab đầu tiên khi trang web được chạy
                activeTab($('.tab li:first-child'));
            });
        </script>

<div class="back-top">
		<i class="fa fa-chevron-up"></i>
</div><!--back-top-->
</body>
</html>

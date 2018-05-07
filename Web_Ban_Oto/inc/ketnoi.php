<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","root","Auto_Web");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Không thể kết nối csdl").mysqli_error($conn);
	}
	
	//securi login
	function check_login(){
		global $_SESSION;
		if(empty($_SESSION["email"])){
			header("location:../dang-nhap.php");
		}
	}

	// functon validate du lieu
	function validate_email($email){
		$pattern="/^\S+@gmail\.com|hotmail\.com|yahoo\.com$/";
		return !preg_match($pattern,$email);
	}

	
	function validate_phone($dienthoai){
		$pattern="/^\+84[0-9]+|[0-9]+$/";
		return !preg_match($pattern,$dienthoai);
	}
	function validate_hoten($hoten){
		$pattern="/(\S)+/";
		return !preg_match($pattern,$hoten);
	}
	function validate_password($password){
		return strlen($password)>6 ? true :false;
	}

	function validate_hoten_exits($hoten){
		return strpos($hoten,"  "); /// ktra nhap nhieu khoang cach qua
	}
	function hoten_exists($hoten){
		return is_numeric($hoten);
	}
	function validate_strlen($password){
		return strlen($password)>16 ? true :false;
	}

	/**phan trang product admin **/

	$post_page=6;
	function get_page_admin_product(){
		global $conn;
		$sql="SELECT COUNT(masp) as total FROM product";
		$query=mysqli_query($conn,$sql);
		$total=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $total["total"];
	}

	/** phan trang san pham khach hang mua */

	$postpage=3;
	function get_post_user(){
		global $conn;
		$sql="SELECT COUNT(id) as total FROM cart";
		$query=mysqli_query($conn,$sql);
		$total=mysqli_fetch_array($query,MYSQLI_ASSOC);
		return $total["total"];
	}
?>
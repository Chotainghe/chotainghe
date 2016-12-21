<?php session_start();
	include "data_access_helper.php";
	function chuyenHuongDangNhap()
	{
			if(isset($_POST['tel']))
		    {
		        $tel = $_POST['tel'];
		        $pass = $_POST['password'];
		        $db = new DataAccessHelper;
				$db->connect();
				$result = $db->executeQuery("SELECT * FROM Account WHERE phone_number='".$tel."'and password='".$pass."'");
		        if (mysqli_num_rows($result) == 1)
		        {
		        	setcookie("isLogin","true",time()+3600);
		        	setcookie("tel", $tel, time()+3600);
		        	$_SESSION['password'] = $pass;
		            header('location:index.php');	
		        }	  
		        $db->close();      	
		    }
	}
	function chuyenHuongDangKy()
	{
			if(isset($_POST['user']))
		    {
		        	$tel = $_POST['tel'];
		        	setcookie("isLogin","true",time()+3600);
		        	setcookie("tel", $tel, time()+3600);
			        $user = $_POST['user'];
					$phone = $_POST['tel'];
					$pass = $_POST['password'];
					$db = new DataAccessHelper;
					$db->connect();
					$db->executeNonQuery("INSERT INTO account(id, phone_number, name_account, password) VALUES (NULL, '$phone', '$user', '$pass')");
					$db->close();
		        	header('location:success.php');		        	
		    }
	}
	function checkLogin()
	{
		if(isset($_COOKIE['isLogin']))
		{
			echo "<li class='dropdown'>
	        		<a href='#'' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='true'>Hi, ".$_COOKIE['tel']."<span class='caret'></span></a>
	                	<ul class='dropdown-menu'>
	                    <li><a href='account.php'>Thông tin tài khoản</a></li>
	                    <li><a href='logout.php'>Đăng xuất</a></li>
	                    </ul>
	                </li>";
	                /*    <li><a href="#">Something else here</a></li>
	                    <li role="separator" class="divider"></li>
	                    <li class="dropdown-header">Nav header</li>
	                    <li><a href="#">Separated link</a></li>
	                    <li><a href="#">One more separated link</a></li>
	                  </ul>
	                </li>*/
        }
        else
	 		echo "<li><a href='./login.php'>Đăng Nhập</a></li>";
	}
	function checkAccount()
	{
		$tel = $_POST['tel'];
		$pass = $_POST['password'];
		$db = new DataAccessHelper;
		$db->connect();
		$result = $db->executeQuery("SELECT * FROM account WHERE phone_number='".$tel."'and password='".$pass."'");
		if(mysqli_num_rows($result) == 0)
			echo "<br>Vui lòng kiểm tra lại SĐT/ Mật khẩu";
		$db->close();
	}
	function info($info)
	{
		$db = new DataAccessHelper;
		$db->connect();
		$result = $db->executeQuery("SELECT * FROM account WHERE phone_number='".$_COOKIE['tel']."'");
		$row = mysqli_fetch_assoc($result);
		echo $row[$info];
		$db->close();
	}
	function chuyenHuongDangTin()
	{
		if(isset($_POST['tel']))
		{
			$phone = $_POST['tel'];
			$category = $_POST['category'];
			$product_name = $_POST['pname'];
			$price = $_POST['price'];
			$content = $_POST['content'];
			$db = new DataAccessHelper;
			$db->connect();
			$db->executeNonQuery("INSERT INTO product(id, phone_number, product_name, product_category, product_price, note) VALUES (NULL, '$phone', '$product_name', '$catgory', '$price', '$content')");
			$db->close();
			header("location:posted.php");
		}
	}
?>
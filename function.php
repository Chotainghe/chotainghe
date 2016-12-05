<?php 
	function chuyenHuongDangNhap()
	{
			if(isset($_POST['tel']))
		    {
		        $tel = $_POST['tel'];
		        $pass = $_POST['password'];
		        if($tel == '01208514303' && $pass == 'tung1234')
		        {
		        	setcookie("isLogin","true",time()+3600);
		        	setcookie("tel", $tel, time()+3600);
		            header('location:index.php');	
		        }	        	
		    }
	}
	function chuyenHuongDangKy()
	{
			if(isset($_POST['user']))
		    {
		        	$tel = $_POST['tel'];
		        	setcookie("isLogin","true",time()+3600);
		        	setcookie("tel", $tel, time()+3600);
		            header('location:index.php');		        	
		    }
	}
	function checkLogin()
	{
		if(isset($_COOKIE['isLogin']))
		{
			echo "<li class='dropdown'>
	        		<a href='#'' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='true'>Hi, ".$_COOKIE['tel']."<span class='caret'></span></a>
	                	<ul class='dropdown-menu'>
	                    <li><a href='#'>Thông tin tài khoản</a></li>
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
?>
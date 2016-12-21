<?php 
include 'function.php';
chuyenHuongDangKy();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng ký tài khoản </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
	<!--Search-->
	<div class="navbar navbar-default " role="navigation">
    <div class="container">
	<div class="row">
        <form action="/Post/Filter">
            <div class="input-group">
                <div class="input-group-btn">
                    <button id="cbSearchCategory" name="category" class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Tất Cả <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu columns" aria-labelledby="cbSearchCategory">
                        <li><a onclick="$('#cbSearchCategory').html('Tất Cả <span class=&quot;caret&quot;></span>')">Tất Cả</a></li>
                              <li><a onclick="$('#cbSearchCategory').html('Phụ Kiện>Khác <span class=&quot;caret&quot;></span>')">Phụ Kiện &gt; Khác</a></li>
                    </ul>
                </div>
                <input type="text" class="form-control" autofocus="true" placeholder="Tìm kiếm theo tên sản phẩm..." name="keyword" id="keyword">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
        </form>
	</div>
	</div>
	</div>
    
	
	<nav style="background-color: black;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="nav-brand img-responsive" href="./index.php"><img src="./images/logo.jpg" style="width:130px; height:52px;"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#">Tai nghe</a>
                    </li>
					 <li>
                        <a href="#">DAC-Ampli</a>
                    </li>
					 <li>
                        <a href="#">Loa mini/Bluetooth</a>
                    </li>
                    <li>
                        <a href="#">Thẻ nhớ</a>
                    </li>
					
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
					
						</li>
						 <li><a href="./login.php">Đăng Nhập</a></li>
						 <li><a href="./postnew.php">Đăng Tin</a></li>
						
                </ul>
				 <ul class="nav navbar-nav navbar-right">
                        <!--<li><a href="#">Đăng Nhập</a></li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Tất cả</a>
                    <a href="#" class="list-group-item">Tai nghe AKG</a>
                    <a href="#" class="list-group-item">Tai nghe xiaomi</a>
					<a href="#" class="list-group-item">Tai nghe sony</a>
					<a href="#" class="list-group-item">Loa BMB</a>
					<a href="#" class="list-group-item">Loa JBL</a>
					
                </div>
            </div>

            <div class="col-md-9">
			<div class="col-md-2"></div>
			<div class="col-md-8 col-sm-12 col-xs-12 thumbnail">
                    <!--<img class="img-responsive" src="http://placehold.it/800x300" alt="">-->
					<!--<div class="container">-->
                    <form action="" method="POST">
					<div style="text-align:center; font-size:25px; font-family:times new roman; margin-top:20px;;"class="form-title"><b>ĐĂNG KÝ</b></div>
					<hr>
					<div class="col-md-3"></div>
					<div class="col-md-6">
					<input name="user" style="margin-bottom:5px" type="text" placeholder="Nhập tên tài khoản" class="form-control">
					<input name="tel" style="margin-bottom:5px" type="tel" placeholder="Nhập số điện thoại" class="form-control">
					<input name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
					<div class="form-group">
					<input type="checkbox" id="rememberMe" checked="">
					Tôi đồng ý với các điều khoản sử dụng của chotainghe.com
					<div class="form-group">
					<button style="background-color:#337ab7;color:white; margin-bottom:5px" type="submit" class="btn _2eyhSZKQv1uz_RH2pfHrg3 col-md-12 col-sm-12 col-xs-12">ĐĂNG KÝ</button>
					</div>
					</div>
					</div>
                    </form>
					</div>
					<div class="caption-full">
                        </div>
                    <div class="ratings">
                                                 
                        </p>
                    </div>
					

                </div>
				

            </div>

        </div>

    </div>
	

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Updating....</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

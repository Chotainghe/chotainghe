<?php 
include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chợ tai nghe - DAC - Hi-res </title>

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
<script>
var products = [
		"./images/tainghe1.jpg",
		"./images/tainghe2.jpg",
		"./images/tainghe3.jpg",
		"./images/tainghe4.jpg",
		"./images/tainghe5.jpg",
		"./images/loa1.png",
		"./images/loa2.png",
		"./images/loa3.png",
		"./images/loa4.jpg",
		"./images/thenho1.jpg",
		"./images/thenho2.jpg",
		"./images/thenho3.jpg",
		"./images/thenho4.jpg",
		];
		<!-- END Tao ra danh sach san pham -->
		
		<!-- Khi trang web dang duoc load thi se chay code ben duoi -->
		
		function timkiem()
		{
			
			var result="";
			var keyword = document.getElementById("keyword").value;
			if(keyword == "tainghe" || keyword == "tai nghe")
			{
				result += "<h4>Kết quả tìm kiếm</h4>";
				result += "<a class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' href=''> <img class='img-responsive' src='" +products[0] + "'style='width:200px; height:200px;'></a>"				
				result += "<a class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' href=''> <img class='img-responsive' src='" +products[1] + "'style='width:200px; height:200px;'></a>"
				result += "<a class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' href=''> <img class='img-responsive' src='" +products[2] + "'style='width:200px; height:200px;'></a>"
				result += "<a class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' href=''> <img class='img-responsive' src='" +products[3] + "'style='width:200px; height:200px;'></a>"
				result += "<a class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' href=''> <img class='img-responsive' src='" +products[4] + "'style='width:200px; height:200px;'></a>"
			}
			if(keyword == "loa")
			{
				
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[5] + "'style='width:200px; height:200px; border:2px solid;'></a>";
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[6] + "'style='width:200px; height:200px; border:2px solid;'></a>";
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[7] + "'style='width:200px; height:200px; border:2px solid;'></a>";	
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[8] + "'style='width:200px; height:200px; border:2px solid;'></a>";
						
			}
			if(keyword == "thenho" || keyword == "the nho")
			{
				
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[9] + "'style='width:200px; height:200px; border:2px solid;'></a>";
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[10] + "'style='width:200px; height:200px; border:2px solid;'></a>";
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[11] + "'style='width:200px; height:200px; border:2px solid;'></a>";	
				result += "<img class='col-md-3 col-sm-6 col-xs-12 thumbnail img-responsive' src='" + products[12] + "'style='width:200px; height:200px; border:2px solid;'></a>";
						
			}
			document.getElementById("ketqua").innerHTML=result;		
		}
</script>
</head>

<body>

    <!-- Navigation -->
	<!--Search-->
	<div class="navbar navbar-default " role="navigation">
    <div class="container">
	<div class="row"> 
	<div class="col-md-12">
        <!--<form action="./search.html">-->
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
                    <button class="btn btn-default" type="submit" onclick="timkiem()"><i class="glyphicon glyphicon-search"></i></button>
                </div>
				
            </div>
        <!--</form>-->
	</div>
	</div>
	</div>
	</div>
	
	<nav  style="background-color: black;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
					<?php
						checkLogin();
					?>
					<li><a href="./postnew.php">Đăng Tin</a></li>
						
					</ul>
                        <!--<li><a href="#">Đăng Nhập</a></li>
                    </ul>
            </div>

            <!-- /.navbar-collapse -->
        </div>
		</div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">  

            <div class="col-md-3 col-sm-12 col-xs-12">
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
            <div class="col-md-6">
            <form action="" method="GET">
            <h4>Thông tin tài khoản</h4>
            <hr>
            Tên tài khoản: <input style="margin-bottom:5px;" type="text" class="form-control" required="" value=<?php info('name_account'); ?>>
            SĐT: <input style="margin-bottom:5px;" type="text" class="form-control" required="" value=<?php info('phone_number'); ?>>
            Địa chỉ: <input style="margin-bottom:5px;" type="text" class="form-control" required="" value=<?php info('diachi'); ?>>
            Email: <input style="margin-bottom:5px;" type="text" class="form-control" required="" value=<?php info('email'); ?>>
            <li></li>
            <button id='login' style="background-color:#337ab7; color:white; margin-bottom:5px;" type="submit" class="btn _2eyhSZKQv1uz_RH2pfHrg3 col-md-12 col-sm-12 col-xs-12">Cập nhật</button>
            </form>
            </div>
            </div>
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
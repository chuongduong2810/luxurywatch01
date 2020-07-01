

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Luxury Watch</title>

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<!-- Slick -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />

	<!-- Font Awesome CDN -->
	<script src="https://kit.fontawesome.com/255938e5d5.js" crossorigin="anonymous"></script>
	<!-- Custom css -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/footer.css">
	<!-- Sweet alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=342432456383702&autoLogAppEvents=1" nonce="TncFQsy9"></script>
</head>
<body>
	<?php
	session_start();
	//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
	//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
	if (!isset($_SESSION['token'])&&!isset($_SESSION['fb_access_token'])&&!isset($_SESSION['gmail_access_token'])) {
		 header('Location: login-page.php');
	}

	if (isset($_GET['addtocart'])){
		$_SESSION['id_addtocart'] = $_GET['addtocart'];
		include 'php/home-page/addtocart.php';
		
	}
	?>
	<!-- Header -->
	<header>
		<div class="row">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white">
				<div class="container">
					<!-- Brand -->
					<a href="#" class="navbar-brand">
						<i class="far fa-gem"></i>
						<span class="h2 my-md-3 site-title">Luxury Watch</span>
					</a>
					<!-- Toggler/collapsibe Button -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- Navbar links -->
					<div class="collapse navbar-collapse" id="collapsibleNavbar">
						<ul class="navbar-nav mx-auto mx-4">
							<li class="nav-item active">
								<a class="nav-link" href="./index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./index.php#collection">Collection</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="./index.php#footer">Contact</a>
							</li>
							<li class="nav-item hide">
								<a class="nav-link" href="./profile.php">Account</a>
							</li>
							<li class="nav-item hide">
								<a class="nav-link" href="./cart.php">Cart</a>
							</li>
						</ul>
						<form class="form-inline" action="./searchresult.php" method="post">
							<input class="form-control" name="searching" type="search" placeholder="Nhập tên đồng hồ..." aria-label="Search" value="" pattern="[A-Za-z]{5,}" title="Nhập vào hơn 5 ký tự">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btn-search">
								<i class="fa fa-search"></i>
							</button>
						</form>
						<div class="icons">
							<a href="profile.php"><img src="img/user.svg" id="user-icon"></a>
							<a href="cart.php"><img src="img/cart.svg" id="cart-icon"></a>
						</div>				
					</div>
				</div>	
			</nav>
		</div>
		
	</header>
	<!-- End Header -->
	<main>
		<div class="container-fluid p-0 banner">
			<img src="img/banner-2.jpg" alt="banner" width="100%">
		</div>
		<div class="commit">
			<div class="commit-left">
				<i class="fa fa-truck" aria-hidden="true"></i>
				<h4 class="t-center">
					Miễn phí vận chuyển
				</h4>
				<span class="t-center">
					cho đơn hàng từ 25.000.000đ
				</span>
			</div>

			<div class="commit-middle">
				<i class="fa fa-refresh" aria-hidden="true"></i>
				<h4 class="t-center">
					60 ngày đổi trả
				</h4>

				<span class="t-center">
					nếu không vừa ý, hoặc sản phẩm khi giao bị lỗi
				</span>
			</div>

			<div class="commit-right">
				<i class="fa fa-shield" aria-hidden="true"></i>
				<h4 class="t-center">
					Bảo hành
				</h4>

				<span class="t-center">
					5 năm cho sản phẩm mua tại Luxury Watch
				</span>
			</div>
		</div>
		<!-- SLICK -->
		<!-- NEW PRODUCTS -->
		<div class="container">
			<h1 class="text-center py-4">NEW PRODUCTS</h1>
			<div class="slider">
				<?php include 'php/home-page/load-newproducts.php';?>
			</div>
		</div>
		
		<!-- Best sell -->
		<div class="container">
			<h1 class="text-center py-4">TOP SELLER</h1>
			<div class="slider">
				<?php include 'php/home-page/load-hotsale.php';?>
			</div>
		</div>


		
	</div>
	<!-- SLICK -->
	<div class="container">
		<h1 class="text-center py-5" id="collection">COLLECTION</h1>
		<div class="row">
			<div class="col-sm-4 col-md-3">
				<div class="category pl-4">
					<h4 class="mx-auto font-weight-bold py-2">Categories</h4>
					<ul>
						<li>
							<p class="category-item active" id="all">All</p>
						</li>
						<li>
							<p class="category-item" id="Gucci">Gucci</p>
						</li>
						<li>
							<p class="category-item" id="Longines">Longines</p>
						</li>
						<li>
							<p class="category-item" id="Citizen">Citizen</p>
						</li>
						<li>
							<p class="category-item" id="Tissot">Tissot</p>
						</li>
						<li>
							<p class="category-item" id="Hamilton">Hamilton</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-8 col-md-9">
				<div class="row">
					<?php include 'php/home-page/load-all-categories.php';?>
					
				</div>
				<div class="loadmore">
					<a id="btn-loadmore">Xem thêm ...</a>
				</div>
	<!-- 			<div class="row">
					<div class="pagination mx-auto">
						<a href="#"><i class="fa fa-chevron-left"></i></a>
						<a href="#">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#"><i class="fa fa-chevron-right"></i></a>
					</div>
				</div> -->
			</div>
		</div>
	</div>

</main>
<br><br><br><br>
<footer>
	<div class="footer-top" id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 footer-1">
					<a href="#" class="navbar-brand">
						<i class="far fa-gem"></i>
						<!-- <img src="./img/logo-lux-demo.png" alt="logo" class="nav-logo"> -->
						<span class="h2 my-md-3 site-title">Luxury Watch</span>
					</a>
					<p><b>Địa chỉ:</b> Trường Đại học CNTT</p> 
					<p><b>Điện thoại: </b>0566666666</p>
					<p><b>Email: </b>luxurywatch@gmail.com</p>  
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 footer-2">
					<h2>Hướng dẫn</h2>
					<ul>
						<li><a href="#">Hướng dẫn mua hàng</a></li>
						<li><a href="#">Chính sách bảo hành</a></li>
						<li><a href="#">Chính sách đổi trả</a></li>
						<li><a href="#">Chính sách giao hàng</a></li>
						<li><a href="#">Kiểm định chất lượng</a></li>
					</ul>
				</div>
				<!-- <div class="col-md-3 col-sm-6 col-xs-12 footer-3">
					<h2>Theo dõi chúng tôi</h2>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div> -->
				<div class="col-md-3 col-sm-6 col-xs-12 footer-3">
					<h2>Liên hệ với chúng tôi</h2>
					<a href="https://www.facebook.com/luxurywatch9"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 footer-4">
					<div class="fb-page" data-href="https://www.facebook.com/Luxury-Watch-107140461046811/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Luxury-Watch-107140461046811/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Luxury-Watch-107140461046811/">Luxury Watch</a></blockquote></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div>
			<p>All right reserved Luxury Watch</p>
		</div>
	</div>
</footer>

<!-- Bootstrap JS -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!-- Slick JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha256-zUQGihTEkA4nkrgfbbAM1f3pxvnWiznBND+TuJoUv3M=" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="js/loadmore.js"></script> -->
<script type="text/javascript" src="js/category2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha256-rXnOfjTRp4iAm7hTAxEz3irkXzwZrElV2uRsdJAYjC4=" crossorigin="anonymous"></script>
<script>
	$(".slider").slick({
		centerMode: true,
		slidesToShow: 4,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3
			}
		},
		{
			breakpoint: 994,
			settings: {
				slidesToShow: 2
			}
		},
		{
			breakpoint: 680,
			settings: {
				slidesToShow: 1
			}
		} 
		]
	},)
</script>
<script>
	$('.product-more').lazyload();
	// document.getElementById("all").click();
</script>
</body>
</html>
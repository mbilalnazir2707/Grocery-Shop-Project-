<?php
	session_start();
	error_reporting(0);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Grocery Shoppy an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!--pop-up-box-->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>

	<?php
		require 'header2.php';
		$email = $_SESSION['email'];

	?>
	<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Your Account
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
	</div>
	<?php
		require 'navigation2.php';
		$conn = new mysqli('localhost','root','','grocery_shope');
		$query ="select * from profile where `Email` = '$email' limit 1";
		$data = mysqli_query($conn,$query);
		$count = mysqli_num_rows($data);
		
		if($count == 1 )
		{
			require 'myProfile2.php';
		}
		else
		{
			require 'myProfile1.php';
		}
		$conn->close();
	?>


	<!-- footer -->
	<?php 
		require 'footer.php';
	?>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right">
		<div class="container">
			<p>© 2017 Grocery Shoppy. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->

	<?php
		require 'script2.php';
	?>
	<!-- //for bootstrap working -->
	<!-- //js-files -->


</body>

</html>
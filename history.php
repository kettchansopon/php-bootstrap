<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php'; ?>
</head>

<body>
	<?php $page = 'portfolio';
	include 'includes/navbar.php'; ?>
	
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/banner1.jpg"></div>
			<div class="carousel-item"><img src="img/banner2.jpg"></div>
			<div class="carousel-item"><img src="img/banner3.jpg"></div>
		</div>
	</div>

	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Lorem Ipsum</h2>
				<p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<img style="width: 80%; height: 80%; margin-bottom: 60px;" src="img/history4.jpg" alt="">
		</div>
	</div>

	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">The standard Lorem Ipsum passage, used since the 1500s</h2>
			<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/history1.jpg">
						<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/history2.jpg">
						<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/history3.jpg">
						<p>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/history5.jpg"></div>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>

</body>

</html>
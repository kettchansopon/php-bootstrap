<nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
		<div class="container-fluid logo-brand">
			<a class="navbar-brand" href="index.php">CAFE LOVER</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item bb">
						<a class="nav-link <?php if($page == 'home'){echo 'active';}?> " href="index.php">Home</a>
					</li>
					<li class="nav-item bb">
						<a class="nav-link <?php if($page == 'history'){echo 'active';}?>" href="history.php">History</a>
					</li>
					<li class="nav-item bb">
						<a class="nav-link <?php if($page == 'products'){echo 'active';}?>" href="products.php">Products</a>
					</li>
					<li class="nav-item bb">
						<a class="nav-link <?php if($page == 'course'){echo 'active';}?>" href="course.php">Course</a>
					</li>
					<li class="nav-item bb">
						<a class="nav-link <?php if($page == 'contact-us'){echo 'active';}?>" href="contact-us.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
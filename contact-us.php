<!DOCTYPE html>
<html lang="en">

<head>
	<?php $page = 'contact-us';
	include 'includes/head.php'; ?>
</head>

<body>
	<?php include 'includes/navbar.php'; ?>

	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">Contact Us</h2>
		</div>
	</div>
	</div>

	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="form-group">
				<label for="comment">Comment:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</div>
		<div class="row justify-content-center py-5">
			<a class="btn btn-purple btn-lg" href="#">Submit</a>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/scripts.php'; ?>

</body>

</html>
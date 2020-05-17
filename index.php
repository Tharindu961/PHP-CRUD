<!DOCTYPE html>
<html>
<head>
	<title>PHP CRUD</title>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="row justify-content-center">
	<form action="" method="POST">
		<div class="form-group">
		<label>Name</label>	
		<input type="text" name="name" class="form-control" value="Enter your name">
		</div>
		<div class="form-group">
		<label>Location</label>
		<input type="text" name="location" class="form-control" value="Enter your location">
		</div>
		<div class="form-group">
		<button type="submit" class="btn btn-primary" name="save">Save</button>
		</div>
	</form>
	</div>

</body>
</html>
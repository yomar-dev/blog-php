<?php 

require_once '../config.php';

?>	


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Blog Title</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<h2>New Post</h2>
				<a href="posts.php" class="btn btn-default">Back</a> <br><br>
				
				<form action="insert-post.php" method="post">
					<div class="form-group">
						<label for="inputTitle">Title</label> <br>
						<input type="text" name="title" id="inputTitle" value="" class="form-control">
					</div>
					<div class="form-group">
						<label for="inputContent">Content</label> <br>
						<textarea name="content" id="inputContent" rows="5" class="form-control"></textarea><br>
					</div>

					<div class="form-group">
						<input type="submit" value="Save" class="btn btn-primary">
					</div>
				</form>
				
			</div>


			<div class="col-md-4">
				<p>
					Brachinus hydrotomy Gobiiformes parodist zonated contemplation pinonic crystallogenetic restorationer revivingly openwork microblephary dishpan unbesought bekah latro unstructural lipothymial few obolary lalling gyral misprovidence aurophore zoopantheon caulicule retrievement shipment Hockday isidoid patrondom romeite Barosma hydroclimate horizontically inverter Illuministic pocketable sixty denticulation cantative smeech forficated elementariness spinigrade washstand Ning telecode.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<footer>
					Panel de Administración <a href="admin/index.php" title="">Ingresar</a>
				</footer>
			</div>
		</div>

	</div>
</body>
</html>
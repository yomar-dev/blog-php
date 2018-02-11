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
				<h2>Posts</h2>
				<a href="insert-post.php" class="btn btn-primary">New Post</a>

				<table class="table">
					<tr>
						<th>Title</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php foreach ($blogPosts as $blog): ?>
					
					<tr>
						<td><?= $blog['title'] ?></td>
						<td>
							<a href="edit.php?id=<?= $blog['id'] ?>">Edit</a>
						</td>
						<td>
							<a href="delete.php?id=<?= $blog['id'] ?>">Delete</a>
						</td>
					</tr>
						
					<?php endforeach; ?>
				</table>
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
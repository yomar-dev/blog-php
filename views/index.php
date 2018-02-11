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
				<?php foreach ($blogPosts as $blog): ?>
					<div class="blog-post">
						<h2><?= $blog['title'] ?></h2>
						<p>
							Jan 1, 2020 by <a href="#">Roosevelt</a>
						</p>
						<div class="blog-post-image">
							<img src="http://lorempixel.com/750/250/sports/<?= $blog['id'] ?>" alt="">
						</div>
						<div class="blog-post-content">
							<?= $blog["content"] ?>
						</div>
					</div>
				<?php endforeach; ?>
			</div>


			<div class="col-md-4">
				<h2>Sidebar</h2>
				<p>
					Brachinus hydrotomy Gobiiformes parodist zonated contemplation pinonic crystallogenetic restorationer revivingly openwork microblephary dishpan unbesought bekah latro unstructural lipothymial few obolary lalling gyral misprovidence aurophore zoopantheon caulicule retrievement shipment Hockday isidoid patrondom romeite Barosma hydroclimate horizontically inverter Illuministic pocketable sixty denticulation cantative smeech forficated elementariness spinigrade washstand Ning telecode.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<footer>
					Panel de Administración <a href="<?= BASE_URL; ?>admin" title="">Ingresar</a>
				</footer>
			</div>
		</div>

	</div>
</body>
</html>
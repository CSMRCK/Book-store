<?php
include 'config.php';?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<title>Book Shop</title>
</head>
<body>
	<header>
		<div class="row">
			<div class="col-lg-3" ><h1>Book Catalog</h1></div>
		</div>
	</header>
	<main>
		<a href="admin/admin.php">Admin Panel</a>
		<section class="sort-genre">
			<form action="genre.php" method="POST">
				<b> Find by genre:</b>
				<select name = "genre">

					<option value = "Classics">Classics</option>
					<option value = "Scenario">Scenario</option>
					<option value = "Romance">Romance</option>
					<option value = "Modern">Modern</option>
					
				</select>

				<input type=submit name="show" value="show">
				<?php include 'genre.php';?>
			</form>
		</section>


		<section class="sort-genre">
			<form action="search.php" method="POST">
				<b> Find by author:</b>
				<select name = "author">

					<option value = "Aristotle">Aristotle</option>
					<option value = "Maxim Marcinkevic">Maxim Marcinkevic</option>
					<option value = "Niccolo Machiavelli">Niccolo Machiavelli</option>
					<option value = "Augustine Hippo">Augustine Hippo</option>
					<option value = "Mario Marco">Mario Marco</option>
					<option value = "Aristotle">Aristotle</option>
					<option value = "Aristotle">Aristotle</option>
					<option value = "CD Project">CD Project</option>

					
				</select>

				<input type=submit name="show" value="show">
				<?php include 'search.php';?>
			</form>
		</section>


		<section>
			<div class="container">
				<div class="row row-centered">
					<?php 
					include("funcs.php");
					?>
				</div>
			</div>
		</section>
		
		

	</main>
	

</body>
</html>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Artes Book</title>
</head>

<body>
	<h1>Enter A Move</h1>
	<hr>
	<button href="index.php">Return to Artes Book</button>
	<hr>
	<form action="assets/process.php" method="post" enctype="multipart/form-data">
		<div class="form-col">
			<div class="col">
				<input type="text" class="form-control" name="arte" placeholder="Type your Arte here!">
                <br>
				<textarea name="description" placeholder="type the description of your arte here!"></textarea>

			<div class="form-group">
				<input type="file" class="form-control-file" name="imginp" accept="image/*">
			</div>
		</div>
            </div>
		<input type="submit" value="Submit">
	</form>
	<hr>








	<?php require_once('assets/partials/footer.php'); ?>
</body>

</html>

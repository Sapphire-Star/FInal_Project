<!doctyple html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
	<title>PHP and JSON Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<h1>Artes Book</h1>
<a href="upload.php">Upload</a>
	<hr>
	<br>
	<table style="border-color: red">
		<tr>
			<th>Arte Book</th>
			<th>Description</th>


	<?php
		$d = file_get_contents('assets/data.json');
		$d = json_decode($d, true);

		foreach($d as $k => $o){
			echo "<tr>
					<br>
					<td>".$o['arte']."
					<br>
					<img  style=\"height: 150px; width: 150px;\" src=\"".$o['imginp']."\"></td>
					<td>".$o['description']."</td>
				</tr>";
		};
	?>
</table>

	<hr>
</body>
</html>
<?php
$t = $_POST['arte'];
$des = $_POST['description'];
$i = $_FILES['imginp'];
$g ="image/".$i["name"];
move_uploaded_file($i["tmp_name"],$g);

$a = array(
	"arte" => $t,
	"description" => $des,
	"imginp" => "assets/".$g,
);

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:../index.php');
?>

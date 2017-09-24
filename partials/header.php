<?php require 'inc/config.php' ?>

<?php
	$data = $database->select('users', '*');

	echo '<pre>';
	print_r( $data );
	echo '</pre>';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Crushapp</title>
		<link rel="stylesheet" href="assets\CupcakIms.css">
	</head>
	<body>

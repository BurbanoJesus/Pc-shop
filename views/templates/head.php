<!DOCTYPE html>
<html lang="e">
<head>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta charset="UTF-8">
	<title><?php echo NOMBRE_APP ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="shortcut icon" href="<?php echo IMG?>favicon_a.png" type="image/x-icon">
	<!-- <link rel="icon" href="img/favicon.png" type="image/x-icon"> -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<!-- <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
	<!-- <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">  -->
	<link rel="stylesheet" href="<?php echo CSS?>comp_menu_elementos.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_botones.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_generales.css">
	<link rel="stylesheet" href="<?php echo CSS?>estilos_iconos.css">
	<?php
	if (isset($estilos)){
	  	foreach ($estilos as $key => $value) {
	  		$file_css = (strpos($value, 'http') === False) ? CSS.$value : $value;
	  	?>
		<link rel="stylesheet" href="<?php echo $file_css?>">
	<?php } 
	} ?>
	<link rel="stylesheet" href="<?php echo CSS?>estilos_principales.css">
</head>
<body>
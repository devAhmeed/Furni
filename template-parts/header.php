<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />

		<!-- Bootstrap CSS -->
		<link href="assets/css/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
    <?php 
    $request = $_SERVER['REQUEST_URI'];
    $slug = explode('/', $request)[2];
    if($slug == 'home' || $slug == ''){
      echo '<link href="assets/css/pages/home.css" rel="stylesheet">';
    }else{
      echo '<link href="assets/css/pages/'. $slug . '.css" rel="stylesheet">';
    }

    ?>
		<title>Furni</title>
    
	</head>
<body>

<?php require_once dirname(__DIR__).'/inc/nav.php' ?>
<?php require_once dirname(__DIR__).'/inc/hero.php' ?>
<?php session_start(); ?>
<?php ob_start(); ?>
<?php include('init.php'); ?>
<?php if(empty($_SESSION['user_email_add']) && empty($_SESSION['user_password'])) {
    header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Area - Online Product Listing</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap-theme.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome/font-awesome-4.6.3/css/font-awesome.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
</head>
<body>
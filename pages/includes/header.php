<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
<?php if (isset($_SESSION['id'])) { ?>
<nav class="navbar navbar-expand-md navbar-dark bg-color">
    <div class="container">
        <a href="" class="navbar-brand">Logo</a>
        <ul class="navbar-nav">
            <li><a href="home.php" class="nav-link">Add Product</a></li>
            <li><a href="action.php?status=manage" class="nav-link">Manage Product</a></li>
            <li><a href="action.php?status=logout" class="nav-link">Logout</a></li>
        </ul>
    </div>
</nav>
<?php } else { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-color">
        <div class="container">
            <a href="" class="navbar-brand">Logo</a>
            <ul class="navbar-nav">
                <li><a href="action.php?status=index" class="nav-link">Home</a></li>
                <li><a href="" class="nav-link">About</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>

<!DOCTYPE html>
<?php 
include('server.php');
session_start();

?>
<html>

<head>
	<title>LOGIN/REGISTER</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/javascript" href="js/bootstrap.min.js">
	<link rel="stylesheet" type="text/javascript" href="js/jquery.js">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
<body>
	<nav id="header" class="navbar navbar-fixed-top">
            <div id="header-container" class="container navbar-container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a id="brand" class="navbar-brand" href="#">Sample 1</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse pull-right">
                    <ul class="nav navbar-nav" id="main-navigation">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>

                        <?php 
                           
                            if(isset($_SESSION['login_user'])){
                                echo "<li><a href='logout.php'>Logout</a></li>";
                            }else{
                                echo "<li><a href='login.php'>Login</a></li>
                                    <li><a href='register.php'>Register</a></li>";
                            }
                        ?>
                    </ul>
                </div>
           </div>
       </nav>
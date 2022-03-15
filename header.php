<?php session_start();    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- --------------css files ------------>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Beet.com</title>
</head>
<body>
<!--------------------- JS Files ------------>

<!--------------- Nav bar ---------------------->
    <div class="header">
        <div class="container">
            <span class="toggle">
                <span></span>
                <span></span>
                <span></span>
            </span>
            <nav>
                <span class="close">X</span>
                <a href="index.php">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Contact</a>
            </nav>
            <a class="brand" href="#">
                <img class="logo" src="img/logo.jpg" alt="logo">
            </a>
<?php
include("footer.php");
if(empty($_SESSION['email'])){ // not previously logged in
?>
<button type="button" class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Log In</button>
    <!-- Hidden login Form ---------------------->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    <div class="modal-content bg-light border-0">
	<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
		
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button><!-- Font Awesome Issue << FIXED >>  -->
    </div>
    <div class="modal-body">
        <form method="post" action="login.php">
        <div class="mb-3">
		<label for="recipient-name" class="col-form-label">Email:</label>
		<input type="email" class="form-control" id="recipient-name" name="email">
        </div>
        <div class="mb-3">
		<label for="message-text" class="col-form-label">Password:</label>
		<input type="password" class="form-control" id="recipient-pass" name="password">
		</div>
		<a class="create" href="reg.php">Create Account?</a>

		
		<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log In</button>
		</div>

		</form>
    </div>

    </div>
	</div>
</div>
    <!-- END Of Hidden login Form ------------------>
<?php }elseif(isset($_SESSION['email']) && !empty($_SESSION['email'])){
?>
<!-------------------------------------- Profile Icon  -->
<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
		<i class="fa-solid fa-user"></i>
	</button>
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">My Account</button></li>
    <li><button class="dropdown-item" type="button">My Favourite</button></li>
    <li><a href="logout.php"><button class="dropdown-item" type="button">LogOut</button></a></li>
	</ul>
</div>
<!------------------------------- End of Profile Icon  -->
<?php } ?>
        </div>
    </div>


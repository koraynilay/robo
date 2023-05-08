<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Robot E-corp</title>
        <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" type="image/png" href="assets/images/icons/favicon.ico" />
	    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
	    <link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
	    <link rel="stylesheet" type="text/css" href="assets/css/util.css">
	    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                Robot
                <i class="fa fa-rocket"></i>
                E-corp
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item" active>
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown " active>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Products Category
                    </a>
                    <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="category.php?cat=Industrial">Industrial</a>
                      <a class="dropdown-item" href="category.php?cat=Gardening">Gargening</a>
                      <a class="dropdown-item" href="category.php?cat=Cleaning">Cleaning</a>
                      <a class="dropdown-item" href="category.php?cat=Fun">Fun</a>
                      <a class="dropdown-item" href="category.php?cat=Photography">Photography</a>
                      <a class="dropdown-item" href="category.php?cat=Security">Security</a>
                    </div>
                  </li>
              </ul>
		<?php
			include 'components/navbar/navbar.php';
		?>
              </ul>
            </div>
          </nav>
<!--
          <div class="text">
            <h1>Join the revolution<br>with our robots</h1>
            <h2>the perfect blend of technology<br> and efficiency<h2> 
          </div>
-->
          <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
          <script src="assets/vendor/bootstrap/js/popper.js"></script>
	        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

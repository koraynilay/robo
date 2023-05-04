<?php
	session_start();
	if(isset($_SESSION["logged"]) && $_SESSION["logged"]) {
		echo '<li class="nav-item dropdown" style="background-color:black !important" active>
		    <a class="nav-link dropdown-toggle" style="padding: 0.3rem !important;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
		echo '<i class="fa fa-user fa-lg sus"></i>   ';
		echo $_SESSION["user"];
	    echo '</a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	      <a class="dropdown-item" href="logout.php">Sign out</a>
	    </div>
	  </li>';
		echo '<a href="#" onclick=\'alert("Funzione WIP");\' <i class="fa fa-shopping-cart fa-lg sus"></i></a';
	}
	else
		echo '<a class="login-btn btn-sm btn-link btn-lg active" role="button" aria-pressed="true" href="login.php">Sign-in</a>';
?>


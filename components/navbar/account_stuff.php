<?php
	session_start();
	if(isset($_SESSION["logged"]) && $_SESSION["logged"]) {
		echo '<li class="nav-item dropdown" style="background-color:black !important" active>
		    <a class="nav-link dropdown-toggle" style="padding: 0.3rem !important; margin-right: 1rem !important;" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
		echo '<i class="fa fa-user fa-lg sus"></i>   ';
		echo $_SESSION["user"];
	    echo '</a>
	    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleModal">Sign out</a>
	    </div>
	  </li>';
		echo '<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, I wanna keep buying robots</button>
        <button type="button" class="btn btn-primary"><a href="logout.php">Yes, log me out</a></button>
      </div>
    </div>
  </div>
</div>';
		echo '<a href="#" onclick=\'alert("Funzione WIP");\' <i class="fa fa-shopping-cart fa-lg sus"></i></a';
	}
	else
		echo '<a class="login-btn btn-sm btn-link btn-lg active" role="button" aria-pressed="true" href="login.php">Sign-in</a>';
?>



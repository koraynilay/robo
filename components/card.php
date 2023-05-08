<?php
	while($r = $q->fetch_assoc()) {
		echo '<div class="col-12 col-md-4">';
			echo ' <div class="card bg-dark text-light pt-8 border-0">';
				echo '<div class="card-body p-5 pt-8 pt-xl-14 pt-xxl-20 pe-xxl-10">';
					echo '<h3 class="h2 mb-4">'.$r["name"].'</h3>';
					echo '<h6 class="card-subtitle mb-2 text-muted">'.$r["price"].'€</h6>';
					echo '<p class="card-text mb-4">'.$r["cat_name"].'</p>';
					echo '<a class="btn btn-primary" href="#" onclick="alert(\'Funzione WIP\')">Add to cart</a>';
					//echo '<a class="btn btn-primary" href="cart.php?id='.$r["id"].'">Add to cart</a>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
?>

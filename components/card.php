<?php
	while($r = $q->fetch_assoc()) {
		echo '<div class="col mt-5">';
			echo '<div class="card text-white bg-dark mb-3 border-light border-opacity-25 rounded-5" style="width: 18rem;">';
				echo '<div class="card-body p-5 pt-8 pt-xl-14 pt-xxl-20 pe-xxl-10">';
					echo '<h5 class="card-title mb-3">'.$r["name"].'</h5>';
					echo '<h6 class="card-subtitle mb-2 text-muted">'.$r["price"].'€</h6>';
					echo '<p class="card-text mb-4">'.$r["cat_name"].'</p>';
					echo '<a class="btn btn-primary" href="#" onclick="alert(\'Funzione WIP\')">Add to cart</a>';
					//echo '<a class="btn btn-primary" href="cart.php?id='.$r["id"].'">Add to cart</a>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
?>

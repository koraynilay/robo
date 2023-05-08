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
            <a class="navbar-brand" href="index.php">
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
                <li class="nav-item dropdown" active>
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Products Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
			include 'cred_users.php';
			//echo $host." ".$user." ".$pass." ".$database;
			$l = new mysqli($host, $user, $pass, $database) or die("ciao");
			//echo "ciao2";
			
			if($l->connect_errno) throw new RuntimeException("no connect ".$l->connect_error);
			
			//print_r($_POST);
			$ss = $_POST["search"];
			if(!isset($ss)) return;
			//echo "<br>";
			//echo $login_user;
			//echo $login_pass;
			
			$q = $l->query('SELECT products.id, products.name, products.weight, products.price, category.name AS cat_name FROM products INNER JOIN category ON products.IdCategory = category.id WHERE products.name LIKE "%'.$ss.'%"');
#			$q = $l->prepare('SELECT * FROM products WHERE name LIKE CONCAT("%", ?, "%")');
#			$q->bind_param('s',$ss);
#			print_r($q);
#			if($q->execute()) {
#			#	echo $ss;
#				$ppp = $q->get_result();
#			#	print_r($ppp);
#			#	print_r($ppp->fetch_row());
#				echo "n1:" . $ppp->num_rows . "<br>";
#				echo "t:" . gettype($ppp) . "<br>";
#				echo $ss;
#				while($r = $ppp->fetch_assoc()) {
#					print_r($r);
#					echo $ss;
#					echo $r["id"];
#				}
#				echo $ss;
#			}else echo "error".$q->error;
#			$q->debugDumpParams();
#			echo $ss;
		?>
		<?php
			include 'components/navbar/navbar.php';
		?>
            </div>
          </nav>
	  <div class='data mt-5 container'>
		  <div class="p-3 pb-md-4 mx-auto text-center text-light">
			  <h3 class="display-5 fw-normal sr-text">Search results for '<?php echo $ss;?>'</h3>
		  </div>
		  <div class="container overflow-hidden mt-5">
		  	  <div class="row gy-4 gy-md-0 gx-xxl-5">
			  <?php
				include 'components/card.php';
					
				mysqli_close($l);
			  ?>
			  </div>
		  </div>
	  </div>
          <script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
          <script src="assets/vendor/bootstrap/js/popper.js"></script>
	        <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>

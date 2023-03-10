<html>
	<head>
		<title>Registrati - Robot E-corp</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="assets/images/icons/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	</head>
	<body>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/images/img-01.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" id='reg-form' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<span class="login100-form-title">
						Member Creation
					</span>

					<div class="wrap-input100" >
						<input class="input100" type="text" name="name" placeholder="First and last name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="login.php">
							Already have an account?
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	</body>
	<script src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="assets/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/select2/select2.min.js"></script>
	<script src="assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script src="assets/js/main.js"></script>
<?php
	//TODO register
	session_start();
	include 'cred_users.php';
	//echo $host." ".$user." ".$pass." ".$database;
	$l = new mysqli($host, $user, $pass, $database) or die("ciao");
	//echo "ciao2";

	if($l->connect_errno) throw new RuntimeException("no connect ".$l->connect_error);

	$login_name = $_POST["name"];
	$login_user = $_POST["email"];
	$login_pass = hash("sha256", $_POST["pass"]);
	if(!isset($login_name) || !isset($login_user) || !isset($login_pass)) return;
	//echo "<br>";
	//echo $login_user;
	//echo $login_pass;

	$q = $l->prepare('INSERT INTO users(name, email, hashpass) VALUES(?, ?, ?)');
	$q->bind_param('sss',$login_name,$login_user,$login_pass);
	if($q->execute()) {
		echo "<script type='text/javascript'>alert('Account creato con successo');</script>";
	}else
		echo "<script type='text/javascript'>alert('Errore');</script>";


	mysqli_close($l);
?>
</html>

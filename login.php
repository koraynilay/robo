<html>
	<head>
		<title>Accedi - Robot E-corp</title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<form class='form' id='log-form' action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<label class='text-label' for='email'>E-mail</label>
			<input class='text-field' type='text'name='email' placeholder="Inserisci il nome utente">
			<br>
			<label class='text-label' for='pass'>Password</label>
			<input class='text-field' type='text'name='pass' placeholder="Inserisci la password">
			<br>
			<input class='button-form' type='submit' name='login' value='Accedi'>
			<br>
			<label for='register'>Nuovo?</label>
			<input class='button-form' type='submit' name='register' value='Registrati'>
		</form>
	</body>
<?php
	if(isset($_POST["login"])) {
		session_start();
		include 'cred_users.php';
		//echo $host." ".$user." ".$pass." ".$database;
		$l = new mysqli($host, $user, $pass, $database) or die("ciao");
		//echo "ciao2";

		if($l->connect_errno) throw new RuntimeException("no connect ".$l->connect_error);

		$login_user = $_POST["email"];
		$login_pass = hash("sha256", $_POST["pass"]);
		//echo "<br>";
		//echo $login_user;
		//echo $login_pass;

		$q = $l->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
		$q->bind_param('ss',$login_user,$login_pass);
		if($q->execute()) {
			while($r = $q->get_result()->fetch_assoc()) {
				$_SESSION["logged"] = true;
				$_SESSION["user"] = $login_user;
				header("Location: dash.php");
			}
			echo "Username o password errati";
		}else echo "error";

		mysqli_close($l);
	}
	else if(isset($_POST["register"])) {
		header("Location: ./register.php");
	}
?>
</html>

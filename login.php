<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location: /");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Below</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<style>
		.header{
		    background-color:black;
	

		}
		.responsive{
		    display:inline-block;
		    padding-top:20%;
		    background-color:red;
		    border-radius:20px;
                    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                    background-image:linear-gradient(
			to right bottom,
			rgba(126,213,111,0.8),
			rgba(40,180,131,0.8)),
			url('https://vignette.wikia.nocookie.net/tmnt-x-pokemon/images/0/02/Dr_Strange.jpg/revision/latest?cb=20180713141634');


		}


	
	</style>
	<script>
		email=document.forms["loginform"]["email"];
		if (email.value.indexOf("@", 0) < 0)                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
	
	</script>
</head>
<body style="background-color:white;">

	<div class="header">
		<a href="/"><h3 style=" text-shadow: 3px 2px red;">MUNSHI.TV</h3></a>
	</div>
	<div class="responsive" >
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Login</h1>
	<span>or <a href="register.php">register here</a></span>

	<form name="loginform" action="login.php" onsubmit="return validatemethod()" method="POST">
		
		<input style="width:200px; height:15px;" type="text" placeholder="Enter your email" name="email" required>
		<input style="width:200px; height:15px;" type="password" placeholder="Enter password" name="password" required>

		<input type="submit">

	</form>
	</div>

</body>
</html>

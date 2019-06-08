<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location: /");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register Below</title>
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
function validateform(){
	email=document.forms["registerform"]["email"];
		if (email.value=="abc")                 
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } else return true;
}

onkeyvalidate(){
	if(document.getElementById("email")=="abc")document.getElementById("button").disabled=true;
}
		
	
	</script>
</head>
<body>

	<div class="header">
		<a href="/"><h1 style=" text-shadow: 3px 2px red;">MUNSHI.TV</h1></a>
	</div>
	<div class="responsive">
	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

	<h1>Register</h1>
	<span>or <a href="login.php">login here</a></span>

	<form onsubmit="return validateform()" name ="registerform" action="register.php" method="POST">
		
		<input style="width:200px; height:15px;" type="text" placeholder="Enter your email" name="email" onkeyup="onkeyvalidate()">
		<input style="width:200px; height:15px;" type="password" placeholder="and password" name="password">
		<input style="width:200px; height:15px;" type="password" placeholder="confirm password" name="confirm_password">
		<input id="button" type="submit">

	</form>
	</div>

</body>
</html>

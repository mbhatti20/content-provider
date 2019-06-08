<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<title>Welcome to your Web App</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	
</head>
<!--<body0>

	<div class="header">
		<a href="/">Your App Name</a>
	</div>

	<?php if( !empty($user) ): ?>

		<br />Welcome <?= $user['email']; ?> 
		<br /><br />You are successfully logged in!
		<br /><br />
		<a href="logout.php">Logout?</a>
		<a href="assets">sdfj</a>

		Want to request some content. <a href=" https://manishbhatti.herokuapp.com/">click</a> to leave your message.

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>



</body0>-->
<body>

<div id="header" >
   <h1  style="text-shadow: 3px 2px red;">MUNSHI.TV</h1>
  <a href="login.php" <?php print ( ( !empty($user) ) ? 'class="hidden"' : '' ); ?>><h1 id="login">login</h1></a>
  <a href="register.php" <?php print ( ( !empty($user) ) ? 'class="hidden"' : '' ); ?>><h1 id="register">register</h1></a>
  <a href="logout.php" <?php print ( ( empty($user) ) ? 'class="hidden"' : '' ); ?>><h1 id="register">Logout</h1></a>
  <a href="assets/music/"><h1 id="music">Music</h1></a>
</div>
<div style="text-align:center;color:green;font-family: Georgia;"><h3>What,s Latest</h3></div><br>
Want to request some content. <a href=" https://manishbhatti.herokuapp.com/">click</a> to leave your message.Enter "admin" your nickname.
<div class="container">
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/MEAN Stack Tutorial with Angular 2 - Part 12 Like  Dislike Blog Post.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/WLQN5aiQG8wc9SeKwixW7pAR8K.jpg')">
    </div>
    <p>Angular.js lecture</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/criminaljustice";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://1.bp.blogspot.com/-BuCIFJiF28w/XKht6y9jMuI/AAAAAAAAAdk/n6XTeJHAJu0Juk_Xf4WG0fwOZND4JrkmQCLcBGAs/s1600/Criminal%2BJustice%2B%25282019%2529%2BHindi%2B%2528HotStar%2529%2BWeb%2BSeries%2BSeason%2B01%2BComplete%2B720p%2B%25E2%2580%2593%2BHD.jpg')">
    </div>
    <p>Criminal Justice(2019)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/1.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/e1mjopzAS2KNsvpbpahQ1a6SkSn.jpg')">
    </div>
    <p>Suicide Squad (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/2.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/z09QAf8WbZncbitewNk6lKYMZsh.jpg')">
    </div>
    <p>Finding Dory (2016)</p>
  </a>
  <a href="3.mp4" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/5gJkVIVU7FDp7AfRAbPSvvdbre2.jpg')">
    </div>
    <p>Passengers (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/4.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
      <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/tIKFBxBZhSXpIITiiB5Ws8VGXjt.jpg')">
    </div>
    <p>Assasins Creed (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/5.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/ylXCdC106IKiarftHkcacasaAcb.jpg')">
    </div>
    <p>La La Land (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/6.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/5N20rQURev5CNDcMjHVUZhpoCNC.jpg')">
    </div>
    <p>Captain America: Civil War (2016)</p>
  </a>
   <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/7.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/WLQN5aiQG8wc9SeKwixW7pAR8K.jpg')">
    </div>
    <p>The Secret Life of Pets (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/8.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/z4x0Bp48ar3Mda8KiPD1vwSY3D8.jpg')">
    </div>
    <p>Moana (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/9.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/e1mjopzAS2KNsvpbpahQ1a6SkSn.jpg')">
    </div>
    <p>Suicide Squad (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/10.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/z09QAf8WbZncbitewNk6lKYMZsh.jpg')">
    </div>
    <p>Finding Dory (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/11.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/5gJkVIVU7FDp7AfRAbPSvvdbre2.jpg')">
    </div>
    <p>Passengers (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/12.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
      <div class="poster" style="background-image: url('http://cdn.collider.com/wp-content/uploads/2018/01/howards-end-poster.jpg')">
    </div>
    <p>Howard End</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/13.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/ylXCdC106IKiarftHkcacasaAcb.jpg')">
    </div>
    <p>La La Land (2016)</p>
  </a>
  <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/14.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://image.tmdb.org/t/p/w185_and_h278_bestv2/5N20rQURev5CNDcMjHVUZhpoCNC.jpg')">
    </div>
    <p>Captain America: Civil War (2016)</p>
  </a>
   <a href="<?php 
if ( !empty($user) )
{
   echo "./assets/15.mp4";
}
else
{
    echo "login.php";
}
?>" class="item tilt-poster">
    <div class="poster" style="background-image: url('https://en.wikipedia.org/wiki/Manchester_by_the_Sea_(film)#/media/File:Manchester_by_the_Sea.jpg')">
    </div>
    <p>Manchester By the Sea (2016)</p>
  </a>
 
 
 
</div>


</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'includes/head.php';?>
	<title> Home | Odd Student Out </title>
</head>

<body class="container">

     <header class="banner">

        <div class="bannerpart1">
	       <h3>Assignment 5 : Odd Student Out</h3>
        </div>

        <div class="bannerpart2">
	        <?php include 'includes/nav.php';?>
        </div>

</header>

<main>

		<div class="slider">

            <img src="images/profile_photo.jpg" alt="Giovanni profile photo">
            <img src="images/genessis.jpg" alt="Genessis profile photo">
            <img src="images/jack_clubs.jpg" alt="Jack profile photo">


		</div>

		<div class="homecontainer">

			<article class="homearticle">
				<h2>Which one is the Odd One out?</h2>
				
				<p> One of these students is not like the others. Try can guess who it is. 
				<strong>Hint</strong>: Look at their major, and also where they are orignally from.
				</p>
			
			</article>

		</div>
	
</main>

	<?php include 'includes/footer.php';?>

	<?php include 'includes/scripts.php';?>
	<script src="sss/sss.js"></script>
    <script>
    $('.slider').sss();
    </script>
</body>


</html>
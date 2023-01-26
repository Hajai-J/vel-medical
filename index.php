<?php
    include 'libs/load.php';
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VEL MEDICAL </title>

	<!-- font awesome cdn link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- custom css file link  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

	<!-- header section starts  -->

	<?load_temp('_head');?>

	<!-- home section starts  -->

	<?load_temp('_home');?>

	<!-- icons section starts  -->

	<?load_temp('_team.php');?>

	<!-- services section starts  -->

	<?load_temp('_service');?>

	<!-- about section starts  -->

	<?load_temp('_about');?>

	<!-- doctors section starts  -->

	<!-- <section class="doctors" id="doctors">

		<h1 class="heading"> our <span>doctors</span> </h1>

		<div class="box-container">

			<div class="box">
				<img src="image/doc-1.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<img src="image/doc-2.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<img src="image/doc-3.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<img src="image/doc-4.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<img src="image/doc-5.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

			<div class="box">
				<img src="image/doc-6.jpg" alt="">
				<h3>john deo</h3>
				<span>expert doctor</span>
				<div class="share">
					<a href="#" class="fab fa-facebook-f"></a>
					<a href="#" class="fab fa-twitter"></a>
					<a href="#" class="fab fa-instagram"></a>
					<a href="#" class="fab fa-linkedin"></a>
				</div>
			</div>

		</div>

	</section> -->

	<!-- booking section starts   -->

	<?load_temp('_book');?>

	<!-- review section starts  -->
	<?load_temp('_review');?>

	<!-- blogs section starts  -->

	<?load_temp('_blog');?>


	<!-- footer section starts  -->

	<?load_temp('_footer')?>

	<!-- custom js file link  -->
	<script src="js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
</body>

</html>
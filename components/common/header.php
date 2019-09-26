<!-- <?php
require('./db.php/db.php');
?> -->
<header class="header d-flex flex-row">
	<div class="header_content d-flex flex-row align-items-center">
		<!-- Logo -->
		<div class="logo_container">
			<div class="logo">
				<img src="images/logo.png" alt="">
				<span>course</span>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav_container">
			<div class="main_nav">
				<ul class="main_nav_list">
					<li class="main_nav_item"><a href="#">home</a></li>
					<li class="main_nav_item"><a href="#">about us</a></li>
					<li class="main_nav_item"><a href="courses.php">courses</a></li>
					<li class="main_nav_item"><a href="elements.php">elements</a></li>
					<li class="main_nav_item"><a href="news.php">news</a></li>
					<li class="main_nav_item"><a href="contact.php">contact</a></li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="header_side d-flex flex-row justify-content-center align-items-center">
		<img src="images/phone-call.svg" alt="">
		<span>+43 4566 7788 2457</span>
	</div>

	<!-- Hamburger -->
	<div class="hamburger_container">
		<i class="fas fa-bars trans_200"></i>
	</div>

</header>

<!-- <?php
$query = "INSERT INTO test (test) VALUES ('Test')";

$result = mysqli_query($con, $query);
?> -->
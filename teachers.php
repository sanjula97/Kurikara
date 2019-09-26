<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Teachers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/teachers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/teachers_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->
    <?php 
    include('./components/common/header.php');
    ?>
	
	<!-- Menu -->
	<?php
    include('./components/common/menu.php');
    ?>
	
	<!-- Home -->
    <?php
    include('./components/teachers/home.php');
    ?>
	
	<!-- Teachers -->
    <?php
    include('./components/teachers/teachers.php');
    ?>
	
	<!-- Milestones -->
    <?php
    include('./components/teachers/milestones.php');
    ?>
	

	<!-- Become -->
    <?php
    include('./components/teachers/become.php');
    ?>
	
        

	<!-- Footer -->
    <?php
	include('./components/common/footer.php');
	?>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/teachers_custom.js"></script>

</body>
</html>
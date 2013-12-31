<?php
include "connect.php";
include "process_login_form.php";
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Trev | <?php echo $title ?></title>
			<link rel="stylesheet" type="text/css" href="/Portfolio/css/wide.css" />
			<link id="size-stylesheet" rel="stylesheet" type="text/css" href="/Portfolio/css/narrow.css" />
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="/Portfolio/js/jquery.isotope.min.js"></script>
		</head>

		

		<body>

			
			<div id="navbar_gradient">
				<ul id="navbar">

					<?php if($_SESSION["authenticated"]==true) : ?>

					<li><i id="plus" class="fa fa-plus"></i></li>
					<li><i id="minus" class="fa fa-minus"></i></li>
					
					<?php endif;?>

					<div class="settings">
						<ul>
							<li><a href="/Portfolio/blog_submit">Blog Submit</a></li>

							<li><a href="/Portfolio/logout">Logout</a></li>
						</ul>
					</div>

					<li><a href="/Portfolio/photos">Photography</a></li>
					<li>//</li>
					<li><a href="/Portfolio/sounds">Sounds</a></li>
					<li>//</li>
					<li><a href="/Portfolio/home">Home</a></li>

					
					<!-- display the following link only if the user is logged in.  -->
					
				</ul>
			</div>

			<img class="bg" src="/Portfolio/rainier.jpg">
		</body>

<?
include "footer.php";
?>
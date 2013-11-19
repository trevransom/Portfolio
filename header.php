<?php
?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>Trev | <?php echo $title ?></title>
			<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
			<!-- <link rel="stylesheet" type="text/css" href="index.css"></link>	 -->
			<link rel="stylesheet" type="text/css" href="/Portfolio/css/wide.css" />
			<!-- <link id="size-stylesheet" rel="stylesheet" type="text/css" href="/Portfolio/css/narrow.css" /> -->
			<!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"></link> -->
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
			<script src="/Portfolio/js/jquery.isotope.min.js"></script>
		</head>

		

		<body>

			
			<div id="navbar_gradient">
				<ul id="navbar">
					<li><i id="plus" class="fa fa-plus"></i></li>
					<li><i id="minus" class="fa fa-minus"></i></li>
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

			<img id="bg" src="/Portfolio/paris.jpg">
		</body>

<?
include "footer.php";
?>
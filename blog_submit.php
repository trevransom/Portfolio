<?php
$title = 'Post';
include "header.php";
?>

	<body>
		<div id="blue_back"></div>

		<h1 id="blog_submit_header">Blog Post Submit</h1>
		
		<form id="blog_padding" action="process_blog_submit.php" method="post">
			<textarea id="blog_submit_form" name="content"></textarea>
			<input id="button_center_form" type="submit">
		</form>
	</body>

</html>


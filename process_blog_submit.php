<?
include "connect.php";

    // Currently we do not have an error
	$error = NULL;
	$title = mysql_real_escape_string($_POST["title"]);
	echo $title;
	$content = mysql_real_escape_string($_POST["content"]);
	echo $content;

	// Validate
	if (empty($title)) {
	    $error = 'You forgot to input your title!';
	}

	if (empty($content)) {
	    $error = 'You forgot to input your blog post!';
	}
	
	if(!empty($content) && !empty($title)){
		$sql="INSERT INTO blog_posts (title, post)
		VALUES
		('".$title."', '".$content."')";
	}

	$sql = mysql_query($sql);
	die($sql);
	mysqli_close($connection);
?>
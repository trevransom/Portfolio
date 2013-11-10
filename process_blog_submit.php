<?
include "connect.php";

    // Currently we do not have an error
	$error = NULL;
	$content = mysql_real_escape_string($_POST["content"]);
	echo $content;

	// Validate
	if (empty($content)) {
	    $error = 'You forgot to input your blog post!';
	}
	
	if(!empty($content)){
		$sql="INSERT INTO blog_posts (post)
		VALUES
		('".$content."')";
	}

	$sql = mysql_query($sql);
	mysqli_close($connection);
?>
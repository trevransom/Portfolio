<?php
// Make the script run only if there is a page number posted to this script
if(isset($_POST['postNum'])){
	$rpp = preg_replace('#[^0-9]#', '', $_POST['rpp']);
	$last = preg_replace('#[^0-9]#', '', $_POST['last']);
	$postNum = preg_replace('#[^0-9]#', '', $_POST['postNum']);
	// This makes sure the page number isn't below 1, or more than our $last page
	if ($pn < 1) { 
    	$pn = 1; 
	} else if ($pn > $last) { 
    	$pn = $last; 
	}
	// Connect to our database here
	include_once("connect.php");
	// This sets the range of rows to query for the chosen $pn
	$limit = 'LIMIT ' .($pn - 1) * $rpp .',' .$rpp;
	// This is your query again, it is for grabbing just one page worth of rows by applying $limit
	$query = "SELECT post FROM blog_posts WHERE id=$postNum ORDER BY id DESC";
	$result = mysql_query($query);
	$dataString = '';
	while($row = mysql_fetch_array($result)){
		$post = $row["post"];
	}
	// Close your database connection
    mysql_close($connection);
	// Echo the results back to Ajax
	echo $post;
	exit();
}
?>
<?


// $q = intval($_GET['q']);



// $query = "SELECT COUNT(id) FROM blog_posts";
// $result = mysql_query($query);
// $row = mysqli_fetch_row($result);

// $total_rows = $row[0]; 
// echo $total_rows;

// $rpp = 10;

// $query = sprintf("SELECT post FROM blog_posts WHERE id = '$q'");
// $result = mysql_query($query);

// while ($row = mysql_fetch_assoc($result)) {
// 	echo $row['post'];
// }

// mysqli_close ($connection);
echo "test1";
// Make the script run only if there is a page number posted to this script
if(isset($_POST['postNum'])){
	echo "test";
	$rpp = preg_replace('#[^0-9]#', '', $_POST['rpp']);
	$last = preg_replace('#[^0-9]#', '', $_POST['last']);
	$postNum = $_POST['postNum'];
	echo $postNum;
	// This makes sure the page number isn't below 1, or more than our $last page
	if ($postNum < 1) { 
    	$postNum = 1; 
	} else if ($postNum > $last) { 
    	$postNum = $last; 
	}
	include "connect.php";
	// This sets the range of rows to query for the chosen $postNum
	$limit = 'LIMIT ' .($postNum - 1) * $rpp .',' .$rpp;
	// This is your query again, it is for grabbing just one page worth of rows by applying $limit
	$query = "SELECT post FROM blog_posts WHERE id>25 ORDER BY id DESC";
	$result = mysql_query($sql);
	$dataString = '';
	while($row = mysql_fetch_assoc($result)){
		// $id = $row["id"];
		$post = $row['post'];
		// $firstname = $row["firstname"];
		// $lastname = $row["lastname"];
		// $itemdate = strftime("%b %d, %Y", strtotime($row["datemade"]));
		$dataString .= $id.'|'.$firstname.'|'.$lastname.'|'.$itemdate.'||';
	}
	// Close your database connection
    // mysqli_close($db_conx);
	// Echo the results back to Ajax
	echo $dataString;
	// exit();
}
?>
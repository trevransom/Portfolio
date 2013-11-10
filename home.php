<?php
$title = 'Home';
include "header.php";
include 'connect.php';

$query = "SELECT COUNT(post) FROM blog_posts"; //3
$result = mysql_query($query);
$row = mysql_fetch_array($result);

$total_rows = $row[0]; 


$rpp = 1;
$last = $total_rows;
mysql_close($connection);
?>

	<head>
		<script>

		var rpp = <?php echo $rpp; ?>; // results per page
		var last = <?php echo $last; ?>; // last page number

		function request_page(postNum){

			var post_box = document.getElementById("slider");
			var pagination_controls = document.getElementById("nav");
			// var pagination_controls = document.getElementById("forward");

			post_box.innerHTML = "loading...";

			var hr = new XMLHttpRequest();
			hr.open("POST","paginate_parser.php",true);
		    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		    hr.onreadystatechange = function() {
		    	if(hr.readyState == 4 && hr.status == 200) {
		    		post_box.innerHTML = hr.responseText;
		    	}
    		}

    		hr.send("rpp="+rpp+"&last="+last+"&postNum="+postNum);
			// Change the pagination controls
			var navigate = "";
			// var forward = "";
		    // Only if there is more than 1 page worth of results give the user pagination controls
		    if(last != 1){
				if (postNum > 1) {
					navigate += '<i id="chevron_left" onclick="slider(); request_page('+(postNum-1)+'); return false;" class="fa fa-angle-left"></i>';
		    	}

				navigate += ' <b id="current_post">Post '+postNum+' of '+last+'</b> ';

		    	if (postNum != last && postNum != 1) {	
		        	navigate += ' <i id="chevron_right" onclick="request_page('+(postNum+1)+')" class="fa fa-angle-right"></i>';
		    	}

		    	if (postNum == 1) {	
		        	navigate += ' <i id="chevron_right_first_post" onclick="request_page('+(postNum+1)+')" class="fa fa-angle-right"></i>';
		    	}

		    }
			nav.innerHTML = navigate;
			// pagination_controls.innerHTML = forward;

		}

		</script>
    	<title></title>
    </head>

	<body>
		
		<div id="center">
			<h1>Home Page</h1>
		</div>



		<div class="blog_post">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
							<div id="post_container">
									<h1>Blog Post</h1>
									<div id="slider"></div>
							</div>

							
					</div>

				</div>
				<div id="nav"></div>
				<script> request_page(<? echo $total_rows; ?>); </script>

				<script src="js/scripts.js"></script>
			</div>
		</div>
	</body>
</html>
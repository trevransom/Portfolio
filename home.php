<?php
$title = 'Home';
include "header.php";
include "connect.php";
include "process_login_form.php";


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
			$('#blog_post_content').fadeOut(500, function(){
				var post_box = document.getElementById("blog_post_content");
				var title_box = document.getElementById("blog_post_title");
				var pagination_controls = document.getElementById("nav");
				// var pagination_controls = document.getElementById("forward");
				
				post_box.innerHTML = "loading...";
				var hr = new XMLHttpRequest();
				hr.open("POST","paginate_parser.php",true);
			    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			    hr.onreadystatechange = function() {
			    	if(hr.readyState == 4 && hr.status == 200) {
			    		// post_box.innerHTML = hr.responseText;
			    		// title_box.innerHTML = hr.responseText;
			    		var dataArray = hr.responseText.split("||");
						var title = "";
						var content = "";
					    for(i = 0; i < dataArray.length - 1; i++){
							var itemArray = dataArray[i].split("|");
							// html_output += "title: "+itemArray[0]+" - Testimonial from <b>"+itemArray[1]+"</b><hr>";
							title = itemArray[0];
							content = itemArray[1];
						}
						title_box.innerHTML = title;
			    		post_box.innerHTML = content;
			    	}
	    		}

	    		
	    		hr.send("rpp="+rpp+"&last="+last+"&postNum="+postNum);
				// Change the pagination controls
				var navigate = "";
				

				// var forward = "";
			    // Only if there is more than 1 page worth of results give the user pagination controls
			    if(last != 1){
					if (postNum > 1) {
						navigate += '<i id="chevron_left" onclick="request_page('+(postNum-1)+')" class="fa fa-angle-left"></i>';

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
				$('#blog_post_content').fadeIn(500, function(){
				});
			});
		}

		</script>
    	<title></title>
    </head>

	<body>
		
		<div id="top"></div>
		<div id="center">
			<h1>Home Page</h1>
			<? if ($_SESSION["authenticated"]==true) 
					echo "You are logged in!";
				else
					echo "You are not logged in.";
				
			?>
		</div>


		<ul class="scrolling_options">
			<li ><a class="selected" href="#top">Cover</a></li>
			<li><a href="#post_container">Contents</a></li>
		</ul>

		<div class="blog_post">
			<div id="post_container">
				<!-- <h1>Blog Post</h1> -->
				<h1 id="blog_post_title"></h1>
				<div id="blog_post_content"></div>
			</div>

			<div id="nav"></div>
			
			<script> request_page(<? echo $total_rows; ?>);</script>
		
			<!-- 	<script src="js/scripts.js"></script> -->
		</div>
	</body>
</html>
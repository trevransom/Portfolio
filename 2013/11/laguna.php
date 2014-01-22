<?
$title = "Photos";
include "../../header.php";
?>
	<head>
		<script src="/Portfolio/js/flickr_fetch.js"></script>
		<script src="/Portfolio/js/jquery.isotope.min.js"></script>
	</head>
	
	<body>
		<div id="top"></div>
		<div id='loading'>
		    <div class="loading_icon_bkrd">
		    	<i id='loading_icon' class="fa fa-spinner fa-spin fa-3x"></i>
		    </div>
		</div> 
		<img class="bg" src="http://farm4.staticflickr.com/3790/10931658483_e5a1f1c94e_o.jpg">
		
		<div class="scroll_background"></div>
		<ul class="scrolling_options">
			<li>
				<a href="#top">
					<div><i class="fa fa-circle-o"></i></div>
					<div><p class="scroll_options_title">Cover</p></div>
				</a>
			</li>
			<br>
			<li>
				<a href="#content">
					<div><i class="fa fa-circle-o"></i></div>
					<div><p class="scroll_options_title">Set</p></div>
				</a>
			</li>
		</ul>
		
		<div class="album_desc_container">
			
			<div id="content"></div>
			<div class="album_desc_content">

				<h1 class="album_desc_title">Laguna</h1>
				<br><br>
				<p>Photo Cred: Christopher Stutzman</p>
				<br>
				<p>
					My roommate Chris, and I decided to go adventuring on a Sunday in November. We headed out with no specific destination
					and eventually ended up at "Top Of the World" in Laguna Beach right as the sun was setting. It turned out to be a great choice, and
					offered a commanding view of the endless horizon. 
				</p>
			</div>
		</div>	

		
		<script>
			$(document).on('ready', function(){
		      $('div.album_desc_container').flickr({ photoset_id: '72157637815342213'});
		    });
		</script>


		

	</body>
</html>
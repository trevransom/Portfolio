<?
$title = "Photos";
include "../../../../header.php";
?>
	<head>
		<script src="js/jquery-isotope-example.js"></script>
	</head>
	
	<body>

		<div id="things">
			<!-- <div class="things_overlay"></div> -->
			<div class="thing"><a class="things_overlay" href="https://www.google.com"><img  src="img/laguna_cover.jpg"  alt="me"></a></div>
			<div class="thing"><img src="img/laguna_cover.jpg"  alt="me"></div>
			<div class="thing"><img src="img/laguna_cover.jpg"  alt="me"></div>
			<div class="thing"><img src="img/laguna_cover.jpg"  alt="me"></div>
			<div class="thing"><img src="img/laguna_cover.jpg"  alt="me"></div>
			<div class="thing"><img src="img/laguna_cover.jpg"  alt="me"></div>
		</div>

		<!-- On click of image go to page (using ajax for smooth transition) of the full album for that thumbnail. On that page there will be a brief 
		description and some sort of divider and then the embedded flickr slideshow on a white background that is full width. The flickr object will be large 
		enough to view the photos comfortably without going to fullscreen mode. -->

		
		<!-- <embed position="relative" top="50%" left="25%" type="application/x-shockwave-flash" src="https://static.googleusercontent.com/external_content/picasaweb.googleusercontent.com/slideshow.swf" width="400" height="267" flashvars="host=picasaweb.google.com&hl=en_US&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F108060327461317643457%2Falbumid%2F5945534117355317777%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCMS2jr36hJaVjgE%26hl%3Den_US" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed> -->
		<object width="400" height="300"> <param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F108598814%40N05%2Fsets%2F72157637647490155%2Fshow%2Fwith%2F10845917686%2F&page_show_back_url=%2Fphotos%2F108598814%40N05%2Fsets%2F72157637647490155%2Fwith%2F10845917686%2F&set_id=72157637647490155&jump_to=10845917686"></param> <param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=124984"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=124984" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F108598814%40N05%2Fsets%2F72157637647490155%2Fshow%2Fwith%2F10845917686%2F&page_show_back_url=%2Fphotos%2F108598814%40N05%2Fsets%2F72157637647490155%2Fwith%2F10845917686%2F&set_id=72157637647490155&jump_to=10845917686" width="400" height="300"></embed></object>
	
		

	</body>
</html>


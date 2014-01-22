<?
$title = "Photos";
include "../../header.php";
?>
	<head>
		<script src="../../js/flickr_fetch.js"></script>
		<script src="/Portfolio/js/jquery.isotope.min.js"></script>
	</head>
	
	<body>
		<div id="top"></div>
		<div id='loading'>
		    <div class="loading_icon_bkrd">
		    	<i id='loading_icon' class="fa fa-spinner fa-spin fa-3x"></i>
		    </div>
		</div> 
		<img class="bg" src="http://farm6.staticflickr.com/5490/11180209884_800f8e956e_o.jpg">
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
				<h1 class="album_desc_title">Montage</h1>
				<br><br>
				<p>Photo Cred: Christopher Stutzman</p>
				<br>
				<p>
					My roommate Chris, and I set out on another photo adventure like the one we had two weeks earlier 
					(see <a href="http://localhost:8888/Portfolio/2013/11/laguna">Laguna</a>). This time we grabbed our 
					friend Michael Prigge to join us. About a month before, Chris had been to a little beach below the Montage Resort in Laguna - 
					and he suggested we go there again. 
					<br><br>
					We had a great time wandering through tide pools and climbing rocks, but the best part was when the sun started setting. We
					walked out onto a rock that jutted far out into the ocean. As the tide came in, the waves started to get bigger, and more intense. 
					Michael and I cautiously stayed up a bit higher but Chris ventured down into a little valley to get some shots of the waves.
					The swell continued to build, and at one point it became so powerful that it rocketed over the lip of the rock beneath Chris's feet, 
					and sent a blast of water over the side - dousing him from the waist down, and threatening to rip his feet out if he remained any longer. 
					After that, Chris joined us on higher ground. Although it was a scare, it was also exciting, and offered a humbling reminder of our smallness 
					in contrast with the power of the ocean. 
					<br><br>
					I highly recommend Montage, and its beautiful beach. I hope to return soon; just not to get swept away by the waves!
 
				</p>	
			</div>
		</div>	

		<script>
			$(document).on('ready', function(){
		      $('div.album_desc_container').flickr({ photoset_id: '72157638296857045'});
		    });
		</script>

	</body>
</html>


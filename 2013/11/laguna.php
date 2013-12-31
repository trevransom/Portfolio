<?
$title = "Photos";
include "../../header.php";
?>
	<head>
		<script src="../../js/flickr_fetch.js"></script>
	</head>
	
	<body>
		<div id='loading'>
		    <img id='loading_icon' src='../../img/load.gif' />
		 </div> 
		<img class="bg" src="http://farm4.staticflickr.com/3790/10931658483_e5a1f1c94e_o.jpg">
		

		<div class="album_desc_container">
			
			<div class="album_desc_content">
				<h1 class="album_desc_title">Laguna</h1>
				<br><br>
				<p>Photo Cred: Christopher Stutzman</p>
				<br>
				<p>Pitchfork artisan Tumblr, ut ennui jean shorts seitan Terry Richardson aute magna slow-carb Truffaut dreamcatcher salvia next level. Nostrud put a bird on it placeat, delectus XOXO gentrify laborum cupidatat id literally PBR. Irony delectus squid Odd Future art party. Cred you probably haven't heard of them veniam nostrud, raw denim gentrify aute vegan skateboard. PBR&B XOXO asymmetrical Pitchfork direct trade, aliqua nulla pug placeat Etsy tote bag nisi 90's. Whatever Wes Anderson veniam eu dolor, ullamco asymmetrical XOXO Terry Richardson fanny pack. VHS magna minim, enim Pinterest aesthetic skateboard.
				<br><br>
				Sed street art vero, occupy meggings occaecat dolor reprehenderit. Neutra tempor biodiesel, Portland aute Thundercats officia shabby chic cupidatat pork belly High Life paleo. Reprehenderit DIY Neutra, locavore keytar Carles umami deserunt art party. Ugh ut odio et, artisan fugiat seitan you probably haven't heard of them culpa enim try-hard nihil velit cray. Cardigan mlkshk eu Intelligentsia, sed velit swag photo booth veniam scenester Banksy organic kogi. Vero hella fingerstache vegan meggings, mustache leggings ullamco bicycle rights PBR Portland laborum. Consequat typewriter roof party, kogi nesciunt 3 wolf moon aute chillwave accusamus ugh voluptate church-key pop-up minim.
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

<?
	include "../../footer.php";
?>
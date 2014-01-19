<?
$title = "Portfolio";
include "header.php";
?>
	<head>
		
	</head>
	<body>
		<div id="top"></div>
		<div id="skills"></div>
		<div id="portfolio_hidden">
			<div class="portfolio_position"></div>
			<div class="scroll_background_projects"></div>
			<ul class="scrolling_options">
				<li>
					<a href="#top">
						<div><i class="fa fa-circle-o"></i></div>
						<div><p class="scroll_options_title">What</p></div>
					</a>
				</li>
				<br>
				<li>
					<a href="#skills">
						<div><i class="fa fa-circle-o"></i></div>
						<div><p class="scroll_options_title">How</p></div>
					</a>
				</li>
				<br>
				<li>
					<a href="#visit">
						<div><i class="fa fa-circle-o"></i></div>
						<div><p class="scroll_options_title">Where</p></div>
					</a>
				</li>
			</ul>
			<div class="projects">

			</div>
			<div id="switch_page_icon">
				<div><i id="right_arrow_port" class="low_opacity fa fa-angle-right"></i></div>
				<div><i id="left_arrow_port" class="low_opacity fa fa-angle-left"></i></div>
			</div>
		</div>
		<script>
			var change = $("#switch_page_icon i");
			change.hover(function(){
				$(this).toggleClass('arrow_hover', 200);
			});

			$(function(){
				$('.projects').load("/Portfolio/work/souleader").fadeIn(300);
			});
		</script>
	</body>
</html>
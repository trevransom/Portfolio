<?
$title = "Portfolio";
include "header.php";
?>
	<head>
		<script src="/Portfolio/js/page_switch.js"></script>
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
				<div class="souleader_descrip">
					<div>
						<!-- <h1>Souleader</h1> -->
						<h1>Souleader</h1>
						<p>
							SOULeader is an organization created by Michael Bischof. His purpose for SOULeader 
							is to "come alongside those who are in the trenches" of spiritual ministry 
							"for support, care, nurture, and resources."
							<br><br>
							<a id="souleader_link" href="#">SOULeader.org</a> does just that, by offering direction, and resources for all those who are
							"in the trenches" and seeking counsel. 
						</p>
					</div>
					<div id="border_nodrop">
						<img src="img/souleader.png">
					</div>
				</div>
				
				<div class="souleader_second_panel">

					<div id="skills_used">
						<h1>Skills Used:</h1>
					</div>
					
					<div id="skills_used_list">
						<!-- <br> -->
						<ul>
							<li>CSS</li>
							<li>HTML</li>
							<li>Wordpress</li>
							<li>Graphic Design</li>
							
						</ul>
					</div>
				</div>
				
				<div id="visit" class="white_wall2">
					<!-- <p>This was a project that involved....</p> -->
					<a href="http://www.souleader.org/" target="_blank"><div class="visit">Visit Site</div></a>
					<img id="skills_img_solo" src="img/souleader_banner.png">

					<!-- Different color background, try color generator bookmark, include a nice pic from site with drop shadow -->
				</div>
			</div>
			<div id="switch_page_icon">
				<div><i id="right_arrow_port" class="low_opacity fa fa-angle-right"></i></div>
				<div><i id="left_arrow_port" class="low_opacity fa fa-angle-left"></i></div>
			</div>
		</div>

		
	</body>
</html>
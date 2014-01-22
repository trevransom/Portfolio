<?
$title = "Portfolio";
include "header.php";
?>
	<head>
		<script src="/Portfolio/js/page_switch.js"></script>
	</head>
	<body>
		<div id='loading'>
		    <div class="loading_icon_bkrd">
		    	<i id='loading_icon' class="fa fa-spinner fa-spin fa-3x"></i>
		    </div>
		</div> 
		<div id="top"></div>
		<div id="skills"></div>
		<div id="visit"></div>
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

				<div id="souleader_project">
					<div class="souleader_desc first_panel">
						<div>
							<h1>Souleader</h1>
							<p>
								SOULeader is an organization created by Michael Bischof. His purpose for SOULeader 
								is to "come alongside those who are in the trenches" of spiritual ministry 
								"for support, care, nurture, and resources."
								<br><br>
								<a id="souleader_link" href="http://www.souleader.org/" target="_blank">SOULeader.org</a> does just that, by offering direction, and resources for all those who are
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
							<ul>
								<li>CSS</li>
								<li>HTML</li>
								<li>Wordpress</li>
								<li>Graphic Design</li>
							</ul>
						</div>
					</div>
					<div class="third_panel">
						<a href="http://www.souleader.org/" target="_blank"><div class="visit">Visit Site</div></a>
						<img class="souleader_skills_img_solo" src="img/souleader_banner.png">
						<img class="souleader_skills_img_small" src="img/souleader_banner_small.png">
					</div>
				</div>

				<div id="trevransom_project">
					<div class="first_panel">
						<div>
							<h1>trevransom</h1>
							<p>
								<b>trevransom.com</b> is my portfolio web page. I spent nearly two months building it as an independent study project for school. 
								It's shown me that, despite all the hours of frustration and hard work, I truly enjoy Web Development and 
								want to do it for a living. 
							</p>
						</div>
						<div id="border_nodrop">
							<img src="img/trevransom.png">
						</div>
					</div>

					<div class="trevransom_second_panel">

						<div id="skills_used">
							<h1>Skills Used:</h1>
						</div>
						
						<div id="skills_used_list">
							<ul>
								<li>CSS</li>
								<li>HTML</li>
								<li>jQuery</li>
								<li>Version Control</li>
								<li>SQL</li>
								<li>PHP</li>
								<li>Graphic Design</li>
								<li>Typography</li>
								<li>User Experience</li>
							</ul>
						</div>
					</div>

					<div class="third_panel">
						<a href="http://localhost:8888/Portfolio/home"><div class="visit">Visit Site</div></a>
						<img class="skills_img_solo" src="img/trevransom_banner.png">
					</div>
				</div>

			</div>

			<div id="switch_page_icon">
				<div><i id="right_arrow_port" class="low_opacity fa fa-angle-right"></i></div>
				<div><i id="left_arrow_port" class="low_opacity fa fa-angle-left"></i></div>
			</div>
		</div>
	</body>
</html>
<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php include('header.php'); ?>
		
		<div class="row">
			<div class="large-12 columns">
				<h1>Graydons Web Design</h1>
			</div>
		</div>

		<div class="row">
			<div id="content">
				<div class="large-12 columns">
					<p>Welcome to my portfolio site.</p>
					<p>Graydon Armstrong, Web Design Extraordinaire.</p>
					<p>I am a Programming Analyst Student who aspires to run my own business. I want to do web design and programming for clients that is regarded as professional and of high quality. I enjoy programming and the challenges that it gives me from day to day.</p>
					<a href="#" class="button">More Work</a>
					<ul class="projects-slider" data-orbit>
						<li>
							<img src="https://forge-allura.apache.org/p/allura/wiki/Features/attachment/code_browsing.png" alt="slide 1" />
							<div class="orbit-caption">
							  Caption One.
							</div>
						</li>
						<li>
							<img src="http://www.securelist.com/en/images/pictures/klblog/681.png" alt="slide 2" />
							<div class="orbit-caption">
							  Caption Two.
							</div>
						</li>
						<li>
							<img src="http://code.snapstream.com/mediawiki/images/0/0d/02_SourceCode.png" alt="slide 3" />
							<div class="orbit-caption">
							  Caption Three.
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<?php include('footer.php') ?>
		
		</div>
	</div>
	
	<script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	

	</body>

</html>
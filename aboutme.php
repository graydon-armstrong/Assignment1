<!DOCTYPE html>
<html class="no-js" lang="en">

	<?php include('head.php'); ?>
	
	<body>
	
	<div class="row" id= "main_layout">
		<div class="large-12 columns">
		
		<?php include('header.php'); ?>
		
		<div class="row">
			<div class="large-12 columns">
				<h1>About Me</h1>
				<hr />
			</div>
		</div>

		<div class="row">
			<div id="content">
				<div class="medium-9 columns">
					<p>Welcome to my portfolio site.</p>
					<p>Graydon Armstrong, Web Design Extraordinaire.</p>
					<p>I am a Programming Analyst Student who aspires to run my own business. I want to do web design and programming for clients that is regarded as professional and of high quality. I enjoy programming and the challenges that it gives me from day to day.</p>
				</div>
				<div class="medium-3 columns">
					<img id="self_image" src="img/self_image.JPG" width=160 >
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
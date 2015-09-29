<?php
	$bodyId = "studentPage";
	$titleInfo = "Current and Past Students";
	include "includes/header.php";
?>
	    	<div class="hero"></div>
	    	<div class="topicBar marginedIn"></div>
	    </header>
	    <div class="mainWrapper marginedIn">
	    	<div class="innerWrapper clearFloat">

		    	<h1>Students</h1>
		    	<p>This page contains my students both past and current who have a portfolio site.</p>
		    	<!--<section class="archiveSection">
		    		<h2>Past Students</h2>

		    	</section>-->
		    	<section class="archiveSection">
		    		<h2>Current Students</h2>
		    		<div class="student"><strong>Stuart Mitchelhill</strong> - <a href="http://stumitchdesign.com">stumitchdesign.com</a></div>
		    		<div class="student"><strong>Maryo Sumenge</strong> - <a href="http://www.maryo.info">www.maryo.info</a></div>
		    	</section>
		    </div>
	    </div>
	    <!-- Set up for loading anim
	    	<div id='container'>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			</div>
		-->
	    <script>
		    $('.search').on('click touch', function() {
		    	if ($('.search').css('width') == '40px') {
		    		$('.search').addClass('showSearch');
		    	}
		    })

		    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-40923417-4', 'auto');
			ga('send', 'pageview');
	    </script>
    </body>	
</html>
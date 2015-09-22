<!DOCTYPE html>
<html> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <title>Soldevi - Teaching Web Development in Higher Education</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,600' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="script/jquery.min.js"></script>
        <script type="text/javascript" src="script/shared.js"></script>
    </head>
    <body id="homePage">
	    <header>
	    	<div class="generalHeader clearFloat">
	    		<div class="marginedIn">
		    		<!--<img src="" class="logo" />-->
			    	<a class="logoLink" href="index.php">
			    		<span class="logo">
			    			Soldevi
			    		</span>
			    	</a>
			    	<div class="search">
			    		<input type="text" class="searchBox" name="searchBox" id="searchBox" />
			    	</div>
			    	<span class="clearFloatMobile"></span>
		    		<nav>
		    			<ul>
		    				<li><a href="index.php" class="navigationLink homeLink">Home</a></li>
		    				<li><a href="archive.php" class="navigationLink archiveLink">Archive</a></li>
		    				<li><a href="students.php" class="navigationLink studentLink">Students</a></li>
		    				<li><a href="about.php" class="navigationLink aboutLink">About</a></li>
		    			</ul>
		    		</nav>
		    	</div>
	    	</div>
	    	<div class="hero"></div>
	    	<div class="topicBar marginedIn">
	    		<div id="allTopic" class="allTopics topicType">*</div>
	    		<div id="generalTopic" class="generalTopic topicType">Teaching</div>
	    		<div id="htmlTopic" class="htmlTopic topicType">HTML</div>
	    		<div id="phpTonic" class="phpTopic topicType">PHP</div>
	    		<div id="jsTopic" class="jsTopic topicType">Js</div>
	    		<div id="designTopic" class="designTopic topicType">Design</div>
	    		<div id="projectTopic" class="projectTopic topicType">Projects</div>
	    	</div>
	    </header>
	    <div class="mainWrapper marginedIn">
	    	<div class="innerWrapper clearFloat">
		    	<section class="generalType frontPageSection">
		    		<div class="sectionInner">
			    		<div class="blogType"></div>
			    		<div class="blogData">
			    			<div class="blogImage"></div>
				    		<div class="blogDate">September 17th, 2015</div>
				    		<h2>An example of what this might just look like</h2>
				    		<p>Are you using keywords to optimize your entire marketing strategy? If not, here are some ways to do it beyond webpage optimization.</p>
				    		<button class="readMore">Read this post</button>
				    	</div>
				    </div>
		    	</section>
		    	<section class="htmlType frontPageSection">
		    		<div class="sectionInner">
			    		<div class="blogType"></div>
			    		<div class="blogData">
			    			<div class="blogImage"></div>
				    		<div class="blogDate">September 17th, 2015</div>
				    		<h2>An example of what this might just look like</h2>
				    		<p>Are you using keywords to optimize your entire marketing strategy? If not, here are some ways to do it beyond webpage optimization.</p>
				    		<button class="readMore">Read this post</button>
				    	</div>
				    </div>
		    	</section>
		    	<section class="phpType frontPageSection">
		    		<div class="sectionInner">
			    		<div class="blogType"></div>
			    		<div class="blogData">
			    			<div class="blogImage"></div>
				    		<div class="blogDate">September 17th, 2015</div>
				    		<h2>An example of what this might just look like</h2>
				    		<p>Are you using keywords to optimize your entire marketing strategy? If not, here are some ways to do it beyond webpage optimization.</p>
				    		<button class="readMore">Read this post</button>
				    	</div>
				    </div>
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
		    });

		    $('.topicType').on('click touch', function() {
		    	var currentId = $(this).attr('id').replace("Topic","Type")
		    	$('.topicType').addClass('noType');
		    	$(this).removeClass('noType');
		    	$('.frontPageSection:not(.'+currentId+')').fadeOut(function() {
		    		$('.'+currentId).fadeIn();
		    	});
		    	console.log('.frontPageSection:not(.'+currentId+')');
		    });
	    </script>
    </body>	
</html>
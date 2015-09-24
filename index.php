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
        <script type="text/javascript" src="script/masonry.js"></script>
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
	    		<div id="phpTopic" class="phpTopic topicType">PHP</div>
	    		<div id="jsTopic" class="jsTopic topicType">Js</div>
	    		<div id="designTopic" class="designTopic topicType">Design</div>
	    		<div id="projectTopic" class="projectTopic topicType">Projects</div>
	    	</div>
	    </header>
	    <div class="mainWrapper marginedIn">
	    	<div id="sectionHolder" class="innerWrapper clearFloat grid">
		    	<!--<section class="generalType frontPageSection">
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
		    	</section>-->
		    </div>
	    </div>
	    <!-- Set up for loading anim
	    	<div id='container'>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			    $date = date('F jS, Y', strtotime($date));
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			  <div class='triangle'></div>
			</div> -->

		<script>
	    	var blogs = [];
	    	<?php
				include "../databaseControllers/blogDb.php";
				$query = $con->prepare('SELECT * FROM blogs');
				//$query->bind_param('s', $_GET['username']);
				$query->execute();
				$query->store_result(); // <-- this
				$query->bind_result($id,$title,$url,$date,$type,$short,$content,$status);
				while($query->fetch()){
					if (isset($id)) {
						$innerQuery = $con->prepare("SELECT imageurl, alt FROM images WHERE blogId = $id AND imagetype = 2");
						$innerQuery->execute();
						$innerQuery->store_result(); // <-- this
						$innerQuery->bind_result($imageURL,$imageAlt);
		 				while($innerQuery->fetch()){
						   $date = date('F jS, Y', strtotime($date));
						   $content = addslashes(str_replace(array('\r', '\n'), '', $content));
						   $title = addslashes($title);
						   $short = addslashes($short);
						   echo "blogs[$id] = [];
						   blogs[$id]['title'] = '$title';
						   blogs[$id]['blogurl'] = '$url';
						   blogs[$id]['blogdate'] = '$date';
						   blogs[$id]['blogtype'] = '$type';
						   blogs[$id]['short'] = '$short';
						   blogs[$id]['content'] = '$content';
						   blogs[$id]['status'] = '$status';
						   blogs[$id]['image'] = '$imageURL';
						   blogs[$id]['alt'] = '$imageAlt';
						   ";
						}
					}
				}
			?>

			var filters = [];filters[1] = 1;filters[2] = 1;filters[3] = 1;filters[4] = 1;filters[5] = 1;filters[6] = 1; 
			var filterTypes = [];filterTypes[1] = 'generalType';filterTypes[2] = 'htmlType';filterTypes[3] = 'phpType';filterTypes[4] = 'jsType';filterTypes[5] = 'designType';filterTypes[6] = 'projectType';
			var filterTotals = [];filterTotals[1] = 0;filterTotals[2] = 0;filterTotals[3] = 0;filterTotals[4] = 0;filterTotals[5] = 0;filterTotals[6] = 0;
			var masonrySetup = 0;
			var $grid;

			function draw() {
				checkFilters();
				$('#sectionHolder').html('');
				var totalBlogs = 0;
				$.each(blogs, function(index,array) {
					if (filters[array['blogtype']] == 1 && totalBlogs < 6) {
						totalBlogs++;
						var fillerData = "<section class='"+filterTypes[array['blogtype']]+" frontPageSection grid-item' style='display:none;'><div class='sectionInner'><div class='blogType'></div><div class='blogData'><div class='blogImage' style='background-image:src(\"img/"+array['image']+"\");'></div><div class='blogDate'>"+array['blogdate']+"</div><h2>"+array['title']+"</h2><p>"+array['short']+"</p><a href='article/"+array['blogurl']+"'><button class='readMore'>Read this post</button></a></div></div></section>";
						$('#sectionHolder').append(fillerData);
					}
					filterTotals[array['blogtype']]++;
				});
				$('.frontPageSection').fadeIn();
				checkRemovals();
				if (masonrySetup == 0) {
					$grid = $('.grid').masonry({
					  // options
					  columnWidth: '.frontPageSection',
					  itemSelector: '.grid-item'
					});
					masonrySetup = 1;
				} else {
					$grid.masonry('layout');
				}
			}

			function checkRemovals() {
				if (filterTotals[1] < 1) {$('.generalTopic').hide();}
				if (filterTotals[2] < 1) {$('.htmlTopic').hide();}
				if (filterTotals[3] < 1) {$('.phpTopic').hide();}
				if (filterTotals[4] < 1) {$('.jsTopic').hide();}
				if (filterTotals[5] < 1) {$('.designTopic').hide();}
				if (filterTotals[6] < 1) {$('.projectTopic').hide();}
			}

			function checkFilters() {
				if ($('#generalTopic').hasClass('noType')) {filters[1] = 0;}else{filters[1] = 1;}
				if ($('#htmlTopic').hasClass('noType')) {filters[2] = 0;}else{filters[2] = 1;}
				if ($('#phpTopic').hasClass('noType')) {filters[3] = 0;}else{filters[3] = 1;}
				if ($('#jsTopic').hasClass('noType')) {filters[4] = 0;}else{filters[4] = 1;}
				if ($('#designTopic').hasClass('noType')) {filters[5] = 0;}else{filters[5] = 1;}
				if ($('#projectTopic').hasClass('noType')) {filters[6] = 0;}else{filters[6] = 1;}
			}
			
			draw();

		    $('.search').on('click touch', function() {
		    	if ($('.search').css('width') == '40px') {
		    		$('.search').addClass('showSearch');
		    	}
		    });

		    $('.topicType').on('click touch', function() {
		    	var currentId = $(this).attr('id').replace("Topic","Type")
		    	if (currentId == 'allType') {
		    		$('.topicType').each(function() {
		    			$(this).removeClass('noType');
		    		});
		    		draw();
		    	} else {
			    	$('.topicType').addClass('noType');
			    	$(this).removeClass('noType');
			    	$('.frontPageSection').fadeOut(function() {
			    		draw();
			     	});
			    }
		    });
	    </script>
    </body>	
</html>
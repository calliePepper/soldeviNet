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
	    </header>
	    <div class="blogImageLarge"></div>
	    <div class="topicBar marginedIn"></div>
	    <div class="mainWrapper marginedIn">

	    	<div class="innerWrapper clearFloat">
			    
				<div class="blogDate">September 17th, 2015</div>
				<div class="generalType">
			    	<div class="blogType"></div>
			    </div>
				<h1 class="articleTitle">An example of what this might just look like</h1>
				<p>Are you using keywords to optimize your entire marketing strategy? If not, here are some ways to do it beyond webpage optimization.</p>
		    	<div id="disqus_thread"></div>
				<script type="text/javascript">
				    /* * * CONFIGURATION VARIABLES * * */
				    var disqus_shortname = 'soldevinet';
				    var disqus_identifier = 'This article name';
				    var disqus_title = 'This title of this page';
				    /* * * DON'T EDIT BELOW THIS LINE * * */
				    (function() {
				        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				        dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				    })();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
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
	    </script>
    </body>	
</html>
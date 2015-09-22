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
    <body id="aboutPage">
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
	    	<div class="topicBar marginedIn"></div>
	    </header>
	    <div class="mainWrapper marginedIn">
	    	<section class="innerWrapper clearFloat">
	    		<img src="" class="shotOfMe" />
	    		<div class="aboutContent">
					<h1>About</h1>
			    	<p><strong>I am a web developer and design, a full stack unicorn if you will, based in Brisbane, Australia. Or at least that's all I thought I would be, until I found myself happily dropped into a teacher career current with SAE Brisbane. Now I use my drive and passion for design, development and user experience to create passion in my students to follow the same path.</strong></p>
			    	<p>It wasn't before long after starting this new job I realised just how much there was to teaching, with hundreds of different techniques, ways to deal with problem students and ways to deliver material. And so in order to document my findings, trials and tribulations I have created this small blog. My hope is that others in the field may find some insight here, but realistically this will be somewhere I can look back at my path.
			    	<p>This page will also be used to track students in two ways:
			    		<ul>
			    			<li><strong>Past students</strong> will be listed so I can keep track of their progress, but a little bit of link SEO won't hurt them either.</li>
			    			<li><strong>Current students</strong> will be give the option to host their work on this website. While this will not be a permanent link, it will be set up in a way that simulates a real hosting set up.</li>
			    		</ul>
			    	</p>		    	
			    	<p>In my spare time I also learn and teach fighting in the SCA (Society for Creative Anachonisms), the results of this could also become a point of interest in this page, but we will see how that goes.</p>
			    </div>
		    </section>
		    <section class="tinyWrapper clearFloat">
		    	<h2>Contact me</h2>
		    	<div class="contactCard">
		    		<div class="clearFloat">
		    			<div class="socialThirds">
		    				<a href="soldeviFae.tumblr.com">
		    					<button class="tumblr socialButton">
		    						<img src="img/tumblr.png" alt="tumblr icon" />
		    					</button>
		    				</a>
		    			</div>
		    			<div class="socialThirds">
		    				<a href="https://github.com/soldeviFae">
		    					<button class="github socialButton">
		    						<img src="img/github.png" alt="github icon" />
		    					</button>
		    				</a>
		    			</div>
		    			<div class="socialThirds">
		    				<a href="https://twitter.com/SoldeviFae">
		    					<button class="twitter socialButton">
		    						<img src="img/twitter.png" alt="twitter icon" />
		    					</button>
		    				</a>
		    			</div>
		    		</div>
		    		<div class="formset">
		    			<div class="form-group">
		    				<label class="form-label" for="username">Your name</label>
		    				<input type="text" class="formControl" name="username" id="username" />
		    			</div>
		    			<div class="form-group">
		    				<label class="form-label" for="username">Email</label>
		    				<input type="text" class="formControl" name="email" id="email" />
		    			</div>
		    			<div class="form-group">
		    				<label class="form-label" for="username">Message</label>
		    				<textarea class="formControl" name="email" id="email"></textarea>
		    			</div>
		    			<button class="sendForm">Contact away!</button>
		    		</div>
		    	</div>
		    </section>
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
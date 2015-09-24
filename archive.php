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
    <body id="archivePage">
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
	    	<div class="innerWrapper clearFloat">
	    		<div id="archiveController">
	    			<input type="checkbox" id="briefControl" />
	    			Show brief<br>description
	    		</div>
		    	<h1>Archive</h1>

				<?php
					include "../databaseControllers/blogDb.php";
					$query = $con->prepare('SELECT * FROM blogs');
					//$query->bind_param('s', $_GET['username']);
					$query->execute();
					$query->store_result(); // <-- this
					$query->bind_result($id,$title,$url,$date,$type,$short,$content,$status);
					while($query->fetch()){
						if (isset($id)) {
							$innerQuery = $con->prepare("SELECT imageurl, alt FROM images WHERE blogId = $id AND imagetype = 1");
							$innerQuery->execute();
							$innerQuery->store_result(); // <-- this
							$innerQuery->bind_result($imageURL,$imageAlt);
			 				while($innerQuery->fetch()){
							   $date = date('F jS, Y', strtotime($date)); ?>
							   <section class="archiveSection">
						    		<a class="archiveLink" href="article/<?=$url?>">
							    		<div class="clearFloat">
								    		<div class="archiveImage" style="background-image:url('img/<?=$imageURL?>')"></div>
								    		<h2><?=$title?></h2>
								    		<div class="blogDate"><?=$date?></div>
								    	</div>
							    		<p class="brief"><?=$short?></p>
						    		</a>
						    	</section>
							<?php }
						}
					}
				?>

		    	
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
	    $('.brief').hide();

	    $('#briefControl').on('click touch', function() {
	    	$('.brief').each(function() {
	    		$(this).slideToggle();
	    	})
	    });

	    $('.search').on('click touch', function() {
	    	if ($('.search').css('width') == '40px') {
	    		$('.search').addClass('showSearch');
	    	}
	    })
	    </script>
    </body>	
</html>
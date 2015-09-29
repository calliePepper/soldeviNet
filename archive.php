<?php
	$bodyId = "archivePage";
	$titleInfo = "Archive";
	include "includes/header.php";
?>
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
							   $date = date('F jS, Y', strtotime($date)); 
							   if ($type == 1){$wordType = "General teaching";$classType = "generalType";}
							   if ($type == 2){$wordType = "HTML &amp; CSS";$classType = "htmlType";}
							   if ($type == 3){$wordType = "PHP";$classType = "phpType";}
							   if ($type == 4){$wordType = "Javascript";$classType = "jsType";}
							   if ($type == 5){$wordType = "Design &amp; UX";$classType = "designType";}
							   if ($type == 6){$wordType = "Project Based Learning";$classType = "projectType";}

							   ?>
							   <section class="archiveSection">
						    		<a class="archiveLink" href="article/<?=$url?>">
							    		<div class="clearFloat">
								    		<div class="archiveImage" style="background-image:url('img/<?=$imageURL?>')"></div>
								    		<h2><?=$title?></h2>
								    		<span class="<?=$classType?>"><span class="blogType miniType"><?=$wordType?></span></span><span class="blogDate"><?=$date?></span>
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
		    });

	  		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-40923417-4', 'auto');
			  ga('send', 'pageview');
	    </script>
    </body>	
</html>
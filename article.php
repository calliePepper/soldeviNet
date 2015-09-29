<?php
	include "../databaseControllers/blogDb.php";
	if (isset($_GET['name'])) {
		$currentName = $_GET['name'];
	} else {
		location("header:http://www.soldevi.net");
		exit();
	}

	$query = $con->prepare("SELECT * FROM blogs WHERE blogurl = '$currentName'");
	//$query->bind_param('s', $_GET['username']);
	$query->execute();
	$query->store_result(); // <-- this
	$query->bind_result($id,$title,$url,$date,$type,$short,$content,$status);
	while($query->fetch()){
		if (isset($id)) {
			if ($type == 1){$wordType = "General teaching";$classType = "generalType";}
			if ($type == 2){$wordType = "HTML &amp; CSS";$classType = "htmlType";}
			if ($type == 3){$wordType = "PHP";$classType = "phpType";}
			if ($type == 4){$wordType = "Javascript";$classType = "jsType";}
			if ($type == 5){$wordType = "Design &amp; UX";$classType = "designType";}
			if ($type == 6){$wordType = "Project Based Learning";$classType = "projectType";}
			$innerQuery = $con->prepare("SELECT imageurl, alt FROM images WHERE blogId = $id AND imagetype = 3");
			$innerQuery->execute();
			$innerQuery->store_result(); // <-- this
			$innerQuery->bind_result($imageURL,$imageAlt);
			$innerQuery->fetch(); 
		}
	}
	$bodyId = "homePage";
	$titleInfo = $title;
	include "includes/header.php";
?>
	    </header>
	    <div class="blogImageLarge" style="background-image:url('/img/<?=$imageURL?>')"></div>
	    <div class="topicBar marginedIn"></div>
	    <div class="mainWrapper marginedIn">

	    	<div class="innerWrapper clearFloat">
			    
				<div class="blogDate articleDate"><?=date('F jS, Y', strtotime($date))?></div>
				<div class="<?=$classType?>">
			    	<div class="blogType articleType"></div>
			    </div>
				<div class="articleContent">
					<h1 class="articleTitle"><?=$title?></h1>
					
						<?=$content?>
				</div>
		    	<div id="disqus_thread"></div>
				<script type="text/javascript">
				    /* * * CONFIGURATION VARIABLES * * */
				    var disqus_shortname = 'soldevinet';
				    var disqus_identifier = '<?=$url?>';
				    var disqus_title = '<?=$title?>';
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

	    	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-40923417-4', 'auto');
			  ga('send', 'pageview');
	    </script>
    </body>	
</html>
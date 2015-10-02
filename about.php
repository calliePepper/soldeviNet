<?php
	$bodyId = "aboutPage";
	$titleInfo = "About Me";
	include "includes/header.php";
?>
	    	<div class="hero"></div>
	    	<div class="topicBar marginedIn"></div>
	    </header>
	    <div class="mainWrapper marginedIn">
	    	<section class="innerWrapper clearFloat">
	    		<img src="" class="shotOfMe" />
	    		<div class="aboutContent">
					<h1>About</h1>
			    	<p><strong>I am a web developer and design, a full stack unicorn if you will, based in Brisbane, Australia. Or at least that's all I thought I would be, until I found myself happily dropped into a teacher career currently with SAE Brisbane. Now I use my drive and passion for design, development and user experience to create passion in my students to follow the same path.</strong></p>
			    	<p>It wasn't before long after starting this new job I realised just how much there was to teaching, with hundreds of different techniques, ways to deal with problem students and ways to deliver material. And so in order to document my findings, trials and tribulations I have created this small blog. My hope is that others in the field may find some insight here, but realistically this will be somewhere I can look back at my path.
			    	<p>This page will also be used to track students in two ways:
			    		<ul>
			    			<li><strong>Past students</strong> will be listed so I can keep track of their progress, but a little bit of link SEO won't hurt them either.</li>
			    			<li><strong>Current students</strong> will be give the option to host their work on this website. While this will not be a permanent link, it will be set up in a way that simulates a real hosting enviroment.</li>
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
		    			<div id="contactForm">
			    			<div class="form-group">
			    				<label class="form-label" for="username">Your name</label>
			    				<input type="text" class="formControl" name="name" id="name" />
			    			</div>
			    			<div class="form-group">
			    				<label class="form-label" for="username">Email</label>
			    				<input type="text" class="formControl" name="email" id="email" />
			    			</div>
			    			<div class="form-group">
			    				<label class="form-label" for="username">Message</label>
			    				<textarea class="formControl" name="message" id="message"></textarea>
			    			</div>
			    			<button id="submitBtn" class="sendForm">Contact away!</button>
			    		</div>
			    		<div id="loadingTriangle">
							<div id='container'>
							  <div class='triangle'></div>
							  <div class='triangle'></div>
							  <div class='triangle'></div>
							  <div class='triangle'></div>
							  <div class='triangle'></div>
							  <div class='triangle'></div>
							</div>
			    		</div>
			    		<div id="thankYou">
			    			<h3>Thank you for your message</h3>
			    		</div>
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
		    });

		    $('#submitBtn').on('click touch', function() {
                $('.formControl').removeClass('redLine');
                $('#errorMessage').hide();
                var error = 0;
                if ($('#name').val() == "" || $('#name').val() == undefined) {
                    $('#name').addClass('redLine');
                    error = 1;
                }
                if ($('#email').val() == "" || $('#email').val() == undefined) {
                    $('#email').addClass('redLine');
                    error = 1;
                } 
                if ($('#message').val() == "" || $('#message').val() == undefined) {
                    $('#message').addClass('redLine');
                    error = 1;
                }
                if (error == 0){
                    $('#submitBtn').off();
                    $('#contactForm').fadeOut(function() {
                    	$('#loadingTriangle').fadeIn();
                    });
                    var name = $('#name').val();
                    var email = $('#email').val();
                    var message = $('#message').val();
                    $.ajax({
                        type: "POST",
                        url: "script/contactUs.php",
                        dataType: "JSON",
                        data: { 
                          'name': name, 
                          'email': email, 
                          'message': message 
                        },                    
                        success: function(html)
                        {
                           $('#loadingTriangle').fadeOut(function() {
                           		$('#thankYou').fadeIn();
                           	});
                           	console.log(html);	                           
                        },
                            error: function (xhr, ajaxOptions, thrownError) {
                                emailAjaxCheck = 0;
                                console.log('Error!');
                                console.log(ajaxOptions);
                                console.log(thrownError);
                                console.log(xhr);
                            }                       
                    });
                } else {
                    $('#errorMessage').show();
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
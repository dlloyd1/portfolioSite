<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="Personal webpage showcasing recent work, and CV.">
	    <meta name="author" content="Daniel Lloyd">

	    <title>Daniel Lloyd - Graduate Developer</title>
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/slidefolio.css" rel="stylesheet">
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="theme-color" content="#ffffff">
	</head>
	<body>
	    <!-- Header Area -->
	    <div id="top" class="header">
      		<div class="vert-text">
	        	<h2><em>Daniel Lloyd</em></h2>
		 		<ul class="list-inline">
				    <li><a href="http://linkedin.com/in/daniel-lloyd"><i class="fa fa-linkedin fa-3x"></i></li>
				    <li><a href="https://github.com/dlloyd1"><i class="fa fa-github fa-3x"></i></li>
                </ul>	
				<br>
				<a href="#about" class="btn btn-top">View More</a>
      		</div>
    	</div>
    	<!-- /Header Area -->
		<div id="nav">
    	<!-- Navigation -->
    		<nav class="navbar navbar-new" role="navigation">
   				<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  					<div class="navbar-header">
    					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mobilemenu">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
    					</button>
						<a href="#" class="navbar-brand"></a>
  					</div>
	  				<div class="collapse navbar-collapse" id="mobilemenu">
						<ul class="nav navbar-nav navbar-right text-center">
						    <li><a href="#top">Home</a></li>
					        <li><a href="#about">About</a></li>
					        <li><a href="cv.php">CV</a></li>
					        <li><a href="#portfolio">Portfolio</a></li>
					        <li><a href="#contact">Contact</a></li>
					    </ul>
	  				</div><!-- /.navbar-collapse -->
  				</div>
			</nav>
		</div>	
    	<!-- /Navigation -->
	    <!-- About -->
	    <div id="about" class="about_us">
	        <div class="container">
	          <div class="row">
	          	<div class="col-md-3">
	          		<img class="img-circle" src="./img/profilepicture.png"/>
	          	</div>
	            <div class="col-md-9 text-center">
	              <h2>About Me</h2>
	              <p class="lead">My name is Daniel Lloyd, I'm a recent Programming Graduate. Welcome to my portfolio site, feel free to <a href="#contact">get in touch</a>.</p>
	            </div>
	          </div>
		    </div>
	    </div>
	    <!-- /About -->

    	<!-- Portfolio -->
	    <div id="portfolio" class="portfolio">
	    	<div class="container">
	    		<div class="row push50">
	          		<div class="col-md-4 col-md-offset-4 text-center">
	            		<h2>Recent Work</h2>
	            		<p class="lead"><small>Click on a thumbnail for video footage</small></p>
						<h3>
							<span class="filter label label-default" data-filter="all">ALL</span>
							<span class="filter label label-default" data-filter="ai">AI</span>
							<span class="filter label label-default" data-filter="group">Group</span>
							<span class="filter label label-default" data-filter="graphics">Graphics</span>
						</h3>
	            		<hr>
	         		</div>
	       		</div>
				<div class="row">
					<div class="gallery">
	    		  		<ul id="Grid" class="gcontainer">
	    		    		<li class="col-md-4 col-sm-4 col-xs-12 mix ai all" data-cat="ai">
		                		<a data-toggle="modal" data-target="#portrait1" class="mix-cover">
			                		<img class="horizontal" src="img/chessss.jpg" alt="placeholder">
			      		      		<span class="overlay"><span class="valign"></span><span class="title">Minimax Algorithm</span></span>
		              			</a>                
	      		  			</li>
	    		    		<li class="col-md-4 col-sm-4 col-xs-12 mix ai all" data-cat="ai">
	               				<a data-toggle="modal" data-target="#portrait2" class="mix-cover">
	                   				<img class="horizontal" src="img/fypss.jpg" alt="placeholder">
	        		      			<span class="overlay"><span class="valign"></span><span class="title">Regret Theory</span></span>
	                			</a>                
	      		  			</li>
	      		  			<li class="col-md-4 col-sm-4 col-xs-12 mix ai all" data-cat="ai">
	                			<a data-toggle="modal" data-target="#portrait3" class="mix-cover">
	                  				<img class="horizontal" src="img/lunarss.jpg" alt="placeholder">
	        		      			<span class="overlay"><span class="valign"></span><span class="title">Genetic Algorithm</span></span>
	        		    		</a>
	      		  			</li>
				  			<li class="col-md-4 col-sm-4 col-xs-12 mix graphics all" data-cat="graphics">
	                			<a data-toggle="modal" data-target="#portrait5" class="mix-cover">
	                  				<img class="horizontal" src="img/llgpss.jpg" alt="placeholder">
	        		       			<span class="overlay"><span class="valign"></span><span class="title">Raytracing</span></span>
	        		    		</a>
	      		  			</li>
				  			<li class="col-md-4 col-sm-4 col-xs-12 mix ai all" data-cat="ai">
	                			<a data-toggle="modal" data-target="#nature" class="mix-cover">
	                  				<img class="horizontal" src="img/neuralss.jpg" alt="placeholder">
	        		      			<span class="overlay"><span class="valign"></span><span class="title">Neural Networks</span></span>
	        		    		</a>
	      		  			</li>
	      		  			<li class="col-md-4 col-sm-4 col-xs-12 mix ai all" data-cat="ai">
	                			<a data-toggle="modal" data-target="#portrait4" class="mix-cover green">
	                  				<img class="vertical" src="img/conwayss.jpg" alt="portrait 4">
	                  				<span class="overlay"><span class="valign"></span><span class="title">Cellular Automata</span></span>           
	        		    		</a>
	      		 			</li>
				  			<li class="col-md-4 col-sm-4 col-xs-12 mix group all" data-cat="group">
	                			<a data-toggle="modal" data-target="#forest" class="mix-cover green">
	                  				<img class="vertical" src="img/collab2ss.jpg" alt="Forest">
	                   				<span class="overlay"><span class="valign"></span><span class="title">Unity</span></span>                    
	        		    		</a>
	      		  			</li>
	    		  		</ul>   
				  
						<!-- Load Photo in Modal -->			  
					    <div class="modal fade" id="portrait1" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
						    	<div class="modal-content">
						      		<div class="modal-header">
						        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        			<h4 class="modal-title text-center">Chess AI - Minimax Algorithm with Alpha Beta Pruning</h4>
						      		</div>
						      		<div class="modal-body">
						       			<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/Fd131npZ75Y" frameborder="0" allowfullscreen></iframe>
						      		</div>
						    	</div><!-- /.modal-content -->
						  	</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

	  					<div class="modal fade" id="portrait2" tabindex="-1" role="dialog"  aria-hidden="true">
	  						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        								<h4 class="modal-title text-center">Poker AI - Fuzzy Logic and Regret Theory</h4>
	      							</div>
	      							<div class="modal-body">
	       								<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/cVBnL-3wcXw" frameborder="0" allowfullscreen></iframe>
	      							</div>
	    						</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="modal fade" id="portrait3" tabindex="-1" role="dialog" aria-hidden="true">
	  						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        							<h4 class="modal-title text-center">Lunar Lander AI - Genetic Algorithm</h4>
	      							</div>
	      							<div class="modal-body">
										<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/UvL0qytjzJs" frameborder="0" allowfullscreen></iframe>	      							
									</div>
	    						</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="modal fade" id="portrait4" tabindex="-1" role="dialog"  aria-hidden="true">
	  						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        							<h4 class="modal-title text-center">Conway's Game of Life - Cellular Automata</h4>
	      							</div>
	      							<div class="modal-body">
	      								<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/asocTZKmjyY" frameborder="0" allowfullscreen></iframe>
	      							</div>
	    						</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="modal fade" id="portrait5" tabindex="-1" role="dialog"  aria-hidden="true">
	  						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        							<h4 class="modal-title text-center">Low level work - Customisation and Optimisation of a Raytracing Scene</h4>
	      							</div>
	      							<div class="modal-body">
										<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/NcUu-yWjhfk" frameborder="0" allowfullscreen></iframe>	      							
									</div>
	    						</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="modal fade" id="nature" tabindex="-1" role="dialog"  aria-hidden="true">
	 						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        							<h4 class="modal-title text-center">Neural Networks - Rainbow Islands</h4>
	      							</div>
	      							<div class="modal-body">
	      								<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/_HPllNl4pyE" frameborder="0" allowfullscreen></iframe>
	      							</div>
	    						</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="modal fade" id="forest" tabindex="-1" role="dialog" aria-hidden="true">
	  						<div class="modal-dialog">
	    						<div class="modal-content">
	      							<div class="modal-header">
	        							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        							<h4 class="modal-title text-center">Group development - Escape the Room Prototype - Unity</h4>
	      							</div>
	      							<div class="modal-body">
	      								<iframe width="560" height="315" style="display: block; margin: 0 auto;" src="https://www.youtube.com/embed/QdZzfTqtsOE" frameborder="0" allowfullscreen></iframe>
	      							</div>
    							</div><!-- /.modal-content -->
	  						</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>	
	      		</div>
			</div>
	    </div>
	    <!-- /Portfolio -->
    	<!-- Contact -->
    	<div id="contact">
      		<div class="container">
        		<div class="row">
					<div class="col-md-4 col-md-offset-4 text-center">
            			<h2>Contact Me</h2>
						<hr>
          			</div>
          			<div class="col-md-5 col-md-offset-3">
			  			<!-- contact form starts -->
	            		<form name="contactForm" method="post" action="sendFormEmail.php" id="contact-form" class="form-horizontal">
							<fieldset>
							    <div class="form-group">
							    	<label class="col-sm-4 control-label" for="name">Your Name</label>
							      	<div class="col-sm-8">
							        	<input type="text"  placeholder="Your Name" class="form-control" name="name" id="name">
							     	</div>
							    </div>
							    <div class="form-group">
							        <label class="col-sm-4 control-label" for="email">Email Address</label>
							        <div class="col-sm-8">
							        	<input type="text" placeholder="Enter Your Email Address" class="form-control" name="email" id="email">
							        </div>
							    </div>
							    <div class="form-group">
							        <label class="col-sm-4 control-label" for="subject">Subject</label>
							        <div class="col-sm-8">
							        	<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
							        </div>
							    </div>
							    <div class="form-group">
							        <label class="col-sm-4 control-label" for="message">Your Message</label>
						        	<div class="col-sm-8">
							        	<textarea placeholder="Please Type Your Message" class="form-control" name="message" id="message" rows="3"></textarea>
							      	</div>
							    </div>
		              			<div class="col-sm-offset-4 col-sm-8">
				            		<button type="submit" class="btn btn-success" href="">Submit</button>
		    			      		<button type="reset" class="btn btn-primary">Cancel</button>
		        				</div>
							</fieldset>
						</form>
						<!-- contact form ends -->		
	          		</div>
	        	</div>
	      	</div>
	    </div>
		<!-- /Contact -->
    	<!-- Footer -->
	    <footer>
	      <div class="container">
	        <div class="row">
	          <div class="col-md-6 col-md-offset-3 text-center">
	           <em>Copyright &copy; Daniel Lloyd</em> <?php echo date("Y"); ?>
	          </div>
	        </div>
	      </div>
	    </footer>
	    <!-- /Footer -->

	    <!-- Bootstrap core JavaScript -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <script src="js/jquery.js"></script>
		<script src="js/jquery-scrolltofixed-min.js"></script>
		<script src="js/jquery.vegas.js"></script>
		<script src="js/jquery.mixitup.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/custom.js"></script>
	</body>
</html>
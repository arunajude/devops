<?php
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <!-- Meta, title, CSS, favicons, etc. -->
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="mainframe, devops, continuous deployment, knowledge management, concurrent development, test coverage, impact assesment" />
		<meta name="description" content="The only continuous deployment tool for mainframe devops that takes care of knowledge management, concurrent development and testing headaches to give you total control and frequent deployments" />
		<meta name="abstract" content="Continuous deployment tool for mainframe devops takes care of knowledge management, concurrent development and testing headaches" />
		<meta name="language" content="en" />
		<meta name="robots" content="index, follow" />
		<meta name="googlebot" content="index, follow" />
		<title>Deliver stable mainframe projects like a champion with devops</title>
	
		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,400italic,700italic' rel='stylesheet' type='text/css'>
		
		<!-- Rocket extras -->
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/prettyPhoto.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- Favicons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="../docs-assets/ico/apple-touch-icon-144-precomposed.png">
		                               <link rel="shortcut icon" href="../docs-assets/ico/favicon.png">
	</head>
	<body>
	
	
	<!-- Start Rocket -->
	<!-- ********************* -->
	
	<!-- Parallax Background
	================================================== -->
	<!-- image is set in the CSS as a background image -->
	<div id="parallax"></div>
	<!-- End Parallax Background
	================================================== -->
	
	<!-- Start Header
	================================================== -->
	<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- Your Logo -->
	      <a href="../" class="navbar-brand"><img src="assets/images/icons.png" alt="logo">&nbsp;ynaps</a>
	    </div>
   	    <!-- Start Navigation -->
	    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	      <ul class="nav navbar-nav">
	        <li>
	          <a href="#hero">Home</a>
	        </li>
	        <li>
	          <a href="#getreport">benefits</a>
	        </li>
	        <li>
	          <a href="#aboutit">About</a>
	        </li>
                <li>
	          <a href="#about">Extras</a>
	        </li>
		<li>
	          <a href="#price">Pricing</a>
	        </li>
	        <li>
	          <a href="#myModal" data-toggle="modal">Contact</a>
	        </li>
	      </ul>

	    </nav>
	  </div>
	</header>
	<!-- ==================================================
	End Header -->
	
	<div id="myModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Request more information and a Demo</h4>
		<p>Deliver business functionality at a rapid rate without causing outages with DevOps.
		Deliver projects like a champion.</p>		
				
            </div>
            <div class="modal-body">
		   
                     <form method="post" name="signupform" id="signupform" autocomplete="on">
			<div class="form-group">
                            <input type="text" class="form-control" id="txt_name" name="txt_name" placeholder="Name">
			    <label class="error" style="display:none;" id="sign_error_name"></label>
                        </div>
			<div class="form-group">
                            <input type="text" class="form-control" id="txt_email" name="txt_email" placeholder="Email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"  />
			    <label class="error" style="display:none;" id="sign_error_email"></label>
                        </div>
			<div class="form-group">
                            <input type="text" class="form-control" id="txt_price" name="txt_price" placeholder="Company Name">
			    <label class="error" style="display:none;" id="sign_error_price"></label>
                        </div>
						
			<div class="form-group">
                            <input type="text" class="form-control" id="txt_phone" name="txt_phone" placeholder="Phone Number">
			    <label class="error" style="display:none;" id="sign_error_phone"></label>
                        </div>
			<div class="form-group">
                            <input type="text" class="form-control" id="txt_comment" name="txt_comment" placeholder="Comments">
			    <label class="error" style="display:none;" id="sign_error_comment"></label>
                        </div>
			<div class="form-group">	
			    <label class="error"  id="success" style="display:none;"></label>
			</div>
			<p class="left">
			   <button type="submit" class="btn btn-primary" id="sign_up" ><i class="fa fa-sign-in"></i>Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </p>
			We don't spam your inbox or share your email and other information with anyone.
		</form>
		   

                   

                </div>
           
	    
        </div>
    </div>
   </div>
	<!-- Start Hero Section
	================================================== -->
	<section id="hero" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-5"></div>
				<div class="col-md-7">
					<div class="lp-element animate" data-animate="fadeInDown" >
						<h1>Walk on water with a mainframe on your back</h1>
											
						<p class="lead">The only comprehensive tool to handle concurrent development and devops on the mainframe.
						Deliver stable mainframe projects like a champion.</p>
						
						<a button class="btn btn-md btn-primary" href="#myModal" data-toggle="modal">get started</button></a>
					        
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- ================================================== 
	End Hero -->
	
	<!-- Start Image Block
	================================================== -->
	<section id="image" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/agile.png" alt=""/></div>
				
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 60px;">
						<h2>Business Agility through Agile</h2>
						<p class="lead">Business environment change at a rapid rate. If IT development
						cannot keep up with the pace, that can put the entire organization at risk.
						Waterfall method of software developmet was deviced at a period where businesses were not
						so reliant on IT and projects can take few years to complete.
						<br>
						</p>
						
					</div>
			      
				</div>
				
				
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 60px;">
						<h2>DevOps for faster delivery</h2>
						<p class="lead">Building on Agile concepts, where smaller packages of work is undertaken
						developed, tested and delivered in smaller timeframes.
						DevOps add further discipline and better collaboration between development an operations
						to increase efficiency in delivering new functionality to users improving overall efficiency.
						</p>
						
					</div>
					
			      
				</div>
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/devops.png" alt=""/></div>
				
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Image Blcok -->
	
	
	
		<!-- Start Image Block
	================================================== -->
	<section id="image" class="section" style="background-color:#FFF; border-top: 1px solid rgba(0, 0, 0, .1);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sol-sm-12">
					<div class="overview animate" data-animate="flipInX">
						<h1><strong>mainframe devops</strong> through contours of stability</h1>
						<p class="lead">DevOps comes from the merging of terms Development and Operations.
						It encourages collaboration between Development and Operations teams to
						deliver new functionality rapidly without compromising production stability.
						DevOps in the mainframe bring new challenges to the already strained resource base.
						Firstly, most of the work is not new code. It involve changing existing legacy applications
						potentially impacting current functionality. This require "retest all" which could take months to complete.
						<br>
						
						
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-12"><img class="animate img-responsive" data-animate="fadeInLeft" src="assets/images/mfdevops.png" alt=""/></div>
				
				<div class="col-md-6 col-sm-12">
					<div class="content-block animate" data-animate="fadeInRight" style="margin-top: 60px;">
						<h2>Contours of Stability</h2>
						<p class="lead">Search based impact analysis cannot identify the system inter-dependacies
						for safer budling of projects. Ususlly companies relies on the knowledge of SME to make a good guess.
						Usually such resources are in high demand and can take ages to get his or her time and attention.
						By using advanced nueral network systems, SynAps can do a 100% impact analysis in a flash.
						
						</p>
						<a button class="btn btn-md btn-primary" href="#myModal" data-toggle="modal">contact us</button></a></p>
					</div>
			      
				</div>
		
				
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Image Blcok -->
		<!-- Start Features
	================================================== -->
	<section id="features" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Title -->
					<div class="overview animate" data-animate="flipInX">
						<h1>SynAps is for Everyone</h1>
						
					</div>
									  
					</div>
					
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service-block animate" data-animate="fadeInRight">
						<span class="glyphicon glyphicon-user"></span>
						<h3>Management</h3>
						<p>Better project control with smaller units of work.</p>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service-block animate" data-animate="flipInY">
						<span class="glyphicon glyphicon-send"></span>
						<h3>Development</h3>
						<p>Identify dependencies automate unit testing.</p>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service-block animate" data-animate="fadeInLeft">
						<span class="glyphicon glyphicon-dashboard"></span>
						<h3>Operations</h3>
						<p>Better visibility, improved production stability.</p>
						
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="service-block animate" data-animate="flipInX">
						<span class="glyphicon glyphicon-briefcase"></span>
						<h3>Testing</h3>
						<p>Identify required test coverage with confidence.</p>
						
					</div>
				</div>
				
				</div>
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	End Features -->
	<!-- Start Text Block
	================================================== -->
	<section id="about" class="section">
		<div class="container">
			<div class="row">
			   <div class="col-md-12 col-sm-12">
				       <div class="overview animate" data-animate="flipInY">
						<p></p>
						<h2>Does this sound familiar?</h2>
						
					</div>
					<div class="faq-block animate" data-animate="fadeInLeft">
						<div class="panel-group" id="accordion">
						<div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse00">
						          Production Crit-sits<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse00" class="panel-collapse collapse">
						      <div class="panel-body">
						        Bad code going into production causes crit-sits and emergency fixes the biggest nightmare for the project team already
							burned out from extended hours.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse01">
						          Missed Impacts<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse01" class="panel-collapse collapse">
						      <div class="panel-body">
						        Manual dependency management and configuration tasks result in errors and delays. With few days to implementation, you find a major gap.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse02">
						          Capacity issues<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse02" class="panel-collapse collapse">
						      <div class="panel-body">
							You find new issues in production due to volumes. Restricted dev and test capacity lead to conflict, delays, or bad test results in scaled down.
							
						        
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse03">
						          Missed configurations<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse03" class="panel-collapse collapse">
						      <div class="panel-body">
							Missed database/file/transaction definitions in production causing deployment to be cancelled or backed out.
							
						        
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse05">
						           Extended test cycles<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapse05" class="panel-collapse collapse">
						      <div class="panel-body">
						        nControl gives you accurate test coverage so you can avoid unnceccesary test cases and chasing defects caused by environment.
							
						      </div>
						    </div>
						  </div>
						  
						  
						</div>
					</div>
				</div>	
				
					
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	
	End Text Blcok -->
	<!-- Start Newsletter Block
	================================================== -->
	<section id="aboutit" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="overview animate" data-animate="fadeInDown">
						<h2>Get a handel on complex mainframe systems</h2>
						<p class="lead">Mainframe code is interrelated and complex. When you think about continuous deployment,
						the effort of impact analysis puts you off. Most of the system knowledge is leaving organizations due to retirement of
						baby boomers.
					        
					        
						<br>nControl is an automated tool to get you going in a matter of weeks. It uses copies of your codebase and operates
						on it's own servers or in the cloud. This makes the adoption seamless. You can try it for free without
						impacting any of your resources.</p>
						<a button class="btn btn-md btn-primary" href="#myModal" data-toggle="modal">contact us</button></a>
				
					</div>
				       
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- Start Text Block
	================================================== -->
	<section id="about" class="section">
		<div class="container">
			<div class="row">
			   <div class="col-md-12 col-sm-12">
				       <div class="overview animate" data-animate="flipInY">
						<p></p>
						<h2>5 other major IT headaches also sorted.</h2>
						
					</div>
					<div class="faq-block animate" data-animate="fadeInLeft">
						<div class="panel-group" id="accordion">
						<div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapseO">
						          Knowledge Management <i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseO" class="panel-collapse collapse">
						      <div class="panel-body">
						        mfDevops provides automated extraction of undocumented business knowledge by identifying
							data elements and their relationships. A piece of known information can lead you to more in-depth understanding
							of how things hang together.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						          Testing cost <i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseOne" class="panel-collapse collapse">
						      <div class="panel-body">
						        Automated identification of dependencies results in shorter test cycles. You can ring fence
							impacted areas to select the necessary test cases.
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						          Redundant code<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseTwo" class="panel-collapse collapse">
						      <div class="panel-body">
							Redundant code creates confusion and increases maintainance cost. By improving visibility across systems components
							mfDevops can detect redundant code in a flash.
							
						        
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						          Continuous Deployment<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseThree" class="panel-collapse collapse">
						      <div class="panel-body">
							A concept widely believed to be outside mainframe world. mfDevOps makes it possible by proposing
							logical stability points or stepped development according to chosen resource and budget thresholds.
						        
						      </div>
						    </div>
						  </div>
						  <div class="panel panel-default">
						    <div class="panel-heading">
						      <h4 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
						           Concurrent Development<i>&nbsp;&nbsp;&nbsp;&nbsp; (click to expand)</i>
						        </a>
						      </h4>
						    </div>
						    <div id="collapseFive" class="panel-collapse collapse">
						      <div class="panel-body">
						        mfdevops assists concurrent development by identifying neutral stability points across projects for stepped deployment.
							
						      </div>
						    </div>
						  </div>
						  
						  
						</div>
					</div>
				</div>	
				
					
			</div>
		</div>
	</section>
	
	<!-- ==================================================
	
	End Text Blcok -->
	<!-- Start Newsletter Block
	================================================== -->
	<section id="price" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="overview animate" data-animate="fadeInDown">
						<h2>Pricing</h2>
						<p class="lead">We have both <b>Pay as you go</b> and <b>Annual contract</b> pricing models depending on the size and complexity
						of your application. Time is money. Time savings too is a factor to think about when you compare prices.</p>
						<a button class="btn btn-md btn-primary" href="#myModal" data-toggle="modal">contact us</button></a>
				
					</div>
				       
					
				</div>
			</div>
		</div>
	</section>
	
	

	<!-- Start Newsletter Block
	================================================== -->
	<section id="getreport" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="overview animate" data-animate="fadeInDown">
						<h2>Take control of your mainframe projects</h2>
						<p class="lead">All roads are leading to Devops and continuous deployment. Dealys in adoption can lead to missed opportunities
						or worse, losing relevance as a company. And your bonus of course.
						<br>To make your organization more competitive, if business transformation is on your agenda,
						take a closer look at how continuous deployment can help get you where your organization needs to go.</p>
						<a button class="btn btn-md btn-primary" href="#myModal" data-toggle="modal">contact us</button></a>
				
					</div>
				       
					
				</div>
			</div>
		</div>
	</section>
	<!-- ==================================================
	End Newsletter Blcok -->
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    &copy; 2015 mfdevops.com All Rights Reserved.
                </div>
             
            </div>
        </div>
    </footer><!--/#footer-->
	
	
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollto.min.js"></script>
	<script src="assets/js/jquery.localscroll.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
	<script src="assets/js/scripts.js"></script>
	
	
	<!-- ********************* -->
	<!-- Start Rocket -->
	
	</body>
</html>
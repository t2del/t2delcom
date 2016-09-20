    <div class="navbar">
        <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse">
	            <ul class="nav">
					<li><a href="./">Home</a></li>
					<li><a href="about">About</a></li>
					<li><a href="service">Service</a></li>
					<li><a href="project">Projects</a></li>
					<li><a href="client">Clients</a></li>
					<li><a href="contact">Contact</a></li>
                </ul>
            </div>
            <?php 
				$basefile=basename($_SERVER['PHP_SELF'], ".php");
				$msg="";
				if($basefile=='index') { $msg = 'Welcome!'; }
				if($basefile=='about') { $msg = 'Welcome!'; } 
				if($basefile=='service') { $msg = 'Services we offer!'; } 
				if($basefile=='project') { $msg = 'Our Project!'; } 
				if($basefile=='client') { $msg = 'Our Client!'; }
				if($basefile=='contact') { $msg = 'Contact Us!'; }
				if($basefile=='404') { $msg = 'Error 404!'; } 
			?>
            <div id="layoutdims" class="clearfix">
            	<div class="page_title">
                	<h3><?php  echo $msg; ?></h3>
                </div>
            		<?php include('social.php'); ?>
            </div>
        </div>
    </div>
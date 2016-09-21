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
	/* for navigation */
?>
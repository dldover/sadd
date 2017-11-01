<?php
include 'global.php';

// If user's not logged in redirect
if(!isset($_SESSION["LOGGED_IN"]))
{
	header('Location: http://192.168.64.2/login.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="Robots" content="NOINDEX, NOARCHIVE, NOSNIPPET, NOFOLLOW">
        <title>MyCarDatabase</title>
        <script src="http://192.168.64.2/menus.js"></script>
    	<link rel="stylesheet" type="text/css" href="http://192.168.64.2/style.css">
    </head>
    <body>
		<div id="container">
			<div id="header">
				<div id="left">
					<div id="site_name">MyCarDatabase</div>
					<div id="slogan">powered by by SADD Inc.</div>
				</div>
				<div id="right">
					<form class="pure-form" action="search.php" method="get">
    					<input type="text" class="pure-input-rounded">
    					<button type="submit" class="pure-button">Search</button>
					</form>
				</div>
				<!-- navigation begin -->
				<div id="navigation">
					<div class="pure-menu pure-menu-horizontal">
    					<ul class="pure-menu-list">
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="index.php" class="pure-menu-link">Home</a>
        					</li>
       						<!-- dropdown item begin -->
       						<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            					<span id="menuLink1" class="pure-menu-link">Modify Vehicle</span>
            					<ul class="pure-menu-children">
                					<li class="pure-menu-item">
                						<a href="#" class="pure-menu-link">Link</a>
                					</li>
                					<li class="pure-menu-item">
                						<a href="#" class="pure-menu-link">Link</a>
                					</li>
            					</ul>
        					</li>
        					<!-- dropdown item end -->
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="advance.php" class="pure-menu-link">Advanced Search</a>
        					</li>
       						<!-- dropdown item begin -->
       						<li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
            					<span id="menuLink1" class="pure-menu-link">Trade-In</span>
            					<ul class="pure-menu-children">
                					<li class="pure-menu-item">
                						<a href="#" class="pure-menu-link">Link</a>
                					</li>
                					<li class="pure-menu-item">
                						<a href="#" class="pure-menu-link">Link</a>
                					</li>
            					</ul>
        					</li>
        					<!-- dropdown item end -->
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="compare.php" class="pure-menu-link">Compare</a>
        					</li>
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="account.php" class="pure-menu-link">Account Info</a>
        					</li>
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="financing-warranty.php" class="pure-menu-link">Financing/Warranty</a>
        					</li>
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="service.php" class="pure-menu-link">Service</a>
        					</li>
        					<li class="pure-menu-item pure-menu-selected">
        						<a href="about.php" class="pure-menu-link">About Us</a>
        					</li>
    					</ul>
					</div>
				</div>
				<!-- navigation end -->
			</div>
			<div id="content">
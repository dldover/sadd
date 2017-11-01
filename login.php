<?php
include 'global.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $login_username = validate($_REQUEST['login_username']);
    $login_password = validate($_REQUEST['login_password']);
    $signup_username = validate($_REQUEST['signup_username']);
    $signup_password = validate($_REQUEST['signup_password']);
    $email = validate($_REQUEST['email']);
    
    // was login button hit
	if(isset($_REQUEST['login']))
	{
		if(empty($login_username))
    	{
    		$ERRORS[] = "Username was empty!";
    	}
    
    	if(empty($login_password))
    	{
        	$ERRORS[] = "Password was empty!";
    	}
    	
    	// store all errors in $error_messages
		for($i = 0; $i < count($ERRORS); $i++)
    	{
    		$login_error_messages .= "<li>";
    		$login_error_messages .= $ERRORS[$i];
    		$login_error_messages .= "</li>";
    	}
    	
    	// if no errors start session
    	if(empty($ERRORS) == true)
    	{
    		// no errors. check if username already exists
    		//$conn->query($sql) === TRUE
    		
    		// start session
    		$_SESSION["LOGGED_IN"] = True;
    		header('Location: http://192.168.64.2');
    	}
	}
    
    // was sign up button hit
    if(isset($_REQUEST['sign_up']))
	{
		if(empty($signup_username))
    	{
    		$ERRORS[] = "Username was empty!";
    	}
    
    	if(empty($signup_password))
    	{
        	$ERRORS[] = "Password was empty!";
    	}
    	
    	if(empty($email))
    	{
        	$ERRORS[] = "Email was empty!";
    	}
    	
    	// store all errors in $error_messages
		for($i = 0; $i < count($ERRORS); $i++)
    	{
    		$signup_error_messages .= "<li>";
    		$signup_error_messages .= $ERRORS[$i];
    		$signup_error_messages .= "</li>";
    	}
    	
    	// if no errors start session
    	if(empty($ERRORS) == true)
    	{
    		$_SESSION["LOGGED_IN"] = True;
    		header('Location: http://192.168.64.2');
    	}
	}
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
    	<style type="text/css" media="screen">
    		.left, .right {display: inline;}
    		.left {float: left;}
    		.right {float: right;}
    		
    		.red {color: #ff0000;}
    	</style>
    </head>
    <body>
		<div id="container">
			<div id="header">
				<div id="left">
					<div id="site_name">MyCarDatabase</div>
					<div id="slogan">powered by by SADD Inc.</div>
				</div>
			</div>
			<div id="content">
				<br/>
<div class="left">
<form class="pure-form pure-form-aligned" method="post" action="login.php">
    <fieldset>
        <div class="pure-control-group">
        	<h2>Have an Account? <br/>Login now:</h2> <br/>
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="Username" name="login_username">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password" name="login_password">
        </div>
        
		<div class="pure-control-group">
        	<button type="submit" name="login" class="pure-button pure-button-primary right">Login</button>
        </div>
    </fieldset>
</form>

<?php echo "<ul><span class=\"red right\">" . $login_error_messages . "</span></ul>"; ?>
</div>
<div class="right">
<form class="pure-form pure-form-aligned" method="post" action="login.php">
    <fieldset>
        <div class="pure-control-group">
        	<h2>Need an Account? <br/>Sign Up now:</h2> <br/>
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="Username" name="signup_username">
        </div>

        <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password" name="signup_password">
        </div>

        <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Email Address" name="email">
        </div>
        
		<div class="pure-control-group">
        	<button type="submit" name="sign_up" class="pure-button pure-button-primary right">Sign Up</button>
        </div>
    </fieldset>
</form>

<?php echo "<ul><span class=\"red right\">" . $signup_error_messages . "</span></ul>"; ?>
</div>
			</div>
			<div id="footer">
				<p>&copy; SADD Inc. 2017</p> <br/>
				<p>[<a href="/phpmyadmin/" target="_blank">Admin</a> - 
				<a href="https://www.w3schools.com/php/" target="_blank">PHP</a> - 
				<a href="https://www.w3schools.com/sql/" target="_blank">SQL</a> - 
				<a href="https://www.w3schools.com/php/php_mysql_intro.asp" target="_blank">MySQL</a> - 
				<a href="https://purecss.io" target="_blank">PureCSS</a> - 
				<a href="https://devdocs.io" target="_blank">DevDocs</a></p> <br/>
				<p><?php include 'connect.php' ?></p>
			</div>
		</div>
	</body>
</html>
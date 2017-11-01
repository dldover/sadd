<?php
session_start();
ini_set('display_errors', 'Off');

$ERRORS = array();
$LOGGED_IN = false;

// Validating forum input
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Connect to database
function dbconnect()
{
	// Credentials
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sadd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error)
	{
		die("Connection failed: " . $conn->connect_error);
	}
}

// Get database status
function dbstatus()
{
	// Credentials
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sadd";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Variables
	$msgs = false;

	// Check connection
	if ($conn->connect_error)
	{
		$msgs = false;
		die("Connection failed: " . $conn->connect_error);
	} else
	{
		$msgs[0] = true;
	}

	if($msgs[0] == true)
		echo "<span id=\"dbstatus\">Database Status: Connected</span>";
	else
		echo "<span id=\"dbstatus\">Database Status: Disonnected</span>";
}

// close database connection
function dbclose()
{
	$conn->close();
}
?>
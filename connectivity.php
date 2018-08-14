<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'canteen'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
/* $ID = $_POST['user']; $Password = $_POST['pass']; */ 
function SignIn() 
{ 
session_start(); 
//starting the session for user profile page 
if(!empty($_POST['user'])) 
	//checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	{ 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	$query = mysqli_query($con,"SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysqli_error($con)); 
	$row = mysqli_fetch_array($query) or die(mysqli_error($con)); 
	if(!empty($row['userName']) AND !empty($row['pass']))		
{  
$_SESSION['userName'] = $row['pass'];
header('Location: menu.php');
session_id("session3");
session_start();
$_SESSION['myValue']=$row['userName'];
session_write_close();
} 
else 
{
$_SESSION['userName'] != $row['pass'];
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
} 
} 
} 
if(isset($_POST['submit'])) 
	{ 
SignIn(); 
} 
?>


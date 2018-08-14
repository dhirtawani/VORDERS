<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'canteen'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 
/* $ID = $_POST['user']; $Password = $_POST['pass']; */ 

function Signup() 
{ 
session_start(); 
//starting the session for user profile page 
	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());
	$users_name = $_POST['name'];
	$users_roll = $_POST['rollno'];
	$users_year = $_POST['year'];
	$flag="OK";
	$msg="";
	if(!$_POST['name'])
	{$msg=" Please enter the username.";
	$flag="NOTOK";
	}
	if(!$_POST['rollno'])
	{$msg=" Please enter the rollno.";
	$flag="NOTOK";
	}
	if(!$_POST['year'])
	{$msg="please enter the year.";
	$flag="NOTOK";
	}
	if($flag == "OK")
	{ 
	$query = mysqli_query($con,"INSERT INTO signup1(name,rollno,year) VALUES('$users_name','$users_roll','$users_year')") or die(mysqli_error($con)); 
	$vowels = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
	$vowels1 = array("q","w","e","r","t","y","u","i","o","p","a","s","d","f","g","h","j","k","l","z","x","c","v","b","n","m","Q","W","E","R","T","Y","U","I","O","P","A","S","D","F","G","H","J","K","L","Z","X","C","V","B","N","M");
	$newname = str_replace($vowels,$vowels1,$users_name);
	$bal="1000";
	$query1 = mysqli_query($con,"INSERT INTO username(UserNameID,userName,pass,balance)VALUES(NULL,'$users_name','$newname','$bal')") or die(mysqli_error($con)); 
	echo "data succesfully inserted!!!!\n";
	echo $newname;
	echo "<input type='button' value='back' onClick='history.go(-2)'>";
	}
	else
	{echo "<h2>". $msg ."</h2>"."<input type='button' value='back' onClick='history.go(-1)'>";}
	mysqli_close($con);
} 
if(isset($_POST['submit'])) 
	{ 
Signup(); 
} 
?>


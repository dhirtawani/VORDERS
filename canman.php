<!DOCTYPE html>
<html>
    <head>
	

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>manager</title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />

    </head>
    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="temp.html">Menus</a></li>
                    <li><a href="canman.php">manager</a></li>

                </ul>
            </nav>
            
            
            
            <div id="sidebar">
                
            </div>
            <div id="Sign-In"> 
			<link rel="stylesheet" type="text/css" href="style-sign.css"> 


<?php 
 session_id("session3");
{
session_start();
echo "ROLL NO=".$_SESSION['myValue'];
session_write_close();
}
session_id("session1");
{
session_start();
$temp=$_SESSION['my1'];
if($temp>0)
{
echo "\r\ncoffee=".$temp."\n";
session_write_close();
}
else
{
	echo "coffee=0";
}
}
session_id("session2");
{
session_start();
$temp1=$_SESSION['my2'];
if($temp1>0)
{
echo "Cold Drinks=".$_SESSION['my2']."\n";
session_write_close();
}
else
{
	echo "Cold drink=0";
}
}
session_id("session4");
{
session_start();
$temp3=$_SESSION['my3'];
if($temp3>0)
{
echo "Samosa=".$_SESSION['my3'];
session_write_close();
}
else
{
	echo "Samosa=0";
}
}
session_id("session5");
{
session_start();
$temp4=$_SESSION['my4'];
if($temp4>0)
{

echo "Tea=".$_SESSION['my4'];
session_write_close();
}
else
{
	echo "Tea=0";
}
}
session_id("session6");
{
session_start();
$temp5=$_SESSION['my5'];
if($temp5>0)
{
echo "Water=".$_SESSION['my5'];
session_write_close();
}
else
{
	echo "Water=0";
}
}


?>
<b>PAID</b>
 <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
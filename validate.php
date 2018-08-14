<?php
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
if($flag == "NOTOK")
{ echo "<h2>". $msg ."</h2>"."<input type='button' value='back' onClick='history.go(-1)'>";
}
?>
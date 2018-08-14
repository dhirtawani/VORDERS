<?php
if(isset($_POST['btn']))
{
if(isset($_POST['chk1']))
{
$one=$_POST['chk1'];
$t_c=$_POST['coffee']*$_POST['Coffee_rate'];
}
else
{
$t_c=0;
$one=0;
}
if(isset($_POST['chk2']))
{
$two=$_POST['chk2'];
$t_cd=$_POST['cold_drink']*$_POST['Cold_drink_rate'];
}
else
{
$t_cd=0;
$two=0;
}
if(isset($_POST['chk3']))
{
$three=$_POST['chk3'];
$t_p=$_POST['Samosa']*$_POST['Samosa_rate'];
}
else
{
$t_p=0;
$three=0;
}
if(isset($_POST['chk4']))
{
$four=$_POST['chk4'];
$t_t=$_POST['tea']*$_POST['Tea_rate'];
}
else
{
$t_t=0;
$four=0;
}
if(isset($_POST['chk5']))
{
$five=$_POST['chk5'];
$t_w=$_POST['water']*$_POST['Water_rate'];
}
else
{
$t_w=0;
$five=0;
}
$result=$t_c+$t_cd+$t_p+$t_t+$t_w;
}
?>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
tr:hover {background-color: #ddd;}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button4 {border-radius: 12px;float: right;}
</style>
</head>
<title>Menu</title>
<body>
<a href="signout.php?signout"><button class="button button4">sign out</button></a>
<H1 align="center"><u>Select Food Item</u></H1>
<form name="frm" action="" method="post">
<table border="1" align="center">
<th>Foods</th>
<th>Price</th>
<th>Quantity</th>
<th>status</th>
<tr>
<td>1 : Coffee </td>
<td><input type="hidden" name="Coffee_rate" value="12" />RS:12</td>
<td><input type="text" name="coffee" size="5"/></td>
<td><input type="checkbox" name="chk1" value="coffee" /></td>
</tr>
<tr>
<td>2 : Cold drinks </td>
<td><input type="hidden" name="Cold_drink_rate" value="22" />RS:22</td>
<td><input type="text" name="cold_drink" size="5" /></td>
<td><input type="checkbox" name="chk2" value="cold drinks" />
</td>
</tr>
<tr>
<td>3 : Samosa </td>
<td><input type="hidden" name="Samosa_rate" value="35" />RS:35</td>
<td><input type="text" name="Samosa" size="5" /></td>
<td><input type="checkbox" name="chk3" value="Samosa" />
</td>
</tr>
<tr>
<td>4 : Tea </td>
<td><input type="hidden" name="Tea_rate" value="10" size="4" />RS:10</td>
<td><input type="text" size="5" name="tea" /></td>
<td><input type="checkbox" name="chk4" value="tea" />
</td>
</tr>
<tr>
<td>5 : Water </td>
<td><input type="hidden" name="Water_rate" value="20" size="4" />RS:20</td>
<td><input type="text" size="5" name="water" /></td>
<td><input type="checkbox" name="chk5" value="water" />
</td>
</tr>
</nav>
<tr>
<td colspan="4">
<?php
if(isset($_POST['chk1']))
{
echo "You have choosen ".$_POST['coffee'] ." ".$one."<br>";
session_id("session1");
session_start();
$_SESSION['my1']=$_POST['coffee'];
session_write_close();
}
if(isset($_POST['chk2']))
{
echo "You have choosen ".$_POST['cold_drink'] ." ".$two."<br>";
session_id("session2");
session_start();
$_SESSION['my2']=$_POST['cold_drink'];
session_write_close();

}
if(isset($_POST['chk3']))
{
echo "You have choosen ".$_POST['Samosa'] ." ".$three."<br>";
session_id("session4");
session_start();
$_SESSION['my3']=$_POST['Samosa'];
session_write_close();
}
if(isset($_POST['chk4'])){
echo "You have choosen ".$_POST['tea'] ." ".$four."<br>";
session_id("session5");
session_start();
$_SESSION['my4']=$_POST['tea'];
session_write_close();
}
if(isset($_POST['chk5']))
{
echo "You have choosen ".$_POST['water'] ." ".$five."<br>";
session_id("session6");
session_start();
$_SESSION['my5']=$_POST['water'];
session_write_close();
}

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'canteen'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con)); 
session_id("session3");
{
session_start();
$_SESSION['myValue'];
$sql = "SELECT Balance FROM username WHERE userName ='".$_SESSION['myValue']."'";
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
$result1 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result1,MYSQLI_BOTH);
echo "Balance= " . $row['Balance'];
$bal = $row['Balance'];
$new = $bal - 24;
echo "New Balance=".$new;
mysqli_query($con,"UPDATE username SET Balance = $new WHERE userName ='".$_SESSION['myValue']."'");
session_write_close();
}
?>
</td>
</tr>
<tr>
<td>Total amount</td>
<td colspan="3"><input type="text" name="" value="<?php if(isset($result))echo "RS ".$result;
else echo "result here";?>" /></td>
</tr>
<tr>
<td align="center" colspan="4"><center>
<input type="submit" name="btn" value="Summary"/>
<input type="submit" name="btn" value="Pay"/></center></td>
</tr>
</table>
</form>
</body>
</html>
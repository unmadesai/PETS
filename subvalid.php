
<?php
$db_host = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'adoptdog';
$conn = new mysqli($db_host, $db_username, $db_password,$db_name);

mysql_connect( $db_host, $db_username, $db_password) or die(mysql_error());
mysql_select_db($db_name);
echo "connected"; 


$name = $_POST['name'];
$email = $_POST['email'];
/*
$contact = $_POST['phone'];
$age = $_POST['age'];
$occupation= $_POST['occupation'];
$address=$_POST['address'];

*/

$sql = "INSERT INTO subscribe(name,email)VALUES('$name', '$email');";
$result=mysqli_query($conn,$sql);
if($result){
	echo "Registered successfully";
}
else
	echo "Error";

?> 



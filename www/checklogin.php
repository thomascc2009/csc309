<?php


session_start();
// Connect to server and databse.
//$dbconn = pg_connect("host=dbsrv1.cdf.toronto.edu port=5432 dbname=csc309g6 user=csc309g6 password=fuc3k") or die("cannot connect to database");
include "connectdb.php";

// Define $myusername and $mypassword
$user_name=$_POST['user_name'];
$password=$_POST['password'];

echo $user_name;
echo $password;

$query="SELECT * FROM user_login WHERE user_name='$user_name' and password='$password'";

echo $query;

$result=pg_query($query) or die ('Query failed: '.pg_last_error());
//$row = pg_fetch_row($result);
/*if ($row){ 
	echo "lol";
}else {
	echo "bad";
}*/


if($row = pg_fetch_row($result)){
	echo "success!";
	print_r($row);
	$uid = $row[0];
	echo $uid;
	$_SESSION['uid'] = $uid;
	echo $_SESSION['uid'];
	header ("location: home.php?uid=$uid");
}else {
	echo "Wrong Username or Password";
}

?>



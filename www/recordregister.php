<html>
<?php
session_start();

// Connect to server and databse.
$dbconn = pg_connect("host=dbsrv1.cdf.toronto.edu port=5432 dbname=csc309g6 user=csc309g6 password=fuc3k") or die("cannot connect to database");
$tbl_name = "userlogin";


// Define $myusername and $mypassword
$newusername = $_POST['newusername'];
$newpassword = $_POST['newpassword'];

//echo $newusername;
//echo $newpassword;

$query = "SELECT * FROM userlogin WHERE username = '$newusername'";

echo $query;

$result = pg_query($query) or die('Query failed: ' . pg_last_error());



if ($row = pg_fetch_row($result)) {
  echo "username already exists!";
  echo "<br />\n";
}else{
	$sql = "SELECT nextval('genuserid')";
	$result = pg_query($sql);
	if ($row = pg_fetch_row($result)){
		print_r($row);
		$uid = $row[0];
	}
	$sql = "INSERT INTO userlogin (username, password,createddate,userid) VALUES('$newusername', '$newpassword',current_date,'$uid')";
	echo $sql;
	$result = pg_query($dbconn, $sql);
	if (!$result) {
         die("Error in SQL query: " . pg_last_error());
     }
    
     echo "Data successfully inserted!";
     session_start();
     $_SESSION['uid'] = $uid;
     header ("location: home.php"); 
}


?>
<a> ashdkasjhdfkasdhf </a>
</html>

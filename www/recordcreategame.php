<?php
session_start();

// Connect to server and databse.
$dbconn = pg_connect("host=dbsrv1.cdf.toronto.edu port=5432 dbname=csc309g6 user=csc309g6 password=fuc3k") or die("cannot connect to database");
$tbl_name = "userlogin";

print_r($_POST);
// Define $myusername and $mypassword
$type = $_POST['type'];
$location = $_POST['location'];
$num_substitutes = $_POST['numsub'];
if($time = strtotime($_POST['time'])){
	echo $time;
}
$time = $_POST['time'];
if($deadline = strtotime($_POST['deadline'])){
	echo $deadline;
}
$deadline = $_POST['deadline'];
$fee = $_POST['fee'];
$sql = "SELECT nextval('gen_game_id')";
$result = pg_query($sql);
if ($row = pg_fetch_row($result)){
	print_r($row);
	$game_id = $row[0];
}
$organizer_id = $_SESSION['uid'];

$sql = "INSERT INTO game (game_id, organizer_id,type,location,num_substitutes,time,deadline,fee)
				VALUES($game_id, $organizer_id,$type,'$location',$num_substitutes,'$time','$deadline','$fee')";
echo $sql;
$result = pg_query($dbconn, $sql);
if (!$result) {
	die("Error in SQL query: " . pg_last_error());
}
    
echo "Data successfully inserted!";

header("location: home.php");







?>



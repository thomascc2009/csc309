<?php
session_start();
// Connect to server and databse.
$dbconn = pg_connect("host=dbsrv1.cdf.toronto.edu port=5432 dbname=csc309g6 user=csc309g6 password=fuc3k") or die("cannot connect to database");

if (isset($uid_registered)){
	echo "lol";
}

if (isset($_SESSION['uid'])){
	$uid_registered = $_SESSION['uid'];
	echo "lool";
}else {
	header ("location: login.php");
}

if (isset($_GET['uid'])){
	$uid_profile = $_GET['uid'];
}else {
	$uid_profile = $uid_registered;
}

if ($uid_profile == $uid_registered){
	//header ("location:profile.php?uid=".$uid_profile);
	?>
<html>
<body>
Welcome, <?php echo $uid_registered; ?> !<br>
<h>Updates</h><br>
<?php
	$sql = 'SELECT * FROM game WHERE game_status=0';
	$result = pg_query($sql) or die('Query failed: '.pg_last_error());
	while ($row = pg_fetch_row($result)){
		$gameid = $row[0];
		$organizerid = $row[1];
		$type = $row[2];
		$location = $row[3];
		$numsub = $row[4];
		$time = $row[5];
		$deadline = $row[6];
		$fee = $row[7];
		$sql = 'SELECT user_nick_name FROM ';
		
		echo "<p>".$organizerid." has organized a ".$type." game at ".$location."</p>";
	}
?>
<h>New Games</h><br>
<h>My Games</h><br>
<a href="creategame.php">Create Game </a>

<h>Profile</h> <a href="profile.php">go to profile</a>
<br>
<a href="logout.php">logout</a>
</body>
</html>	
	
<?php
}else{
	header("location: profile.php?uid=".$uid_profile);
}
?>

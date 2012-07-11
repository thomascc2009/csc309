<html>
<?php
	include "connectdb.php";

	session_start();
	if (!isset($_SESSION[uid])) {
		header ("location: login.php");
	}
	$uid = $_SESSION[uid];
	


	$game_id = $_GET['gid'];
	if (!isset($game_id)) {
		header ("location: home.php");
	}
	
	$query = "SELECT * FROM game WHERE game_id =".$game_id;
	$result = pg_query($query) or die ("wrong");

	if (!$row=pg_fetch_row($result)) {
		echo "Game does not exist!";
		//echo "<html><a href="home.php">return</a></html>";
	} else {
		echo "yay!game";
		print_r($row);
		$organizer_id = $row[1];
		if ($uid == $organizer_id) {
			?>
			<a href="managegame.php">manage game</a>;
			<?php
		} else {
			?>
			<form name="join_game" method="post" action="joingame.php">
			<select 

			</form>
			<?php
		}
	}
	
?>
</html>

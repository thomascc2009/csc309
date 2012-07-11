<?php
	// Connect to databaseserver and databse.
	include "connectdb.php";	
	
?>


<html>
<script type="text/javascript" >
window.onload = function() {
        document.getElementById('otherGameTypeInput').style.visibility='hidden';
}

function showOtherGameInput() {
                document.getElementById('otherGameTypeInput').style.visibility='visible';
}
</script>	
	
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="recordcreategame.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Create New Game </strong></td>
</tr>
<tr>
	<td width="78">Type</td>
	<td width="6">:</td>
	<td width="294">
	
		<select name="type" >
		
			<option selected="selected" value=-1>choose a game type</option>
			<?php
			//obtaining all game types
			$query = "SELECT * FROM game_type";
			$result = pg_query($query) or die('Query failed: ' . pg_last_error());;
			while ($row = pg_fetch_row($result)) {
				echo "<option value=$row[0]>$row[1]</option>";
			}
			?>
			<option onclick="showOtherGameInput();" value=0>Other type</option>
			
		</select>
	</td>
</tr>
<tr>
	<td>Specify other game</td>
	<td>:</td>
	<td><input name="other_game" type="text/hidden" id="otherGameTypeInput" ></td>
</tr>
<tr>
	<td>Location</td>
	<td>:</td>
	<td><input name="location" type="text" ></td>
</tr>
<tr>
	
	<td>Number of substitutes</td>
	<td>:</td>
	<td><input name="numsub" type="text"></td>
</tr>
<tr>
	<td>Time</td>
	<td>:</td>
	<td><input name="time" type="text"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><p>(yyyy-mm-dd hh:mm:ss)</p></td>
</tr>
<tr>
	<td>Deadline</td>
	<td>:</td>
	<td><input name="deadline" type="text"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><p>(yyyy-mm-dd hh:mm:ss)</p></td>
</tr>
<tr>
	<td>Fee</td>
	<td>:</td>
	<td><input name="fee" type="text"></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><p>($xx.xx)</p></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Create"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</html>

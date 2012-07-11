<?php
/*
Handle.php - Part of the Continueous Scroll demo.
Spits a continueously larger and larger number in an array.
*/

if(isset($_REQUEST['index']) && isset($_REQUEST['max'])){
$start = $_REQUEST['index'];
$max = $_REQUEST['max'];
$i = 0;
$data = array();
while( $i <= $max ){
$data[$i] = $i + $start; //Heres a random note. I found that if you don't know how much you're expecting to get, it's eaiser to just start the array at zero. You can put a unique ID within a sub level array.
$i++;
}
} else {
$data = array(
"Error" => "Please post with the index and max argument",
);
}
echo json_encode($data);
?>
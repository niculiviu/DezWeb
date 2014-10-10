<?php 
//include config
require_once('../includes/db.php');

if(isset($_GET['ID'])){

$status = 'Rezervat';
$ID = $_GET['ID'];



$query="UPDATE rezervation SET status='$status' WHERE ID='$ID'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
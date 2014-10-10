<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['ID'])){
$ID = $_GET['ID'];

$query="delete from project where ID='$ID'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
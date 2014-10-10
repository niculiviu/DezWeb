<?php 
//include config
require_once('../includes/db.php');

if(isset($_GET['projectID'],$_GET['name'])){
$name = $_GET['name'];
$projectID = $_GET['projectID'];


$query="INSERT INTO tables(projectID,name) VALUES ('$projectID','$name')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
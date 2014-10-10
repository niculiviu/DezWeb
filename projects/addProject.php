<?php 
//include config
require_once('../includes/db.php');

if(isset($_GET['memberID'],$_GET['name'],$_GET['description'])){
$name = $_GET['name'];
$desc = $_GET['description'];
$memberID = $_GET['memberID'];

$query="INSERT INTO project(memberID,name,description) VALUES ('$memberID', '$name', '$desc')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
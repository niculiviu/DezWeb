<?php 
//include config
require_once('../includes/db.php');

if(isset($_GET['tableID'],$_GET['projectID'],$_GET['tableName'])){
$status = 'Nerezervat';
$tableID = $_GET['tableID'];
$projectID = $_GET['projectID'];
$tableName = $_GET['tableName'];

$query="INSERT INTO rezervation(tableID,projectID,tableName,email,telephone,c_data,start_hour,end_hour,status) VALUES ('$tableID','$projectID','$tableName','-','-','-','-','-','$status')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
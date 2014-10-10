<?php 

require_once('../includes/db.php');
if(isset($_GET['ID'])){
$ID = $_GET['ID'];
$name = $_GET['name'];
$desc = $_GET['description'];

$query="update project set name='$name',description='$desc' where ID='$ID'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

$json_response = json_encode($result);
}
?>
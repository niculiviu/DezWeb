<?php 
//include config
require_once('../includes/db.php');

if(isset($_GET['email'],$_GET['telephone'],$_GET['ID'],$_GET['status'],$_GET['tableID'])){

$status = $_GET['status'];
$tableID = $_GET['tableID'];
$email = $_GET['email'];
$telephone = $_GET['telephone'];
$ID = $_GET['ID'];
$date = date();


$query="UPDATE rezervation SET email='$email',telephone='$telephone',c_data='$date',status='$status' WHERE ID='$ID'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

echo $json_response = json_encode($result);
}
?>
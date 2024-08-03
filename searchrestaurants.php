<?php
include_once "connection.php";

$restaurant = $_GET['restaurant'];
$query = "SELECT * FROM restaurants WHERE name LIKE :search OR city LIKE :search";
$stmt = $db->prepare($query);
$stmt->bindValue(':search', '%' . $restaurant . '%', PDO::PARAM_STR);
$stmt->execute();

$result = $stmt->fetchAll();
if(empty($result))
	echo 'There is nothing to show';
else{
	foreach( $result as $row ) {
	echo $row['name'];
	echo "\n"; 
	}
}
?>
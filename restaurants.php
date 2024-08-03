<?php
 include_once "connection.php";
$stmt = $db->prepare('SELECT * FROM restaurants');
$stmt->execute();
$result = $stmt->fetchAll()
foreach ($result as $row) {
  echo $row['address'];
}
?>

<?php
if($_GET["name"] && $_GET["description"] && $_GET["city"] && $_GET["country"] )
{
	 include_once "connection.php";
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
	 $stmt = $db->prepare('INSERT INTO restaurants (name, description,city,country) 
                       VALUES (:name, :description,:city,:country)');
$stmt->bindParam(':name', $_GET["name"]);
$stmt->bindParam(':description', $_GET["description"]);
$stmt->bindParam(':city', $_GET["city"]);
$stmt->bindParam(':country', $_GET["country"]);
$stmt->execute();
}
catch(PDOException $e){
	echo $e->getCode();
	echo "\n";
	echo $e->getMessage();
}
print "<h1>you have registered a restaurant sucessfully</h1>";

print "<a href='home.html'>Go to restaurant page</a>";
}
else print"invaild data";
?>
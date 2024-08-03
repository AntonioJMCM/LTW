<?php
if($_GET["username"] && $_GET["email"] && $_GET["password"] && $_GET["password_confirm"] )
{
if($_GET["password"]==$_GET["password_confirm"])
{
	 include_once "connection.php";
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
	 $stmt = $db->prepare('INSERT INTO users (username, email,password) 
                       VALUES (:username, :email,:password)');
$stmt->bindParam(':username', $_GET["username"]);
$stmt->bindParam(':email', $_GET["email"]);
$stmt->bindParam(':password', $_GET["password"]);
$stmt->execute();
}
catch(PDOException $e){
	echo $e->getCode();
	echo "\n";
	echo $e->getMessage();
}
print "<h1>you have registered sucessfully</h1>";

print "<a href='home.html'>Go to login page</a>";
}
else print "passwords doesnt match";
}
else print"invaild data";
?>
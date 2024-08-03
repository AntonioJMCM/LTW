<?php
if($_GET["username"] && $_GET["password"])
{
include_once "connection.php";
$stmt = $db->prepare('SELECT username,password FROM users');
$stmt->execute();
$result = $stmt->fetch();
if (empty($result))
{
 print"Invalid Login";
 print "<a href='home.html'>Go to login page</a>";

}else{

 print"logged on ";
}
}
else print"invaild data";
?>
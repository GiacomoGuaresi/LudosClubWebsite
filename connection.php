<?php 
$servername = "[dbServer]";
$username = "[username]";
$password = "[dbPassword]";
$nome_db = "[dbName]";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
echo("Connection failed: " . mysqli_connect_error());
}
$db = mysqli_select_db($conn, $nome_db);
if(!$db){
echo("database not found");
}
mb_internal_encoding('UTF-8');
mysqli_set_charset($conn, "utf8");
?>
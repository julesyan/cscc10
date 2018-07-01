<?php

// Getting database information
include "config.php";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Checking the conneciton
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Getting information from js call
// JS should be sending q as a the query
// Prototype: search only title
$item = $_REQUEST["q"];

// Doing sql queries for getting courses based on input
$sql = "SELECT * FROM items WHERE name LIKE '%";
$sql .= $item;
$sql .= "%';";
$res = mysqli_query($conn, $sql);

// Creating the JSON array
$Finalres = array();
while ($row = mysqli_fetch_assoc($res)) {
	$Finalres[] = $row;
}

// Finishing up, closing connection to database and returning JSON
mysqli_close($conn);
$json = json_encode($Finalres);
print $json;
?>

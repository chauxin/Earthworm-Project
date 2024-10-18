<?php

include "db.php";
$conn = viso_db_connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
    echo "success<BR>";
}


$sql = "INSERT INTO `test_table`(`id`, `card_sn`, `user_name`, `points`) VALUES (NULL,'00000005','test6',6)";
//insert a new entry
viso_db_execute($conn, $sql);

$sql = "INSERT INTO 'sensor'('acid') VALUES (1)"
//get results from DB
$results = getObjectFromDB("test_table", "*", "");

echo "<BR>".json_encode($results)."<BR>";

$results = getObjectFromDB("sensor", "acid", "");

echo "<BR>".json_encode($results)."<BR>";
?>

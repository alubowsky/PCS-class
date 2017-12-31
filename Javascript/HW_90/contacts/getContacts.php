<?php
require 'db.php';
header('Access-Control-Allow-Origin: *');
$query = "SELECT * FROM contacts";
$stmt = $db->query($query);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($rows);
echo json_encode($rows);
?>
<?php
require 'db.php';

$query = "SELECT * FROM videos";
$stmt = $db->query($query);
$videos = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($videos);
?>
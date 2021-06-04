<?php
require_once 'db.php'; //підключаємо конект до mysql

$stmt = $db->prepare("INSERT INTO reservations (name, start, end, room_id, status, paid) VALUES (:name, :start, :end, :room, 'New', 0)");
$stmt->bindParam(':start', $_POST['start']);
$stmt->bindParam(':end', $_POST['end']);
$stmt->bindParam(':name', $_POST['name']);
$stmt->bindParam(':room', $_POST['room']);
$stmt->execute();


echo ('Ok');

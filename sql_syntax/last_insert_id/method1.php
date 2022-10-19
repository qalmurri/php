<?php
$sql = "INSERT INTO users (name, email) VALUES (?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$name, $email]);

$id = $pdo->lastInsertId();

$sql = "INSERT INTO addresses(add1, add2, user_id) VALUES (?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$add1, $add2, $id]);
?>

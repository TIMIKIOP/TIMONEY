<?php
// fetch_data.php
session_start();
header('Content-Type: application/json');
require 'config.php';
$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) { http_response_code(401); echo json_encode(['error'=>'Not logged in']); exit; }
$stmt = $pdo->prepare('SELECT id,name,email,salary,rent,groceries,transport,entertainment,other FROM users WHERE id=:id');
$stmt->execute([':id'=>$user_id]);
$user = $stmt->fetch();
echo json_encode(['user'=>$user]);
?>
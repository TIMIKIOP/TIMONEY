<?php
// insert_data.php - save profile fields
session_start();
header('Content-Type: application/json');
require 'config.php';
$user_id = $_SESSION['user_id'] ?? null;
if (!$user_id) { http_response_code(401); echo json_encode(['error'=>'Not logged in']); exit; }
$input = json_decode(file_get_contents('php://input'), true);
$salary = floatval($input['salary'] ?? 0);
$rent = floatval($input['rent'] ?? 0);
$groceries = floatval($input['groceries'] ?? 0);
$transport = floatval($input['transport'] ?? 0);
$entertainment = floatval($input['entertainment'] ?? 0);
$other = floatval($input['other'] ?? 0);
$stmt = $pdo->prepare('UPDATE users SET salary=:sal, rent=:r, groceries=:g, transport=:t, entertainment=:e, other=:o WHERE id=:id');
$stmt->execute([':sal'=>$salary,':r'=>$rent,':g'=>$groceries,':t'=>$transport,':e'=>$entertainment,':o'=>$other,':id'=>$user_id]);
echo json_encode(['ok'=>true]);
?>
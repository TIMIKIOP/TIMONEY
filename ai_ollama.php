<?php
header("Content-Type: application/json");

// Read JSON input
$input = json_decode(file_get_contents("php://input"), true);
$prompt = $input["prompt"] ?? "";

// Payload to send to Ollama
$payload = json_encode([
    "model" => "llama3.2",
    "prompt" => $prompt,
], JSON_UNESCAPED_SLASHES);

// CURL request
$ch = curl_init("http://127.0.0.1:11434/api/generate");
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ["Content-Type: application/json"],
    CURLOPT_POSTFIELDS => $payload
]);

$response = curl_exec($ch);
curl_close($ch);

// If Ollama is not running
if (!$response) {
    echo json_encode(["error" => "Ollama not responding"]);
    exit;
}

// Stream comes in lines → merge them
$lines = explode("\n", trim($response));
$final = "";

foreach ($lines as $line) {
    $json = json_decode($line, true);
    if (isset($json["response"])) {
        $final .= $json["response"];
    }
}

// Send back final clean reply
echo json_encode([
    "reply" => trim($final)
]);
?>

<?php
include("config.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password before saving
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name, email, password_hash) VALUES ('$name', '$email', '$hashed_password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('✅ Registration successful!'); window.location.href='dashboard.html';</script>";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

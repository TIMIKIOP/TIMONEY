<?php
include('config.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepared statement
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();
    $user = $res->fetch_assoc();

    if ($user && password_verify($password, $user['password_hash'])) {
        $_SESSION['user'] = $user['name'];
        header("Location: index.html"); // or dashboard
        exit;
    } else {
        echo "<script>alert('Invalid email or password'); window.location.href='dashboard.html';</script>";
    }
}
?>


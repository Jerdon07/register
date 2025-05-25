<?php require '../../database/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    if (empty($gmail) || empty($password)) {
        die("Gmail and password cannot be empty.");
    }

    try {
        $stmt = $conn->prepare("INSERT INTO users (gmail, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $gmail, $password);
        $stmt->execute();
        header("Location: ../public/read.php");
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>
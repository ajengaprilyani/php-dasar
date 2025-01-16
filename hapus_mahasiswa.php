<?php

session_start();

if (!isset($_SESSION['Login'])) {
    if ($_SESSION['Login'] != true) {
        header("Location: Login.php");
        exit;
    }
}

$mysqli = new mysqli('localhost', 'root', '', 'tedc2');

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $stmt = $mysqli->prepare("DELETE FROM students WHERE nim = ?");
    $stmt->bind_param('s', $nim);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = 'Data berhasil dihapus!';
        header('Location: Mahasiswa.php');
        exit();
    } else {
        $_SESSION['error_message'] = 'Data tidak bisa dihapus: ' . $stmt->error;
    }

    $stmt->close();
} else {
    echo "<script>alert('NIM tidak ditemukan!'); window.location.href='Mahasiswa.php';</script>";
}
?>
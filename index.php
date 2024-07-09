<?php
session_start();
$noNavbar = true;
if (isset($_SESSION['username'])) {
    header('location:dashboard.php');
    exit();
}

include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user'];
    $psw = $_POST['psw'];
    $hashedPass = sha1($psw);
    $stmt = $conn->prepare("SELECT userName, psw FROM users WHERE userName=? AND psw=? AND groupeID=1");
    $stmt->execute(array($username, $hashedPass));
    $count = $stmt->rowCount();

    if ($count > 0) {
        $_SESSION['username'] = $username;
        header('location:dashboard.php');
        exit();
    }
}

    include 'includes\template\header.php';
    include 'loginPage.php';
    include 'includes\template\footer.php';


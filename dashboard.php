<?php
session_start();
include 'includes\template\header.php';
if(isset($_SESSION['username'])) {
    include 'includes\template\navbar.php';
} else {
    header('location:index.php');
}

include 'includes\template\footer.php';
